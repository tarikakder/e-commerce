<?php

namespace App\Http\Controllers;

use App\Models\BasketProduct;
use Illuminate\Http\Request;

class basketController extends Controller
{
    public function index(){
        return view('basket');
    }
    public function add(){
        $product=BasketProduct::find(\request('id'));
        Cart::add($product->id,$product->product_name,1,$product->price);

        return redirect()->route('basket')
            ->with('message_tur','success')
            ->with('message','Ürün sepete eklendi.');
    }
}
