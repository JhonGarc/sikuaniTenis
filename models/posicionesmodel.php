<?php

include_once 'models/posicion.php';

 class PosicionesModel extends Model{
    public function __construct()
    {
        parent::__construct();
    }

    public function get(){
       $items = []; 

    try {
        $query = $this->db->connect()->query("SELECT * FROM userposiciones");
        while($row = $query->fetch()){
            $item = new Posicion();
            $item->ranking = $row['ranking'];
            $item->nombres = $row['nombres'];
            $item->apellidos = $row['apellidos'];
            $item->identificacion = $row['identificacion'];
            $item->fecha_nacimiento = $row['fecha_nacimiento'];
            $item->victorias = $row['victorias'];
            

            array_push($items, $item);
            

        }
        return $items;
    } catch (PDOException $e) {
        return [];
    }
}


 }


?>