<?php

require_once "./libs/smarty/Smarty.class.php";


class view_login
{

    function __construct()
    {
        $authhelper = new authhelper();
        $usuario = $authhelper->getLoggedUserName();
        $smarty = new Smarty();
        $smarty->assign('usuario', $usuario);
    }

    function show_login($mensaje = '')
    {
        //inicializacion Smarty
        $smarty = new Smarty();
        $smarty->assign("mensaje", $mensaje);
        $smarty->display('./templates/login.tpl');
    }

    function show_usuario($usuario_activo = '')
    {
        $smarty = new Smarty();
        $smarty->assign("usuario_activo", $usuario_activo);
        $smarty->display('./templates/session.tpl');
    }

    function show_registro($usuario_activo = '')
    {
        $smarty = new Smarty();
        $smarty->assign("usuario_activo", $usuario_activo);
        $smarty->display('./templates/registro.tpl');
    }

    function show_usuarios($usuario)
    {
        $smarty = new Smarty();
        $smarty->assign("usuarios", $usuario);
        $smarty->display('./templates/abm_usuarios.tpl');
    }
}
