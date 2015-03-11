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
Route::get('book', 'BooksController@index');
//User management
Route::get('admin/user/form/{id?}', 'Admin\UsersController@form');
Route::post('admin/user/form/{id?}', ['uses' => 'Admin\UsersController@update', 'as' => 'user.update']);
Route::resource('admin/user', 'Admin\UsersController', ['except' => ['create', 'edit', 'store', 'show', 'update']]);
//Authenticate User
Route::controllers([
    'auth' => 'Auth\AuthController',
    'password' => 'Auth\PasswordController',
]);

// Dashboard
Route::get('admin', ['as'   =>  'dashboard', 'uses' =>  'Admin\DashboardController@index']);
Route::get('admin/user-dashboard', ['as'    =>  'dashboard.user',
                                    'uses'    =>  'Admin\DashboardController@userDashboard']);

// Route::post('admin/setLocale', ['as'    =>  'admin.setLocale', 'uses'   =>  'Admin\DashboardController@setLocale']);
Route::get('admin/setLocale', ['as'    =>  'admin.setLocale', 'uses'   =>  'Admin\DashboardController@setLocale']);

// Manuscript
Route::get('admin/manuscript/form/{id?}', ['as'  =>  'manuscript.form', 'uses'   =>  'Admin\ManuscriptsController@form']);
Route::post('admin/manuscript/form/{id?}', ['as' =>  'manuscript.update','uses'  =>  'Admin\ManuscriptsController@update']);

// In Review Manuscript
Route::get('admin/manuscript/in-review', ['as'  =>  'manuscript.in_review',
                                          'uses'  =>  'Admin\ManuscriptsController@in_review']);
