<?php

namespace app\middlewares;

use \system\middlewares\Middleware;


/**
* 
*/
class AuthMiddleware extends Middleware
{
	public function checkUser()
	{
		
		if(isset($_SESSION['userdata']->user_id) && isset($_SESSION['userdata']->password)) {
			$authModel = new \app\models\AuthModel;
			$hash = $authModel->getHashById(intval($_SESSION['userdata']->user_id));
			
			if($_SESSION['userdata']->password == $hash) {
			
				return true;
				// header('Location: /dashboard');
			}

		} else {
			
			return false;
		}
	}
}