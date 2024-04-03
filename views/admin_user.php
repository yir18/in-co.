<?php

session_start();

?>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestio de usuarios</title>
    <link rel="stylesheet" type="text/css" href="s-gestion.css">
    <script src="https://kit.fontawesome.com/32bfe0633a.js" crossorigin="anonymous"></script>
</head>
<body class="body">
    

  		<h1>Bienvenido Administrador <?php echo $_SESSION['correo']; ?></h1>
      
		<h1>Lista de usuarios</h1>
    
     <div>
           <a class="btn btn-success" href="#">Nuevo usuario <i class="fa fa-plus"></i> </a>
           <a class="btn btn-warning" href="#">Log Out <i class="fa fa-power-off" aria-hidden="true"></i></a>
    </div>
<br>
    
      <table class=" " id= "table_id">
         <thead>    
              <tr>
                   <th>Nombre</th>
                   <th>Correo</th>
                   <th>Password</th>
                   <th>Rol</th>
                   <th>Acciones</th>
             </tr>
        </thead>
        <tbody>

<?php

$conexion=mysqli_connect("localhost","root","","formulario");               
$SQL="SELECT *FROM datos";
$dato = mysqli_query($conexion, $SQL);

if($dato -> num_rows >0){
    while($fila=mysqli_fetch_array($dato)){
    
?>
<tr>
<td><?php echo $fila['nombre']; ?></td>
<td><?php echo $fila['correo']; ?></td>
<td><?php echo $fila['contraseña']; ?></td>
<td><?php echo $fila['rol']; ?></td>

<td>

<a class="btn btn-warning" href="editar_user.php?id=<?php echo $fila['id']?> ">
<i class="fa fa-edit"></i> </a>

  <a class="btn btn-danger" href="eliminar_user.php?id=<?php echo $fila['id']?>">
<i class="fa fa-trash"></i></a>

</td>
</tr>


<?php
}
}else{

    ?>
    <tr class="text-center">
    <td colspan="16">No existen registros</td>
    </tr>
   
    <?php
    
}

?>

           
        </table>
	</body>

</html


