<?php
    //clases bases de las cuales van a heredar los controllers
    class Controller{
        public $view;
        public $model;
        
        function __construct()
        {
            //echo "<p> Controlador base </p> ";
            $this->view = new View();
        }

        function loadModel($model){
            $url = 'models/' .$model.'model.php'; 

            if(file_exists($url)){
                require $url;

                $modelName = $model.'Model';
                $this->model = new $modelName();
            }
        }
    }

?>