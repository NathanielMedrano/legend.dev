<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', 'HomeController@showHome');

Route::get('/home', 'HomeController@showHome');

Route::get('/packages', 'HomeController@showPackages');

Route::get('/gallery', 'HomeController@showGallery');

Route::get('/contact', 'HomeController@showContact');

Route::resource('posts', 'PostsController');

