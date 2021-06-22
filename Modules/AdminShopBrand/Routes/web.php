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

use Modules\AdminShopBrand\Http\Controllers\AdminShopBrandController;
use Modules\AdminShopBrand\Http\Controllers\CreateBrandController;
use Modules\AdminShopBrand\Http\Controllers\DestroyBrandController;
use Modules\AdminShopBrand\Http\Controllers\EditBrandController;
use Modules\AdminShopBrand\Http\Controllers\StoreBrandController;
use Modules\AdminShopBrand\Http\Controllers\UpdateBrandController;


Route::group(['middleware' => 'admin', 'prefix' => 'admin'], function() {

    /**
     * Маршрут всех брендов
     */
    Route::get('/brand', [AdminShopBrandController::class, 'index'])->name('admin.brands');

    /**
     * Маршрут для создания нового бренда
     */
    Route::get('/brand/create', [CreateBrandController::class, 'create'])->name('admin.brand.create');

    /**
     * Маршрут для редактирования бренда
     */
    Route::get('/brand/edit/{id}', [EditBrandController::class, 'edit'])->name('admin.brand.edit');

    /**
     * Маршрут для сохранения нового бренда
     */
    Route::post('/brand/create', [StoreBrandController::class, 'store'])->name('admin.brand.store');

    /**
     * Маршрут для сохранения отредактированного бренда
     */
    Route::put('/brand/update/{id}', [UpdateBrandController::class, 'update'])->name('admin.brand.update');

    /**
     * Маршрут для удаления бренда
     */
    Route::post('/brand/destroy{id}', [DestroyBrandController::class, 'destroy'])->name('admin.brand.destroy');
});
