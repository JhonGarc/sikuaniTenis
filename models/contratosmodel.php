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
        $query = $this->db->connect()->query("SELECT * FROM usercontratos");

        while($row = $query->fetch()){
            $item = new Contrato();
            $item->n = $row['n'];
            $item->tenista = $row['tenista'];
            $item->patrocinador = $row['patrocinador'];
            $item->firma_contrato = $row['firma_contrato'];
            $item->finalizacion = $row['finalizacion'];
            array_push($items, $item);
        }
        return $items;
    } catch (PDOException $e) {
        return [];
    }
}


 }


?>