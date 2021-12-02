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

// Route::get('/', function () {
//     return view('pages.products.add');
// });
Route::prefix('admin/products/')->group(function () {
    Route::get('/', function () {
        return view('pages.products.index');
    })->name('list');
    Route::get('add', function () {
        return view('pages.products.add');
    })->name('add');
    Route::post('add', [ProductController::class, 'store'])->name('produt.store');
    Route::get('edit/{id}', function ($id) {
        return view('pages.products.edit');
    })->name('edit');
});

