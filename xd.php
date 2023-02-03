<?php
$jugadores = ["Jhon" => 18, "Pedro" => 20, "Juan" => 40 , "Victor" => 20,
"Peter" => 10, "Hector" => 20, "Jose" => 10, "Hectorino" => 40];
$team1 = 'equipo1';
$team2 = 'equipo2';
$team3 = 'equipo3';
$team4 = 'equipo4';

$fase1 = [
    $team1 => [],
    $team2 => [],
    $team3 => [],
    $team4 => []
];
function armarEquipos($jugadores, $equipos) {
    $cantidadJugadores = count($jugadores);
    $cantidadEquipos = count($equipos);
    $cantidadJugadoresPorEquipo = $cantidadJugadores / $cantidadEquipos;
    $contador = 0;  
    while ($contador < $cantidadJugadoresPorEquipo) {
        foreach ($equipos as $equipo) {
            $numero = array_rand($jugadores);
            array_push($equipos[$equipo], $jugadores[$numero]);
            unset($jugadores[$numero]);
        }
        $contador++;
    }
    return $equipos;
}
$fase1 = armarEquipos($jugadores, $fase1);
var_dump($fase1[$team1]);

?>