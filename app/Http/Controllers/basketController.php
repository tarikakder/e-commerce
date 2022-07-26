<?php

namespace App\Http\Controllers;

use App\Models\BasketProduct;
use Illuminate\Http\Request;
use Darryldecode\Cart\Cart;
use App\Models\ProductModel;

class basketController extends Controller
{
    public function index(){
        return view('basket');
    }

    public function addd(){
        $product=ProductModel::find(\request('id'));
        \Cart::add($product->id,$product->product_name,1,$product->product_amount);
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
