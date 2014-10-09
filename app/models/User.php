<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class User extends Eloquent implements UserInterface, RemindableInterface {

	use UserTrait, RemindableTrait;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'sirket_user';

	public static $rules = array(
		'email' => 'required|unique:sirket_user',
		'pass' => 'required' 
		);


	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = array('pass');

	public function getAuthIdentifier()
	{
		return $this->getKey();
	}

	public function getAuthPassword()
	{
		return $this->pass;
	}

	public function getReminderEmail()
	{
		return $this->email;
	}

	public function ads()
	{
		
		return $this->hasMany('Ads');
	}

}
