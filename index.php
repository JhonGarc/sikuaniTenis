<?php
require_once('/var/www/html/sikuani/config.php');
require_once('/var/www/html/sikuani/controlador/index.php');
if(isset($_GET['m']))
    //if(method_exists(modeloController, $_GET['m']))
        modeloController::{$_GET['m']}();
else
    modeloController::index();
