<?php
class Posiciones extends Controller{
    function __construct()
    {
        parent::__construct();
        
    }

    function render(){
        $this->view->render('posiciones/index');
    }
}

?>