<?php

namespace App\Http\Controllers;

use App\Models\ProductDetailModel;
use App\Models\ProductModel;
use Database\Seeders\CategoryTableSeeder;
use Illuminate\Http\Request;
use App\Models\CategoryModel;

class mainpageController extends Controller
{
    public function index(){

        $categories=CategoryModel::whereRaw('parent_id is null')->take(8)->get();

        $products_slider=ProductDetailModel::with('product')->where('show_slider',1)->take(5)->get();

        $opportunity_product_day=ProductModel::select('product.*')
            ->join('product_detail','product_detail.product_id','product_id')
            ->where('product_detail.show_good_day',1)
            ->orderBy('updated_date','desc')
            ->first();

        $products_featured=ProductDetailModel::with('product')->where('show_featured',1)->take(5)->get();
        $products_bestseller=ProductDetailModel::with('product')->where('show_bestseller',1)->take(5)->get();
        $products_discount=ProductDetailModel::with('product')->where('show_discount',1)->take(5)->get();

        return view('mainpage',compact('categories','products_slider','opportunity_product_day','products_featured','products_bestseller','products_discount'));
    }
    //
}
