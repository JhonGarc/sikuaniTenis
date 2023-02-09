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

    <h1 class="center">Estadisticas</h1>
    <table width="100%" class="table table-hover table-bordered table-round-corner" style="border: 2px solid #bce4b8;border-radius:40px; background-color: gray;">
        <thead class="table-dark">
            <tr>
                <th>RANKING</th>
                <th>ENTRENADOR</th>
                <th>CANTIDAD DE TENISTAS</th>

            </tr>
        </thead>
        <tbody>
            <?php
            include_once 'models/estadistica.php';
            foreach ($this->estadisticas as $row) {
                $estadistica = new Estadistica();
                $estadistica = $row;
            ?>
                <tr>
                    <td><?php echo $estadistica->ranking ?></td>
                    <td><?php echo $estadistica->entrenador ?></td>
                    <td><?php echo $estadistica->cantidad_tenistas ?></td>

                </tr>
            <?php } ?>



</body>

</html>