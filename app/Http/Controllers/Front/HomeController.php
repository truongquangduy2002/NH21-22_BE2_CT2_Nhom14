<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Protype;
use Illuminate\Http\Request;


class HomeController extends Controller
{
    public function index()
    {
        $product = Product::limit(10)->orderby('id', 'DESC')->get();
        $protype = Protype::all();
        return view('index', ['data' => $product, 'dulieu' => $protype]);
    }
}
