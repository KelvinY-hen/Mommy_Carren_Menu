<?php

use App\Http\Controllers\FoodController;
use Illuminate\Support\Facades\Route;


Route::get('/', [FoodController::class, 'FoodListing'])->name('food.listing');
Route::post('/addToCart', [FoodController::class, 'addToCart'])->name('food.addToCart');
Route::post('/reduceFromCart/{number?}', [FoodController::class, 'reduceFromCart'])->name('food.reduceFromCart');
Route::get('/myCart', [FoodController::class, 'showCart'])->name('food.showCart');
Route::get('/receipt', [FoodController::class, 'createReceipt'])->name('food.showReceipt');