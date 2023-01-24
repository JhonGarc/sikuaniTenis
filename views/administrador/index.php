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
        <div id = "main">
            <h1 class = "center">Administrador</h1>
            <form action="<?php echo constant('URL');?>administrador/crearTenista" method="POST">
                <P>
                    <label for="matricula">Matricula</label><br>
                    <input type="text" name="matricula" id="">
                </P>
                <P>
                    <label for="nombre">Nombre</label><br>
                    <input type="text" name="nombre" id="">
                </P>                <P>
                    <label for="apellido">Apellido</label><br>
                    <input type="text" name="apellido" id="">
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