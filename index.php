<?php

//require 'config/autoload.php';
// require 'bootstrap/Request.php';
require 'vendor/autoload.php';
use DreamWeb\Bootstrap\Request;
$request = new Request();
$controller = $request->getParam('controller') ?? 'page';
// construimos el nombre completo del controlador
$controller = ucfirst($controller) . 'Controller';
$controller = 'DreamWeb\\GestorTareas\Controller\\'. $controller;
// obtenemos el parámetro o asignamos un valor por defecto
$action = $request->getParam('action') ?? 'index';
// intanciamos el controlador
$controller = new $controller;
// y llamamos a la "acción"/método pasando el id si lo hay
$controller->$action($request->getParam('id')); 