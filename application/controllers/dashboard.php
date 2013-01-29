<?php

class Dashboard_Controller extends Base_Controller
{
	public function action_index()
	{
		$userdata = Auth::user();
		return View::make('dashboard.index', array('user'=>$userdata));
	}
}