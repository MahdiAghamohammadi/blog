<?php

use Illuminate\Support\Facades\Auth;
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

Auth::routes();
// Route::get('/logout', 'Auth\LoginController@logout');
Route::get('/', 'HomeController@index');

Route::get('/admin', 'AdminController@index')->middleware('admin');

Route::resource('post', 'PostController');

Route::get('/home', 'HomeController@index')->name('home');
