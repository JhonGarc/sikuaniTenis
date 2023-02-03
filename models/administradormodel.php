<?php

class AdministradorModel extends Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function insert($datos)
    {
        try {
            //insertar datos en la bd
            $query = $this->db->connect()->prepare('INSERT INTO TENISTAS(id_tenista, id_entrenador, id_ciudad, nombres, apellidos, identificacion, fecha_nacimiento) VALUES(:id_tenista, :id_entrenador, :id_ciudad, :nombres, :apellidos, :identificacion, :fecha_nacimiento)');
            $query->execute([
                'id_tenista' => $datos['id_tenista'],
                'id_entrenador' => $datos['id_entrenador'],
                'id_ciudad' => $datos['id_ciudad'],
                'nombres' => $datos['nombres'],
                'apellidos' => $datos['apellidos'],
                'identificacion' => $datos['identificacion'],
                'fecha_nacimiento' => $datos['fecha_nacimiento']
            ]);
            
            return true;
        } catch (PDOException $e) {
            //echo $e->getMessage();
            //echo "Ya existe ese id";
            return false;
        }
    }
}
