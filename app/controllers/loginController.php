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
		if($un == "admin" && $pw == "admin")
		{
			Session::put('username', '$un');
			return View::make('index');

		}
		else
			return Redirect::to('/')->with('message', 'Login Failed, USERNAME/PASSWORD Dont Exists');
	}


}
