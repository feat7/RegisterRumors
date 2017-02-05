<?php

namespace app\controllers;

use \system\controllers\Controller;


/**
* 
*/
class AuthController extends Controller
{
	public function __construct()
	{
		$this->middleware('Auth');
	}

	public function register()
	{
		//Move to home if already logged in
		if($this->AuthMiddleware->check()) {
			header("Location: /dashboard");
			die('Already Logged in!');
		}

		if($_SERVER['REQUEST_METHOD']=='POST') {
			//Handle Post Requests

			$file = new \app\controllers\Api\AuthApiController;

			$file = $file->register();

			// $file = json_decode($file, true);

			if($file['success']=='true') {
				$_SESSION['loggedin'] = 'true';
				header("Location: /dashboard");
			}
			else {
				var_dump($file);
				die('Some error occured');
			}
			//Return JSON
		}

		else if($_SERVER['REQUEST_METHOD']=='GET') {
			//handle Get Requests
			return view('auth/register.tpl');
		}
	}

	public function login()
	{
		//Move to home if already logged in
		if($this->AuthMiddleware->check()) {
			header("Location: /dashboard");
			die('Already Logged in!');
		}

		if($_SERVER['REQUEST_METHOD']=='POST') {
			//Handle Post Requests
			$email = $this->post('email');
			$password = $this->post('password');

			$authModel = new \app\models\AuthModel;
			$hash = $authModel->getHash($email);

			if(password_verify($password, $hash)) {
				$json['success'] = 'true';

				$authModel->insertLoginData($email);
				
				$_SESSION['loggedin']='true';
				header('Location: /dashboard');
				echo 'Logged in!';

			} else {
				$json['success'] = 'false';
				echo 'Failed to login';
			}
			//Return JSON
		}

		else {
			//handle Get Requests

			return view('auth/login.tpl');
		}
	}

	public function logout()
	{
		session_destroy();
		header("Location: /");
		die('Logged Out');
	}
}