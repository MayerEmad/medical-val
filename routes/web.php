<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\Client\CartController;
use App\Http\Controllers\Client\WishListController;
use App\Http\Controllers\Client\CompareController;
use App\Models\Category;

/*
    normal controllers are for the system itself  ---> Requests
    auth.php are generated form laratrust
    Client and Api controllers are for the web site  ----> Resources

*/


Route::get('/', function () {
    return view('welcome');
});
// I will need admin middelware
//Route::view('categories/subcategory/{category}', 'Admin.category.create', ['category' => $category])->name('category.subcategory');
//Route::resource('categories.products', ProductController::class);


// _________________________FOR THE SYSTEM_______________________
Route::group(['middleware' => ['auth', 'role:superadmin|editoradmin|admin']], function () {
    Route::prefix('admin/')->name('admin.')->group(function () {
        Route::get('tablepage', [AdminController::class, 'adminstablepage'])->name('tablepage');
        Route::get('tabledata', [AdminController::class, 'adminstabledata'])->name('tabledata');
        Route::post('invite-admin', [MailController::class, 'inviteadminbymail'])->name('inviteadmin');
        Route::get('profile', [AdminController::class, 'showProfile'])->name('profile');
    });
    Route::prefix('category/')->name('category.')->group(function () {
        Route::get('table', [CategoryController::class, 'getproducts'])->name('productlist');
        Route::get('search', [CategoryController::class, 'parentcategorysearch'])->name('parentcategorysearch');
        Route::get('subcategory/{category}', function (Category $category) {
            return view('Admin.category.create')->with('category', $category);
        })->name('subcategory');
    });

    //resource routes
    Route::resource('category', \CategoryController::class);
    Route::resource('product', ProductController::class);
    Route::resource('admin', \AdminController::class);
});

// __________________________ FOR LARATRUST __________________________
require __DIR__ . '/auth.php';


//__________________________ FOR THE WEB PAGE __________________________
Route::get('/order', function () {
    return view('orders');
});
//home page
Route::get('/home', function () {
    return view('home');
});
//cart page
Route::get('cart', [CartController::class, 'cart']);
//wishlist
Route::get('wishlist', [WishListController::class, 'wishlist']);
//wishlist
Route::get('compare', [CompareController::class, 'compare']);
