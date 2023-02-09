
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
    <div id="main">
        <h1 class="center">Detalle de <?php echo $this->tenista->fecha_nacimiento?></h1>
        <div class = "center"><?php echo $this->mensaje; ?></div>
        <form action="<?php echo constant('URL'); ?>tenistasAdmin/actualizarTenista" method="POST">
        
            <P>
                <label for="nombres">nombres</label><br>
                <input type="hidden" name="nombres" value = "<?php echo $this->tenista->nombres?>" required>
            </P>
            <P>
                <label for="nombres">nombres</label><br>
                <input type="text" name="nombres" value = "<?php echo $this->tenista->nombres?>" required>
            </P>
            </P>
            <P>
                <label for="apellidos">apellidos</label><br>
                <input type="text" name="apellidos" value = "<?php echo $this->tenista->apellidos?>" required>
            </P>
            </P>
           

            <p>
                <input type="submit" value="Actualizar">
            </p>
        </form> 

    </div>
    
    <?php

    require 'views/footeradmin.php';
    ?>
</body>

</html>