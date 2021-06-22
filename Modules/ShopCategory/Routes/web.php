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

use Modules\ShopCategory\Http\Controllers\ShopCategoryController;


/**
 * Маршрут на просмотр всех товаров, товаров по категориям, товаров по брендам
 */
Route::get('/shop/category/{slug?}', [ShopCategoryController::class, 'index'])->name('shop.category');
