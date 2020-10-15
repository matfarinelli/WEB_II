<?php

require_once "./libs/smarty/Smarty.class.php";

class view_index
{

    function __construct()
    {
    }

    function show_home()
    {
        //inicializacion Smarty
        $smarty = new Smarty();
        $smarty->display('./templates/home.tpl');
    }

}
