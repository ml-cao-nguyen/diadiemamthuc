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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::resource('/', 'Controller\HomeController');
Route::get('/search', 'Controller\HomeController@search')->name('search');
Route::resource('/user', 'Controller\UserController');
Route::resource('/post', 'Controller\PostController');
Route::resource('/category', 'Controller\CategoryController');

Route::get('login', 'LoginController@index');
