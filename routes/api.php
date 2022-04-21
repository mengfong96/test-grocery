<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// API for products
Route::post('product', [App\Http\Controllers\ProductController::class, 'create']);
Route::get('products', [App\Http\Controllers\ProductController::class, 'index']);
Route::put('product/{id}', [App\Http\Controllers\ProductController::class, 'update']);
Route::delete('product/{id}', [App\Http\Controllers\ProductController::class, 'destory']);

// API for Grocery List
Route::post('grocerylist', [App\Http\Controllers\GroceryListController::class, 'create']);
Route::get('grocerylists', [App\Http\Controllers\GroceryListController::class, 'index']);
Route::put('grocerylist/{id}', [App\Http\Controllers\GroceryListController::class, 'update']);
Route::delete('grocerylist/{id}', [App\Http\Controllers\GroceryListController::class, 'destory']);

// API for GroceryList Product
Route::post('grocerylistproduct', [App\Http\Controllers\GroceryListProductController::class, 'create']);
Route::get('grocerylistproducts', [App\Http\Controllers\GroceryListProductController::class, 'index']);
Route::put('grocerylistproduct/{id}', [App\Http\Controllers\GroceryListProductController::class, 'update']);
Route::delete('grocerylistproduct/{id}', [App\Http\Controllers\GroceryListProductController::class, 'destory']);