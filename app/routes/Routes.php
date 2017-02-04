<?php

namespace app\routes;


class Routes
{
	public function setRoutes()
	{
		$this->routes = [
			'/' => ['uses' => 'HomePageController@index'],
			'register' => ['uses' => 'Auth@register'],
			'login' => ['uses' => 'Auth@login'],
			'logout' => ['uses' => 'Auth@logout'],
			'dashboard' => ['uses' => 'Dashboard@home', 'params' => ['page' => $this->getUriSegment(1)] ],
			'ajax' => ['uses' => 'Ajax@request', 'params' => ['element' => $this->getUriSegment(1)]],
			'dashboard-api' => ['uses' => 'DashboardAPI@requestAPI', 'params' => ['api' => $this->getUriSegment(1)] ],
			'debug' => ['uses' => 'Ajax@debug'],

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