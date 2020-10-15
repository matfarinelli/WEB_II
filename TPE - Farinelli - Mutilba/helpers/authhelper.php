<?php

class authhelper
{

    function __construct()
    {
    }
    //array de sesion
    function login($userFromDB)
    {
        session_start();
        $_SESSION['USUARIO'] = $userFromDB->usuario;
        $_SESSION['LAST_ACTIVITY'] = time();
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
            if (isset($_SESSION['LAST_ACTIVITY']) && time() - $_SESSION['LAST_ACTIVITY'] > 1000) {
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
}
