<?php

use Illuminate\Http\Request;
use App\Http\Controllers\AuthController;
use Illuminate\Routing\RouteGroup;
use Tymon\JWTAuth\Http\Middleware\BaseMiddleware;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
*/

Route::group(["middleware" => "api", "prefix" => 'Users'], function () {
    // 認証が必要ないメソッド
    Route::post('register', 'Auth\RegisterController@register');
    Route::post('login', 'Auth\LoginController@login');
    Route::get('me', 'Auth\MeController@me');
    Route::post('ImageApi', 'ImageApiController@store');
        Route::group(['middleware' => ['jwt.auth']], function () {
            // 認証が必要なメソッド
            Route::post('logout', 'Auth\LogoutController@logout');
        });
    });