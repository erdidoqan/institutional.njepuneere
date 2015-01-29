<?php

class PageController extends BaseController {

	public function image(){
		$data['logo'] = Session::get('logo');
		$data['modal'] = (Session::get('modal') == null ? 'false' : 'true');
		$sirket = User::find(Auth::user()->id);
		return View::make('sirket.image')->with('sirket',$sirket)->with('data',$data);
	}

}