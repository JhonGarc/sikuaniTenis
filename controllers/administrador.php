<?php
class Administrador extends Controller{
    function __construct()
    {
        parent::__construct();
        //$this->view->mensaje = "";
        
    }

    function render(){
        $this->view->render('administrador/index');
    }



    function crearTenista(){

        $id_tenista = $_POST['id_tenista'];
        $id_entrenador = $_POST['id_entrenador'];
        $id_ciudad = $_POST['id_ciudad'];
        $nombres = $_POST['nombres']; 
        $apellidos = $_POST['apellidos'];
        $identificacion = $_POST['identificacion'];
        $fecha_nacimiento = $_POST['fecha_nacimiento'];
        $mensaje = "";

        if($this->model->insert(['id_tenista' => $id_tenista, 'id_entrenador' => $id_entrenador, 'id_ciudad' => $id_ciudad, 'nombres' => $nombres, 'apellidos' => $apellidos, 'identificacion'=> $identificacion, 'fecha_nacimiento' => $fecha_nacimiento])){
            $mensaje = "Nuevo tenista creado";
        }else{
            $mensaje = "El tenista ya existe";
        }

        $this->view->mensaje = $mensaje;
        $this->render();

    }

    function modificarTenista(){

    }
}

?>