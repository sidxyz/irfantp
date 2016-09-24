<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/','PageController@index');

Route::get('/index','PageController@index');

Route::get('/mail','PageController@mail');

Route::get('/portfolio','PageController@portfolio');

Route::get('/services','PageController@services');

Route::get('/short-codes','PageController@short');

Route::get('/contact-form','PageController@contact');

Route::get('/single','PageController@single');
Route::auth();

Route::get('/home', 'HomeController@index');
