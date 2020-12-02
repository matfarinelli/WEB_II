<?php

class authhelper
{

    function __construct()
    {
    }
    //array con datos de inicio de sesion
    function login($userFromDB)
    {
        session_start();
        $_SESSION['USUARIO'] = $userFromDB->usuario;
        $_SESSION['LAST_ACTIVITY'] = time();
        $_SESSION['ADMIN'] = $userFromDB->administrador;
        $_SESSION['ID_USUARIO'] = $userFromDB->id_user;
    }

    function logout()
    {
        session_start();
        session_destroy();
        header("Location: " . LOGIN);
    }

    function checkLogin()
    {

        if (session_status() != PHP_SESSION_ACTIVE)
            session_start();

        if (!isset($_SESSION['USUARIO'])) {
            header("Location:" . LOGIN);
        } else {
            if (isset($_SESSION['LAST_ACTIVITY']) && time() - $_SESSION['LAST_ACTIVITY'] > 10000) {
                header("Location: " . LOGOUT);
                die();
            } else {
                $_SESSION['LAST_ACTIVITY'] = time();
            }
        }
    }

    public function getLoggedUserName()
    {
        if (session_status() != PHP_SESSION_ACTIVE) {
            session_start();
        }
    }

    function checkAdmin()
    {
        $this->checkLogin();

        if (session_status() != PHP_SESSION_ACTIVE) {
            session_start();
        }

        if ($_SESSION['ADMIN'] == false) {
            header("Location:" . BASE_URL . "productos");
        }
    }
}
