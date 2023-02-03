<?php

class Llaves extends Controller{

    function __construct(){
        parent::__construct();
        
    }

    function render(){
        $this->view->render('llaves/index');
    }
}

?>