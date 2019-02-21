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

Route::get('contact', 'ContactController@showContact');
Route::get('/my-account', 'AccountController@index'); 
Route::put('/my-account/update', 'AccountController@update')->name('my-account/update');
Route::post('contact', 'ContactController@sendMail');

Route::resource('products', 'ProductController')->middleware('auth');
Route::get('/about-us', 'HomeController@about');

Auth::routes(['verify' => true]);
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
