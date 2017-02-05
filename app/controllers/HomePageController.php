<?php

namespace app\controllers;

use \system\controllers\Controller;


/**
* 
*/
class HomePageController extends Controller
{
	public function index()
	{
		$rumorsModel = new \app\models\RumorsModel;

		$countModel = new \app\models\CountModel;

			
		$data['rumors'] = $rumorsModel->getRumors();

		foreach ($data['rumors'] as $key => $val) {
			$data['rumors'][$key]['count_yes'] = $countModel->getCountYesById($val['id']);
			$data['rumors'][$key]['count_no'] = $countModel->getCountNoById($val['id']);
		}
		return view('homepage/index.tpl', $data);
	}

	public function rumorForm()
	{
		return view('homepage/rumor_register_new.tpl');
	}

	public function addressDetails($zipcode)
		{
			$file = file_get_contents("http://maps.googleapis.com/maps/api/geocode/json?address=$zipcode");

			$file = json_decode($file, true);

			$data['zipcode'] = $zipcode;

			$data['state'] = $file['results'][0]['formatted_address'];

			return $data;
		}

}