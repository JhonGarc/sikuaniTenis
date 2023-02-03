<?php

include_once 'models/encuentro.php';

 class EncuentrosModel extends Model{
    public function __construct()
    {
        parent::__construct();
    }

    public function get(){
       $items = []; 

    try {
        $query = $this->db->connect()->query("SELECT * FROM userencuentros");
        while($row = $query->fetch()){
            $item = new Encuentro();
            $item->fase = $row['fase'];
            $item->nomb_ten1 = $row['nomb_ten1'];
            $item->apel_ten1 = $row['apel_ten1'];
            $item->nomb_ten2 = $row['nomb_ten2']; 
            $item->apel_ten2 = $row['apel_ten2'];
            $item->cancha = $row['cancha'];
            $item->duracion = $row['duracion'];
            $item->fecha = $row['fecha'];
            $item->nomb_ganador = $row['nomb_ganador'];
            $item->apel_ganador = $row['apel_ganador'];
            $item->puntos_tenista1 = $row['puntos_tenista1'];
            $item->puntos_tenista2 = $row['puntos_tenista2'];
            

            array_push($items, $item);
            

        }
        return $items;
    } catch (PDOException $e) {
        return [];
    }
}


 }


?>