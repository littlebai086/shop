<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MailController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\NewController;
use App\Http\Controllers\OrderProductController;
use Inertia\Inertia;

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
Route::get('/', [ShopController::class, 'index']);
Route::get('/news', [NewController::class, 'new']);
Route::get('/product', [ProductController::class, 'index']);
Route::get('/about', function () {
    return view('about');
});
Route::get('/contact', function () {
    return view('contact');
    //echo __('message.forget_password');
});
Route::post('/contact', [MailController::class, 'contactSendMail'])->name('contactSendMail');;
Auth::routes();
//require __DIR__.'/auth.php';

Route::middleware('auth')->group(function () {
    Route::get('/products/{product}', [ProductController::class, 'show']);
    Route::post('addCart', [ShopController::class, 'addCart'])->name('addCart');
    Route::get('myCart', [ShopController::class, 'myCart'])->name('myCart');
    Route::get('/removeCart/{productId}',[ShopController::class, 'removeCart']);
    Route::get('checkCart',[ShopController::class, 'checkCart']);
    Route::get('orderRecord',[OrderProductController::class, 'orderRecord']);
    Route::post('buyCart',[ShopController::class, 'buyCart'])->name('buyCart');
});


