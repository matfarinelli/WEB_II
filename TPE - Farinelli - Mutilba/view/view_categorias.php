<?php

require_once "./libs/smarty/Smarty.class.php";

class view_categorias
{

    function __construct()
    {
    }

    function show_categorias($categorias)
    {
        $smarty = new Smarty();
        $smarty->assign('categorias', $categorias);
        $smarty->display('./templates/categorias.tpl');
    }


    function volverABM()
    {
        header("Location:" . BASE_URL . "abm_categorias");
    }


    function show_abm_categorias($categorias)
    {
        //print_r($frutos);
        $smarty = new Smarty();
        //asignar variables (assign)
        $smarty->assign('categorias', $categorias);
        //renderizar template
        $smarty->display('./templates/abm_categorias.tpl');
    }
}
