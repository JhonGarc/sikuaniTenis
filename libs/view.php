<?php
    //clases bases de las cuales van a heredar los controllers
    class View{
        public $mensaje;
        public $tenistas;
        public $encuentros;
        public $contratos;
        public $sanciones;
        public $tenista;
        public $posiciones;
        public $login;
        public $entrenadores;
        public $estadisticas;
        public $tenistasjoven;
        
        function __construct()
        {
            //echo "<p> vista base </p>";
        }

        function render($nombre){
            require 'views/' . $nombre . '.php';
        }
    }

?>