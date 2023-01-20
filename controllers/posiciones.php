<?php
class Posiciones extends Controller{
    function __construct()
    {
        parent::__construct();
        $this->view->render('posiciones/index');
    }
}

?>