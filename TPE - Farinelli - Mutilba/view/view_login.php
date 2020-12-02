<?php

require_once "./libs/smarty/Smarty.class.php";


class view_login
{

    private $smarty;

    function __construct()
    {
        $authhelper = new authhelper();
        $usuario = $authhelper->getLoggedUserName();
         $this->smarty = new Smarty();
         $this->smarty->assign('usuario', $usuario);
    }

    function show_login($mensaje = '')
    {
       
       
        $this->smarty->assign("mensaje", $mensaje);
        $this->smarty->display('./templates/login.tpl');
    }

    function show_usuario($usuario_activo = '')
    {
        
        $this->smarty->assign("usuario_activo", $usuario_activo);
        $this->smarty->display('./templates/session.tpl');
    }

    function show_registro($usuario_activo = '')
    {
       
        $this->smarty->assign("usuario_activo", $usuario_activo);
        $this->smarty->display('./templates/registro.tpl');
    }

    function show_usuarios($usuario)
    {
       
        $this->smarty->assign("usuarios", $usuario);
        $this->smarty->display('./templates/abm_usuarios.tpl');
    }
}
