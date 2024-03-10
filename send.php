<?php

include ("conexion.php");

if (isset($_POST["send"])) {
    if(
        strlen($_POST["nombre"]) >= 1 &&
        strlen($_POST["correo"]) >= 1 &&
        strlen($_POST["contraseña"]) >= 1
    ) {
        $nombre = trim($_POST["nombre"]);
        $correo = trim($_POST["correo"]);
        $contraseña = trim($_POST["contraseña"]);
        $consulta = "INSERT INTO datos(nombre, correo, contraseña)
        VALUES ('$nombre','$correo','$contraseña')";
        $resultado = mysqli_query($conex, $consulta);

        echo '<script type="text/javascript">window.location.href = "registro.php?registro=1";</script>';
    }
}

?>


<?php
session_start();

$conexion = new mysqli("localhost", "root", "", "formulario");

if ($conexion->connect_error) {
    die("Error de conexión a la base de datos: " . $conexion->connect_error);
}
if (isset($_POST["iniciar"])) {

    $correo = trim($_POST["correo"]);
    $contraseña = trim($_POST["contraseña"]);

    // Validar el correo y la contraseña
    $sql = "SELECT * FROM datos WHERE correo = '$correo' AND contraseña = '$contraseña'";
    $resultado = $conexion->query($sql);

    if ($resultado->num_rows > 0) {
        // Autenticación exitosa
        $_SESSION["correo"] = $correo;
        echo '<script type="text/javascript">window.location.href = "Fashions.php";</script>';
        echo "Autenticación exitosa. Bienvenido, $correo!";
    } else {
        // Autenticación fallida
        echo "Error en la autenticación. Verifica tu correo y contraseña.";
    }
}
$conexion->close();
?>