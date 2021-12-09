<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ColorController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SizeController;

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
    return redirect()->route('product.index');
});
Route::prefix('admin/')->group(function () {

    Route::prefix('products/')->group(function () {
        Route::get('/', [ProductController::class, 'index'])->name('product.index');
        Route::get('add', [ProductController::class, 'add'])->name('product.add');
        Route::post('add', [ProductController::class, 'store'])->name('product.store');
        Route::delete('delete/{id}', [ProductController::class, 'delete'])->name('product.delete');
        Route::get('edit/{id}', [ProductController::class, 'edit'])->name('product.edit');
    });

    Route::prefix('categories/')->group(function () {
        Route::get('/', [CategoryController::class, 'index'])->name('category.index');
        Route::get('create', [CategoryController::class, 'create'])->name('category.create');
        Route::post('create', [CategoryController::class, 'store'])->name('category.store');
        Route::delete('delete/{id}', [CategoryController::class, 'delete'])->name('category.delete');
        Route::get('edit/{id}', [CategoryController::class, 'edit'])->name('category.edit');
        Route::post('edit/{id}', [CategoryController::class, 'edit'])->name('category.edit');
    });

    Route::prefix('colors/')->group(function () {
        Route::get('/', [ColorController::class, 'index'])->name('color.index');
        Route::get('create', [ColorController::class, 'add'])->name('color.create');
        Route::post('create', [ColorController::class, 'store'])->name('color.store');
        Route::delete('delete/{id}', [ColorController::class, 'delete'])->name('color.delete');
        Route::get('edit/{id}', [ColorController::class, 'edit'])->name('color.edit');
        Route::post('edit/{id}', [ColorController::class, 'edit'])->name('color.edit');
    });

    Route::prefix('sizes/')->group(function () {
        Route::get('/', [SizeController::class, 'index'])->name('size.index');
        Route::get('create', [SizeController::class, 'add'])->name('size.create');
        Route::post('create', [SizeController::class, 'store'])->name('size.store');
        Route::delete('delete/{id}', [SizeController::class, 'delete'])->name('size.delete');
        Route::get('edit/{id}', [SizeController::class, 'edit'])->name('size.edit');
        Route::post('edit/{id}', [SizeController::class, 'edit'])->name('size.edit');
    });
});

