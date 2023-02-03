<?php

include_once 'models/tenista.php';

class TenistasAdminModel extends Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function get()
    {
        $items = [];

        try {
            $query = $this->db->connect()->query("SELECT * FROM admintenistas");
            while ($row = $query->fetch()) {
                $item = new Tenista();
                $item->id_tenista = $row['id_tenista'];
                $item->id_entrenador = $row['id_entrenador'];
                $item->id_ciudad = $row['id_ciudad'];
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

    public function getById($id){
        $item = new Tenista();

        $query = $this->db->connect()->prepare("SELECT * FROM tenistas where id_tenista = :id_tenista");
        try {
            $query->execute(['id_tenista' => $id] );

            while($row = $query->fetch()){
                $item->id_tenista = $row['id_tenista'];
                $item->id_entrenador = $row['id_entrenador'];
                $item->id_ciudad = $row['id_ciudad'];
                $item->nombres = $row['nombres'];
                $item->apellidos = $row['apellidos'];
                $item->identificacion = $row['identificacion'];
                $item->fecha_nacimiento = $row['fecha_nacimiento'];
            }

            return $item;

        } catch (PDOException $e) {
            return null;
        }
    }

    public function update($item){
        $query = $this->db->connect()->prepare("UPDATE tenistas SET id_entrenador = :id_entrenador, id_ciudad =: id_ciudad, nombres =: nombres, apellidos =: apellidos, identificacion=: identificacion, fecha_nacimiento =: fecha_nacimiento WHERE id_tenista =: id_tenista");
        try {
            $query->execute([
                'id_tenista' => $item['id_tenista'],
                'id_entrenador' => $item['id_entrenador'],
                'id_ciudad' => $item['id_ciudad'],
                'nombres' => $item['nombres'],
                'apellidos' => $item['apellidos'],
                'identificacion' => $item['identificacion'],
                'fecha_nacimiento' => $item['fecha_nacimiento']

            ]);
            return true;
        } catch (\Throwable $th) {
            return false;
        }
    }


}


?>