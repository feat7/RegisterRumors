<?php

namespace app\middlewares;

use \system\middlewares\Middleware;


/**
* 
*/
class DashboardMiddleware extends Middleware
{
	public function checkAdmin()
	{
		
		if(isset($_SESSION['userdata']->user_id) && isset($_SESSION['userdata']->password)) {
			$authModel = new \app\models\AuthModel;
			$hash = $authModel->getHashById(intval($_SESSION['userdata']->user_id));
			$userlevel = $authModel->getUserLevelById(intval($_SESSION['userdata']->user_id));
			
			if($_SESSION['userdata']->password == $hash && $userlevel == '3') {
			
				return true;
				// header('Location: /dashboard');
			}

		} else {
			
			return false;
		}
	}
}