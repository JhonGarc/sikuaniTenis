<?php
class Sanciones extends Controller{
    function __construct()
    {
        parent::__construct();
        $this->view->render('sanciones/index');
    }
}

?>