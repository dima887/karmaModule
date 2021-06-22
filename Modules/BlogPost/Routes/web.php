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


use Modules\BlogPost\Http\Controllers\BlogPostController;
use Modules\BlogPost\Http\Controllers\CreatePostController;
use Modules\BlogPost\Http\Controllers\StorePostController;


/**
 * Маршрут на простмотр поста
 */
Route::get('/blog/post/{id}', [BlogPostController::class, 'index'])->name('blog.post');


/**
 * Маршрут на создание поста
 */
Route::get('/blog/post/create', [CreatePostController::class, 'create'])->name('blog.post.create');


/**
 * Маршрут на сохранение поста
 */
Route::post('/blog/post/story/{user_id}', [StorePostController::class, 'store'])->name('blog.post.story');
