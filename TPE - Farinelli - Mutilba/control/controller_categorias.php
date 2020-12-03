<?php

require_once './view/view_categorias.php';
require_once './model/model_categorias.php';
require_once './model/model_productos.php';
require_once './helpers/authhelper.php';

class controller_categorias
{
    private $view;
    private $model;
    private $model_p;

    function __construct()
    {
        $this->view = new view_categorias();
        $this->model = new model_categorias();
        $this->model_p = new model_productos();
        $this->helper = new authhelper();
    }

    // sin login
    function categorias()
    {
        $this->helper->getLoggedUserName();
        $categorias = $this->model->getTabla();
        $this->view->show_categorias($categorias);
    }

    /*
    * funcionalidades de admin
    */

    function admin_abm()
    {
        $this->helper->checkAdmin();
        $categorias = $this->model->getTabla();
        $this->view->show_abm_categorias($categorias);
    }

    function addCategoria()
    {
        $this->helper->checkAdmin();
        $nuevaCategoria = ($_POST['input_categoria']);
        if (!empty($nuevaCategoria)) {
            $this->model->addCategoria(($nuevaCategoria));
        }
        $this->view->volverABM();
    }

    function borrarCategoria($params = null)
    {
        $this->helper->checkAdmin();
        $id = $params[':ID'];
        $this->model_p->borrarProductoPorCategoria($id); // primero limpio los productos
        $this->model->borrarCategoria($id);
        $this->view->volverABM();
    }

    function actualizarCategoria($params = null)
    {
        $this->helper->checkAdmin();
        $id = $_POST['input_id'];
        $categoria = $_POST['input_categoria'];

        if (isset($id) && !empty($categoria)) {
            $this->model->actualizarCategoria($categoria, $id);
        }

        $this->view->volverABM();
    }
}
