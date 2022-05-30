<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Protype;
use App\Helper\CartHelper;
use App\Models\Customer;
use Auth;
use Mail;

class CheckoutController extends Controller
{
    public function __construct()
    {
        $this->middleware('cus');
    }

    //
    public function form()
    {
        $protype = Protype::all();
        return view('checkout', ['dulieu' => $protype]);
    }

    public function submit_form(Request $request, CartHelper $cart)
    {
        $protype = Protype::all();
        $c_id = Auth::guard('cus')->user()->id;
        $c_email = $request->email;
        $c_name = Auth::guard('cus')->user()->customer_name;
        if ($order = Order::create([
            'customer_id' => $c_id,
            'email' => $request->email,
            'phone' => $request->phone,
            'address' => $request->address,
        ])) {
            $order_id = $order->id;
            foreach ($cart->items as $product_id => $item) {
                $quantity = $item['quantity'];
                $price = $item['price'];
                OrderDetail::create([
                    'product_id' => $product_id,
                    'price' => $price,
                    'quantity' => $quantity
                ]);
            }
            Mail::send('email.order', [
                'c_name' => $c_name,
                'order' => $order,
                'items' => $cart->items,
                'total' => $cart->total_price,
                'order_date' => date("d/m/Y"),
            ], function ($mail) use ($c_email, $c_name) {
                $mail->to($c_email, $c_name);
                $mail->from('deliciouscakesy@gmail.com');
                $mail->subject('Email ordered');
            });
            session(['cart' => '']);
            return redirect()->back()->with('success', 'Đặt Hàng Thành Công');
        } else {
            return view('checkout', ['dulieu' => $protype])->with('error', 'Đặt Hàng Thất Bại');;
        }
    }
}
