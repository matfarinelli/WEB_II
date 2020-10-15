<?php

require_once './view/view_index.php';
require_once './helpers/authhelper.php';


class controller_index
{

    private $view;
    private $helper;

    function __construct()
    {
        $this->view = new view_index();
        $this->helper = new authhelper();
    }

    function home()
    {
        $this->helper->getLoggedUserName();
        $this->view->show_home();
    }

    
}
