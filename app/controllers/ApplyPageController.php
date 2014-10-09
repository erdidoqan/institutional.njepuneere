<?php

class ApplyPageController extends \BaseController {

	public function apply()
	{
		$all_apply = AllApply::where('sirket_id','=',Auth::user()->id)->orderBy('id','DESC')->paginate(50);
		$noti_app = AllApply::where('sirket_id','=',Auth::user()->id)->count();

		return View::make('apply.index')->with('noti_app',$noti_app)->with('all_apply',$all_apply);
	}

	public function apply_examine($birey_id)
	{
		$birey = $birey_id;
		$noti_app = AllApply::where('sirket_id','=',Auth::user()->id)->count();

		return View::make('apply.examine')->with('birey',$birey)->with('noti_app',$noti_app);
	}

	public function user_profile($birey_id)
	{
		$birey = DB::table('birey_user')->where('id','=',$birey_id)->first();
		$noti_app = AllApply::where('sirket_id','=',Auth::user()->id)->count();

		return View::make('apply.user_profile')->with('noti_app',$noti_app)->with('birey',$birey);
	}

	public function user_cv($birey_id)
	{
		$birey = DB::table('birey_user')->where('id','=',$birey_id)->first();
		$birey_cv = DB::table('tbl_new_cv')->where('user_id','=',$birey_id)->first();
		$birey_cv_exp = DB::table('tbl_cv_exp')->where('user_id','=',$birey_id)->where('cv_id','=',$birey_cv->id)->orderBy('id','DESC')->paginate(5);
		$birey_cv_edu = DB::table('tbl_cv_edu')->where('user_id','=',$birey_id)->where('cv_id','=',$birey_cv->id)->orderBy('id','DESC')->paginate(5);
		$birey_cv_intern = DB::table('tbl_cv_intern')->where('user_id','=',$birey_id)->where('cv_id','=',$birey_cv->id)->orderBy('id','DESC')->paginate(5);
		$birey_cv_foreign = DB::table('tbl_cv_foreign')->where('user_id','=',$birey_id)->where('cv_id','=',$birey_cv->id)->orderBy('id','DESC')->paginate(5);
		$noti_app = AllApply::where('sirket_id','=',Auth::user()->id)->count();

		return View::make('apply.user_cv')
			->with('noti_app',$noti_app)
			->with('birey_cv_exp',$birey_cv_exp)
			->with('birey_cv_edu',$birey_cv_edu)
			->with('birey_cv_intern',$birey_cv_intern)
			->with('birey_cv_foreign',$birey_cv_foreign)
			->with('birey',$birey);
	}
}