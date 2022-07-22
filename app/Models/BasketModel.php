<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class BasketModel extends Model
{
    use SoftDeletes;

    protected $table="basket";

    protected $guarded=[];

    const CREATED_AT = 'created_date';
    const UPDATED_AT = 'updated_date';
    const DELETED_AT = 'deleted_date';

    public function order(){
        return $this->hasOne(OrderModel::class);
    }
}
