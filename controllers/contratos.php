<?php
class Contratos extends Controller{
    function __construct()
    {
        parent::__construct();
        $this->view->contratos = [];
    }

    function render(){
        $contratos =  $this->model->get();
        $this->view->contratos = $contratos;
        $this->view->render('contratos/index');
    }
}

?>