<?php

require_once "./libs/smarty/Smarty.class.php";

class view_categorias
{
    private $smarty;
    function __construct()
    {
        $this->smarty = new Smarty();
    }

    function show_categorias($categorias)
    {
        $this->smarty->assign('categorias', $categorias);
        $this->smarty->display('./templates/categorias.tpl');
    }

    function volverABM()
    {
        header("Location:" . BASE_URL . "abm_categorias");
    }

    function show_abm_categorias($categorias)
    {
        $this->smarty->assign('categorias', $categorias);
        $this->smarty->display('./templates/abm_categorias.tpl');
    }
}
