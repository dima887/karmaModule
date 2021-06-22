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


use Modules\AdminShopCategory\Http\Controllers\AdminShopCategoryController;
use Modules\AdminShopCategory\Http\Controllers\CreateCategoryController;
use Modules\AdminShopCategory\Http\Controllers\StoreCategoryControllerBase;
use Modules\AdminShopCategory\Http\Controllers\EditCategoryController;
use Modules\AdminShopCategory\Http\Controllers\UpdateCategoryController;
use Modules\AdminShopCategory\Http\Controllers\DestroyCategoryController;



Route::group(['middleware' => 'admin', 'prefix' => 'admin'], function() {
    /**
     * Маршрут всех категорий
     */
    Route::get('/category', [AdminShopCategoryController::class, 'index'])->name('admin.categories');

    /**
     * Маршрут для создания категории
     */
    Route::get('/category/create', [CreateCategoryController::class, 'create'])->name('admin.category.create');

    /**
     * Маршрут для редактирования категории
     */
    Route::get('/category/edit/{id}', [EditCategoryController::class, 'edit'])->name('admin.category.edit');

    /**
     * Маршрут на сохранение новой категории
     */
    Route::post('/category/create', [StoreCategoryControllerBase::class, 'store'])->name('admin.category.store');

    /**
     * Маршрут на сохранение отредактированной категории
     */
    Route::put('/category/update/{id}', [UpdateCategoryController::class, 'update'])->name('admin.category.update');

    /**
     * Маршрут для удаления категории
     */
    Route::post('/category/destroy{id}', [DestroyCategoryController::class, 'destroy'])->name('admin.category.destroy');
});
