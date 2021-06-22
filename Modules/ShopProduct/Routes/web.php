<?php

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

use Illuminate\Support\Facades\Route;

use Modules\ShopProduct\Http\Controllers\ShopProductController;
use Modules\ShopProduct\Http\Controllers\StoreReviewController;


/**
 * Маршрут на просмотр товара
 */
Route::get('/shop/product/id={id}/page={slug}', [ShopProductController::class, 'index'])->name('shop.single-product');


/**
 * Маршрут на сохранение отзыва к товару
 */
Route::post('/shop/product/{product_id}{user_id}', [StoreReviewController::class, 'store'])->name('shop.review.store');
