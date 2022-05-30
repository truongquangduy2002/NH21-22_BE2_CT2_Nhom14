<?php

namespace App\Http\Controllers;

use App\Carts\Carts as CartsCarts;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Protype;
use App\Helper\CartHelper;

class CartController extends Controller
{
    public function view(){
        $protype = Protype::all();
        return view('cart',['dulieu'=>$protype]);
    }

    public function add(CartHelper $cart,$id){
        $quantity = request()->quantity ? request()->quantity : 1;
        $product = Product::Find($id);
        $cart->add($product);
        return redirect()->back();
    }

    public function remove(CartHelper $cart,$id){
        $cart->remove($id);
        return redirect()->back();
    }

    public function update(CartHelper $cart,$id){
        $quantity = request()->quantity ? request()->quantity : 1;
        $cart->update($id,$quantity);
        return redirect()->back();
    }

    public function clear(CartHelper $cart){
        $cart->clear();
        return redirect()->back();
    }
}
