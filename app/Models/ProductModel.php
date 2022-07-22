<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ProductModel extends Model
{
    use SoftDeletes;

    protected $table="product";

    //protected $guarded=[];

    protected $primaryKey="id";

    protected $fillable=['slug','product_name','product_description','product_amount'];

    const CREATED_AT = 'created_date';
    const UPDATED_AT = 'updated_date';
    const DELETED_AT = 'deleted_date';

    public function categories(){
        return $this->belongsToMany(CategoryModel::class,'category_product','category_id','product_id');
    }

}
