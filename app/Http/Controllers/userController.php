<?php

namespace App\Http\Controllers;

use App\Models\UserModel;
use Illuminate\Foundation\Auth\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;

class userController extends Controller
{
    public function login_form(){
        return view('user.login');
    }
    public function login(){
        $this->validate(\request(),[
            'username'=>'required',
            'password'=>'required'
        ]);

        if(auth()->attempt(['username'=>\request('username'),'password'=>\request('password')],\request()->has('benihatirla')))
        {
            \request()->session()->regenerate();
            return redirect()->intended('/');
        }
        else{
            $errors=['username'=>'Hatalı Giriş'];
            return back()->withErrors($errors);
        }
    }

    public function register_form(){
        return view('user.register');
    }
    public function register(){

        $this->validate(request(),[
            'username'=>'required|min:3|max:60',
            'name'=>'required|min:3|max:60',
            'surname'=>'required|min:3|max:60',
            'password'=>'required|confirmed|min:5|max:15'
        ]);

        $user = UserModel::create([
            'name'=>request('name'),
        'surname'=>request('surname'),
        'username'=>request('username'),
        'password'=>Hash::make(request('password'))
        ]);

        auth()->login($user);
        return redirect()->route('mainpage');
    }

    public function logoutFunc(){
        Session::flush();
        Auth::logout();
        return redirect('mainpage');
    }
}
