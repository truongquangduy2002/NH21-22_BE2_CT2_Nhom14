<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MyController;
use App\Http\Controllers\PhotoController;

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


Route::get('/', [MyController::class, 'master']);

// Route::get('/',[MyController::class,'master']);
// Route::post('signup',[MyController::class,'signup']);
// Route::resource('photo', PhotoController::class);
// Route::get('photo/{photo}/edit',[PhotoController::class,'edit']);
// Route::get('photo/{photo}',[PhotoController::class,'update']);

// Route::get('/intro', function () {
//     return view('intro');
// });

// Route::get('/contact', function () {
//     return view('contact');
// });

// Route::get('/demo/{age}', function () {
//     return view('demo');
// })-> middleware('checkage');
