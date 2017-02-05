<?php


namespace app\controllers;


// error_reporting(0);
use \system\controllers\Controller;


/**
* 
*/
class RumorController extends Controller
{
	public function register()
	{
		if($_SERVER['REQUEST_METHOD']=='POST') {
			$data['name'] = $this->post('name');
		$data['email'] = $this->post('email');
		$data['subject'] = $this->post('subject');
		$data['zipcode'] = $this->post('zipcode');
		$data['message'] = $this->post('message');

		$validate = new \app\libs\Validation;

		if($validate->validate($data['name'], 'required') && $validate->validate($data['email'], 'email|required') && $validate->validate($data['subject'], 'required') && $validate->validate($data['zipcode'], 'required|minlength=6') && $validate->validate($data['message'], 'required')) {

			$rumorModel = new \app\models\RumorsModel;

			if($rumorModel->insertRumorsData($data)) {
				$json['success'] = 'true';

				//Send data to all relevent doctors
				
				$rumorModel->sendEmails();
				
				return view('rumor/success.tpl');
			}
			else {
				$json['success'] = 'false';

				// var_dump($validate);
				header("Location: /");
			}


		}



		}

		else {
			header("Location: /");
		}
		
	}
		public function showRumor($params)
		{
			$rumorsModel = new \app\models\RumorsModel;

			$params['data'] = $rumorsModel->getRumorById($params['id']);

			$this->middleware('Auth');

			$params['loggedin'] = $this->AuthMiddleware->check();

			if($params['loggedin']) {
				$userModel = new \app\models\UserModel;

				$params['userdata'] = $userModel->getUserById((int) $_SESSION['userdata']);
			}

			return view('rumor/showrumor.tpl', $params);
		}

}