<?php

class loginController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */

	public function LogIn()
	{
	
		$un = Input::get('username');
		$pw = Input::get('password');
		$chk1 = Login::where('strUsername','=',Input::get('username'))->first();
		$chk2 = Login::where('strPassword','=',Input::get('password'))->first();	
		if($chk1 && $chk2)
		{

			Session::put('username', '$un');
			$id = Login::all();
			return View::make('index')->with('id',$id);

		}
		else
			return Redirect::to('/')->with('message', 'Login Failed, USERNAME/PASSWORD Dont Exists');
		
	}

	public function remembLog()
	{
		if(!Session::has('username'))
		{
		return Redirect::to('/');
		}
		else
		return View::make('index');
	}

	public function LogOut()
	{
		Session::flush();
		return Redirect::to('/');
	}

	public function showWelcome()
	{
		if(Session::has('username'))
		{
			return Redirect::to('/index');
		}
		else
			return View::make('login');
	}

	
}
