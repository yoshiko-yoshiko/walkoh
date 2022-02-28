<?php

use Illuminate\Http\Request;

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

Route::group(["middleware" => "api", "prefix" => 'Users'], function () {
    // 認証が必要ないメソッド
    Route::post('/register', 'Auth\RegisterController@register');
    Route::post('/login', 'Auth\LoginController@login');
        Route::group(['middleware' => ['jwt.auth']], function () {
            // 認証が必要なメソッド
            Route::get('me', 'Auth\MeController@me');
        });
    });
