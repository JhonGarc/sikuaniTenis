<?php
class Tenistas extends Controller{
    function __construct()
    {
        parent::__construct();
        $this->view->render('tenistas/index');
    }
}

?>