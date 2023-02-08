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

    public function tenistaJoven(){

    }

    public function getById($id_tenista)
    {
        $item = new Tenista();
        $query = $this->db->connect()->prepare("SELECT * FROM tenistas WHERE id_tenista= :id_tenista");
        try {
            $query->execute(['id_tenista' => $id_tenista]);
            while ($row = $query->fetch()) {
                $item->id_tenista = $row['id_tenista'];
                $item->nombres = $row['nombres'];
                $item->apellidos = $row['apellidos'];
                
               
            }
            return $item;
        } catch (PDOException $e) {
            return null;
        }
    }

    public function update($item)
    {   
        
      
        $query = $this->db->connect()->prepare("UPDATE tenistas SET nombres = :nombres, apellidos = :apellidos WHERE id_tenista = :id_tenista");
            
        try {
            
            $query->bindValue(':nombres', $item['nombres'], PDO::PARAM_STR);
            $query->bindValue(':apellidos', $item['apellidos'], PDO::PARAM_STR);
            $query->bindValue(':id_tenista', $item['id_tenista'], PDO::PARAM_INT);
            $query->execute();
            return true;
        } catch (PDOException $e) {
            return false;
        }
    }

    public function delete($id_tenista){
         $query = $this->db->connect()->prepare("DELETE from tenistas where id_tenista =:id_tenista");
         try {
           $query->execute([
                'id_tenista' => $id_tenista,
             ]);
             return true;
         } catch (PDOException $e) {
            return false;
         }

       // var_dump($id_tenista);
    }

    

    
}
