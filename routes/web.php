<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Products\ProductListController;
use App\Http\Controllers\Products\ProductCreateController;
use App\Http\Controllers\Products\ProductDeleteController;
use App\Http\Controllers\Products\ProductGetController;
use App\Http\Controllers\Client\ClientListController;
use App\Http\Controllers\Client\ClientDeleteController;
use App\Http\Controllers\Client\ClientUpdateController;
use App\Http\Controllers\Client\ClientGetController;
use App\Http\Controllers\Client\ClientCreateController;
use App\Http\Controllers\Worker\WorkerCreateController;
use App\Http\Controllers\Worker\WorkerUpdateController;
use App\Http\Controllers\Worker\WorkerDeleteController;
use App\Http\Controllers\Worker\WorkerListController;
use App\Http\Controllers\Worker\WorkerGetController;

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

Route::prefix('clients')->group(function () {
    Route::get('/', [ClientListController::class, 'index'])->name('clients.list');
    Route::post('/', [ClientCreateController::class, 'index'])->name('clients.create');
    Route::delete('/{document}', [ClientDeleteController::class, 'index'])->name('clients.delete');
    Route::get('/{document}', [ClientGetController::class, 'index'])->name('clients.get');
});

Route::prefix('workers')->group(function () {
    Route::get('/', [WorkerListController::class, 'index'])->name('worker.list');
    Route::post('/', [WorkerCreateController::class, 'index'])->name('worker.create');
    Route::delete('/{id}', [WorkerDeleteController::class, 'index'])->name('worker.delete');
    Route::get('/{id}', [WorkerGetController::class, 'index'])->name('worker.get');
});

