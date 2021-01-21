<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\api\Auth\LoginController;
use App\Http\Controllers\api\Products\ProductController;
use App\Http\Controllers\api\Orders\OrderController;
use App\Http\Controllers\api\Stores\StoreController;


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

Route::group(['prefix' => 'auth'], function () {

    Route::post('login', 'App\Http\Controllers\api\Auth\LoginController@login');
    

});

Route::group(['middleware' => 'auth:api'], function() {

    Route::get('all_users', 'App\Http\Controllers\api\Users\UserController@index');
    Route::get('/products', [ProductController::class, 'index'])->name('product');
    Route::get('/categories', [ProductController::class, 'category'])->name('category');
    Route::get('/products/{id}', [ProductController::class, 'show'])->name('product');
    Route::get('/stores', [StoreController::class, 'index'])->name('stores');

  });

