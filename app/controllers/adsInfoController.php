<?php

class AdsInfoController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /adsinfo
	 *
	 * @return Response
	 */
	public function index()
	{
		$noti_app = AllApply::where('sirket_id','=',Auth::user()->id)->count();
		$user = Auth::user();
		return View::make('ilan.adsInfo')->with('noti_app',$noti_app)->with('user',$user);
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /adsinfo/create
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('ilan.adsInfo');
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /adsinfo
	 *
	 * @return Response
	 */
	public function store()
	{
		$input = Input::all();
		$v = Validator::make($input, AdsInfo::$rules);

		if ($v->passes()){

			$adsinfo = new AdsInfo;
			$adsinfo->com_name = Auth::user()->com_name;
			$adsinfo->logo = Auth::user()->logo;
			$adsinfo->ads_name = Input::get('ads_name');
			$adsinfo->ref_code = Input::get('ref_code');
			$adsinfo->languages = Input::get('languages');
			$adsinfo->number_of_staff = Input::get('number_of_staff');
			$adsinfo->only = Input::get('only',0);
			$adsinfo->disabled = Input::get('disabled',0);
			$adsinfo->transmit = Input::get('transmit',0);
			$adsinfo->work_place = Input::get('work_place');
			$adsinfo->gender = Input::get('gender');
			$adsinfo->job_desc = Input::get('job_desc');
			$adsinfo->qua = Input::get('qua');
			$adsinfo->rel_date = Input::get('rel_date');
			$adsinfo->pub_time = Input::get('pub_time');
			$adsinfo->user_id = Auth::user()->id;
			$adsinfo->save();

			return Redirect::to('preview');
		}
		return Redirect::back()->withErrors($v);
	}

	/**
	 * Display the specified resource.
	 * GET /adsinfo/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$adsInfo = AdsInfo::find($id);
		$ads = Ads::find($id);
		$noti_app = AllApply::where('sirket_id','=',Auth::user()->id)->count();

		return View::make('Ads.show')->with('adsInfo',$adsInfo)->with('ads',$ads)->with('noti_app',$noti_app);
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /adsinfo/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$ads = AdsInfo::find($id);
		if(is_null($ads)){
			return Redirect::route('ilan.adsInfo');
		}
		return View::make('ilan.edit2')->with('ads',$ads);
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /adsinfo/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$input = array(Input::all(),'_method');
		$v = Validator::make($input, Ads::$rules);
		if($v->passes()){
			AdsInfo::find($id)->update($input);
			return Redirect::route('ilan.adsInfo');
		}
		return Redirect::back()->withErrors($v);
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /adsinfo/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		AdsInfo::find($id)->delete();
		return Redirect::back()->withInput()->with('success', 'Group Created Successfully.');
	}

}