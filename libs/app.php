<?php
class App
{
    function __construct()
    {
        //echo "<p> app </p>";
        $url = isset($_GET['url']) ? $_GET['url']: null;

        $url = rtrim($url, '/'); //Utiliza la función "rtrim" para eliminar cualquier caracter "/" al final de la URL

        $url = explode('/', $url); //Utiliza la función "explode" para dividir la URL en un arreglo mediante el caracter "/". Cada elemento del arreglo será una parte diferente de la URL original, separada por "/".

        if(empty($url[0])){
            $archivoController = 'controllers/main.php';
            require_once $archivoController;
            $controller = new Main();
            return false;
        }
        $archivoController = 'controllers/' . $url[0] . '.php';
        //haciendo referencia a que el primer parametro será el que indica el controlador

        if (file_exists($archivoController)) {
            require_once $archivoController;
            $controller = new $url[0]; //nombre del controlador

            if (isset($url[1])) {
                //en la posicion 0 esta el controlador y en la posicion 0 está el metodo
                $controller->{$url[1]}();
            }
        } else {
            echo "<h1> recurso no encontrado </h1>";
        }
    }
}

?>