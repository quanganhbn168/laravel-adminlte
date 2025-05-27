<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function allProduct()
    {
        return view('frontend.products.all');
    }

    public function productByCategory()
    {
        return view('frontend.products.productByCate');
    }

    public function detail()
    {
        return view('frontend.products.detail');
    }
}
