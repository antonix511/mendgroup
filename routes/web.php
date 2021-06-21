<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Products\ProductListController;
use App\Http\Controllers\Products\ProductCreateController;
use App\Http\Controllers\Products\ProductDeleteController;
use App\Http\Controllers\Products\ProductGetController;

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

Route::prefix('products')->group(function () {
    Route::get('/', [ProductListController::class, 'index'])->name('products.list');
    Route::post('/', [ProductCreateController::class, 'index'])->name('products.create');
    Route::delete('/{catalogue}', [ProductDeleteController::class, 'index'])->name('products.delete');
    Route::get('/{catalogue}', [ProductGetController::class, 'index'])->name('products.get');
});

