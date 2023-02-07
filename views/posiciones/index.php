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
        require 'views/header.php';
    ?>
        <h1 class = "center" width= "100%">POSICIONES</h1>
            <table width="100%"class="table table-hover table-bordered table-round-corner" style="border: 2px solid #bce4b8;border-radius:40px; background-color: gray;">
        <thead class="table-dark">
            <tr>
                <th>RANKING</th>
                <th>NOMBRE</th>
                <th>APELLIDO</th>
                <th>IDENTIFICACION</th>
                <th>FECHA DE NACIMIENTO</th>
                <th>VICTORIAS</th>
            </tr>
        </thead>
        <tbody>
            <?php
            include_once 'models/posicion.php';
            foreach ($this->posiciones as $row) {
                $posicion = new Posicion();
                $posicion= $row;
            ?>
                <tr>
                    <td><?php echo $posicion->ranking ?></td>
                    <td><?php echo $posicion->nombres ?></td>
                    <td><?php echo $posicion->apelidos ?></td>
                    <td><?php echo $posicion->identificacion ?></td>
                    <td><?php echo $posicion->fecha_nacimiento ?></td>
                    <td><?php echo $posicion->victorias ?></td>
                </tr>
            <?php } ?>
        </tbody>
        </table>
    
    <?php

        require 'views/footer.php';
    ?>
</body>
</html>