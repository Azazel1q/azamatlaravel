<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function products() {
        $context = ['products'=>Product::latest()->get()];
        return view('products.index', $context);
    }

    public function detail(Product $product) {
        return view('products.detail', ['product'=>$product]);
    }

    // public function authProducts() {
    //     $context = ['products' => Auth::user()->product()->latest()->get()];
    //     return view('products.index', $context);
    // }
}
