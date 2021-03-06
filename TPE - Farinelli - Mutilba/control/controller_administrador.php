<?php

require_once './view/view_login.php';
require_once './model/model_login.php';
require_once './helpers/authhelper.php';
require_once './model/model_comentarios.php';

class controller_administrador
{
    private $view;
    private $model;
    private $model_comentario;
    private $helper;

    function __construct()
    {
        $this->view = new view_login();
        $this->model = new model_login();
        $this->helper = new authhelper();
        $this->model_comentario = new model_comentarios();
    }

    function show_abm_admin()
    {
        $this->helper->checkAdmin();
        $usuarios = $this->model->getUsuarios();
        $this->view->show_usuarios($usuarios);
    }

    function borrarUsuario($params = null)
    {
        $this->helper->checkAdmin();
        $id = $params[':ID'];
        $this->model_comentario->borrarComentarioPorUsuario($id);
        $this->model->borrarUsuario($id);
        $this->volverABMAdmin();
    }

    function designar_administrador($params = null)
    {
        $this->helper->checkAdmin();
        $id = $params[':ID'];
        $this->model->designar_administrador($id);
        $this->volverABMAdmin();
    }

    function volverABMAdmin()
    {
        header("Location:" . BASE_URL . "abm_admin");
    }
}
