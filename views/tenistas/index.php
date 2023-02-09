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
       
            <h1 class = "center">Tenistas</h1>
            <table width="100%"class="table table-hover table-bordered table-round-corner" style="border: 2px solid #d7e1eb;border-radius:40px; background-color: #cab5ad;">
        <thead style= "background-color: #a98e83;">
            <tr>
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
                    <td><?php echo $tenista->nombres ?></td>
                    <td><?php echo $tenista->apellidos ?></td>
                    <td><?php echo $tenista->identificacion ?></td>
                    <td><?php echo $tenista->fecha_nacimiento ?></td>
                </tr>
            <?php } ?>
        </tbody>
        </table>
    

</body>
</html>