<?php
class Encuentros extends Controller{
    function __construct()
    {
        parent::__construct();
        $this->view->render('encuentros/index');
    }
}

?>