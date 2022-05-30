<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Protype;

class HomeController extends Controller
{

    public function index()
    {
        $product = Product::limit(10)->orderby('id', 'DESC')->get();
        $protype = Protype::all();
        return view('index', ['data' => $product, 'dulieu' => $protype]);
    }
}
