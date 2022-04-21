<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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
//     return view('welcome');
// });

Auth::routes();

 Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
 Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// User action
Route::get('/showGroceryList/{id}', [App\Http\Controllers\GroceryListController::class, 'showGroceryList']);
Route::get('/setPreferencePage', [App\Http\Controllers\GroceryListController::class, 'setPreferencePage']);
Route::post('/setPreference', [App\Http\Controllers\GroceryListController::class, 'create']);
Route::get('/findUser', [App\Http\Controllers\GroceryListController::class, 'findUser']);
Route::get('/getProducts', [App\Http\Controllers\GroceryListController::class, 'getProducts']);

Route::get('/storeInCSV', [App\Http\Controllers\GroceryListController::class, 'storeInCSV']);
// Grocery list action
// Route::post('/{id}', [App\Http\Controllers\GroceryListController::class, 'update'])->name('update');
// Route::post('/addList', [App\Http\Controllers\GroceryListController::class, 'create'])->name('create');
// Route::get('/{id}', [App\Http\Controllers\GroceryListController::class, 'destroy'])->name('destroy');


// Product action
Route::get('/showProduct/{id}', [App\Http\Controllers\ProductController::class, 'show']);

Route::get('/findRecommendQuantity', [App\Http\Controllers\RecommendQuantityController::class, 'show'])->name('show');
Route::get('/runPython', [App\Http\Controllers\UserController::class, 'runPython'])->name('runPython');
