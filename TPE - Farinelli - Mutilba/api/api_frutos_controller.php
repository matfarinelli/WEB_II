<?php

require_once './api/api_view.php';
require_once './model/model_comentarios.php';


class api_frutos_controller
{
    private $view;
    private $model;
    private $data;

    function __construct()
    {
        $this->view = new api_view();
        $this->model = new model_comentarios();
        $this->data = file_get_contents("php://input");
    }

    private function getData()
    {
        return json_decode($this->data);
    }



    function getAllComentarios()
    {

        $comentarios = $this->model->getAllComentarios();

        if ($comentarios) {
            $this->view->response($comentarios, 200);
        } else {
            $this->view->response("No se pueden obtener comentarios", 404);
        }
    }

    function getComentarios($params = null)
    {
        $id = $params[':ID'];
        $comentarios = $this->model->getComentarios($id);

        if ($comentarios) {
            $this->view->response($comentarios, 200);
        } else {
            $this->view->response($comentarios, 404);
        }
    }
    function getComentarioIndividual($params = null)
    {
        $id = $params[':ID'];
        $comentarios = $this->model->getComentarioIndividual($id);

        if ($comentarios) {
            $this->view->response($comentarios, 200);
        } else {
            $this->view->response("No existe el comentario con el id={$id}", 404);
        }
    }


    function borrarComentario($params = null)
    {
        // FALTAN CONTROLES DE ADMIN
        $id = $params[':ID'];
        $this->model->borrarComentario($id);
    }

    function addComentario()
    {
        // FALTAN CONTROLES DE LOGUEO

        $data = $this->getData();

        $comentario = $data->comentario;
        $puntaje = $data->puntaje;
        $id_user = $data->id_user;
        $id_producto = $data->id_producto;

        $ingresado = $this->model->addComentario($comentario, $puntaje, $id_user, $id_producto);

        if ($ingresado) {
            $this->view->response("Se agrego el comentario con id: {$ingresado}", 200);
        } else {
            $this->view->response("El comentario no fue creado", 500);
        }
    }
}
