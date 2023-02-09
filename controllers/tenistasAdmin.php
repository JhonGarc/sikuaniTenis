<?php
class TenistasAdmin extends Controller
{
    function __construct()
    {
        parent::__construct();
        $this->view->tenistas = [];
    }

    function render()
    {
        $tenistas =  $this->model->get();
        $this->view->tenistas = $tenistas;
        //$tenistasjoven = $this->model->tenistajoven();
        //$this->view->tenistasjoven = $tenistasjoven;
        $this->view->render('tenistasAdmin/index');
    }

    function verTenista($param)
    {
        //permite cargar la vista
        $id_tenista = $param[0];
        $tenista = $this->model->getById($id_tenista);


        $this->view->tenista = $tenista;
        $this->view->render('tenistasAdmin/detalles');
    }

    function actualizarTenista() {
        //se encarga de hacer la actualización 
        $id_tenista = $_POST['id_tenista'];
        $nombres = $_POST['nombres'];
        $apellidos = $_POST['apellidos'];
        
        
        
        try {
            if ($this->model->update(['id_tenista' => $id_tenista, 'nombres' => $nombres, 'apellidos' => $apellidos])) {
                $tenista = new Tenista();
                $tenista->id_tenista = $id_tenista;
                $tenista->nombres = $nombres;
                $tenista->apellidos = $apellidos;
                
                var_dump($id_tenista);
                $this->view->tenista = $tenista;
                $this->view->mensaje = "tenista actualizado";
            }
        } catch (PDOException $e) {
            $error = $e->getMessage();
            echo "<script>alert('Error al actualizar: $error');</script>";
        }
        $this->view->render('tenistasAdmin/detalles');
    }

    function eliminarTenista($param)
    {
         $id_tenista = $param[0];

         
         if($this->model->delete($id_tenista)){
            echo "<script>alert('tenista eliminado');</script>";
              $this->render();
        }else{
            echo "<script>alert('no se ha podido fue eliminar');</script>";
            $this->render();
        }


    }
}
