<?php

session_start();
error_reporting(0);

$id= $_GET['id'];
$conexion= mysqli_connect("localhost", "root", "", "formulario");
$consulta= "SELECT * FROM datos WHERE id = $id";
$resultado = mysqli_query($conexion, $consulta);
$usuario = mysqli_fetch_assoc($resultado);

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../gestion.css">
    <title>Editar Usuario</title>
</head>
<body>
<form  action="../includes/_functions.php" method="POST">
<div class="container">
    <form action="../includes/_functions.php" method="POST" id="login" class="form">
      <h3 class="text-center">Editar usuario</h3>
      <div class="form-group">
        <label for="nombre" class="form-label">Nombre *</label>
        <input type="text" id="nombre" name="nombre" class="form-control" value="<?php echo $usuario['nombre'];?>" required>
      </div>

      <div class="form-group">
        <label for="correo">Correo:</label><br>
        <input type="email" name="correo" id="correo" class="form-control" value="<?php echo $usuario['correo'];?>">
      </div>

      <div class="form-group">
        <label for="contraseña">Contraseña:</label><br>
        <input type="password" name="contraseña" id="contraseña" class="form-control" value="<?php echo $usuario['contraseña'];?>" required>
      </div>

     <div class="form-group">
        <label for="rol" class="form-label">Rol de usuario *</label>
        <select id="rol" name="rol" class="form-control" required>
            <option value="1" <?php if ($usuario['rol'] == 1) echo "selected"; ?>>Admin</option>
            <option value="0" <?php if ($usuario['rol'] == 0) echo "selected"; ?>>Lector</option>
        </select>
        <input type="hidden" name="accion" value="editar_registro">
        <input type="hidden" name="id" value="<?php echo $id; ?>">
     </div>
                                                
      <button type="submit" class="btn btn-success">Editar</button>
      <a href="admin_user.php" class="btn btn-danger">Cancelar</a>
    </form>
  </div>                              
</form>                  
</body>
</html>