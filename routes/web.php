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

Route::get('/test', 'FrontEndController@test');

Route::get('/', 'FrontEndController@index');
Route::get('/feed', 'FrontEndController@feed');
Route::get('/profile', 'FrontEndController@profile');
Route::get('/edit-profile', 'FrontEndController@editProfile');
Route::get('/explore', 'FrontEndController@explore');
