<?php

class Base_Controller extends Controller {

	public static $salt = 'nacs';

	public function __construct()
	{
		Asset::add('jquery', 'js/jquery-1.9.0.min.js');
		Asset::add('bootstrap-js', 'js/bootstrap.min.js');
		Asset::add('bootstrap-css', 'css/bootstrap.min.css');
		Asset::add('bootstrap-css-responsive', 'css/bootstrap-responsive.min.css');
		
		parent::__construct();

		$class = get_called_class();
		switch ($class) {
			case 'Home_Controller':
				$this->filter('before', 'noauth');
				break;
			
			case 'User_Controller':
				$this->filter('before', 'noauth')->only(array('authenticate'));
				$this->filter('before', 'auth')->only(array('logout'));
				break;

			default:
				$this->filter('before', 'auth');
				break;
		}
	}
	/**
	 * Catch-all method for requests that can't be matched.
	 *
	 * @param  string    $method
	 * @param  array     $parameters
	 * @return Response
	 */
	public function __call($method, $parameters)
	{
		return Response::error('404');
	}

}