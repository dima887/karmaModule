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

use Modules\User\Http\Controllers\LoginUserController;
use Modules\User\Http\Controllers\RegisterUserController;
use Modules\User\Http\Controllers\StoreUserController;
use Modules\User\Http\Controllers\LogoutUserController;
use Modules\User\Http\Controllers\AuthUserController;


/**
 * Маршруты для авторизованых пользователей
 */
Route::group(['middleware' => 'auth'], function () {

    /**
     * Маршрут для выхода из приложения
     */
    Route::get('/logout', [LogoutUserController::class, 'logout'])->name('logout');
});


/**
 * Маршруты для неавторизованых пользователй
 */
Route::group(['middleware'=> 'guest'], function () {

    /**
     * Маршрут на авторизацию пользователя
     */
    Route::get('/login', [LoginUserController::class, 'loginAuth'])->name('loginAuth');

    /**
     * Маршрут на регистрацию пользователя
     */
    Route::get('/register', [RegisterUserController::class, 'registerUser'])->name('registerUser');

    /**
     * Маршрут на аутентификацию пользователя
     */
    Route::post('/login', [AuthUserController::class, 'authenticate'])->name('authUser');

    /**
     * Маршрут на сохранение нового пользователя в базу
     */
    Route::post('/register', [StoreUserController::class, 'store'])->name('storeUser');
});

