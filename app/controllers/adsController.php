<?php

class AdsController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /ads
	 *
	 * @return Response
	 */
	public function index()
	{
		$noti_app = AllApply::where('sirket_id','=',Auth::user()->id)->count();
		return View::make('ilan.adsInfo')->with('noti_app',$noti_app);
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /ads/create
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('ilan.ads');
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /ads
	 *
	 * @return Response
	 */
	public function store()
	{
		$input = Input::all();
		$v = Validator::make($input, Ads::$rules);

		if ($v->passes()){

		$ads = new Ads;
		$ads->wanted_pos= Input::get('position');
		$ads->sector = Input::get('sector');
		$ads->bus_area = Input::get('area');
		$ads->position = Input::get('pos');
		$ads->working_style = Input::get('style');
		$ads->exp = Input::get('exp');
		$ads->degree = Input::get('degree');
		$ads->gender = Input::get('gender');
		$ads->user_id = Auth::user()->id;
		$ads->save();

		return Redirect::to('adsInfo');
		}
		return Redirect::back()->withErrors($v);
	}
	/**
	 * Display the specified resource.
	 * GET /ads/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($user_id)
	{
		$ads = Ads::find($id);

		return View::make('ilan.preview')->with('ads',$ads);
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /ads/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$ads = Ads::find($id);
		if(is_null($ads)){
			return Redirect::route('ilan.ads');
		}
		return View::make('ilan.PreEdit')->with('ads',$ads);
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /ads/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$input = array_except(Input::all(),'_method');

		$v = Validator::make($input, Ads::$rules);

		if($v->passes()){
			Post::find($id)->update($input);
			return Redirect::route('ilan.ads');
		}
		return Redirect::back()->withErrors($v);
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /ads/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Ads::find($id)->delete();

		return Redirect::route('./');
	}


}