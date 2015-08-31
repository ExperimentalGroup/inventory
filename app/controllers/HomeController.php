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
		$inventory = DB::table('tblInventory')
		->join('tblProducts', function($join)
		{
			$join->on('tblInventory.strProdID','=','tblProducts.strProdID');
		})->get();
		
		return View::make('inventory')->with('inventory', $inventory);
	}

	public function branches()
	{
		$ids = DB::table('tblBranches')
			->select('strBrchID')
			->orderBy('updated_at', 'desc')
			->orderBy('strBrchID', 'desc')
			->take(1)
			->get();

		$ID = $ids["0"]->strBrchID;
		
		$arrID = str_split($ID);

		$new = "";
		$somenew = "";
		$arrNew = [];
		$boolAdd = TRUE;

		for($ctr = count($arrID) - 1; $ctr >= 0; $ctr--)
		{
			$new = $arrID[$ctr];

			if($boolAdd)
			{

				if(is_numeric($new) || $new == '0')
				{
					if($new == '9')
					{
						$new = '0';
						$arrNew[$ctr] = $new;
					}
					else
					{
						$new = $new + 1;
						$arrNew[$ctr] = $new;
						$boolAdd = FALSE;
					}//else
				}//if(is_numeric($new))
				else
				{
					$arrNew[$ctr] = $new;
				}//else
			}//if ($boolAdd)
			
			$arrNew[$ctr] = $new;
		}//for

		for($ctr2 = 0; $ctr2 < count($arrID); $ctr2++)
		{
			$somenew = $somenew . $arrNew[$ctr2] ;
		}

		// Get all products from the database

		$branches = Branch::all();

		return View::make('branches')->with('branches', $branches)->with('somenew', $somenew);
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

	public function createBranch()
	{
		$branch = Branch::create(array(
			'strBrchID' => Input::get('brnchID'),
			'strBrchName' => Input::get('brnchName'),
			'strBrchAddress' => Input::get('brnchAdd')
		));
		$branch->save();
		return Redirect::to('/branches');
	}

	public function createSupp()
	{
		$suppliers = Supplier::create(array(
			'strSuppCompanyName' => Input::get('compName'),
			'strSuppOwnerLName' => Input::get('suppLName'),
			'strSuppOwnerFName' => Input::get('suppFName'),
			'strSuppContactNo' => Input::get('contNumb'),
			'strSuppAddress' => Input::get('suppAdd')
		));
		//$suppliers->save();
		return Redirect::to('/suppliers');
	}

	public function createEmp()
	{
		$employees = Employee::create(array(
			'strEmpID' => Input::get('empID'),
			'strEmpFName' => Input::get('empfName'),
			'strEmpLName' => Input::get('emplName'),
			'strEmpStatus' => Input::get('empStatus'),
			'strEmpAddress' => Input::get('empAdd'),
			'strEmpBrchID' => Input::get('empBrnch'),
			'strEmpRoleID' => Input::get('empRole')
		));
		$employees->save();
		return Redirect::to('/employees');
	}

	public function order()
	{
		// Get all products from the database
		$jt = DB::table('tblOrders')
		->join('tblSuppliers', function($join)
		{
			$join->on('tblOrders.strSupplID','=','tblSuppliers.strSuppID');
		})
		->join('tblEmployees', function($join2)
		{
			$join2->on('tblOrders.strPlacedBy','=','tblEmployees.strEmpID');
		})
		->join('tblOrdNotes',function($join3)
		{
			$join3->on('tblOrdNotes.strOrdersID','=','tblOrders.strOrdersID');
		})
		->get();

		return View::make('order')->with('jt', $jt);

	}

	public function details()
	{
		$details = DB::table('tblOrderedProducts')
        ->join('tblOrders', function($join)
        {
            $join->on('tblOrderedProducts.strOPOrdersID', '=', 'tblOrders.strOrdersID')
                 ->where('tblOrders.strOrdersID', '=','orderid');
        })
        ->join('tblProducts', function($join2)
        {
        	$join2->on('tblOrderedProducts.strOPProdID','=','tblProducts.strProdID');
        })
        ->get();

		return View::make('details')->with('details', $details);
	}

	public function smart()
	{
		//$ID ="emp0111";

		//Retriving lastest ID from the db
		$ids = DB::table('tblBranches')
			->select('strBrchID')
			//->orderBy('updated_at', 'desc')
			->orderBy('strBrchID', 'desc')
			->take(1)
			->get();

		$ID = $ids["0"]->strBrchID;

		print_r("Recent ID retrieved from database: " . $ID);
		
		$arrID = str_split($ID);

		echo "<br />";
			echo "To Array: ";
		echo "<pre>";
			print_r($arrID);
		echo "</pre>";

		$new = "";
		$somenew = "";
		$arrNew = [];
		$boolAdd = TRUE;

		for($ctr = count($arrID) - 1; $ctr >= 0; $ctr--)
		{
			$new = $arrID[$ctr];

			if($boolAdd)
			{

				if(is_numeric($new) || $new == '0')
				{
					if($new == '9')
					{
						$new = '0';
						$arrNew[$ctr] = $new;
					}
					else
					{
						$new = $new + 1;
						$arrNew[$ctr] = $new;
						$boolAdd = FALSE;
					}//else
				}//if(is_numeric($new))
				else
				{
					$arrNew[$ctr] = $new;
				}//else
			}//if ($boolAdd)
			
			$arrNew[$ctr] = $new;
		}//for

		for($ctr2 = 0; $ctr2 < count($arrID); $ctr2++)
		{
			$somenew = $somenew . $arrNew[$ctr2] ;
		}

		echo "<br />";
			print_r("Newly created ID : ");
		echo "<pre>";
			print_r($somenew);
		echo "</pre>";
	}

}
