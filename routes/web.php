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

// Auth
Route::get('/iniciar-sesion', [\App\Http\Controllers\AuthController::class, 'loginForm'])->name('loginForm');
Route::post('/iniciar-sesion', [\App\Http\Controllers\AuthController::class, 'processLogin'])->name('processLogin');

Route::post('/cerrar-sesion', [\App\Http\Controllers\AuthController::class, 'processLogout'])->name('processLogout');

//Products
Route::get('/productos', [\App\Http\Controllers\ProductsController::class, 'productsList'])->name('productsList');

Route::get('/productos/nuevo', [\App\Http\Controllers\ProductsController::class, 'newProductForm'])->name('newProductForm')->middleware('auth');
Route::post('/productos/nuevo', [\App\Http\Controllers\ProductsController::class, 'processCreateProduct'])->name('processCreateProduct')->middleware('auth');

Route::get('/productos/{id}', [\App\Http\Controllers\ProductsController::class, 'product'])->name('product');

Route::get('/productos/{id}/editar', [\App\Http\Controllers\ProductsController::class, 'updateProductForm'])->name('updateProductForm');
Route::post('/productos/{id}/editar', [\App\Http\Controllers\ProductsController::class, 'processUpdate'])->name('processUpdate');

Route::get('/productos/{id}/eliminar', [\App\Http\Controllers\ProductsController::class, 'confirmDelete'])->name('confirmDelete');
Route::post('/productos/{id}/eliminar', [\App\Http\Controllers\ProductsController::class, 'processDelete'])->name('processDelete');

