<?php
class Encuentros extends Controller{
    function __construct()
    {
        parent::__construct();
        $this->view->encuentros = [];
    }

    function render(){
        $encuentros =  $this->model->get();
        $this->view->encuentros = $encuentros;
        $this->view->render('encuentros/index');
    }
}

?>