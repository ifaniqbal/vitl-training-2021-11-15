<?php

use App\Http\Controllers\ProductController;
use App\Models\Product;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::resource('products', ProductController::class);

Route::get('product-asd/{product}', function(Product $product) {
    return $product;
})->name('product.asd');

Route::get('/', function () {
    return view('welcome');
});

Route::get('home', function () {
    return Inertia::render('Home', [
        'user' => 'Jack',
        'item' => 1,
        'item2' => 1,
    ]);
});
