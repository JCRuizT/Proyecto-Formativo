<?php
require_once 'models/database.php';
$controller = 'usuario';
$dev = false; // true: para modo desarrollo
// false: para modo produccion

if (!ISSET($_REQUEST['ctrl'])) {
	require_once "controllers/$controller.controller.php";
	$controller = ucwords($controller) . 'Controller'; // -->  UsuarioController
	$controller = new $controller;
	$controller->Index();
} else {
	$controller = strtolower($_REQUEST['ctrl']);
	$accion = ucwords(strtolower(ISSET($_REQUEST['acti']) ? $_REQUEST['acti'] : 'Index'));

	if (!$dev) {
		if (file_exists("controllers/$controller.controller.php")) {

			require_once "controllers/$controller.controller.php";
		} else {

			header("location: ?ctrl=error404");
		}
	} else {
		require_once "controllers/$controller.controller.php";
	}
	$controller = ucwords($controller) . 'Controller';
	$c = $controller;
	$controller = new $controller;

	if (!$dev) {
		if (method_exists($c, $accion) && is_callable(array($c, $accion))) {
			call_user_func(array($controller, $accion));
		} else {
			header("location: ?ctrl=error404");
		}
	} else {
		call_user_func(array($controller, $accion));
	}
}
?>