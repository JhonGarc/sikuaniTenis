<?php
    //clases bases de las cuales van a heredar los controllers
    class View{
        public $mensaje;
        function __construct()
        {
            //echo "<p> vista base </p>";
        }

        function render($nombre){
            require 'views/' . $nombre . '.php';
        }
    }

?>