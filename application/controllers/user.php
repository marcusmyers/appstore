<?php

class User_Controller extends Base_Controller
{

	public function action_authenticate()
	{

		$username = Input::get('username');
		$password = Input::get('password').parent::$salt;



		if($username == 'admin'){
			// DB Auth
			$credentials = array(
				'username' => $username,
				'password' => $password,
				);

			var_dump($credentials);
			if( Auth::attempt($credentials)){
				return Redirect::to('dashboard/index');
			} else {
				echo "Failed to login!";
			}
		} else {
			// LDAP Auth
		}

	}

	public function action_logout()
    {
        Auth::logout();
        return Redirect::to('home');
    }
}