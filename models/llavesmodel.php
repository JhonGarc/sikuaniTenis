<?php

class LlavesModel extends Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function insert($datos)
    {
        var_dump($datos);
        try {
            //insertar datos en la bd
           
            $query = $this->db->connect()->prepare('INSERT INTO ENCUENTROS(id_encuentro, id_tenista, ten_id_tenista, ten_id_tenista2, id_cancha, duracion, fecha,fase) VALUES(:id_encuentro, :id_tenista , :ten_id_tenista, :ten_id_tenista2, :id_cancha, :duracion, :fecha, :fase');
            
            $query->execute([
                'id_encuentro' => $datos['id_encuentro'],
                'id_tenista' => $datos['id_tenista'],
                'ten_id_tenista' => $datos['ten_id_tenista'],
                'ten_id_tenista2' => $datos['ten_id_tenista2'],
                'id_cancha' => $datos['id_cancha'],
                'duracion' => $datos['duracion'],
                'fecha' => $datos['fecha'],
                'fase' => $datos['fase']
            ]);
            
            return true;
        } catch (PDOException $e) {
            //echo $e->getMessage();
            //echo "Ya existe ese id";
            return false;
        }
    }
}