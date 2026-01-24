<?php

use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\coloringroll\ShopController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
 

Route::get('/home', function () {return view('coloringRoll.pages.home');})->name('home');
Route::get('/about', function () {return view('coloringRoll.pages.about');});
Route::get('/404', function () {return view('coloringRoll.pages.404');});
Route::get('/cart', function () {return view('coloringRoll.pages.cart');});
Route::get('/checkout', function () {return view('coloringRoll.pages.checkout');});
Route::get('/contact', function () {return view('coloringRoll.pages.contact');});
Route::get('/faq', function () {return view('coloringRoll.pages.faq');});
Route::get('/gallery', function () {return view('coloringRoll.pages.gallery');});
// Route::get('/login', function () {return view('coloringRoll.pages.login');});
// Route::get('/register', function () {return view('coloringRoll.pages.register');});
// Route::get('/shop', function () {return view('coloringRoll.pages.shop');});
Route::get('/shop', [ShopController::class, 'index'])->name('shop');
Route::get('/shop-details', function () {return view('coloringRoll.pages.shop-details');});
Route::get('/shop/{product:slug}', [ShopController::class, 'show'])->name('shop.details');


Route::middleware(['auth', 'admin'])->prefix('admin')->name('admin.')->group(function () {
    Route::get('/dashboard', function () {return view('admin.dashboard');})->name('dashboard');
    Route::get('/orders', function () {return view('admin.adminPages.orders');})->name('orders');
    Route::get('/products', function () {return view('admin.adminPages.products');})->name('products');
    Route::get('/categories', function () {return view('admin.adminPages.categories');})->name('categories');
    Route::get('/users', [UserController::class, 'index'])->name('users.index');
        Route::delete('/users/{user}', [UserController::class, 'destroy'])->name('users.destroy');

});
Route::get('/table', function () {
    return view('admin.table');
});