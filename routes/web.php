<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\Client\CartController;
use App\Http\Controllers\Client\WishListController;
use App\Http\Controllers\Client\CompareController;
use App\Http\Controllers\Client\HomeController;
use App\Http\Controllers\Client\ProfileController;


use App\Models\Category;

/*
    normal controllers are for the system itself  ---> Requests
    auth.php are generated form laratrust
    Client and Api controllers are for the web site  ----> Resources

*/


// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', [HomeController::class, 'index']);

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

        Route::get('users', [UserController::class, 'index'])->name('usertablepage');
        Route::get('userstabledata', [UserController::class, 'userstabledata'])->name('userstabledata');

    });
    Route::prefix('category/')->name('category.')->group(function () {
        Route::get('table', [CategoryController::class, 'getproducts'])->name('productlist');
        Route::get('search', [CategoryController::class, 'parentcategorysearch'])->name('parentcategorysearch');
        Route::get('subcategory/{category}', function (Category $category) {
            return view('Admin.category.create')->with('category', $category);
        })->name('subcategory');
    });
    Route::get('product/table', [ProductController::class, 'getproducts'])->name('product.productsearch');

    //resource routes
    Route::resource('category', \CategoryController::class);
    Route::resource('product', \ProductController::class);
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
Route::get('/index', [HomeController::class, 'index'])->name('index');
Route::get('/search',[HomeController::class, 'search'])->name('search');

//cart page
Route::get('cart', [CartController::class, 'cart']);
Route::get('/cart/{product}', [CartController::class, 'store'])->name('cart.store');
Route::get('/removeproduct/{rowId}', [CartController::class, 'removeproduct'])->name('cart.removeproduct');
Route::get('/plusButton', [CartController::class, 'plusButton'])->name('cart.plusButton');
Route::get('/minusButton', [CartController::class, 'minusButton'])->name('cart.minusButton');
// compare page
Route::get('compare', [CompareController::class, 'compare']);
Route::get('/compare/{product}', [CompareController::class, 'store'])->name('compare.store');
// wishlist page
Route::get('wishlist', [WishListController::class, 'wishlist']);
Route::get('/wishlist/{product}', [WishListController::class, 'store'])->name('wishlist.store');
Route::get('/removewishlist/{id}', [WishListController::class, 'removewishlist'])->name('wishlist.removewishlist');
///
Route::post('/cart', [CartController::class, 'minusButton'])->name('minusButton');
//wishlist
Route::get('wishlist', [WishListController::class, 'wishlist']);
//wishlist
// Route::get('compare', [CompareController::class, 'compare']);
// about page
Route::get('/about', function () {
    return view('about');
});
// contact page
Route::get('/contact', function () {
    return view('contact');
});
//home page
// Route::get('/index', function () {
//     return view('index');
// });
Route::get('/index', [HomeController::class, 'index'])->name('index');
Route::get('/search',[HomeController::class, 'search'])->name('search');
Route::get('lang/change', [HomeController::class, 'change'])->name('changeLang');

// profile page
Route::get('/profile', [ProfileController::class, 'show'])->name('profile');// i think we can delete it
Route::put('/profile/{user}', [ProfileController::class, 'update'])->name('profile-update');

//Product details page
Route::get('/details', function () {
    return view('shop-single');
});
//Product details page
Route::get('/shop', function () {
    return view('shop');
});
//Product details page
Route::get('/checkout', function () {
    return view('checkout');
});


