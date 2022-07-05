<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class productController extends Controller
{
    public function index($slug_product_name){
        return view('product');
    }
}
