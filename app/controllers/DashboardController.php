<?php

namespace app\controllers;

use \system\controllers\Controller;


/**
* 
*/
class DashboardController extends Controller
{
	public function __construct()
	{
		$this->middleware('Auth');
		if(!$this->AuthMiddleware->check()) {
			header('Location: /login');
			die;
			exit;
		}
	}
	public function home()
	{
		$userModel = new \app\models\UserModel;

		$rumorsModel = new \app\models\RumorsModel;

		$user = $userModel->getUserById((int) $_SESSION['userdata']);

		$relevantRumors = $rumorsModel->getRumorsByZip($user['zipcode']);

		// var_dump($relevantRumors);

		$data['user'] = $user;
		$data['rumors'] = $relevantRumors;

		return view('dashboard/home.tpl', $data);
	}

	
}