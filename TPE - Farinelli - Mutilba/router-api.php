<?php
require_once './api/api_frutos_controller.php';


require_once 'RouterClass.php';

define("BASE_URL", 'http://'.$_SERVER["SERVER_NAME"].':'.$_SERVER["SERVER_PORT"].dirname($_SERVER["PHP_SELF"]).'/');


$resource = $_GET["resource"];


$method = $_SERVER["REQUEST_METHOD"];

$r = new Router();

// rutas

//home

$r->addRoute("comentarios", "GET", "api_frutos_controller", "getAllComentarios");
$r->addRoute("comentarios/:ID", "GET", "api_frutos_controller", "getComentarios");
$r->addRoute("comentarios/:ID", "DELETE", "api_frutos_controller", "borrarComentario");
$r->addRoute("comentarios", "POST", "api_frutos_controller", "addComentario");
$r->addRoute("comentarios/:ID", "GET", "api_frutos_controller", "getComentarioIndividual");
$r->addRoute("comentarios/:ID", "PUT", "api_frutos_controller", "actualizarComentario");


//run
$r->route($resource, $method);


