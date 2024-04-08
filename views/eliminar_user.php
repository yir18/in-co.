<?
session_start();

?>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../gestion.css">
    <title>Elminiar</title>
</head>
<body>


    
        <div class="container">
            <form action="../includes/_functions.php" method="POST">
               <p>¿Desea confirmar la eliminacion del registro?</p>
                <input type="hidden" name="accion" value="eliminar_registro">
                <input type="hidden" name="id" value="<?php echo $_GET['id']; ?>">
                <input type="submit" name="" value="Eliminar" class= " btn btn-danger">
                <a href="admin_user.php" class="btn btn-success">Cancelar</a>
                               
        </div>
</body> 
</html>