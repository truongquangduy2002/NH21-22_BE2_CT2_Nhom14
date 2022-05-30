<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Order;
use App\Models\OrderDetail;
use App\Models\Protype;
use App\Models\Customer;
use App\Models\Comment;
use App\Models\WishList;
use App\Http\Controllers\Controller;
use Auth;
use Mail;

class AdminController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function index(){
        $product_count = Product::count();
        $protype_count = Protype::count();
        return view('dashboard',['product_count'=>$product_count,'protype_count'=>$protype_count]);
    }

    //Hiển thị 5 người dùng
    // function customers(){
    //     $customer = Customer::paginate(5); //SELECT * FROM customer limit(0,5)
    //     return view('/admin/customers',['customers'=>$customer]);
    // }
}