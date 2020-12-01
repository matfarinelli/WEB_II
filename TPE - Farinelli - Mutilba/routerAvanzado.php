<?php
require_once 'control/controller_index.php';
require_once 'control/controller_productos.php';
require_once 'control/controller_nosotros.php';
require_once 'control/controller_contacto.php';
require_once 'control/controller_login.php';
require_once 'control/controller_categorias.php';
require_once 'control/controller_administrador.php';

require_once 'RouterClass.php';

// CONSTANTES PARA RUTEO
define("BASE_URL", 'http://' . $_SERVER["SERVER_NAME"] . ':' . $_SERVER["SERVER_PORT"] . dirname($_SERVER["PHP_SELF"]) . '/');
define("LOGIN", 'http://' . $_SERVER["SERVER_NAME"] . ':' . $_SERVER["SERVER_PORT"] . dirname($_SERVER["PHP_SELF"]) . '/login');
define("LOGOUT", 'http://' . $_SERVER["SERVER_NAME"] . ':' . $_SERVER["SERVER_PORT"] . dirname($_SERVER["PHP_SELF"]) . '/logout');

$r = new Router();

// rutas

//home

$r->addRoute("home", "GET", "controller_index", "home");

//login  

$r->addRoute("login", "GET", "controller_login", "show_login"); //pantalla para iniciar sesion

$r->addRoute("verificacion", "POST", "controller_login", "verificarUsuario");

$r->addRoute("logout", "GET", "controller_login", "logout");

//registracion

$r->addRoute("registrarse", "GET" , "controller_login" , "registrarse" );

$r->addRoute("input_registro", "POST" , "controller_login" , "input_registro" );


//productos con admin

$r->addRoute("abm", "GET", "controller_productos", "admin_abm"); //vista admin - ABM

$r->addRoute("add_p", "POST", "controller_productos", "addProducto"); //ejecuta funcion agregar

$r->addRoute("borrar_p/:ID", "GET", "controller_productos", "borrarProducto"); 

$r->addRoute("editar/:ID", "GET", "controller_productos", "show_form_editar");

$r->addRoute("actualizar_p", "POST", "controller_productos", "actualizarProducto");

// controller de admin

$r->addRoute("abm_admin", "GET" , "controller_administrador", "show_abm_admin" );

$r->addRoute("borrar_u/:ID", "GET", "controller_administrador", "borrarUsuario"); 

$r->addRoute("editar_u/:ID", "GET", "controller_administrador", "designar_administrador"); 

// sin login

$r->addRoute("productos", "GET", "controller_productos", "productos"); //tabla sin form

$r->addRoute("ver/:ID", "GET", "controller_productos", "verProducto");

$r->addRoute("verCategoria", "GET", "controller_categorias", "categorias");

$r->addRoute("verProductoPorCategoria", "POST", "controller_productos", "productosPorCategoria");

//categorias

$r->addRoute("abm_categorias", "GET", "controller_categorias", "admin_abm"); //vista admin - ABM

$r->addRoute("add_c", "POST", "controller_categorias", "addCategoria"); //ejecuta funcion agregar

$r->addRoute("borrar_c/:ID", "GET", "controller_categorias", "borrarCategoria"); // VER POR INYECTION

$r->addRoute("actualizar_c", "POST", "controller_categorias", "actualizarCategoria");

//$r->addRoute("actualizar/:ID", "GET", "controller_productos", "actualizarProducto");

//nosotros
$r->addRoute("nosotros", "GET", "controller_nosotros", "nosotros");

//contacto
$r->addRoute("contacto", "GET", "controller_contacto", "contacto");

//comentarios



$r->addRoute("borrar_comentario/:ID", "GET", "controller_productos", "borrarComentario");
$r->addRoute("eliminar_comentarios", "POST", "controller_productos", "eliminarComentario");


//run
$r->route($_GET['action'], $_SERVER['REQUEST_METHOD']);


