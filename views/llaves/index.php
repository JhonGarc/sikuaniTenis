<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <?php
    require 'views/headeradmin.php';
    ?>
    <div id="main">
        <h1 class="center">Administrador - ENCUENTROS</h1>
        <div class = "center"><?php echo $this->mensaje; ?></div>
        <form action="<?php echo constant('URL'); ?>llaves/crearEncuentro" method="POST">
            <P>
                <label for="id_encuentro">ID ENCUENTRO</label><br>
                <input type="text" name="id_encuentro" id="" required>
            </P>
            <P>
                <label for="id_tenista">Tenista 1</label><br>
                <input type="text" name="id_tenista" id="" required>
            </P>
            <P>
                <label for="ten_id_tenista">Tenista 2</label><br>
                <input type="text" name="ten_id_tenista" id="" required>
            </P>
            </P>
            <P>
                <label for="ten_id_tenista2">Ganador</label><br>
                <input type="text" name="ten_id_tenista2" id="" required>
            </P>
            </P>
            <P>
                <label for="id_cancha">Cancha</label><br>
                <input type="text" name="id_cancha" id="" required>
            </P>
            </P>

            <P>
                <label for="duracion">duracion</label><br>
                <input type="text" name="duracion" id="" required>
            </P> 
            <P>
                <label for="fecha">fecha</label><br>
                <input type="date" name="fecha" id="" required>
            </P>   
            <P>
                <label for="fase">Fase</label><br>
                <input type="text" name="fase" id="" required>
            </P>

            <p>
                <input type="submit" value="crear encuentro">
            </p>
        </form>

    </div>
    
    <?php

    require 'views/footeradmin.php';
    ?>
</body>

</html>