<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class OrderModel extends Model
{
    use SoftDeletes;

    protected $table="order";

    protected $fillable=['transactionProd','basket_id','userID','productID','address','orderDate','order_amount'];

    const CREATED_AT = 'created_date';
    const UPDATED_AT = 'updated_date';

    public function basket(){
        return $this->belongsTo('App\Models\BasketModel');
    }
}
