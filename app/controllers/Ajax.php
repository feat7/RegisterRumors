<?php

namespace app\controllers;

use \system\controllers\Controller;


/**
* 
*/
class Ajax extends Controller
{
	public function request($params)
	{
		if($params['element'] == 'checkUnique') {
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
	}

	
	public function debug()
	{
		$authModel = new \app\models\AuthModel;
		var_dump($authModel->getUserLevelById(7));
		
	}
}