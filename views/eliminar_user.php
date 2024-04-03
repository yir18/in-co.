<?
session_start();

?>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Elminiar</title>
</head>
<body>

<p>¿Desea confirmar la eliminacion del registro?</p>
    </div>

    <div class="row">
        <div class="col-sm-6">
            <form action="../includes/_functions.php" method="POST">
                <input type="hidden" name="accion" value="eliminar_registro">
                <input type="hidden" name="id" value="<?php echo $_GET['id']; ?>">
                <input type="submit" name="" value="Eliminar" class= " btn btn-danger">
                <a href="user.php" class="btn btn-success">Cancelar</a>

                               
        </div>
    </div>
</body>
</html>