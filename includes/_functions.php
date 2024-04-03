<?php
   





if (isset($_POST['accion'])){ 
    switch ($_POST['accion']){
        //casos de registros
        case 'editar_registro':
            editar_registro();
            break; 

            case 'eliminar_registro';
            eliminar_registro();  
            break;

            /*case 'acceso_user';
            acceso_user();
            break;*/


		}

	}

    function editar_registro() {
		$conexion=mysqli_connect("localhost","root","","formulario");
		extract($_POST);
		$consulta="UPDATE datos SET nombre = '$nombre', correo = '$correo',
		contraseña ='$contraseña', rol = '$rol' WHERE id = '$id' ";
        
        $resultado = mysqli_query($conexion, $consulta);
		if ($resultado) {
            // Redirigir a la página de administración después de editar el registro
            header('Location: ../views/admin_user.php');
        } else {
            // Mostrar un mensaje de error si la consulta falla
            echo "Error al actualizar el registro: " . mysqli_error($conexion);
        }
    
        // Cerrar la conexión a la base de datos
        mysqli_close($conexion);

		header('Location: ../views/admin_user.php');

}

function eliminar_registro() {
    $conexion=mysqli_connect("localhost","root","","formulario");
    extract($_POST);
    $id= $_POST['id'];
    $consulta= "DELETE FROM datos WHERE id= $id";

    mysqli_query($conexion, $consulta);


    header('Location: ../views/admin_user.php');

}

/*function acceso_user() {
    $nombre=$_POST['nombre'];
    $password=$_POST['password'];
    session_start();
    $_SESSION['nombre']=$nombre;

    $conexion=mysqli_connect("localhost","root","","r_user");
    $consulta= "SELECT * FROM user WHERE nombre='$nombre' AND password='$password'";
    $resultado=mysqli_query($conexion, $consulta);
    $filas=mysqli_fetch_array($resultado);


    if($filas['rol'] == 1){ //admin

        header('Location: ../views/user.php');

    }else if($filas['rol'] == 2){//lector
        header('Location: ../views/lector.php');
    }
    
    
    else{

        header('Location: login.php');
        session_destroy();

    } 

  
}*/