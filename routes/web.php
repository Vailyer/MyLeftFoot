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

Route::get('/', 'HomeController@home');
Route::get('getting-started', 'HomeController@gettingStarted');
Route::get('/logout', 'Auth\LoginController@logout');

Route::get('users/{user}',  ['as' => 'users.edit', 'uses' => 'UserController@edit']);
Route::patch('users/{user}/update',  ['as' => 'users.update', 'uses' => 'UserController@update']);

Route::get('contact', 'ContactController@showContact');
Route::post('contact', 'ContactController@sendMail');

Route::resource('products', 'ProductController');

Auth::routes(['verify' => true]);

