<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\CategoryController;
use App\Http\Controllers\Api\ProductController;
use App\Http\Controllers\Api\ProfileController;
use App\Http\Controllers\Api\OrderController;


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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


// categories
Route::get('get-categories', [CategoryController::class, 'getCategories']);

// products
Route::get('get-products', [ProductController::class, 'getProducts']);

// profile
Route::get('get-profile', [ProfileController::class, 'getProfile']);
Route::post('edit-profile', [ProfileController::class, 'editProfile']);
Route::put('update-profile', [ProfileController::class, 'updateProfile']);

// Order
Route::get('get-orders', [OrderController::class, 'getOrders']);
Route::post('add-order', [OrderController::class, 'addOrder']);
Route::put('update-order', [OrderController::class, 'updateOrder']);
