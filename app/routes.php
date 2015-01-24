<?php

Route::group(array('before' => 'auth'), function(){
	Route::get('/', array('as'=>'home', 'uses'=>'HomeController@home'));
	Route::get('apply', array('as'=>'apply', 'uses'=>'ApplyPageController@apply'));
	Route::get('apply/examine/{birey_id}/{ads_id}', array('as'=>'apply/examine', 'uses'=>'ApplyPageController@apply_examine'));
	Route::get('apply/examine/{birey_id}/{ads_id}/user_profile', array('as'=>'user_profile', 'uses'=>'ApplyPageController@user_profile'));
	Route::get('apply/examine/{birey_id}/{ads_id}/user_cv', array('as'=>'user_cv', 'uses'=>'ApplyPageController@user_cv'));
	Route::get('/message',"MessageController@index");
	Route::post('sendmessage/{ads_id}/{sirket_id}/{birey_id}',"MessageController@sendmessage");
	Route::get('logout', 'AuthController@logout');
	Route::resource('ads', "adsController");
	Route::resource('adsInfo', "adsInfoController");
	Route::get('Ads', function(){
		$noti_app = AllApply::where('sirket_id','=',Auth::user()->id)->count();
		return View::make('ilan.ads')->with('noti_app',$noti_app);
	});
});

Route::post('imgUp', 'AuthController@postImgUp');

Route::get('SirketGiris', 'AuthController@getSirketGiris');
Route::post('SirketGiris', 'AuthController@postSirketGiris');
Route::get('SirketKayit', 'AuthController@getSirketKayit');
Route::post('SirketKayit', 'AuthController@postSirketKayit');
Route::get('Profile', 'AuthController@getProfile');
	
Route::get('jobs', function(){
	$noti_app = AllApply::where('sirket_id','=',Auth::user()->id)->count();
	return View::make('ilan.allpost')->with('noti_app',$noti_app);
});


Route::get('preview',array('before' => 'auth', function(){
	$ads = Ads::where('user_id','=',Auth::user()->id)->orderBy('id','DESC')->take(1)->first(); 
	$adsInfo = AdsInfo::where('user_id','=', Auth::user()->id)->orderBy('id','DESC')->take(1)->first();
	$noti_app = AllApply::where('sirket_id','=',Auth::user()->id)->count(); 
	return View::make('ilan.preview',compact('ads','adsInfo'))->with('noti_app',$noti_app);
}));

Route::group(array('before' => 'auth'), function(){
	Route::get('com_info', function(){
		$noti_app = AllApply::where('sirket_id','=',Auth::user()->id)->count();
		return View::make('sirket.comInfo')->with('noti_app',$noti_app);
	});
	Route::get('ch_pass', function(){
		$noti_app = AllApply::where('sirket_id','=',Auth::user()->id)->count();
		return View::make('sirket.chpass')->with('noti_app',$noti_app);
	});
	Route::post('ch_pass', 'AuthController@postChPass');
	Route::get('support', function(){
		$noti_app = AllApply::where('sirket_id','=',Auth::user()->id)->count();
		return View::make('sirket.spprt')->with('noti_app',$noti_app);
	});
});

