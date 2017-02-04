<?php

namespace app\controllers;

use \system\controllers\Controller;


/**
* 
*/
class Welcome extends Controller
{
	public function welcomeToSurface()
	{
		$data['userdata'] = isset($_SESSION['userdata']) ? $_SESSION['userdata'] : 'guest';

		return view('welcome.html', $data);
	}
}