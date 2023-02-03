<?php
class TenistasAdmin extends Controller{
    function __construct()
    {
        parent::__construct();
        $this->view->tenistas = [];
        
    }

    function render(){
        $tenistas =  $this->model->get();
        $this->view->tenistas = $tenistas;
        $this->view->render('tenistasAdmin/index');
    }

    function verTenista($param){
        $idTenista = $param[0];
        $tenista = $this->model->getById($idTenista);

        session_start();
        $_SESSION['id_verTenista'] = $tenista->id_tenista;
        $this->view->tenista = $tenista;
        $this->view->mensaje = "";
        $this->view->render('tenistasAdmin/detalles');
        
        //var_dump($param);
    }

    function actualizarTenista(){
        // Iniciar la sesión
        session_start();
        $id_tenista = $_SESSION['id_verTenista'];
        $id_entrenador = $_POST['id_entrenador'];
        $id_ciudad = $_POST['id_ciudad'];
        $nombres = $_POST['nombres'];
        $apellidos = $_POST['apellidos'];
        $identificacion = $_POST['identificacion'];
        $fecha_nacimiento = $_POST['fecha_nacimiento'];

        unset($_SESSION['id_verTenista']);

        if($this->model->update(['id_tenista' => $id_tenista, 'id_entrenador' => $id_entrenador, 'id_ciudad' => $id_ciudad , 'nombres' => $nombres, 'apellidos' => $apellidos, 'identificacion' => $identificacion, 'fecha_nacimiento' => $fecha_nacimiento])){
            $tenista = new Tenista();
            $tenista->id_tenista = $id_tenista;
            $tenista->id_entrenador = $id_entrenador;
            $tenista->id_ciudad = $id_ciudad;
            $tenista->nombres = $nombres;
            $tenista->apellidos = $apellidos;
            $tenista->identificacion = $identificacion;
            $tenista->fecha_nacimiento= $fecha_nacimiento;

            $this->view->tenista = $tenista;
            $this->view->mensaje = "actualizado correctamente";

        }else{
            $error = error_get_last();
            $this->view->mensaje = "No se pudo actualizar: " . $error['message'];
        }

        $this->view->render('tenistasAdmin/detalles');

    }

    function eliminarTenista(){

    }
}

?>