<?php

class Router
{
	private $request;

	public function __construct($request)
	{
		$this->request = $request;
	}

	public function get($route, $file)
	{

		$uri = rtrim($route, "/" );

		$uri = explode("/", $uri);

		if($uri[0] == trim($route, "/"))
		{

			array_shift($uri);
			$args = $uri;

			require $file . '.php';

		}

	}
	
}

?>