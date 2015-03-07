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

Route::get('admin', array(
    'as'    => 'dashboard',
    'uses'	=> 'Admin\DashboardController@show'
));

Route::controllers([
    'auth' => 'Auth\AuthController',
    'password' => 'Auth\PasswordController',
]);
