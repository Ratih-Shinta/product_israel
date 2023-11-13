<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\product;

class productController extends Controller
{
    public function index() 
    {
        return view('product.all_product', [
            "title" => "Products",
            "products" => product::all()
        ]);
    }

    public function show($product)
    {
        return view ('product.detail_product', [
            "title" => "detail.product",
            "product" => product::find($product)
        ]);
    }
}
