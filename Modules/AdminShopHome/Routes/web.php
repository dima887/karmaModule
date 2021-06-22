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

use Modules\AdminShopHome\Http\Controllers\AdminShopHomeController;

Route::prefix('admin')->group(function() {

    /**
     * Маршрут на главную страницу админки
     */
    Route::get('/', [AdminShopHomeController::class, 'index'])->name('admin.home')->middleware('admin');
});
