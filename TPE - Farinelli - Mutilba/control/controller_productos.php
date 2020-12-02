<?php

require_once './view/view_productos.php';
require_once './model/model_productos.php';
require_once './helpers/authhelper.php';
require_once './model/model_comentarios.php';
require_once './model/model_categorias.php';

class controller_productos
{
    private $view;
    private $model;
    private $model_comentarios;
    private $model_cat;
    private $helper;

    function __construct()
    {
        $this->view = new view_productos();
        $this->model = new model_productos();
        $this->model_comentarios = new model_comentarios();
        $this->model_cat = new model_categorias();
        $this->helper = new authhelper();
    }

    function home()
    {
        $this->helper->getLoggedUserName();
        $this->view->show_home();
    }

    function nosotros()
    {
        $this->helper->getLoggedUserName();
        $this->view->show_nosotros();
    }

    function contacto()
    {
        $this->helper->getLoggedUserName();
        $this->view->show_contacto();
    }

    /*
    * funcionalidades sin login
    */
    function productos()
    {
        $this->helper->getLoggedUserName();
        $frutos = $this->model->getTabla();
        $categoria = $this->model_cat->getTabla();
        $this->view->show_productos($frutos, $categoria);
    }

    function productosPorCategoria()
    {
        $this->helper->getLoggedUserName();
        $id = $_POST['input_categoria'];
        $frutos = $this->model->verCategoria($id);
        $this->view->show_productos_ordenados($frutos);
    }

    function verProducto($params = null)
    {
        $this->helper->getLoggedUserName();
        $id = $params[':ID'];
        $producto_individual = $this->model->verProducto($id);
        $comentarios = $this->model_comentarios->getComentarios($id);
        $this->view->verProducto($producto_individual, $comentarios);
    }

    /*
    *funcionalidades de admin
    */


    //vista editor
    function admin_abm()
    {
        $this->helper->checkAdmin();
        $frutos = $this->model->getTabla();
        $categoria = $this->model_cat->getTabla();
        $this->view->show_agregar($frutos, $categoria);
    }

    function addProducto()
    {
        $this->helper->checkAdmin();

        $this->model->addProducto(($_POST['input_producto']), ($_POST['input_precio_1kg']), ($_POST['input_precio_500g']), ($_POST['input_precio_250g']), ($_POST['input_categoria'])); //recibe los datos del form.
        $this->view->volverABM();
    }

    function borrarProducto($params = null)
    {
        $this->helper->checkAdmin();

        $id = $params[':ID'];
        $this->model->borrarProducto($id);
        $this->view->volverABM();
    }

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

        $this->model->actualizarProducto($producto, $descripcion, $precio_1kg, $precio_500g, $precio_250g, $categoria, $id);
        $this->view->volverABM();
    }
}
