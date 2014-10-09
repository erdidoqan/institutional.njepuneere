<?php

class ApplyAds extends \Eloquent {
	
	public function apply()
	{
		return $this->hasMany('ads_id');
	}
}