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

Route::get('/', function()
{
	if(Session::has('username'))
	{
	return Redirect::to('/index');
	}
	else
	return View::make('login');
});


Route::get('/inventory', function()
{
	return View::make('inventory');
});

Route::get('/index', function()
{
	if(!Session::has('username'))
	{
	return Redirect::to('/');
	}
	else
	return View::make('index');
});

Route::post('/login', 'loginController@LogIn');

Route::get('/logout', function()
{
	Session::flush();
	return Redirect::to('/');
});

Route::get('/order', function()
{
	return View::make('order');
});

Route::get('/request', function()
{
	return View::make('request');
});

Route::get('/branches', function()
{
	return View::make('branches');
});

Route::get('/employees', function()
{
	return View::make('employee');
});

Route::get('/suppliers', function()
{
	return View::make('suppliers');
});