<?php

require_once "./libs/smarty/Smarty.class.php";

class view_contacto
{

    function __construct()
    {
    }

    function show_contacto()
    {
        //inicializacion Smarty
        $smarty = new Smarty();
        $smarty->display('./templates/contacto.tpl');
    }
}
