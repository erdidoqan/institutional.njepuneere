<?php

class PageController extends BaseController {

	public function image(){
		$data['logo'] = Session::get('logo');
		$data['modal'] = (Session::get('modal') == null ? 'false' : 'true');
		$sirket = User::find(Auth::user()->id);
		return View::make('sirket.image')->with('sirket',$sirket)->with('data',$data);
	}

	public function upallads(){
		$user = User::where('id','=',Auth::user()->id)->first();
		$logo = $user->logo;

		$logo = AdsInfo::where('user_id','=',Auth::user()->id)->update(array('logo' => $logo));

		return Redirect::back()->with('success', 'All ads change logos.');
	}

}