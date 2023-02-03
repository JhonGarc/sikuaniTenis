<?php

include_once 'models/login.php';

 class LoginModel extends Model{
    public function __construct()
    {
        parent::__construct();
    }

    public function get(){
       $items = []; 

    try {
        $query = $this->db->connect()->query("SELECT * FROM encuentros");
        while($row = $query->fetch()){
            $item = new Encuentro();
            $item->id_encuentro = $row['id_encuentro'];
            $item->id_tenista = $row['id_tenista'];
            $item->ten_id_tenista = $row['ten_id_tenista'];
            $item->ten_id_tenista2 = $row['ten_id_tenista2'];
            $item->id_cancha = $row['id_cancha'];
            $item->duracion = $row['duracion'];
            $item->fecha = $row['fecha'];
            $item->fase = $row['fase'];

            array_push($items, $item);
            

        }
        return $items;
    } catch (PDOException $e) {
        return [];
    }
}

    public function verificar(){
        
    }


 }


?>