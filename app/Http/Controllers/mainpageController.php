<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class mainpageController extends Controller
{
    public function index(){
        return view('mainpage');
    }
    //
}
