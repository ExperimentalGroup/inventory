<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function employee()
	{
		// Get all products from the database
		$employees = Employee::all();

		return View::make('employee')->with ('employees', $employees);
	}

	public function inventoree()
	{
		// Get all products from the database
		$inventory = Inventory::all();
		//$products = Product::all();
		
		return View::make('inventory')->with('inventory', $inventory);
	}

	public function branches()
	{
		// Get all products from the database
		$branches = Branch::all();

		return View::make('branches')->with('branches', $branches);
	}

	public function suppliers()
	{
		// Get all products from the database
		$suppliers = Supplier::all();

		return View::make('suppliers')->with('suppliers', $suppliers);
	}

	public function delivery()
	{
		// Get all products from the database
		//$suppliers = Supplier::all();

		return View::make('delivery');
	}
}
