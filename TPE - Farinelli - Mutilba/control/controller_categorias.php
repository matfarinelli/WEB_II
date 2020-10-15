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

    function categorias()
    {
        $this->helper->getLoggedUserName();
        $categorias = $this->model->getTabla(); // se pide al model que nos envie los datos y guardamos en un parámetro
        $this->view->show_categorias($categorias);
    }

    function addCategoria()
    {
        $this->helper->checkLogin();
        $this->model->addCategoria(($_POST['input_categoria'])); //recibe los datos del form.
        $this->view->volverABM();
    }

    function admin_abm()
    {
        $this->helper->checkLogin();
        $categorias = $this->model->getTabla();
        $this->view->show_abm_categorias($categorias);
    }

    function borrarCategoria($params = null)
    {
        $this->helper->checkLogin();
        $id = $params[':ID'];
        $this->model_p->deleteProductoCat($id);
        $this->model->deleteCategoria($id);
        $this->view->volverABM();
    }

    function actualizarCategoria($params = null)
    {
        $this->helper->checkLogin();

        $id = $_POST['input_id'];
        $categoria = $_POST['input_categoria'];

        $this->model->actualizarCategoria($categoria, $id);
        $this->view->volverABM();
    }
}
