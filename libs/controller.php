<?php
    //clases bases de las cuales van a heredar los controllers
    class Controller{
        public $view;
        function __construct()
        {
            //echo "<p> Controlador base </p> ";
            $this->view = new View();
        }
    }

?>