<?php

class AdsInfo extends \Eloquent {
	protected $fillable = array('id','com_name','logo',
								'ads_name','ref_code','languages',
								'number_of_staff','only','disabled',
								'transmit','workplace','gender',
								'job_desc','qua','rel_date','pub_time',
								'user_id','ads_id','created_at','updated_at');

	

	public static $rules = array(
		'ads_name'=>'required',
		'job_desc'=> 'required'
		);

	public function user(){
		return $this->belongsTo('User','user_id');
	}

	public function apply()
	{
		return $this->hasMany('tbl_new_apply','ads_id','ads_id');
	}
}