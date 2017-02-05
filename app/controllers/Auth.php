<?php

namespace app\controllers;

use \system\controllers\Controller;


/**
* 
*/
class Auth extends Controller
{

	public function __construct()
	{
		$this->middleware('Auth');
	}

	public function register()
	{
		if($this->AuthMiddleware->checkUser()) {
			header('Location: /dashboard');
		}
		
		if($_SERVER['REQUEST_METHOD']=='POST') {
			//return json.. filter and validate.. Register if validated else show errors.

			//Get the data...
			$name = $this->post('name');
			$mobile = $this->post('mobile');
			$email = $this->post('email');
			$password = $this->post('password');
			$password_confirm = $this->post('password_confirm');

			//Validate
			$validate = new \app\libs\Validation;
			

			if($validate->validate($name, 'required|minlength=2') && $validate->validate($mobile, 'required|maxlength=15|minlength=10|unique=mobile') && $validate->validate($email, 'required|email|unique=email') && $validate->validate($password, 'required|maxlength=30|minlength=5') && $validate->validate($password_confirm, 'required|matches='.$password.'') ) {
				
				$data = ['success' => 'true', 'data' => ['name' => $name, 'mobile' => $mobile, 'email' => $email, 'password' => password_hash($password, CRYPT_BLOWFISH)] ];

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
				
				$data = ['success' => 'false', 'data' => ['name' => $name, 'mobile' => $mobile, 'email' => $email, 'password' => $password],
				'error' => $validate->showErrors()];
				$data['message'] = 'Validation error.';

			}

			// header('Content-type: application/json');
			// echo json_encode($data);

			
		}
		else {
			return view('auth/register.html');
		}

		
	}

	public function login()
	{
		if($this->AuthMiddleware->check()) {
			header('Location: /dashboard');
		}


		if($_SERVER['REQUEST_METHOD']=='POST') {
			//Authenticate
			$email = $this->post('email');
			$password = $this->post('password');

			$authModel = new \app\models\AuthModel;
			$hash = $authModel->getHash($email);

			if(password_verify($password, $hash)) {
				$json['success'] = 'true';

				$authModel->insertLoginData($email);
				
				header('Location: /dashboard');
				echo 'Logged in!';

			} else {
				$json['success'] = 'false';
				echo 'Failed to login';
			}

			

		} else {
			return view('auth/login.html');
		}
		
	}

	public function logout()
	{
		session_destroy();
		header('Location: /');
		die();
		exit;
	}
}