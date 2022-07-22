<?php

namespace App\Http\Controllers;

use App\Models\CategoryModel;
use App\Models\ProductModel;
use Illuminate\Http\Request;

class categoryController extends Controller
{
    //
    public function index($slug_categoryName){
        $category=CategoryModel::where('slug',$slug_categoryName)->firstOrFail();
        $sub_categories=CategoryModel::where('parent_id',$category->id)->get();
        $products=$category->products;
        return view('category',compact(['category','sub_categories','products']));
    }
}
