<?php

require_once './view/view_contacto.php';
require_once './helpers/authhelper.php';

class controller_contacto
{

    private $view;
    private $helper;

    function __construct()
    {
        $this->view = new view_contacto();
        $this->helper = new authhelper();
    }

    function contacto()
    {
        $this->helper->getLoggedUserName();
        $this->view->show_contacto();
    }
}
