<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

include('database.php'); //NOMBRE DE NUESTRO ARCHIVO CON LA CONEXION

$nombre=$_POST['txtNombre'];
$apellido=$_POST['txtApellido'];
$identificacion=$_POST['txtIdentificacion']; 
$telefono=$_POST['txtTel'];

//NOMBRE DE LA TABLA SERA RESERVA
$consulta="INSERT INTO `reserva` (`Nombre`, `Apellido`, `Identificacion`, `Telefono`)
VALUES ('$nombre', '$apellido', '$identificacion', '$telefono')";

$resultado=mysqli_query($conexion,$consulta) or die("error de registro");



mysqli_close($conexion);
?>
<!--TODO ESTO PARA LA ALERTA XDD-->
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    </head>
    
<body>
      <!--Agregación de la NavBar-->
      <nav class="navbar navbar-expand-sm bg-primary navbar-dark ">
        <!--LOGO DE LA PAGINA-->
        <ul class="navbar-nav"> 
            <a class="navbar-brand" href="#">SRV</a>
            <!--FIN LOGO-->
          <li class="nav-item">
            <a class="nav-link" href="http://localhost/Srv1/inicio.html">INICIO</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="http://localhost/Srv1/vuelos.php">VUELOS</a>
          </li>
          <li class="nav-item">
          <a class="nav-link"  href="http://localhost/Srv1/informacion.html">INFORMACIÓN</a>
          </li>
        </ul>
      </nav>
      <!--Fin de la NavBar-->
      <!--ALERTA DE RESERVA EXITOSA-->
      
      <div class="alert alert-success">
  <strong>RESERVA GUARDADA CON EXITO!</strong> 
</div>

   
<div class="col-xl-9">
<h2>Si Quieres Regresar Usa Este Boton ó La Barra De Navegación</h2>
<br></br>
<a href="http://localhost/Srv1/vuelos.php" class="btn btn-primary" role="button">VOLVER</a>
</div>

</body>
</html>