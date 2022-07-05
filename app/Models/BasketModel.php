<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class BasketModel extends Model
{
    use SoftDeletes;

    protected $table="sepet";

    protected $guarded=[];

    const CREATED_AT = ''
}
