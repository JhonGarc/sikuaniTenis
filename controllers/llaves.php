<?php
class Llaves extends Controller{
    function __construct()
    {
        parent::__construct();
        //$this->view->mensaje = "";
        
    }

    function render(){
        $this->view->render('llaves/index');
    }



    function crearEncuentro(){

        $id_encuentro = $_POST['id_encuentro'];
        $id_tenista = $_POST['id_tenista'];
        $ten_id_tenista = $_POST['ten_id_tenista'];
        $ten_id_tenista2 = $_POST['ten_id_tenista2']; 
        $id_cancha = $_POST['id_cancha'];
        $duracion = $_POST['duracion'];
        $fecha = $_POST['fecha'];
        $fase = $_POST['fase'];
        $mensaje = "";

        
        if($this->model->insert(['id_encuentro' => $id_encuentro, 'id_tenista' => $id_tenista, 'ten_id_tenista' => $ten_id_tenista, 'ten_id_tenista2' => $ten_id_tenista2, 'id_cancha' => $id_cancha, 'duracion'=> $duracion, 'fecha' => $fecha, 'fase' => $fase])){
            $mensaje = "Nuevo encuentro";
        }else{
            $mensaje = "INVALIDO";
            
        }

        $this->view->mensaje = $mensaje;
        $this->render();

    }

    


}

?>