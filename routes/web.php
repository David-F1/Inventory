<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StockController;

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

Route::get('/',[StockController::class, 'index']);

Route::get('/stock',[StockController::class, 'index']);
Route::any('/stock/store',[StockController::class, 'store']);
Route::get('/stock/create', [StockController::class, 'create']);
Route::get('/stock/edit/{id}', [StockController::class, 'edit']);
Route::any('/stock/update/{id}', [StockController::class, 'update']);
Route::get('/stock/delete/{id}', [StockController::class, 'destroy']);