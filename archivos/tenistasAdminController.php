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
        //permite cargar la vista
        $id_tenista = $param[0];
        $tenista = $this->model->getById($id_tenista);

        
        $this->view->tenista = $tenista;
        $this->view->render('tenistasAdmin/detalles');
    }

    function actualizarTenista( ){
        //se encarga de hacer la actualización 
        
        
        $nombres = $_POST['nombres'];
        $apellidos = $_POST['apellidos'];

        

        if($this->model->update(['nombres' => $nombres, 'apellidos' => $apellidos])){
            //actualizar tenista
            $tenista = new Tenista();
            
            $tenista->nombres = $nombres;
            $tenista->apellidos = $apellidos;

            $this->view->tenista = $tenista;
            $this->view->mensaje = "tenista actualizado";
        } else {
            $error = error_get_last();
            $this->view->mensaje = "No se pudo actualizar: " . $error['message'];
        }
        $this->view->render('tenistasAdmin/detalles');
    }


    function eliminarTenista(){

    }

   


}

?>