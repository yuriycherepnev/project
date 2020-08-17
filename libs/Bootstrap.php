<?php
$url = $_GET['url'];
$url = explode('/', $url);
require 'controllers/main.php';
$controller = new Main;

if (empty($url[0])) {
	$controller->loadModel('main');
    $controller->home();
} else {
	if (method_exists($controller, $url[0])) {
        $controller->loadModel('main');
		$controller->{$url[0]}();
            //$controller->loadModel($url[0]);     
		} else {
			$controller->loadModel('main');
            $controller->home();
	}
}
?>