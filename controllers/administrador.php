<?php
class Administrador extends Controller{
    function __construct()
    {
        parent::__construct();
        $this->view->render('administrador/index');
    }

    function crearTenista(){
        echo "tenista creado fgfd";
        $this->model->insert();
    }
}

?>