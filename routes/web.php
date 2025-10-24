<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CartController;

/*
|--------------------------------------------------------------------------
| 🌐 WEB ROUTES - MULIA MART
|--------------------------------------------------------------------------
| Versi final — mendukung role: mitra & user (tanpa admin)
| Diperbaiki urutan route agar tidak konflik (404 di /products/create)
|--------------------------------------------------------------------------
*/

// 🏠 Halaman publik
Route::get('/', [ProductController::class, 'home'])->name('home');
Route::view('/about', 'about')->name('about');
Route::view('/contact', 'contact')->name('contact');

// 🔧 Testing route (pastikan ini berfungsi)
Route::get('/test', fn() => 'test ok');
Route::get('/test-view', fn() => view('products.create'));

// 🔐 AUTH
Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
Route::get('/register', [AuthController::class, 'showRegister'])->name('register');
Route::post('/register', [AuthController::class, 'register']);

// 📦 PRODUK — publik dan mitra
Route::get('/products', [ProductController::class, 'index'])->name('products.index');

// 🧑‍🌾 MITRA — hanya mitra yang bisa kelola produk
Route::middleware(['auth', 'role:mitra'])->group(function () {
    // penting: letakkan create SEBELUM {product}
    Route::get('/products/create', [ProductController::class, 'create'])->name('products.create');
    Route::post('/products', [ProductController::class, 'store'])->name('products.store');
    Route::get('/products/{product}/edit', [ProductController::class, 'edit'])->name('products.edit');
    Route::put('/products/{product}', [ProductController::class, 'update'])->name('products.update');
    Route::delete('/products/{product}', [ProductController::class, 'destroy'])->name('products.destroy');

    // Dashboard khusus mitra
    Route::get('/user/dashboard', [ProductController::class, 'dashboard'])->name('user.dashboard');
});

// Route detail produk (diletakkan PALING BAWAH agar tidak ganggu /products/create)
Route::get('/products/{product}', [ProductController::class, 'show'])->name('products.show');

// 🛒 CART & CHECKOUT (hanya untuk user login)
Route::middleware(['auth'])->group(function () {
    Route::get('/cart', [CartController::class, 'index'])->name('cart.index');
    Route::post('/cart/add/{product}', [CartController::class, 'add'])->name('cart.add');
    Route::post('/cart/update/{product}', [CartController::class, 'update'])->name('cart.update');
    Route::delete('/cart/remove/{product}', [CartController::class, 'remove'])->name('cart.remove');

    Route::get('/checkout', [CartController::class, 'checkout'])->name('checkout.show');
    Route::post('/checkout', [CartController::class, 'processCheckout'])->name('checkout.process');
});
