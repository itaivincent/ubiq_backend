<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\api\Auth\LoginController;

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

  });

