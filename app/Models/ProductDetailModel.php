<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductDetailModel extends Model
{
    use HasFactory;

    protected $table="product_detail";

    public $timestamps=false;

    public function product(){
        return $this->belongsTo(ProductModel::class);
    }
}
