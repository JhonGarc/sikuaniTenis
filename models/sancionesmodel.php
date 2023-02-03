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
        $query = $this->db->connect()->query("SELECT * FROM multa");

        while($row = $query->fetch()){
            $item = new Sancion();
            $item->id_tenista = $row['id_tenista'];
            $item->id_sancion = $row['id_sancion'];
            $item->id_encuentro = $row['id_encuentro'];
            $item->minuto_falta = $row['minuto_falta'];
            array_push($items, $item);
        }
        return $items;
    } catch (PDOException $e) {
        return [];
    }
}


 }

