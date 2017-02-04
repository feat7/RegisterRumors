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
		return view('homepage/index.tpl');
	}
}