<?php
class App
{
    function __construct()
    {
        //echo "<p> app </p>";
        $url = isset($_GET['url']) ? $_GET['url']: null;

        $url = rtrim($url, '/'); //Utiliza la función "rtrim" para eliminar cualquier caracter "/" al final de la URL

        $url = explode('/', $url); //Utiliza la función "explode" para dividir la URL en un arreglo mediante el caracter "/". Cada elemento del arreglo será una parte diferente de la URL original, separada por "/".

        //cuando se ingresa sin definir controlador
        if(empty($url[0])){
            $archivoController = 'controllers/main.php';
            require_once $archivoController;
            $controller = new Main();
            $controller->loadModel('main');
            $controller->render();
            return false;
        }
        $archivoController = 'controllers/' . $url[0] . '.php';
        //haciendo referencia a que el primer parametro será el que indica el controlador

        if (file_exists($archivoController)) {
            require_once $archivoController;
            
            //inicializa el controlador
            $controller = new $url[0]; //nombre del controlador
            $controller->loadModel($url[0]);

            //numero de elementos del arreglo
            $nparam = sizeof($url);

            if($nparam > 1){
                if($nparam > 2){
                    $param = [];
                    for($i = 2; $i < $nparam; $i++){
                        array_push($param , $url[$i]);
                    }
                    $controller->{$url[1]}($param);
                }
            }else{
                $controller->render();
            }
            //si hay un metodo que se requiere cargar
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