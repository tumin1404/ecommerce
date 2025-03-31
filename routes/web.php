<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;

Route::get('/', function () {
    return view('users.page.home');
});
Route::get('/home', function () {
    return view('users.page.home');
})->name('home');
Route::get('/products', function () {
    return view('users.page.products');
})->name('products');
Route::get('/productdetail', function () {
    return view('users.page.productdetail');
})->name('productdetail');
Route::get('/news', function () {
    return view('users.page.news');
})->name('news');
Route::get('/newdetail', function () {
    return view('users.page.newdetail');
})->name('newdetail');
Route::get('/contact', function () {
    return view('users.page.contact');
})->name('contact');
Route::get('/about', function () {
    return view('users.page.about');
})->name('about');
Route::get('/cart', function () {
    return view('users.page.cart');
})->name('cart');
Route::get('/checkout', function () {
    return view('users.page.checkout');
})->name('checkout');
Route::get('/test', function () {
    return view('users.page.test');
});
Route::get('/admin/home', function () {
    return view('admin.page.home');
});

Route::get('/admin/category', [CategoryController::class, 'index'])->name('admin.category.index');
Route::get('/admin/category/{id}', [CategoryController::class, 'show']);
Route::post('/admin/category', [CategoryController::class, 'store']);
Route::post('/admin/category/{id}', [CategoryController::class, 'update'])->whereNumber('id');
Route::delete('/admin/category/{id}', [CategoryController::class, 'destroy'])->name('admin.category.destroy');


