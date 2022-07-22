<?php

namespace App\Http\Controllers;

use App\Models\BasketProduct;
use Illuminate\Http\Request;
use Darryldecode\Cart\Cart;
use App\Models\ProductModel;

class basketController extends Controller
{
    public function index(){
        return view('baskett');
    }

    public function addd(Request $request){
        $product=ProductModel::find(\request('id'));
        \Cart::add($product->id,$product->product_name,1,$product->price);
//        \Cart::add([
//            'id'=>$request->id,
//            'product_name'=>$request->product_name,
//            'product_amount'=>$request->product_amount
//        ]);

        return redirect()->route('baskett')
            ->with('message_tur','success')
            ->with('message','Ürün sepete eklendi.');
    }
}
