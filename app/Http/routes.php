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
//Homepage
Route::get('/', 'WelcomeController@index');
Route::get('home', 'HomeController@index');
//User management
Route::get('user/form/{id?}', 'Admin\UsersController@form');
Route::post('user/form/{id?}', ['uses' => 'Admin\UsersController@update', 'as' => 'user.update']);
Route::resource('user', 'Admin\UsersController', ['except' => ['create', 'edit', 'store', 'show', 'update']]);

// Dashboard
Route::get('admin', ['as'	=>	'dashboard', 'uses'	=>	'Admin\DashboardController@index']);
Route::get('admin/user', ['as'	=>	'user.dashboard', 'uses'	=>	'Admin\DashboardController@user_dashboard']);

// Manuscript
Route::get('admin/manuscript/{id?}', ['as' 	=> 	'manuscript.form', 'uses' 	=> 	'Admin\ManuscriptsController@form']);
Route::post('admin/manuscript/{id?}', ['as'	=>	'manuscript.update','uses'	=>	'Admin\ManuscriptsController@update']);
// Route::get('admin/manuscript-confirm', ['as'	=>	'manuscript.confirm', 'uses'	=> 'Admin\ManuscriptsController@confirm']);

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);