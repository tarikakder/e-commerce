<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class UserModel extends Authenticatable
{
    use SoftDeletes;

    protected $table="user";

    protected $fillable = [
        'name',
        'surname',
        'username',
        'password',
    ];


    protected $hidden = [
        'password',
        'remember_token',
    ];

}
