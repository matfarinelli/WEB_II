<?php

require_once './view/view_nosotros.php';
require_once './helpers/authhelper.php';

class controller_nosotros
{

    private $view;
    private $helper;

    function __construct()
    {
        $this->view = new view_nosotros();
        $this->helper = new authhelper();
    }

    function nosotros()
    {
        $this->helper->getLoggedUserName();
        $this->view->show_nosotros();
    }
}
