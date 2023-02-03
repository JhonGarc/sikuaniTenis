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
       
            <h1 class = "center">Multas</h1>
            <table width="100%">
        <thead>
            <tr>
                <th>ID TENISTA</th>
                <th>ID SANCION</th>
                <th>ID ENCUENTRO</th>
                <th>MINUTO FALTA</th>
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
                    <td><?php echo $sancion->id_tenista ?></td>
                    <td><?php echo $sancion->id_sancion ?></td>
                    <td><?php echo $sancion->id_encuentro ?></td>
                    <td><?php echo $sancion->minuto_falta ?></td>
                </tr>
            <?php } ?>
        </tbody>
        </table>
    
    <?php

        require 'views/footer.php';
    ?>
</body>
</html>