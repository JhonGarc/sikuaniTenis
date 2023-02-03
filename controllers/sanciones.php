<?php
class Sanciones extends Controller{
    function __construct()
    {
        parent::__construct();
        $this->view->sanciones = [];
    }

    function render(){
        $sanciones =  $this->model->get();
        $this->view->sanciones = $sanciones;
        $this->view->render('sanciones/index');
    }
}

?>