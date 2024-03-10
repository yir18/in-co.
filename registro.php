<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="styleregistro.css">
    <script src="https://kit.fontawesome.com/32bfe0633a.js" crossorigin="anonymous"></script>
</head>
<?php
    if(isset($_GET["registro"])){
        echo '<script type="text/javascript">alert("Registro exitoso");</script>';
    }
?>
<body>
    <div class="fondo">
        <a href="Fashions.php"><span class="icono-cerrar "><i class="fa-solid fa-xmark"></i></span></a>
    
        <div class="contenedor-form login">
            <h2>Iniciar Sesion</h2>
            <form action="send.php" method="post">
                <div class="contenedor-input">
                    <span><i class="fa-solid fa-envelope"></i></span>
                    <input type="email" required name="correo" id="correo">
                    <label for="#">Email</label>
                </div>
    
                <div class="contenedor-input">
                    <span><i class="fa-solid fa-lock"></i></span>
                    <input type="password" required name="contraseña" id="contraseña">
                    <label for="#">Password</label>
                </div>
    
                <div class="recordar">
                    <label for="#"><input type="checkbox">Recordar Sesión</label>
                    <a href="#">¿Olvide la Contraseña</a>
                </div>
    
                <button type="submit" class="btn" value="iniciar sesion" name="iniciar">Iniciar Sesión</button>
    
                <div class="registrar">
                    <p>¿No tiene cuenta? <a href="#" class="registrar-link">Registrarse</a></p>
                </div>
            </form>
        </div>
    
        <div class="contenedor-form registrar">
            <h2>Registrarse</h2>
            <form method="post">
                <div class="contenedor-input">
                    <span><i class="fa-solid fa-user"></i></span>
                    <input type="text" required name="nombre" id="nombre">
                    <label for="#">Nombre completo</label>
                </div>
    
                <div class="contenedor-input">
                    <span><i class="fa-solid fa-envelope"></i></span>
                    <input type="email" required name="correo" id="correo">
                    <label for="#">Email</label>
                </div>
    
                <div class="contenedor-input">
                    <span><i class="fa-solid fa-lock"></i></span>
                    <input type="password" required name="contraseña" id="contraseña">
                    <label for="#">Password</label>
                </div>
    
                <div class="recordar">
                    <label for="#"><input type="checkbox">Acepto los terminos y condiciones</label>
                </div>
    
                <button type=" submit" name="send" class="btn" onclick="myFunction()"> Registrarme</button>
    
                <div class="registrar">
                   <p>¿Tienes una cuenta? <a href="#" class="login-link">Iniciar Sesión</a></p> 
                </div>

                
    
            </form>
        </div>
    
    
    </div>
    
    <script src="script.js"></script>



    <?php
        include ("send.php");
    ?>

    <script>
        function myFuntion() {
            window.location.href="http://localhost/registro"
        }
    </script>

</body>
</html>