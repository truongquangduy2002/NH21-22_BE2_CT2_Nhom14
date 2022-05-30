<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Protype;
use App\Models\Customer;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Support\Facades\Auth;

class MyController extends Controller
{
    //Hiển thị trang chủ:
    public function index()
    {
        $product = Product::limit(10)->orderby('product_id', 'DESC')->get();
        $protype = Protype::all();
        return view('index', ['data' => $product, 'dulieu' => $protype]);
    }

     //Hiển thị sản phẩm theo loại 
     function productByType($typeid){
        $protype = Protype::all();
        $sp_theoloai = Product::where('type_id',$typeid)->paginate(6);
        return view('index',['dulieu'=>$protype,'data'=> $sp_theoloai]);
    }

    //Hiển thị tất cả sản phẩm ra trang menu
    function getAllProductMenu(){
        $product = Product::paginate(6); //SELECT * FROM Product limit(0,5)
        $protype = Protype::all();
        return view('menu',['dulieu'=>$protype,'tatcasp' => $product]);
    }

    //Hiển thị chi tiết sp:
    function detail($id)
    {
        $protype = Protype::all();
        $modal = Product::where('product_id', $id)->get();
        return view('detail', ['dulieu' => $protype, 'data' => $modal]);
    }

    function getAllProductID()
    {
        $product = Product::paginate(6); //SELECT * FROM Product limit(0,5)
        $protype = Protype::all();
        return view('shop', ['dulieu1' => $product, 'tatcasp' => $protype]);
    }

    function getProductByTypeID($id)
    {
        $protype = Protype::all();
        $product = Product::where('type_id', $id)->get();
        return view('index', ['dulieu' => $protype,'data' => $product]);
    }

    //Hiển thị shop:
    function shop()
    {
        $product = Product::all();
        return view('shop', ['dulieu' => $product]);
    }

    //Hiển thị shop_detail:
    function shop_detail()
    {
        $protype = Protype::all();
        return view('detail', ['dulieu' => $protype]);
    }

    //Hiển thị contact:
    function contact()
    {
        $protype = Protype::all();
        return view('contact', ['dulieu' => $protype]);
    }

    //Hiển thị cart:
    function cart()
    {
        $protype = Protype::all();
        return view('cart', ['dulieu' => $protype]);
    }

    //Hiển thị checkout:
    function checkout()
    {
        $protype = Protype::all();
        return view('checkout', ['dulieu' => $protype]);
    }

    //Tìm kiếm sp
    public function update()
    {
        $key = request()->key ? request()->key : '';
        $search = Product::where('product_name', 'Like', '%' . $key . '%')->get();
        return view('timkiemsp', ['search' => $search]);
    }

    //Hiển thị trang Đăng nhập
    public function signin()
    {
        return view('login');
    }

    //Hiển thị trang Sign up
    public function signup()
    {
        return view('registration');
    }

    //Cart
    // function AddCart($id)
    // {

    //     $product = Product::findOrFail($id);

    //     Cart::add($product->id, $product->product_name, $product->product_price, 1, ['img' => $product->product_img]);

    //     $cart = Cart::getContent();

    //     return view('cartitem');
    // }
    // function DeleteCart($id)
    // {
    //     Cart::remove($id);


    //     return view('cartitem');
    // }
    // function DeleteListCart($id)
    // {
    //     Cart::remove($id);
    //     return view('listcart');
    // }
    // function UpdateListCart($id, $newquan)
    // {
    //     Cart::update($id,  array(
    //         'quantity' => array(
    //             'relative' => false,
    //             'value' => $newquan
    //         ),
    //     ));

    //     return view('listcart');
    // }
}
