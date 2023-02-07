<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Document</title>
</head>

<body>
    <?php
    require 'views/headeradmin.php';
    ?>
    <div id="">
        <h1 class="center">tenistas</h1>

        <table width="100%"class="table table-hover table-bordered table-round-corner" style="border: 2px solid #bce4b8;border-radius:40px; background-color: gray;">
        <thead class="table-dark">
            <tr>
                <th>ID TENISTA</th>
                <th>ID ENTRENADOR</th>
                <th>ID CIUDAD</th>
                <th>NOMBRES</th>
                <th>APELLIDOS</th>
                <th>IDENTIFICACION</th>
                <th>FECHA NACIMIENTO</th>
            </tr>
        </thead>
        <tbody>
            <?php
            include_once 'models/tenista.php';
            foreach ($this->tenistas as $row) {
                $tenista = new Tenista();
                $tenista = $row;
            ?>
                <tr>
                    <td><?php echo $tenista->id_tenista ?></td>
                    <td><?php echo $tenista->id_entrenador ?></td>
                    <td><?php echo $tenista->id_ciudad ?></td>
                    <td><?php echo $tenista->nombres ?></td>
                    <td><?php echo $tenista->apellidos ?></td>
                    <td><?php echo $tenista->identificacion ?></td>
                    <td><?php echo $tenista->fecha_nacimiento ?></td>
                    <td><a href="<?php echo constant('URL') . 'tenistasAdmin/verTenista/' . $tenista->id_tenista?>">Editar</a></td>
                    <td><a href="<?php echo constant('URL') . 'tenistasAdmin/eliminarTenista/' . $tenista->id_tenista?>">Eliminar</a></td>
                </tr>
            <?php } ?>
        </tbody>
        </table>
        



    </div>

    <?php

    require 'views/footeradmin.php';
    ?>
</body>

</html>