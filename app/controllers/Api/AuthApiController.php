<?php

namespace app\controllers\Api;

use \system\controllers\Controller;


/**
* 
*/
class AuthApiController extends Controller
{

	public function request($params)
	{
		if($params['request']=='register')
		{
			return $this->register();
		}
	}

	public function register()
	{
		if($_SERVER['REQUEST_METHOD']=='POST') {
			//return json.. filter and validate.. Register if validated else show errors.

			//Get the data...
			$name = $this->post('name');
			$reg_id = $this->post('reg_id');
			$zipcode = $this->post('zipcode');
			$email = $this->post('email');
			$password = $this->post('password');
			$password_confirm = $this->post('password_confirm');

			//Validate
			$validate = new \app\libs\Validation;
			

			if($validate->validate($name, 'required|minlength=2') && $validate->validate($reg_id, 'required') && $validate->validate($zipcode, 'required|minlenght=6') && $validate->validate($email, 'required|email|unique=email') && $validate->validate($password, 'required|maxlength=30|minlength=5') && $validate->validate($password_confirm, 'required|matches='.$password.'') ) {
				
				$data = ['success' => 'true', 'data' => ['name' => $name, 'reg_id' => $reg_id, 'zipcode' => $zipcode, 'email' => $email, 'password' => password_hash($password, CRYPT_BLOWFISH)] ];

				//Insert to database.
				$authModel = new \app\models\AuthModel;
				
				if($authModel->insertRegistrationData($data['data'])) {
					header('Location: /dashboard');
				} else {
					$data['success'] = 'false';
					$data['message'] = 'failed to inset in database.';
				}

			}
			else {
				
				$data = ['success' => 'false', 'data' => ['name' => $name, 'reg_id' => $reg_id, 'zipcode' => $zipcode, 'email' => $email, 'password' => $password],
				'error' => $validate->showErrors()];
				$data['message'] = 'Validation error.';

			}

			// header('Content-type: application/json');
			// echo json_encode($data);

			echo json_encode($data);
		}
	}

	public function login()
	{
		
	}
}