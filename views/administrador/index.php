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
        <h1 class="center">Administrador - TENISTAS</h1>
        <div class = "center"><?php echo $this->mensaje; ?></div>
        <form action="<?php echo constant('URL'); ?>administrador/crearTenista" method="POST">
            <P>
                <label for="id_tenista">ID TENISTA</label><br>
                <input type="text" name="id_tenista" id="" required>
            </P>
            <P>
                <label for="id_entrenador">ID ENTRENADOR</label><br>
                <input type="text" name="id_entrenador" id="" required>
            </P>
            <P>
                <label for="id_ciudad">ID CIUDAD</label><br>
                <input type="text" name="id_ciudad" id="" required>
            </P>
            </P>
            <P>
                <label for="nombres">nombres</label><br>
                <input type="text" name="nombres" id="" required>
            </P>
            </P>
            <P>
                <label for="apellidos">apellidos</label><br>
                <input type="text" name="apellidos" id="" required>
            </P>
            </P>
            <P>
                <label for="identificacion">Identificacion</label><br>
                <input type="text" name="identificacion" id="" required>
            </P>    
            <P>
                <label for="fecha_nacimiento">fecha Nacimiento</label><br>
                <input type="date" name="fecha_nacimiento" id="" required>
            </P>

            <p>
                <input type="submit" value="registrar nuevo tenista">
            </p>
        </form>

    </div>
    
    <?php

    require 'views/footeradmin.php';
    ?>
</body>

</html>