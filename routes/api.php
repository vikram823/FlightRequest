<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:sanctum')->get('/user', function (Req $req) {
    return $req->user();
});

#Request Api Routes
Route::get('request', [App\Http\Controllers\RequestController::class, 'form']);
Route::post('request', [App\Http\Controllers\RequestController::class, 'store']);
Route::get('request/{id}', [App\Http\Controllers\RequestController::class, 'show']);
Route::get('allrequest', [App\Http\Controllers\RequestController::class, 'index']);


#Login Routes
Route::post('login', [App\Http\Controllers\AuthenticationController::class, 'login']);
Route::get('login', [App\Http\Controllers\AuthenticationController::class, 'form']);

#Registration Routes
Route::post('register', [App\Http\Controllers\Auth\RegisterController::class,'register']);