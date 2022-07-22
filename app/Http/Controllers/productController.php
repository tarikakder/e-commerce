<?php

namespace App\Http\Controllers;

use App\Models\ProductModel;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Http\Request;

class productController extends Controller
{
    use SoftDeletes;

    public function index($slug_productName){
        $product=ProductModel::whereSlug($slug_productName)->firstOrFail();
        $categories=$product->categories()->distinct()->get();
        return view('product',compact('product','categories'));
    }
}
