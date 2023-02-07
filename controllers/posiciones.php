<?php
class Posiciones extends Controller{
    function __construct()
    {
        parent::__construct();
        $this->view->posiciones = [];
    }

    function render(){
        $posiciones =  $this->model->get();
        $this->view->posiciones = $posiciones;
        $this->view->render('posiciones/index');
    }
}

?>