<?php

use App\Http\Controllers\CarsControler;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\PostsController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [PagesController::class, 'index']);

// Route::get('about', [PagesController::class, 'about']);

// Route::get('posts', [PostsController::class, 'index']);

Route::resource('cars', CarsControler::class);

// Route::get('products',
//     [ProductsController::class, 'index'])->name('products');

// Route::get('products/about', [ProductsController::class, 'about']);

// Route::get('products', 'App\Http\Controllers\ProductsController@index');

// Before laravel 8
// Route::get('products', 'ProductsController@index');

// Pattern is integer
// Route::get('products/{id}',
//     [ProductsController::class, 'show'])->where('id', '[0-9]+');

// Pattern is string
// Route::get('products/{name}/{id}',
//     [ProductsController::class, 'show'])->where([
//         'name' => '[a-z]+',
//         'id' => '[0-9]+'
//     ]);

