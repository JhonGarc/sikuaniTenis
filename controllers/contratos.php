<?php
class Contratos extends Controller{
    function __construct()
    {
        parent::__construct();
        $this->view->render('contratos/index');
    }
}

?>