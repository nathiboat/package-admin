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

// Get a list of user
Route::get('/users', [App\Http\Controllers\Api\UserController::class, 'index'])->name('users.list');

//Store new user

Route::post('/users', [App\Http\Controllers\Api\UserController::class, 'store'])->name('users.store');

//Update user
Route::post('/users/update', [App\Http\Controllers\Api\UserController::class, 'update'])->name('users.update');


//list of pakcagers
Route::get('/packages', [App\Http\Controllers\Api\PackageController::class, 'index'])->name('package.list');

//Store new package
Route::post('/packages', [App\Http\Controllers\Api\PackageController::class, 'store'])->name('package.store');

//Update pakcage
Route::post('/packages/update', [App\Http\Controllers\Api\PackageController::class, 'update'])->name('package.update');




