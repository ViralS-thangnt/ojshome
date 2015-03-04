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

Route::get('/', 'WelcomeController@index');
Route::get('home', 'HomeController@index');

Route::get('book', 'BooksController@index');
Route::get('book/form/{id?}', 'BooksController@form');
Route::post('book/update/{id?}',['uses' => 'BooksController@update', 'as' => 'book_edit']);

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);

get('/master_page', function(){
	return view('layout.master.master');
});

get('/test', function(){
	return view('test');
});