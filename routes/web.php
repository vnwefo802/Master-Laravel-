<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/Product', [ProductController::class, 'index'])->name('Product.index');
Route::get('/Product/create', [ProductController::class, 'create'])->name('Product.create');
Route::post('/Product', [ProductController::class, 'store'])->name('Product.store');
Route::get('/Product/{cat}', [ProductController::class, 'show'])->name('Product.show');
Route::get('/Product/{product}/edit', [ProductController::class, 'edit'])->name('Product.edit');
Route::match(['put', 'patch'], 'product/{product}',[ProductController::class, 'update'])->name('Product.update');
Route::delete('Product/{Product}', [ProductController::class, 'delete'])->name('Product.destroy');
