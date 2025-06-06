<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

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
Route::fallback(function () {
    return response()->view('errors.404', [], 404);
});

Route::get('/',[HomeController::class, 'index'])->name('home');
Route::get('/blogs',[HomeController::class, 'blog'])->name('blog');
Route::get('/products',[HomeController::class, 'product'])->name('product');
Route::get('/product',[HomeController::class, 'productsDetails'])->name('productsDetails');
Route::get('/cart',[HomeController::class, 'cart'])->name('cart');

