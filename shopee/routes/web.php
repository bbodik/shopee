<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', [App\Http\Controllers\ShopController::class, 'index'])->name('home');
Route::get('/shop/{category_name}', [App\Http\Controllers\ShopController::class, 'shop'])->name('shop');
Route::get('/shop/product/{product_id}', [App\Http\Controllers\ShopController::class, 'product'])->name('product');
Route::get('/search', [App\Http\Controllers\ShopController::class, 'search'])->name('search');
Route::get('/shop/product/add-to-cart/{product_id}', [App\Http\Controllers\ShopController::class, 'add_to_cart'])->name('add_to_cart');
Route::get('/cart', [App\Http\Controllers\ShopController::class, 'cart'])->name('cart');
Route::get('/checkout', [App\Http\Controllers\ShopController::class, 'checkout'])->name('checkout');
Route::get('/add_order', [App\Http\Controllers\ShopController::class, 'add_order'])->name('add_order');
Route::get('/shop/product/add-to-wish/{product_id}', [App\Http\Controllers\ShopController::class, 'add_to_wish'])->name('add_to_wish');
Route::get('/wishes', [App\Http\Controllers\ShopController::class, 'get_wishes'])->name('get_wishes');


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
