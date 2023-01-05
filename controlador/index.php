<?php
require_once('/var/www/html/sikuani/model/index.php');
class modeloController{
    private $model;
    public function __construct()
    {
        $this->model = new Modelo();
    }

    //mostrar
    static function index() {
        $tenistas = new Modelo();
        $dato = $tenistas -> mostrar('tenistas', '1');
        require_once('/var/www/html/sikuani/view/index.php');
    }
}