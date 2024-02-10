<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/index', function () {
    return view('index');
});
Route::get('/category', function () {
    return view('category');
})->name('category');

Route::get('/service', function () {
    return view('service');
})->name('service');
Route::get('/contact', function () {
    return view('contact');
})->name('contact');
Route::get('/about_us', function () {
    return view('about_us');
})->name('about_us');
Route::get('/products', function () {
    return view('products');
})->name('products');

Route::get('/details_product', function () {
    return view('details_product');
})->name('details_product');

Route::get('/blog', function () {
    return view('blog');
})->name('blog');

Route::get('/article', function () {
    return view('article');
})->name('article');



