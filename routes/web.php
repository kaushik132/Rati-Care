<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\DashboardController;
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


Route::get('/contact', [HomeController::class, 'showContactForm'])->name('contact');
Route::post('/contact', [HomeController::class, 'contact'])->name('contact.submit');


Route::get('/index',[DashboardController::class, 'indexShow']);
Route::get('/address',[DashboardController::class, 'addressShow']);
Route::get('/add-address',[DashboardController::class, 'addAddressShow']);
Route::get('/edit-address',[DashboardController::class, 'editAddressShow']);
Route::get('/orders',[DashboardController::class, 'orderShow']);
Route::get('/support',[DashboardController::class, 'supportShow']);