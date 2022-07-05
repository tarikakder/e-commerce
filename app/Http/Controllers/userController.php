<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class userController extends Controller
{
    public function login_form(){
        return view('user.login');
    }
    public function register_form(){
        return view('user.register');
    }
}
