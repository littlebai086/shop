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
/*
Route::get('/', function () {
    return view('welcome');
});*/

//回傳字串
Route::get('/hello',function(){
    return "Hello,World!";
});
/* 
Route::get('/shop', function () {
    return view('Shop');
});*/

Route::get('/','App\Http\Controllers\SiteController@renderHomePage');
Route::get('/shop','App\Http\Controllers\SiteController@renderShopPage');
Route::get('/shop/products/{product}','App\Http\Controllers\SiteController@renderProductDetailPage');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/loginOut', 'App\Http\Controllers\SiteController@loginout');

Route::get('/shop/cart','App\Http\Controllers\SiteController@renderCartPage');
//Route::get('/shop/addcart/{product}','App\Http\Controllers\SiteController@addCart');
Route::post('/shop/addcart','App\Http\Controllers\SiteController@addCart');
//Route::get('/shop/addcart','App\Http\Controllers\SiteController@addCart');
