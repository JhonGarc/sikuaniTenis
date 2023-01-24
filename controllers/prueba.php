<?php
class Prueba extends Controller{
    function __construct()
    {
        parent::__construct();
        $this->view->render('prueba/index');
    }
}

?>