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
use App\Http\Controllers\Client\OrderController;
use App\Http\Controllers\Client\ShopController;

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

        Route::get('orders', [UserController::class, 'ordersTablePage'])->name('ordersTablePage');
        Route::get('orderstabledata', [UserController::class, 'ordersTableData'])->name('ordersTableData');
        Route::get('orderShow/{id}', [UserController::class, 'orderShow'])->name('orderShow');
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
Route::get('/shop-single', function () {
    return view('shop-single');
});
Route::get('/index', [HomeController::class, 'index'])->name('index');
Route::get('/search',[HomeController::class, 'search'])->name('search');
Route::get('/filter',[HomeController::class, 'filter'])->name('filter');
Route::get('lang/change', [HomeController::class, 'change'])->name('changeLang');
Route::get('index/categories', [HomeController::class, 'fetchCategories'])->name('home.fetchCategories');


//shop page
Route::get('/shop/filter',[ShopController::class, 'filter'])->name('shop.productfilter');
Route::get('/shop/getSubCategories',[ShopController::class, 'getSubCategories'])->name('shop.getSubCategories');
Route::get('/shop/{parentCat?}/{subCat?}', [ShopController::class, 'shop'])->name('shop');

Route::get('/shop-single',[ShopController::class, 'productDetails'])->name('shop.productDetails');
//Route::get('/search',[ShopController::class, 'search'])->name('search');
//Route::get('/shop/pagination', [ShopController::class, 'filter']);


//cart page
Route::get('cart', [CartController::class, 'cart']);
Route::get('/cart/{product}', [CartController::class, 'store'])->name('cart.store');
Route::get('/removeproduct/{rowId}', [CartController::class, 'removeproduct'])->name('cart.removeproduct');
Route::post('/plusButton', [CartController::class, 'plusButton'])->name('cart.plusButton');
Route::post('/minusButton', [CartController::class, 'minusButton'])->name('cart.minusButton');

Route::group(['middleware' => 'auth'], function () {
    Route::get('/checkout', [CartController::class, 'checkout'])->name('cart.checkout');

    //Route::get('/order', function () {return view('orders');});
    Route::get('order/checkdata', [OrderController::class, 'checkOrderData'])->name('checkOrderData');
    Route::get('order/create', [OrderController::class, 'createInvoice'])->name('createInvoice');
    Route::get('order/success', [OrderController::class, 'paymentSuccess'])->name('paymentSuccess');
    Route::get('order/failure', [OrderController::class, 'paymentFailure'])->name('paymentFailure');

    // profile page
    Route::get('/profile', [ProfileController::class, 'show'])->name('profile');
    Route::put('/profile/{user}', [ProfileController::class, 'update'])->name('profile-update');
});

// compare page
Route::get('compare', [CompareController::class, 'compare']);
Route::get('/compare/{product}', [CompareController::class, 'store'])->name('compare.store');
Route::get('/removeCompare/{id}', [CompareController::class, 'removeCompare'])->name('compare.removeCompare');



// wishlist page
Route::get('wishlist', [WishListController::class, 'wishlist']);
Route::get('/wishlist/{product}', [WishListController::class, 'store'])->name('wishlist.store');
Route::get('/removewishlist/{id}', [WishListController::class, 'removewishlist'])->name('wishlist.removewishlist');


// about page
Route::get('/about', function () {
    return view('about');
});
// contact page
Route::get('/contact', function () {
    return view('contact');
});
//thanks after successful order
Route::get('/thanks', function () {
    return view('thankyou');
});


