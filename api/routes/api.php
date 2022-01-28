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
Route::Group(['middleware' => 'api','prefix' => 'User'], function ($router){
  Route::post('/login', [AuthController::class,'login']);
  Route::post('/logout', [AuthController::class, 'logout']);
  Route::post('/refresh', [AuthController::class, 'refresh']);
  Route::get('/me', [AuthController::class, 'me']);
});

Route::get("/", function () {
  return "aaaaa";
});
