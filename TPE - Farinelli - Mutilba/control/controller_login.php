<?php

require_once './view/view_login.php';
require_once './model/model_login.php';
require_once './helpers/authhelper.php';

class controller_login
{
    private $model;
    private $view;
    private $helper;

    function __construct()
    {
        $this->view = new view_login();
        $this->model = new model_login();
        $this->helper = new authhelper();
    }

    function show_login()
    {
        $this->view->show_login();
    }

    function verificarUsuario()
    {
        // del form de sesion
        $usuario = $_POST['usuario'];
        $contrasena = $_POST['contrasena'];

        if (isset($usuario)) {
            $userFromDB = $this->model->getUser($usuario);

            if ((isset($userFromDB)) && ($userFromDB)) {
                $password = $userFromDB->password;
                if (password_verify($contrasena, $password)) {

                    $this->helper->login($userFromDB);
                    header("Location:" . BASE_URL . "abm");
                    
                } else {
                    $this->view->show_login("Contraseña incorrecta");
                }
            } else {
                $this->view->show_login("Usuario no registrado");
            }
        }
    }

    function logout()
    {
        $this->helper->logout();
    }


    function registrarse()
    {
        $this->view->show_registro();
    }

    function input_registro()
    {
        $usuario = $_POST['user'];
        $mail = $_POST['mail'];
        $contrasena = $_POST['contrasena'];

        $hash = password_hash($contrasena, PASSWORD_DEFAULT);

        if (isset($usuario)) {
            $userFromDB = $this->model->getUser($usuario);

            if ((isset($userFromDB)) && ($userFromDB)) {
                $this->view->show_login("Usuario ya registrado");
            } else {
                $this->model->registrarse($usuario, $mail, $hash);

                $userFromDB = $this->model->getUser($usuario);

                $this->helper->login($userFromDB);

                // VER!!!

                header("Location:" . BASE_URL . "productos");
            }
        }
    }
}
