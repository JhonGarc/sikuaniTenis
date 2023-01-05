<?php
require_once('/var/www/html/sikuani/view/layouts/header.php');
?>

<a href="index.php?m=nuevo" class = "btn">Nuevo</a>

<table>
    <tr>
        <td>ID</td>
        <td>NOMBRE</td>
        <TD>ACCION</TD>
    </tr>
    <tbody>
        <?php 
        if(!empty($dato)):
            foreach($dato as $key => $value)
                foreach($value as $v):?>
                <tr>
                    <td><?php echo $v['id'] ?> </td>
                    <td><?php echo $v['nombre'] ?></td>
                    <td>
                        <a href="/index.php?m=editar&id=<?php echo $v['id']?>  ">EDITAR</a>
                        <a href="/index.php?m=eliminar&id=<?php echo $v['id']?>  ">Eliminar</a>
                    </td>
                </tr>
                <?php endforeach; ?>
        <?php else: ?>
            <tr>
                <td colspan="3">NO HAY REGISTROS</td>
            </tr>
        <?php endif ?>
    </tbody>
</table>
<?php
require_once('/var/www/html/sikuani/view/layouts/footer.php');
?>