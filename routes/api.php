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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

//Route::resource('users', 'App\Http\Controllers\UserController');

Route::get('/users', 'App\Http\Controllers\UserController@index');
Route::post('/users/create', 'App\Http\Controllers\UserController@store');
Route::post('/users/update/{id}', 'App\Http\Controllers\UserController@update');

//Route::post("users/create", 'App\Http\Controllers\UserController\store');

//Route::name('me')->get('users/me', 'User\UserController@me');