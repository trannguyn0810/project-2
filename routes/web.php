<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\AdController;
use App\Http\Controllers\ProController;
use App\Http\Controllers\OrderController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/product/{id}', [ProductController::class, 'show'])->name('product.show');
Route::get('cart', [CartController::class, 'index'])->name('product.cart');
Route::post('cart/remove/{id}', [CartController::class, 'remove'])->name('cart.remove');
Route::get('/ad', [AdController::class, 'index'])->name('product.ad');
Route::get('/pro', [ProController::class, 'pro'])->name('product.pro');
Route::get('/order', [OrderController::class, 'order'])->name('product.order');




