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

Route::get('/productos', [\App\Http\Controllers\ProductsController::class, 'productsList'])->name('productsList');

Route::get('/productos/nuevo', [\App\Http\Controllers\ProductsController::class, 'newProductForm'])->name('newProductForm');
Route::post('/productos/nuevo', [\App\Http\Controllers\ProductsController::class, 'createNewProduct'])->name('createProduct');
Route::get('/productos/{id}', [\App\Http\Controllers\ProductsController::class, 'product'])->name('product');

