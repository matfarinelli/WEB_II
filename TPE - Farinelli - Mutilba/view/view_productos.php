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
        $this->smarty->assign('frutos', $frutos);
        $this->smarty->assign('categorias', $cat);
        $this->smarty->display('./templates/tabla_general.tpl');
    }

    function show_productos_ordenados($frutos)
    {
        $this->smarty->assign('frutos', $frutos);
        $this->smarty->display('./templates/tabla_ordenada.tpl');
    }

    function show_agregar($frutos, $cat)
    {
        $this->smarty->assign('frutos', $frutos);
        $this->smarty->assign('categorias', $cat);
        $this->smarty->display('./templates/abm_productos.tpl');
    }

    function verProducto($producto_individual, $comentarios)
    {
        $this->smarty->assign('comentarios', $comentarios);
        $this->smarty->assign('producto_individual', $producto_individual);
        $this->smarty->display('./templates/ver_producto.tpl');
    }
}
