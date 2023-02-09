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

        <table width="100%"class="table table-hover table-bordered table-round-corner" style="border: 2px solid #d7e1eb;border-radius:40px; background-color: #cab5ad;">
        <thead style= "background-color: #a98e83;">
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
                        <td><a href="<?php echo constant('URL') . 'tenistasAdmin/verTenista/' . $tenista->id_tenista ?>"><svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-edit" width="44" height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="#000000" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path d="M9 7h-3a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-3" />
                                    <path d="M9 15h3l8.5 -8.5a1.5 1.5 0 0 0 -3 -3l-8.5 8.5v3" />
                                    <line x1="16" y1="5" x2="19" y2="8" />
                                </svg></a></td>
                        <td><a href="<?php echo constant('URL') . 'tenistasAdmin/eliminarTenista/' . $tenista->id_tenista ?>"><svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-eraser" width="44" height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="#000000" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path d="M19 19h-11l-4 -4a1 1 0 0 1 0 -1.41l10 -10a1 1 0 0 1 1.41 0l5 5a1 1 0 0 1 0 1.41l-9 9" />
                                    <line x1="18" y1="12.3" x2="11.7" y2="6" />
                                </svg></a></td>

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