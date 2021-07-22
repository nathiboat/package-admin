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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/users', [App\Http\Controllers\Api\UserController::class, 'index'])->name('users.list');

Route::post('/users', [App\Http\Controllers\Api\UserController::class, 'store'])->name('users.store');

Route::post('/users/update', [App\Http\Controllers\Api\UserController::class, 'update'])->name('users.update');


