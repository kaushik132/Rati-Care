<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\SitemapController;
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

Route::get('/cart-content', function () {
    return view('cart'); // resources/views/partials/cart.blade.php
});

Route::get('/',[HomeController::class, 'index'])->name('home');
Route::get('/blogs/{slug?}',[HomeController::class, 'blog'])->name('blog');
<<<<<<< HEAD
Route::get('/blogdetails',[HomeController::class, 'blogDetails'])->name('blog.details');
=======
Route::get('/blog',[HomeController::class, 'blogDetails'])->name('blogDetails');
>>>>>>> 8a76a17cbea4e899bc16a574c55da61e07bd49e6
Route::get('/products',[HomeController::class, 'product'])->name('product');
Route::get('/product',[HomeController::class, 'productsDetails'])->name('productsDetails');
Route::get('/cart',[HomeController::class, 'cart'])->name('cart');

Route::get('/checkout-page',[HomeController::class, 'checkoutShow']);


Route::get('/contact', [HomeController::class, 'showContactForm'])->name('contact');
Route::post('/contact', [HomeController::class, 'contact'])->name('contact.submit');


Route::get('/index',[DashboardController::class, 'indexShow']);
Route::get('/address',[DashboardController::class, 'addressShow']);
Route::get('/add-address',[DashboardController::class, 'addAddressShow']);
Route::get('/edit-address',[DashboardController::class, 'editAddressShow']);
Route::get('/orders',[DashboardController::class, 'orderShow']);
Route::get('/support',[DashboardController::class, 'supportShow']);


Route::get('sitemap.xml',[SitemapController::class, 'index']);





