<?php

class Estadisticas extends Controller{

    function __construct(){
        parent::__construct();
        $this->view->entrenadores =[];
        
    }

    function render(){
        $estadisticas = $this->model->getEntrenadores();
        $this->view->estadisticas= $estadisticas;
        $this->view->render('estadisticas/index');
        //var_dump($estadisticas);

        

        // $this->view->render('estadisticas/index');
        //$this->view->tenistasjoven = $tenistasjoven;



         //$tenistasCiudades = $this->model->getTenistasCiudades();
    }

    

    
}

?>