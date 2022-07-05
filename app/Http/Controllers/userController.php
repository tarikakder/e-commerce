<?php

namespace App\Http\Controllers;

use App\Models\UserModel;
use Illuminate\Foundation\Auth\User;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;

class userController extends Controller
{
    public function login_form(){
        return view('user.login');
    }
    public function register_form(){
        return view('user.register');
    }
    public function register(){
        $user = UserModel::create([
            'name'=>request('name'),
        'surname'=>request('surname'),
        'username'=>request('username'),
        'password'=>Hash::make(request('password'))
        ]);

        auth()->login($user);
        return redirect()->route('mainpage');
    }
}
