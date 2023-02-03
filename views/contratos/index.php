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
       
            <h1 class = "center">Contratos</h1>
            <table width="100%">
        <thead>
            <tr>
                <th>Patrocinador</th>
                <th>Tenista</th>
                <th>fecha inicio</th>
                <th>fecha fin</th>     
            </tr>
        </thead>
        <tbody>
            <?php
            include_once 'models/contrato.php';
            foreach ($this->contratos as $row) {
                $contrato = new Contrato();
                $contrato = $row;
            ?>
                <tr>
                    <td><?php echo $contrato->id_patro ?></td>
                    <td><?php echo $contrato-> id_tenista ?></td>
                    <td><?php echo $contrato->fech_ini ?></td>
                    <td><?php echo $contrato->fech_fin ?></td>
                </tr>
            <?php } ?>
        </tbody>
        </table>
    
    <?php

        require 'views/footer.php';
    ?>
</body>
</html>