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

    Route::group(['middleware' => 'api','prefix' => 'Users'], function ($router) {
    Route::get('/login', [AuthController::class, 'login']);
    Route::post('/login', [AuthController::class, 'login']);
    Route::get('/logout', [AuthController::class, 'login']);
    Route::post('/logout', [AuthController::class, 'logout']);
    Route::get('/refresh', [AuthController::class, 'login']);
    Route::post('/refresh', [AuthController::class, 'refresh']);
    Route::get('/me', [AuthController::class, 'login']);
    Route::get('/me', [AuthController::class, 'me']);
});