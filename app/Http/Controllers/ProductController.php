<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function product(Request $request) {
        return view('product.product');
    }

    public function productDetail(Request $request) {
        return view('product.detail');
    }
}
