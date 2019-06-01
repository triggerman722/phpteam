<?php

class RouteProvider {

    static function routeProvider_when($method, $route, $view, $callback) {
	$_path = $_SERVER['REQUEST_URI'];
	$_method = $_SERVER['REQUEST_METHOD'];
	if ($method!==$_method) {
		return;
	}
	if (substr($route, -1) !== "/")
		$route.="/";
	if (substr($_path, -1) !== "/")
		$_path.="/";
	$pathcomponents = explode('/', $_path);
	$routecomponents = explode('/', $route);
        $routeParams = array();

	if (count($pathcomponents)===count($routecomponents)) {
		for ($i=0;$i<count($pathcomponents);$i++) {
			if ($pathcomponents[$i]!==$routecomponents[$i] && substr($routecomponents[$i], 0, 1)!==":")
				return;
			else if ($pathcomponents[$i]!==$routecomponents[$i] && substr($routecomponents[$i], 0, 1)===":") {
				$routeParams[substr($routecomponents[$i], 1)] = $pathcomponents[$i];
			}
		}
	} else {
		return;
	}
	$content = call_user_func($callback, $routeParams);
        $rd = $_SERVER['DOCUMENT_ROOT'];
        chdir($rd);
        chdir('..');
        $vd = getcwd();
	if (is_file($vd.'/'.$view.'.php')) 
    	    require_once($vd.'/'.$view.'.php');
        die();
    }
}
?>
