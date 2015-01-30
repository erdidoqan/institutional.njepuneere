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
				$kimlik = array('email' => Input::get('email'), 'password' => Input::get('pass'), 'active' => 2);
				if(Auth::attempt($kimlik))
				{
					return Redirect::to('./');
				}
				else
				{
					if('active'==1)
					{
						return Redirect::back()->with('error','Email is approved, Admin checking your account.');
					}
					else
					{
						if('active'==0)
						{
							return Redirect::back()->with('error','Please, check your email then active your email.');
						}
					}

				}
			}
			return Redirect::to('SirketGiris')->withErrors($v);
		}
		public function forgot()
	    {
	        $validator = Validator::make(Input::all(), array(
	            'email' => 'required|email'
	        ));
	        
	        if($validator->fails()) {
	            
	            return  Redirect::back()
	                    ->withErrors($validator)
	                    ->withInput();
	            
	        } else {
	            
	            $user = User::where('email', '=', Input::get('email'));
	            
	            if($user->count()) {
	                
	                $user = $user->first();
	                
	                $code = str_random(60);
	                $password = str_random(10);
	                
	                $user->code = $code;
	                $user->password_temp = Hash::make($password);
	                
	                if($user->save()) {
	                    
	                    Mail::send('emails.auth.reminder', 
	                        array('link'=> URL::to('new-password', $code), 'username' => $user->username, 'password' => $password), 
	                        function($message) use ($user) {
	                            $message->to($user->email, $user->username)->subject('Your new password');
	                        }
	                    );
	                    return  Redirect::back()
	                            ->with('success', 'We have sent you a new password by email.');
	                }
	            }
	            
	        }
	        return Redirect::to('SirketGiris')->with('error', 'Could not request new password.');       
	    }

	    public function getNewPassword($code)
	    {
	        $user = User::where('code', '=', $code)->where('password_temp', '!=', '');
	        if($user->count()) {
	            
	            $user = $user->first();
	            
	            $user->pass = $user->password_temp;
	            $user->password_temp = '';
	            $user->code = '';
	            
	            if($user->save()) {
	                return Redirect::to('SirketGiris')->with('success', 'Your account has been recovered and you can sign in with your new password.');
	            }
	        }
	        
	        return Redirect::to('SirketGiris')->with('error', 'Could not request new password.');
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
				$user->active = 2;
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


	public function logo_up($id)
	{
		$sirket = User::find($id);
		$input = Input::all();
		$rules = array ('logo' => 'required|image|max:1000');
		$v = Validator::make($input,$rules);

		if($v->passes())
		{
			if(Input::hasFile('logo')){
				$logo = Input::file('logo');
		        $filename  = $sirket->com_name.'-'.$sirket->id. '.'.$logo->getClientOriginalExtension();
		        $path = public_path("/img/logo/".$filename);
	            Image::make($logo->getRealPath())->save($path);
		        $logo = 'img/logo/'.$filename;
		        $logo = User::where('id','=',$id)->update(array('logo' => $logo));

		        Session::put('modal', 'true');
		    } else {
		    	$path = Input::get('img_bckp');
		    }
	        Session::put('logo', $path);
	        return Redirect::back()->with('success', 'Company logo successfully updated.');
	    }
	    return Redirect::back()->withErrors($v);
	}

	public function crop($id)
	{
		Session::forget('modal');
		$img = Session::get('logo');
		$logo = Image::make($img);
		$logo->crop(intval(Input::get('w')), intval(Input::get('h')), intval(Input::get('x')), intval(Input::get('y')));
		
		$logo->save($img);
		return Redirect::back()->with('success', 'Company logo successfully change.');
	}

		
}
