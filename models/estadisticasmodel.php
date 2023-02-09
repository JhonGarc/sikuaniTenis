<?php

include_once 'models/estadistica.php';

 class EstadisticasModel extends Model{
    public function __construct()
    {
        parent::__construct();
    }

    public function getEntrenadores(){
       $items = []; 

    try {
        $query = $this->db->connect()->query("SELECT
        row_number() OVER (ORDER BY count(t.id_tenista) DESC) AS ranking,
        concat(nomb_entrenador, ' ', apel_entrena) AS entrenador,
        count(t.id_tenista) AS cantidad_tenistas
      FROM entrenadores e
      JOIN tenistas t ON t.id_entrenador = e.id_entrenador
      GROUP BY
        entrenador
      ORDER BY
        cantidad_tenistas DESC;");
        while($row = $query->fetch()){
            $item = new Estadistica();
            $item->ranking = $row['ranking'];
            $item->entrenador = $row['entrenador'];
            $item->cantidad_tenistas = $row['cantidad_tenistas'];

            

            array_push($items, $item);
        }
        return $items;
    } catch (PDOException $e) {
        return [];
    }
}

public function tenistajoven(){
    $items = []; 

 try {
     $query = $this->db->connect()->query("SELECT row_number() OVER (ORDER BY sum(cast(set as integer)) DESC) AS puesto, 
     concat(nombres, ' ', apellidos) AS tenista, date_part('year', age(fecha_nacimiento)) AS edad, sum(cast(set as integer)) as puntuacion_total
     FROM tenistas t
     JOIN puntuacion p ON t.id_tenista = p.id_tenista
     GROUP BY nombres, apellidos, edad, fecha_nacimiento;");




     
     while($row = $query->fetch()){
         $item = new Estadistica();
         $item->ranking = $row['ranking'];
         $item->nomb_ciudad = $row['nomb_ciudad'];
         $item->cantidad_tenistas = $row['cantidad_tenistas'];

         

         array_push($items, $item);
     }
     return $items;
 } catch (PDOException $e) {
     return [];
 }
}


 }


?>