<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class CategoryModel extends Model
{
    use SoftDeletes;

    protected $table="category";

    protected $primaryKey="id";

    protected $fillable=['parent_id','category_name','slug','created_at','updated_at','deleted_at'];

    //protected $guarded=[];

    public function products(){
        return $this->belongsToMany(ProductModel::class,'category_product','category_id','product_id');
    }
}
