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

	public function home()
	{
		$ads_info = AdsInfo::where('user_id','=',Auth::user()->id)->orderBy('id','DESC')->paginate(5);
		$all_apply = AllApply::where('sirket_id','=',Auth::user()->id)->orderBy('id','DESC')->paginate(5);
		$noti_app = AllApply::where('sirket_id','=',Auth::user()->id)->count();

		return View::make('site.index')->with('ads_info', $ads_info)->with('all_apply',$all_apply)->with('noti_app',$noti_app);
	}
	
}
