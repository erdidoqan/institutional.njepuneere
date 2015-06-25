<?php
	class MessageController extends BaseController {
		
		public function index()
		{
			$all_apply = AllApply::where('sirket_id','=',Auth::user()->id)->orderBy('id','DESC')->paginate(50);
			$noti_app = AllApply::where('sirket_id','=',Auth::user()->id)->count();
			$user = Auth::user();

			$message = Message::where('sirket_id','=',Auth::user()->id)->orderBy('id','DESC')->paginate(20);

			return View::make('message.message')
			->with('message',$message)
			->with('noti_app',$noti_app)
			->with('user',$user)
			->with('all_apply',$all_apply);
		}

		public function sendmessage($ads_id, $sirket_id, $birey_id)
		{
			$input = Input::all();
			$v = Validator::make($input, Message::$rules);
			if($v->passes())
			{
				$message = new Message;
				$message->ads_id = $ads_id;
				$message->sirket_id = $sirket_id;
				$message->birey_id = $birey_id;
				$message->com_name = Input::get('com_name');
				$message->ads_name = Input::get('ads_name');
				$message->message = Input::get('message');
				$message->save();

				return Redirect::back();
			}
			return Redirect::back()->withErrors($v);
		}
	}