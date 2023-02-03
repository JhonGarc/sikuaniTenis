<?php
class Tenistas extends Controller{
    function __construct()
    {
        parent::__construct();
        $this->view->tenistas = [];
    }

    function render(){
        $tenistas =  $this->model->get();
        $this->view->tenistas = $tenistas;
        $this->view->render('tenistas/index');
    }
}

?>