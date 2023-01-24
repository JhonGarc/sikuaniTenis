<?php

class Llaves extends Controller{

    function __construct(){
        parent::__construct();
        $this->view->render('llaves/index');
    }
}

?>