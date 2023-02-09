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
       
            <h1 class = "center">Encuentro</h1>
            <table width="100%"class="table table-hover table-bordered table-round-corner" style="border: 2px solid #d7e1eb;border-radius:40px; background-color: #cab5ad;">
        <thead style= "background-color: #a98e83;">
        
            <tr>
                <th>FASE</th>
                <th>NOMBRE TENISTA1</th>
                <th>APELLIDO</th>
                <th>NOMBRE TENISTA 2</th>
                <th>APELLIDO</th>
                <th>CANCHA</th>
                <th>DURACION</th>
                <th>FECHA</th>
                <th>NOMBRE GANADOR</th>
                <th>APELLIDO</th>
                <th>PUNTOS TENISTA 1</th>
                <th>PUNTOS TENISTA 2</th>
            </tr>
        </thead>
        <tbody>
            <?php
            include_once 'models/encuentro.php';
            foreach ($this->encuentros as $row) {
                $encuentro = new Encuentro();
                $encuentro = $row;
            ?>
                <tr>
                    <td><?php echo $encuentro->fase ?></td>
                    <td><?php echo $encuentro->nomb_ten1 ?></td>
                    <td><?php echo $encuentro->apel_ten1 ?></td>
                    <td><?php echo $encuentro->nomb_ten2 ?></td>
                    <td><?php echo $encuentro->apel_ten2 ?></td>
                    <td><?php echo $encuentro->cancha ?></td>
                    <td><?php echo $encuentro->duracion ?></td>
                    <td><?php echo $encuentro->fecha ?></td>
                    <td><?php echo $encuentro->nomb_ganador ?></td>
                    <td><?php echo $encuentro->apel_ganador ?></td>
                    <td><?php echo $encuentro->puntos_tenista1 ?></td>
                    <td><?php echo $encuentro->puntos_tenista2 ?></td>

                </tr>
            <?php } ?>
        </tbody>
        </table>
    
    <?php

        require 'views/footer.php';
    ?>
</body>
</html>

