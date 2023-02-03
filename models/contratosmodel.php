<?php

include_once 'models/contrato.php';

 class ContratosModel extends Model{
    public function __construct()
    {
        parent::__construct();
    }

    public function get(){
       $items = []; 

    try {
        $query = $this->db->connect()->query("SELECT * FROM contrato");

        while($row = $query->fetch()){
            $item = new Contrato();
            $item->id_patro = $row['id_patro'];
            $item->id_tenista = $row['id_tenista'];
            $item->fech_ini = $row['fech_ini'];
            $item->fech_fin = $row['fech_fin'];
            array_push($items, $item);
        }
        return $items;
    } catch (PDOException $e) {
        return [];
    }
}


 }


?>