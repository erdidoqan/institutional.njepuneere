<?php
	class AuthController extends BaseController {
		
		public function logout()
		{

			Auth::logout();
			return Redirect::to('./');
		}
		public function getSirketGiris()
		{
			return View::make('sirket.giris');
		}
		public function postSirketGiris()
		{
			$input = Input::all();
			$rules = array('email' => 'required', 'pass' => 'required');
			$v = Validator::make($input, $rules);
			if($v->passes())
			{
				$kimlik = array('email' => Input::get('email'), 'password' => Input::get('pass'));
				if(Auth::attempt($kimlik)){
					return Redirect::to('./');
				} else {
					return Redirect::to('SirketGiris');
				}
			}
			return Redirect::to('SirketGiris')->withErrors($v);
		}
		public function getSirketKayit()
		{
			return View::make('sirket.kayit');
		}
		
		public function postSirketKayit()
		{
			$input = Input::all();
			$rules = array ('name' => 'required',
							'sname' => 'required',
							'email'=> 'required|unique:sirket_user|email',
							'pass' => 'required');
			$v = Validator::make($input,$rules);

			if($v->passes())
			{
				$sirket_user = new User;
				$sirket_user->name = Input::get('name');
				$sirket_user->sname = Input::get('sname');
				$sirket_user->birthday = Hash::make(Input::get('birthday'));
				$sirket_user->phone = Input::get('phone');
				$sirket_user->email = Input::get('email');
				$sirket_user->pass = Hash::make(Input::get('pass'));
				$sirket_user->com_name = Input::get('com_name');
				$sirket_user->com_nipt = Input::get('com_nipt');
				$sirket_user->com_sector = Input::get('com_sector');
				$sirket_user->nr_emp = Input::get('nr_emp');
				$sirket_user->com_add = Input::get('com_add');
				$sirket_user->zip_code = Input::get('zip_code');
				$sirket_user->country = Input::get('country');
				$sirket_user->city = Input::get('city');
				$sirket_user->web_add = Input::get('web_add');
				$sirket_user->fax = Input::get('fax');
				$sirket_user->save();

				return Redirect::to('SirketGiris')->with('success', 'the company was created successfully...');
			}
			return Redirect::to('SirketKayit')->withErrors($v);

		}
		public function getadsInfo()
		{
			return View::make('ilan.adsInfo');
		}

		public function postChPass()
			{																												
				$input = Input::all();
					$rules = array ('pass' => 'required');
					$v = Validator::make($input,$rules);

					if($v->passes())
					{
						
						$ch_pass = Hash::make(Input::get('pass'));
				      
				        $ch_pass = User::where('id', '=', Auth::user()->id)->update(array('pass' => $ch_pass));
				        Session::flash('success', 'Your password has been changed!');
				        return Redirect::to('ch_pass');
				    }
				    return Redirect::back()->withErrors($v);
					
			}

			public function postImgUp()
			{																												
				$input = Input::all();
					$rules = array ('logo' => 'required|image|max:1000');
					$v = Validator::make($input,$rules);

					if($v->passes())
					{
						
						$logo = Input::file('logo');
				        //$filename = date('Y-m-d-H:i:s')."-".$image->getClientOriginalName();
				        $filename  = time() . '.' . $logo->getClientOriginalName();
			            $path = public_path('img/logo/' . $filename);
			            Image::make($logo->getRealPath())->resizeCanvas(10, -10, 'center', true)->save($path);
				        $logo = 'img/logo/'.$filename;
				        $logo = User::where('id', '=', Auth::user()->id)->update(array('logo' => $logo));

				        return Redirect::to('/');
				    }
				    return Redirect::back()->withErrors($v);
					
			}	
			public function postUpdate($id)
				{
					$input = array_except(Input::all(), '_method');

					$v = Validator::make($input, Post::$rules);

					if($v->passes())
					{
						Post::find($id)->update($input);
						return Redirect::route('posts.index');
					}

					return Redirect::back()->withErrors($v);
				}



		
	}
