<?php

class imgUpController extends \BaseController {

	public function logo()
	{
		$input = Input::all();
		$v = Validator::make($input, User::$rules);

		if ($v->passes()){

			$adsinfo = new User;
			

				$logo = Input::file('logo');
		        //$filename = date('Y-m-d-H:i:s')."-".$image->getClientOriginalName();
		        $filename  = time() . '.' . $logo->getClientOriginalExtension();
	            $path = public_path('img/logo/' . $filename);
	            Image::make($logo->getRealPath())->save($path);
		        $adsinfo->logo = 'http://localhost/institutional.karriera/public/img/logo/'.$filename;


			$adsinfo->save();

			return Redirect::to('/');
		}
		return Redirect::back()->withErrors($v);
	}
}

