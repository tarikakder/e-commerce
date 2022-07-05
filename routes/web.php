<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Route::get('/', function () {
//    return view('mainpage');
//});

Route::get('/',[\App\Http\Controllers\mainpageController::class,'index']);
Route::get('/kategori/{slug_categoryName}',[\App\Http\Controllers\categoryController::class,'index'])->name('category');
Route::get('/urun/{slug_productName}',[\App\Http\Controllers\productController::class,'index'])->name('product');
Route::get('/sepet',[\App\Http\Controllers\basketController::class,'index'])->name('basket');
Route::get('/odeme',[\App\Http\Controllers\paymentController::class,'index'])->name('payment');
Route::get('/siparisler',[\App\Http\Controllers\ordersController::class,'index'])->name('orders');
Route::get('/siparisler/{id}',[\App\Http\Controllers\ordersController::class,'detail'])->name('order');


Route::group(['prefix'=>'kullanici'], function(){
    Route::get('/oturumac',[\App\Http\Controllers\userController::class,'login_form'])->name('user_login');
    Route::get('/kaydol',[\App\Http\Controllers\userController::class,'register_form'])->name('user_register');
});

