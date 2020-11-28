<?php

require_once './view/view_login.php';
require_once './model/model_login.php';
require_once './helpers/authhelper.php';

class controller_administrador
{
    private $view;
    private $model;
    private $helper;

    function __construct()
    {
        $this->view = new view_login();
        $this->model = new model_login();
        $this->helper = new authhelper();
    }

    function show_abm_admin()
    {
        $this->helper->checkAdmin();
        $usuario = $this->model->getUsuarios();
        $this->view->show_usuarios($usuario);
    }


    function borrarUsuario($params = null)
    {
        $this->helper->checkAdmin();
        $id = $params[':ID'];
        $this->model->borrarUsuario($id);
        $this->show_abm_admin();
    }

    /*

    function actualizarProducto($params = null)
    {
        $this->helper->checkAdmin();

        $id = $_POST['input_id'];
        $producto = $_POST['input_producto'];
        $descripcion = $_POST['input_descripcion'];
        $precio_1kg = $_POST['input_precio_1kg'];
        $precio_500g = $_POST['input_precio_500g'];
        $precio_250g = $_POST['input_precio_250g'];
        $categoria = $_POST['input_categoria'];

        print_r($categoria);
        $this->model->actualizarProducto($producto, $descripcion, $precio_1kg, $precio_500g, $precio_250g, $categoria, $id);
        $this->view->volverABM();
    }

    */
}
