<?php

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

use App\Document;
use App\Http\Resources\DocumentResource;
use App\User;
use App\Http\Resources\UserResource;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/users', function () {
    return UserResource::collection(User::all());
});
Route::get('/documents', 'DocumentController@index');
Route::get('/documents/{document}', 'DocumentController@show')->name('documents.show');