<?php

class Estadisticas extends Controller{

    function __construct(){
        parent::__construct();
        $this->view->render('estadisticas/index');
    }
}

?>