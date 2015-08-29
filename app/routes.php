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



Route::get('/', 'loginController@showWelcome');

Route::get('/index', 'loginController@remembLog');

Route::post('/login', array('uses'=>'loginController@LogIn'));

Route::get('/logout', 'loginController@LogOut');

Route::get('/inventory', 'HomeController@inventoree');

Route::get('/employees', 'HomeController@employee');

Route::get('/branches', 'HomeController@branches');

Route::get('/suppliers', 'HomeController@suppliers');

Route::get('/delivery', 'HomeController@delivery');

Route::post('/branches', array('uses'=>'HomeController@createBranch'));

Route::post('/suppliers', array('uses'=>'HomeController@createSupp'));

Route::post('/employees', array('uses'=>'HomeController@createEmp'));

Route::get('/details/{id}', 'HomeController@details');

Route::get('/order', 'HomeController@order');

Route::get('/smart', 'HomeController@smart');

Route::get('/request', function()
{
	return View::make('request');
});
