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
       
            <h1 class = "center" width= "100%">MULTAS</h1>
            <table width="100%"class="table table-hover table-bordered table-round-corner" style="border: 2px solid #bce4b8;border-radius:40px; background-color: gray;">
        <thead class="table-dark">
            <tr>
                <th>N</th>
                <th>TENISTA</th>
                <th>FASE</th>
                <th>FECHA</th>
                <th>MINUTO</th>
                <th>SANCION</th>
            </tr>
        </thead>
        <tbody>
            <?php
            include_once 'models/sancion.php';
            foreach ($this->sanciones as $row) {
                $sancion = new Sancion();
                $sancion = $row;
            ?>
                <tr>
                    <td><?php echo $sancion->n ?></td>
                    <td><?php echo $sancion->tenista ?></td>
                    <td><?php echo $sancion->fase ?></td>
                    <td><?php echo $sancion->fecha ?></td>
                    <td><?php echo $sancion->minuto ?></td>
                    <td><?php echo $sancion->sancion ?></td>
                </tr>
            <?php } ?>
        </tbody>
        </table>
    
    <?php

        require 'views/footer.php';
    ?>
</body>
</html>