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

use Modules\Home\Http\Controllers\HomeController;


/**
 * Маршрут на главную страницу
 */
Route::get('/', [HomeController::class, 'index'])->name('home');
