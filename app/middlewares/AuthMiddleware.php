<?php

namespace app\middlewares;

use \system\middlewares\Middleware;


/**
* 
*/
class AuthMiddleware extends Middleware
{
	public function check()
	{
		
		if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']=='true') {
			return true;

		} else {
			
			return false;
		}
	}
}