<?php

use Illuminate\Routing\Router;

Admin::routes();

Route::group([
    'prefix'        => config('admin.route.prefix'),
    'namespace'     => config('admin.route.namespace'),
    'middleware'    => config('admin.route.middleware'),
    'as'            => config('admin.route.prefix') . '.',
], function (Router $router) {

    $router->get('/', 'HomeController@index')->name('home');

    $router->resource('contacts', ContactController::class);
    $router->resource('blog-categories', BlogCategoryController::class);
    $router->resource('blogs', BlogController::class);

    $router->resource('testimonials', TestimonialController::class);
    $router->resource('colors', ColorController::class);
    $router->resource('ranges', RangeController::class);

    $router->resource('product-categories', ProductCategoryController::class);

});
