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

	public function rumorForm()
	{
		return view('homepage/rumor_register_new.tpl');
	}
}