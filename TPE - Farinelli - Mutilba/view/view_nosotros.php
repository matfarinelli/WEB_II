<?php

require_once "./libs/smarty/Smarty.class.php";
require_once "./control/controller_login.php";
require_once './helpers/authhelper.php';

class view_nosotros
{

    function __construct()
    {
    }

    function show_nosotros()
    {
        $smarty = new Smarty();
        $smarty->display('./templates/nosotros.tpl');
    }
}
