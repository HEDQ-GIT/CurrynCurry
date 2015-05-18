<?php namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Dish;
use App\Http\DishNum;

class WelcomeController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Welcome Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders the "marketing page" for the application and
	| is configured to only allow guests. Like most of the other sample
	| controllers, you are free to modify or remove it as you desire.
	|
	*/

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
//	public function __construct()
//	{
//		$this->middleware('guest');
//	}

	/**
	 * Show the application welcome screen to the user.
	 *
	 * @return Response
	 */
	public function index()
	{
		return view('welcome.index');
	}

	public function menu()
	{
		$dishes = Dish::all();
		return view('welcome.menu', compact('dishes'));
	}

	public function addDish(Request $request)
	{
		$dishId = $request->get('dishId');
		Session::push('dishIds', $dishId);
		return response()->json($dishId);
	}

	public function removeDish(Request $request)
	{
		$dishId = $request->get('dishId');
		while ($key = array_search($dishId, Session::get('dishIds')))
		{
			Session::forget('dishIds.'.$key);
		}
		return response()->json($dishId);
	}

	public function clear()
	{
		Session::flush();
	}

	public function all()
	{
		dd(Session::get('dishIds'));
	}

	public function order()
	{
		$dishes = array();
		$data = array_count_values(Session::get('dishIds'));
		foreach ($data as $dishId => $count)
		{
			$dn = new DishNum();
			$dish = Dish::find($dishId);
			$dn->dish = $dish;
			$dn->count = $count;
			$dishes[] = $dn;
		}
		return view('welcome.order', compact('dishes'));
	}

	public function contact()
	{
		return view('welcome.contact');
	}
}
