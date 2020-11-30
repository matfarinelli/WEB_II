<?php

require_once "./libs/smarty/Smarty.class.php";


class view_productos
{
    private $smarty;

    function __construct()
    {
    }

    function show_productos($frutos, $cat)
    {
        //print_r($frutos);
        //inicializacion Smarty
        $smarty = new Smarty();
        //asignar variables (assign)
        $smarty->assign('frutos', $frutos);
        $smarty->assign('categorias', $cat);
        //renderizar template
        $smarty->display('./templates/tabla_general.tpl');
    }

    function show_productos_ordenados($frutos)
    {
        $smarty = new Smarty();
        $smarty->assign('frutos', $frutos);
        $smarty->display('./templates/tabla_ordenada.tpl');
    }

    function volverABM()
    {
        header("Location:" . BASE_URL . "abm");
    }

    function show_agregar($frutos, $cat)
    {
        //print_r($frutos);
        $smarty = new Smarty();
        //asignar variables (assign)
        $smarty->assign('frutos', $frutos);
        $smarty->assign('categorias', $cat);
        //renderizar template

        $smarty->display('./templates/abm_productos.tpl');
    }

    function verProducto($producto_individual, $comentarios)
    {
        //print_r($frutos);
        $smarty = new Smarty();
        //asignar variables (assign)
        $smarty->assign('comentarios', $comentarios);
        $smarty->assign('producto_individual', $producto_individual);
        //renderizar template
        $smarty->display('./templates/ver_producto.tpl');
    }
}
