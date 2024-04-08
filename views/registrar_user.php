<?php 
session_start()

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../gestion.css">
    <script src="https://kit.fontawesome.com/32bfe0633a.js" crossorigin="anonymous"></script>
    <title>Registro</title>
</head>
<body>
<h1>Bienvenido Administrador <br>
            <?php echo $_SESSION['correo']; ?></h1>

            <div class="container">
            <h2>Registrar usuario</h2>
            <form action="../includes/_functions.php" method="post">

                <div class="form-group">
                    <label for="#">Nombre completo</label>
                    <input class="form-control" type="text" required name="nombre" id="nombre">
                </div>
    
                <div class="form-group">
                    <label for="#">Email</label>
                    <input class="form-control" type="email" required name="correo" id="correo">                   
                </div>
    
                <div class="form-group">
                    <label for="#">Password</label>
                    <input class="form-control" type="password" required name="contraseña" id="contraseña">
                </div>

                <div class="form-group">
                    <label for="rol" class="form-label">Rol de usuario *</label>
                     <select id="rol" name="rol" class="form-control" required>
                        <option value="1" >Admin</option>
                        <option value="0" >Lector</option>
                    </select>                  
                   <button type=" submit" name="registrar_usuario" class="btn btn-success"> Registrar usuario</button>
                   <a href="admin_user.php" class="btn btn-danger">Cancelar</a>
                </div>

</div>
              

</body>
</html>