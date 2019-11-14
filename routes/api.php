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

Route::post('/login', 'AuthenticationController@login')->name('login');

Route::middleware('auth:api')->group(function () {
    Route::get('/logout', 'AuthenticationController@logout')->name('logout');
    Route::get('/documents', 'DocumentController@index');
    Route::get('/documents/{document}', 'DocumentController@show')->name('documents.show');
});

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

// Route::('')
