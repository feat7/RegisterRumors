<?php

namespace app\routes;


class Routes
{
	public function setRoutes()
	{
		$this->routes = [
			'/' => ['uses' => 'HomePageController@index'],
			'register' => ['uses' => 'AuthController@register'],
			'login' => ['uses' => 'AuthController@login'],
			'logout' => ['uses' => 'AuthController@logout'],
			'dashboard' => ['uses' => 'DashboardController@home' ],
			'ajax' => ['uses' => 'Api\AjaxApiController@request', 'params' => ['request' => $this->getUriSegment(1)]],
			'auth-requests' => ['uses' => 'Api\AuthApiController@request', 'params' => ['request' => $this->getUriSegment(1) ] ],
			'debug' => ['uses' => 'Ajax@debug'],

			//Rumor Registration

			'rumour-registration' => ['uses' => 'HomePageController@rumorForm'],
			'register-rumor' => ['uses' => 'RumorController@register'],
			'rumor' => ['uses' => 'RumorController@showRumor', 'params' => ['id' => $this->getUriSegment(1)]],
			'count' => ['uses' => 'Api\AjaxApiController@count', 'params' => ['id' => $this->getUriSegment(1)] ],

		];

		return $this->routes;

	}

	public function getUriSegment($int=0)
	{
		if(isset(explode('/', trim($_SERVER['REQUEST_URI'], '/'))[$int]))
		{
			return explode('/', trim($_SERVER['REQUEST_URI'], '/'))[$int];
		}
		else return null;
	}


}