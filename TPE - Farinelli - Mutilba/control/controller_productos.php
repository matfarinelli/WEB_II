<?php

require_once './view/view_productos.php';
require_once './model/model_productos.php';
require_once './helpers/authhelper.php';
require_once './model/model_comentarios.php';
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

    function productos()
    {
        $this->helper->getLoggedUserName();
        $frutos = $this->model->getTabla();
        $categoria = $this->model_cat->getTabla(); // se pide al model que nos envie los datos y guardamos en un parámetro
        $this->view->show_productos($frutos, $categoria);
    }

    function productosPorCategoria()
    {
        $this->helper->getLoggedUserName();
        $id = $_POST['input_categoria'];

        $frutos = $this->model->verCategoria($id);
        // se pide al model que nos envie los datos y guardamos en un parámetro
        $this->view->show_productos_ordenados($frutos);
    }

    function verProducto($params = null)
    {
        $this->helper->getLoggedUserName();
        $id = $params[':ID'];
        $producto_individual = $this->model->verProducto($id);
        //$comentarios = $this->model_comentarios->getComentarios();
        $comentarios = $this->model_comentarios->getComentarios($id);
        //print_r($comentarios);
        //die();
        $this->view->verProducto($producto_individual, $comentarios);
    }


    function addProducto()
    {
        $this->helper->checkAdmin();

        $this->model->addProducto(($_POST['input_producto']), ($_POST['input_precio_1kg']), isset($_POST['input_precio_500g']), ($_POST['input_precio_250g']), ($_POST['input_categoria'])); //recibe los datos del form.

        $this->view->volverABM();
    }

    function borrarProducto($params = null)
    {
        $this->helper->checkAdmin();
        $id = $params[':ID'];
        $this->model->deleteProducto($id);
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

        print_r($categoria);
        $this->model->actualizarProducto($producto, $descripcion, $precio_1kg, $precio_500g, $precio_250g, $categoria, $id);
        $this->view->volverABM();
    }


    //ok - vista editor
    function admin_abm()
    {
        $this->helper->checkAdmin();
        $frutos = $this->model->getTabla();
        $categoria = $this->model_cat->getTabla();
        $this->view->show_agregar($frutos, $categoria);
    }

    function addComentarios()
    {
        $this->helper->checkLogin();

        $comentario = ($_POST['comentarios']);
        $puntaje = ($_POST['puntaje']);
        $id_user = ($_SESSION['ID_USUARIO']);
        $id_producto = ($_POST['id_producto']);

        /*
        echo $comentario;
        echo $puntaje;
        echo $id_user;
        echo $id_producto;
        */

        $this->model_comentarios->addComentario($comentario, $puntaje, $id_user, $id_producto); //recibe los datos del form.

        $producto_individual = $this->model->verProducto($id_producto);
        $comentarios = $this->model_comentarios->getComentarios($id_producto);
        //$comentarios = $this->model_comentarios->getComentarios();
        $this->view->verProducto($producto_individual, $comentarios);
    }


    function borrarComentario($params = null)
    {
        $this->helper->checkAdmin();

        $id_comentario = $params[':ID'];
        $this->model_comentarios->borrarComentario($id_comentario);

        //  $producto_individual = $this->model->verProducto($id);
        //  $comentarios = $this->model_comentarios->getComentarios($id);
        //  $this->view->verProducto($producto_individual, $comentarios);
    }
}
