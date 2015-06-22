<?php namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\UserType\Item as Item;
class ItemController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Home Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders your application's "dashboard" for users that
	| are authenticated. Of course, you are free to change or remove the
	| controller as you wish. It is just here to get your app started!
	|
	*/

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		//$this->middleware('auth');
	}

	/**
	 * Show the application dashboard to the user.
	 *
	 * @return Response
	 */
	public function newItem(Request $request)
	{		
		if ($request->input('name') == null) {
			return view('item/newitem');
		}else{
			return $this->postNewItem($request);
		}
	}
	public function postNewItem(Request $request){
		$this->validate($request, [
			'name' =>'required',
			'price'=>'required|min:0',
			'discount'=>'min:0',
			'detail'=>'required'
		]);
		$item = new Item;
		$item->name = $request->input('name');
		$item->origin_price =  $request->input('price');
		$item->discount = $request->input('discount');
		$item->salenum = 0;
		$item->storeId = 1;
		$item->itemdetail = $request->input('detail');
		$item->save();
		return view('item/newItemSuccess');			
	}

}
