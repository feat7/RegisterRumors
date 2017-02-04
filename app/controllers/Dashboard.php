<?php

namespace app\controllers;

use \system\controllers\Controller;


/**
* 
*/
class Dashboard extends Controller
{
	public function __construct()
	{
		$this->middleware('Auth');
		if(!$this->AuthMiddleware->checkUser()) {
			header('Location: /login');
			die;
			exit;
		}
	}
	public function home($params)
	{
		if($params['page']=='add-project') {
			$this->addProject();
		}
		else {
		$data['userdata'] = isset($_SESSION['userdata']) ? $_SESSION['userdata'] : 'guest';
		return view('dashboard/home.html', $data); }
	}

	
}