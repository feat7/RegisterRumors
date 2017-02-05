<?php

namespace app\controllers\Api;

use \system\controllers\Controller;


/**
* 
*/
class AjaxApiController extends Controller
{

	public function request($params)
	{
		if($params['request']=='checkunique') {
			$this->checkUnique();
		}
	}

	public function checkUnique()
	{
		$element = $this->post('element');
			$value = $this->post('value');

			$validate = new \app\libs\Validation;

			if($validate->validate($value,'unique='.$element.'|required')) {
				$json['success'] = 'true';
			} else {
				$json['success'] = 'false';
			}
			// header("Content-type: application/json");
			echo $json['success'];
	}

	public function count($params) 
	{
		$this->middleware('Auth');
		
		if(!$this->AuthMiddleware->check()) {
			$json['success'] = 'false';
		}
		else {
			$userModel = new \app\models\UserModel;

			$userdata = $userModel->getUserById((int) $_SESSION['userdata']);

			if($countModel->checkCount($userdata['user_id'])) {

			}

			else $json['success'] = 'false';
		}
	}
}