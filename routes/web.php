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

\Illuminate\Support\Facades\Auth::routes();

Route::get('/', 'MainController@index');

Route::get('/graphs', 'MainController@graphs');

Route::get('/preferences', 'UserController@preferences');
Route::post('/preferences', 'UserController@updatePreferences');
