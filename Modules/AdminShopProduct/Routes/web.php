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

use Modules\AdminShopProduct\Http\Controllers\AdminShopProductController;
use Modules\AdminShopProduct\Http\Controllers\CreateProductController;
use Modules\AdminShopProduct\Http\Controllers\DestroyProductController;
use Modules\AdminShopProduct\Http\Controllers\EditProductController;
use Modules\AdminShopProduct\Http\Controllers\StoreProductController;
use Modules\AdminShopProduct\Http\Controllers\UpdateProductController;


Route::group(['middleware' => 'admin', 'prefix' => 'admin'], function() {

    /**
     * Маршрут всех товаров
     */
    Route::get('/product', [AdminShopProductController::class, 'index'])->name('admin.products');

    /**
     * Маршрут для создание нового товара
     */
    Route::get('/product/create', [CreateProductController::class, 'create'])->name('admin.product.create');

    /**
     * Маршрут для редактирования товара
     */
    Route::get('/product/edit/{id}', [EditProductController::class, 'edit'])->name('admin.product.edit');

    /**
     * Маршрут для сохранения нового товара
     */
    Route::post('/product/create', [StoreProductController::class, 'store'])->name('admin.product.store');

    /**
     * Маршрут для сохранения отредактированного товара
     */
    Route::put('/product/update/{id}', [UpdateProductController::class, 'update'])->name('admin.product.update');

    /**
     * Маршрут для удаления товара
     */
    Route::post('/product/destroy{id}', [DestroyProductController::class, 'destroy'])->name('admin.product.destroy');
});
