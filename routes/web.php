<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', [\App\Http\Controllers\UserController::class, 'viewCrud'] );
Route::post('/insert', [\App\Http\Controllers\UserController::class, 'insert'] );
Route::get('/delete/{user}', [\App\Http\Controllers\UserController::class, 'delete'] );
Route::post('/update', [\App\Http\Controllers\UserController::class, 'update'] );
