<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MyController;
use App\Http\Controllers\PhotoController;
use App\Http\Controllers\Front;
use App\Http\Controllers\Front\HomeController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\Admin\AdminController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


// Dẫn tới trang chủ
Route::get('/',[MyController::class,'index'])->name('index');

// Dẫn tới trang thông tin sp
Route::get('detail/{product_id}',[MyController::class,'detail']);

//Hiển thị các sản phẩm cùng danh mục
Route::get('/producttype/{type_id}', [MyController::class, 'getProductByTypeID']);

//Hiển thị các sản phẩm cùng danh mục
Route::get('index/{type_id?}',[HomeController::class,'productByType']);

// Dẫn tới trang Contact
Route::get('contact',[MyController::class,'contact'])->name('contact');

// Dẫn tới trang Shop
Route::get('shop',[MyController::class,'shop'])->name('shop');

// Dẫn tới trang Shop_Detail
Route::get('detail',[MyController::class,'shop_detail'])->name('detail');

// Dẫn tới trang Cart
Route::get('cart',[MyController::class,'cart'])->name('cart');

// Dẫn tới trang Checkout
Route::get('checkout',[MyController::class,'checkout'])->name('checkout');

// Dẫn tới trang đăng nhập 
Route::get('login',[MyController::class,'signin'])->name('login');

// Dẫn tới trang đăng ký
Route::get('registration',[MyController::class,'signup'])->name('registration');

//Cart
Route::group(['prefix' => 'cart'],function(){
    Route::get('view',[CartController::class,'view'])->name('cart.view');
    Route::get('add/{product_id}/{quantity?}',[CartController::class,'add'])->name('cart.add');
    Route::get('remove/{product_id}',[CartController::class,'remove'])->name('cart.remove');
    Route::get('update/{product_id}/{quantity?}',[CartController::class,'update'])->name('cart.update');
});

//Checkout
Route::group(['prefix' => 'checkout'],function(){
    Route::get('view',[CheckoutController::class,'form'])->name('checkout');
    // Route::post('view',[CheckoutController::class,'submit_form'])->name('checkout');
});


//Admin
// Route::group(['prefix' => 'admin'],function(){
    
//     Route::get('/dashboard',[AdminController::class,'index'])->name('dashboard');

// });

Route::group(['prefix' => 'admin'], function() {
    include 'protype.php';
    include 'product.php';
    Route::get('/', function () {
        return view('dashboard');
    });
});
