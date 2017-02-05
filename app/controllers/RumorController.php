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

			$params['rumordata'] = $this->addressDetails($params['data']['zipcode']);

			if($params['loggedin']) {
				$userModel = new \app\models\UserModel;

				$params['userdata'] = $userModel->getUserById((int) $_SESSION['userdata']);
			}

			return view('rumor/showrumor.tpl', $params);
		}

		public function addressDetails($zipcode)
		{
			$file = file_get_contents("http://maps.googleapis.com/maps/api/geocode/json?address=$zipcode");

			$file = json_decode($file, true);

			$data['zipcode'] = $zipcode;

			$data['state'] = $file['results'][0]['formatted_address'];

			return $data;
		}

		public function addYesCount($params)
		{
			$this->middleware('Auth');

			$countModel = new \app\models\CountModel;

			if(!$this->AuthMiddleware->check()) {
				//Do nothing. User Not Authenticated
			}
			else {
				//Add counts

				$data = ['rumor_id' => $params['id'], 'user_id' => (int) $_SESSION['userdata'], 'submission' => 2];

				if($countModel->insertCountData($data)) {
					echo 'Your Review added successfully!';
				}
			}
		}

		public function addNoCount($params)
		{
			$this->middleware('Auth');

			$countModel = new \app\models\CountModel;

			if(!$this->AuthMiddleware->check()) {
				//Do nothing. User Not Authenticated
			}
			else {
				//Add counts

				$data = ['rumor_id' => $params['id'], 'user_id' => (int) $_SESSION['userdata'], 'submission' => 1];

				if($countModel->insertCountData($data)) {
					echo 'Your Review added successfully!';
				}
			}
		}

}