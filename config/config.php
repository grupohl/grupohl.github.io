<?php
	declare(strict_types = 1);
	require_once('../config/routes.php');

	if(isset($_GET["url"])){
		$urlValues = array_filter(explode("/",$_GET["url"]), 
			function($value){
				return $value !== '';
			}
		);
	}else{
		require_once('../view/home.php');
		require_once('../view/headerIndex.php');
		require_once('../view/footer.php');
	};
	if(isset($urlValues)){
		foreach ($urlValues as $url){
			if(in_array($url, $routesName)){
				require_once($routesDir[array_search($url, $routesName)]);
			}else{
				die(header("Location: https://google.com"));
			};
		};
	};