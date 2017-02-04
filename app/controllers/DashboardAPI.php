<?php

namespace app\controllers;

use \system\controllers\Controller;


/**
* 
*/
class DashboardAPI extends Controller
{
	public function __construct()
	{
		$this->middleware('Dashboard');
		if(!$this->DashboardMiddleware->checkAdmin()) {
			$this->auth = 'false';
		} else {
			$this->auth = 'true';
		}
	}

	public function requestAPI($params)
	{ 
		$api = (isset($params['api'])) ? $params['api'] : 'default';
		switch($api) {
			case 'add-project':
				$this->addProject();
				break;
			case 'project-list':
				$this->projectsAPI();
				break;
			case 'default':
				$json['auth'] = $this->auth;
				header('Content-type: application/json');
				echo json_encode($json);
				break;
		}
	}

	public function projectsAPI()
	{
		$limit = $this->get('limit');

		$dashboardModel = new \app\models\DashboardModel;
		
		if($this->auth=='true') {
			$json['auth'] = 'true';
			$json['data'] = $dashboardModel->getProjectsList($limit);
			header('Content-type: application/json');
			echo json_encode($json);
		} else {
			$json['auth'] = 'false';
			$json['data'] = '';
			header('Content-type: application/json');
			echo json_encode($json);
		}
	}

	public function addProject()
	{
		if($this->auth == 'true') {
			$json['auth'] = 'true';
			$project_name = $this->post('project_name');
			$description = $this->post('description');
			$image = $this->post('image');

			$dashboardModel = new \app\models\DashboardModel;
			$data = ['name' => $project_name, 'description' => $description, 'image' => $image];
			if($dashboardModel->addProjectData($data)) {
				$json['success'] = 'true';
			} else {
				$json['success'] = 'false';
			}
		} else {
			$json['auth'] = 'false';
			$json['success'] = 'false';
		}

		header('Content-type: application/json');
		echo json_encode($json);
		

	}

}