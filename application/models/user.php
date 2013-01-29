<?php

class User extends Eloquent 
{
	
	public static $timestamps = true;

	// public  function installedapps()
	// {
	// 	return $this->has_many_and_belongs_to('User','installedapps','user_id','app_id');
	// }

}