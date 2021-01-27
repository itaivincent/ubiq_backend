<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GoogleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\StoreController;
use App\Http\Controllers\ProductController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('auth/google', [GoogleController::class, 'redirectToGoogle']);
Route::get('auth/google/callback', [GoogleController::class, 'handleGoogleCallback']);
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

//users
Route::get('/users/create', function () {
    return view('users.create');
})->middleware(['auth'])->name('users.create');

Route::get('/users/index', function () {
    return view('users/index');
})->middleware(['auth'])->name('users.index');


Route::get('/stores/edit', function () {
    return view('stores/edit');
})->middleware(['auth'])->name('stores.edit');

Route::get('/products/parameters', function () {
    return view('/products/parameters');
})->middleware(['auth'])->name('products.parameters');


//Users
Route::get('/users/index', [UserController::class, 'index'])->name('users.index');
Route::post('/users/store', [UserController::class, 'store'])->name('users.store');

//Stores
Route::post('image-cropper/upload', [StoreController::class, 'upload'])->name('stores.imagestore');
Route::post('stores/store', [StoreController::class, 'store'])->name('stores.store');
Route::get('/stores/index', [StoreController::class, 'index'])->name('stores.index');
Route::get('/stores/create', [StoreController::class, 'create'])->name('stores.create');

//Products
Route::get('/products/parameters', [ProductController::class, 'parameters'])->name('product.parameters');
Route::post('/products/parameters/store', [ProductController::class, 'parameters_store'])->name('parameters.store');
Route::post('/products/subcategory', [ProductController::class, 'subcategory'])->name('subcategory.store');
Route::get('/products/index', [ProductController::class, 'index'])->name('product.index');
Route::get('products/create', [ProductController::class, 'create'])->name('product.create');
Route::post('/products/store', [ProductController::class, 'store'])->name('product.store');


require __DIR__.'/auth.php';
