<?php

require_once "./libs/smarty/Smarty.class.php";


class view_productos
{
    private $smarty;

    function __construct()
    {
        $this->smarty = new Smarty();
    }
    function show_home()
    {
        //inicializacion Smarty

        $this->smarty->display('./templates/home.tpl');
    }

    function show_nosotros()
    {

        $this->smarty->display('./templates/nosotros.tpl');
    }
    function show_contacto()
    {


        $this->smarty->display('./templates/contacto.tpl');
    }

    function show_productos($frutos, $cat)
    {
        //print_r($frutos);
        //inicializacion Smarty

        //asignar variables (assign)
        $this->smarty->assign('frutos', $frutos);
        $this->smarty->assign('categorias', $cat);
        //renderizar template
        $this->smarty->display('./templates/tabla_general.tpl');
    }

    function show_productos_ordenados($frutos)
    {

        $this->smarty->assign('frutos', $frutos);
        $this->smarty->display('./templates/tabla_ordenada.tpl');
    }

    function volverABM()
    {
        header("Location:" . BASE_URL . "abm");
    }

    function show_agregar($frutos, $cat)
    {
        //print_r($frutos);

        //asignar variables (assign)
        $this->smarty->assign('frutos', $frutos);
        $this->smarty->assign('categorias', $cat);
        //renderizar template

        $this->smarty->display('./templates/abm_productos.tpl');
    }

    function verProducto($producto_individual, $comentarios)
    {
        //print_r($frutos);

        //asignar variables (assign)
        $this->smarty->assign('comentarios', $comentarios);
        $this->smarty->assign('producto_individual', $producto_individual);
        //renderizar template
        $this->smarty->display('./templates/ver_producto.tpl');
    }
}
