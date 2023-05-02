<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [\App\Http\Controllers\HomeController::class, 'home']);

// Route::get('/blog', function () {
//     return view('blog');
// });

Route::get('/productos', [\App\Http\Controllers\ProductsController::class, 'productsList']);


Route::get('/productos/{id}', [\App\Http\Controllers\ProductsController::class, 'product']);
// Route::get('/productos/{id}', function () {
//     return view('product');
// });
