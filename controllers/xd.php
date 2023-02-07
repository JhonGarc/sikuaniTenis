<?php

class Xd extends Controller{

    function __construct(){
        parent::__construct();
        
    }

    function render(){
        $this->view->render('prueba/index');
    }
}

?>