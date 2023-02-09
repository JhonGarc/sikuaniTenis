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
            <table width="100%"class="table table-hover table-bordered table-round-corner" style="border: 2px solid #d7e1eb;border-radius:40px; background-color: #cab5ad;">
        <thead style= "background-color: #a98e83;">
            <tr>
                <th>N</th>
                <th>Tenista</th>
                <th>Patrocinador</th>
                <th>Firma de contrato</th>
                <th>Finalizacion</th>     
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
                    <td><?php echo $contrato->n ?></td>
                    <td><?php echo $contrato->tenista ?></td>
                    <td><?php echo $contrato->patrocinador ?></td>
                    <td><?php echo $contrato->firma_contrato ?></td>
                    <td><?php echo $contrato->finalizacion ?></td>
                </tr>
            <?php } ?>
        </tbody>
        </table>
    
    <?php

        require 'views/footer.php';
    ?>
</body>
</html>