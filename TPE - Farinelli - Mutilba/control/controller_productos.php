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

    // html extras
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

    //filtro
    function filtrar()
    {

        $producto = $_GET['input_filtro_producto'];
        $descripcion = $_GET['input_filtro_descripcion'];
        $precio = $_GET['input_filtro_precio'];

        if (empty($precio)) {
            $precio = 90000;
        }

        $precio_kilo = $precio;
        $precio_medio = $precio;
        $precio_cuarto = $precio;

        $resultados = $this->model->filtrar($producto, $descripcion, $precio_kilo, $precio_medio, $precio_cuarto);
        $resultados = $this->view->show_productos_ordenados($resultados);
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

        $producto = $_POST['input_producto'];
        $precio_1kg = $_POST['input_precio_1kg'];
        $precio_500g = $_POST['input_precio_500g'];
        $precio_250g = $_POST['input_precio_250g'];
        $categoria = $_POST['input_categoria'];

        if (
            !empty($producto) &&
            !empty($precio_1kg) &&
            !empty($precio_500g) &&
            !empty($precio_250g) &&
            !empty($categoria)
        ) {
            $this->model->addProducto(($producto), ($precio_1kg), ($precio_500g), ($precio_250g), ($categoria));
        }
        $this->volverABM();
    }

    function borrarProducto($params = null)
    {
        $this->helper->checkAdmin();
        $id = $params[':ID'];
        $this->model->borrarProducto($id);
        $this->volverABM();
    }

    function actualizarProducto($params = null)
    {
        // hablar con Juan. Al ser post, no se deberia poder inyectar..?

        $this->helper->checkAdmin();

        $id = $_POST['input_id'];
        $producto = $_POST['input_producto'];
        $descripcion = $_POST['input_descripcion'];
        $precio_1kg = $_POST['input_precio_1kg'];
        $precio_500g = $_POST['input_precio_500g'];
        $precio_250g = $_POST['input_precio_250g'];
        $categoria = $_POST['input_categoria'];

        if (
            !empty($id) &&
            !empty($producto) &&
            !empty($precio_1kg) &&
            !empty($precio_500g) &&
            !empty($precio_250g) &&
            !empty($categoria)
        ) {
            $this->model->actualizarProducto($producto, $descripcion, $precio_1kg, $precio_500g, $precio_250g, $categoria, $id);
            // si no esta todo completo, el producto no se actualiza. No van datos vacios al a DDBB, salvo los permitidos
        }
        $this->volverABM();
    }

    function volverABM()
    {
        header("Location:" . BASE_URL . "abm");
    }
}
