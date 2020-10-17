<?php

use App\Http\Controllers\InstrumentController;
use App\Http\Controllers\ProductController;
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

Route::get('/', function () {
    return view('welcome');
});


Route::get('/produtos', [ProductController::class, 'index'])
    ->name('product.index');
Route::get('/produtos/cadastro', [ProductController::class, 'create'])
    ->name('product.create');
Route::post('/produtos', [ProductController::class, 'store'])
    ->name('product.store');
Route::get('produtos/{product}', [ProductController::class, 'edit'])
    ->name('product.edit');
Route::put('produtos/{product}', [ProductController::class, 'update'])
    ->name('product.update');
Route::get('/product/{product}/remover', [ProductController::class, 'destroy'])
->name('product.destroy');
