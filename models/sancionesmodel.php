<?php

include_once 'models/sancion.php';

 class SancionesModel extends Model{
    public function __construct()
    {
        parent::__construct();
    }

    public function get(){
       $items = []; 

    try {
        $query = $this->db->connect()->query("SELECT * FROM usersanciones");

        while($row = $query->fetch()){
            $item = new Sancion();
            $item->n = $row['n'];
            $item->tenista = $row['tenista'];
            $item->fase = $row['fase'];
            $item->fecha = $row['fecha'];
            $item->minuto = $row['minuto'];
            $item->sancion = $row['sancion'];
            array_push($items, $item);
        }
        return $items;
    } catch (PDOException $e) {
        return [];
    }
}


 }
