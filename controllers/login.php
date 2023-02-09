<?php

class Login extends Controller{

    function __construct(){
        parent::__construct();
        
    }

    function render(){
        $this->view->render('login/index');
        
    }

    function logind(){
        $username = $_POST['username'];
        $password = $_POST['password'];
        if($this->model->verificar(['username' => $username, 'password' => $password])){
            $this->view->render('administrador/index');
        }else{
            echo "<script>alert('Usuario o contraseña incorrectos');</script>";
            $this->render();
        }
       
    }
}

?>