<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Product;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::orderBy('id','asc')->get();
        return view('product', compact('products')); 
    }
    public function show($id)
    {
        $product = Product::find($id);
        return view('product_detailed', compact('product')); 
    }
}
