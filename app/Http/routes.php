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
Route::post('book/update/{id?}', ['uses' => 'BooksController@update', 'as' => 'book_edit']);

Route::get('user', 'Admin\UsersController@index');
Route::get('user/form/{id?}', 'Admin\UsersController@form');
Route::post('user/form/{id?}', ['uses' => 'Admin\UsersController@update', 'as' => 'user.update']);

Route::get('/master_page', function(){

    return view('layout.master.master');
});

Route::get('/test', function(){

    return view('test');
});

Route::get('admin', array(
    'as'    => 'dashboard',
    'uses'	=> 'Admin\DashboardController@index'
));

Route::controllers([
    'auth' => 'Auth\AuthController',
    'password' => 'Auth\PasswordController',
]);

Route::resource('users', 'Admin\UsersController');
Route::resource('admin/manuscript', 'Admin\ManuscriptsController',
		[
			'names'		=> [
					'create'	=>	'manuscript.create',
					'index'		=>	'manuscript.index',
					'store'		=>	'manuscript.store',
					'edit'		=>	'manuscript.edit',
					'update'	=>	'manuscript.update',
					'destroy'	=>	'manuscript.destroy',
					'show'		=>	'manuscript.show'
					],
			'except'	=> [
					'index',
					// 'create',
					// 'store',
					'destroy',
					'edit',
					'update',
					'show',
					''
					]
		]
	);
