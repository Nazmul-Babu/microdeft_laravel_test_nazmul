<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\ShopController;
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

Route::get('/',[ShopController::class,'ShowShop'])->name('ShowShop');
Route::post('/',[ShopController::class,'createShop'])->name('createShop');
Route::get('products',[ProductController::class,'ShowProduct'])->name('ShowProduct');
Route::post('products',[ProductController::class,'CreateProduct'])->name('CreateProduct');
Route::post('products/{id}',[ProductController::class,'editProduct'])->name('editProduct');

