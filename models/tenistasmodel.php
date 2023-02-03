<?php

include_once 'models/tenista.php';

 class TenistasModel extends Model{
    public function __construct()
    {
        parent::__construct();
    }

    public function get(){
       $items = []; 

    try {
        $query = $this->db->connect()->query("SELECT * FROM usertenistas");
        while($row = $query->fetch()){
            $item = new Tenista();
            $item->nombres = $row['nombres'];
            $item->apellidos = $row['apellidos'];
            $item->identificacion = $row['identificacion'];
            $item->fecha_nacimiento = $row['fecha_nacimiento'];
            $item->mensaje = $row['mensaje'];

            array_push($items, $item);
            

        }
        return $items;
    } catch (PDOException $e) {
        return [];
    }
}
 }


?>