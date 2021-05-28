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
    <nav class="navbar navbar-expand-sm bg-primary navbar-dark fixed-top">
        <!--LOGO DE LA PAGINA-->
        <ul class="navbar-nav"> 
            <a class="navbar-brand" href="#">SRV</a>
            <!--FIN LOGO-->
          <li class="nav-item">
            <a class="nav-link" href="http://localhost/Srv1/inicio.html">INICIO</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="http://localhost/Srv1/Formularioi.html">VUELOS</a>
          </li>
          <li class="nav-item">
          <a class="nav-link"  href="http://localhost/Srv1/informacion.html">INFORMACIÓN</a>
          </li>
        </ul>
      </nav>
      <!--Fin de la NavBar-->

<!--TABLA-->
<div class="jumbotron text-center">
    <h2>Vuelos Disponibles</h2>
</div>
<div class="container table-responsive-sm col-xl">          
    <table class="table">
      <thead>
        <tr>
          <th>Número de Vuelo</th>
          <th>DESTINO</th>
          <th>AEROPUERTO</th>
          <th>AEROLINEA</th>
        </tr>
        <?php //CODIGO PARA TRAER DATOS DE LA BASE DE DATOS A LA TABLA 
        include('database.php'); 
        $sql="SELECT * from vuelos";
        $result=mysqli_query($conexion,$sql);

        while($mostrar=mysqli_fetch_array($result)){
            ?>
      </thead>
      <tbody>
        <tr>
          <td><?php echo $mostrar['numero_vuelo'] ?></td>
          <td><?php echo $mostrar['destino'] ?></td>
          <td><?php echo $mostrar['aeropuerto'] ?></td>
          <td><?php echo $mostrar['aerolinea'] ?></td>
        </tr>
        <?php
     }
      ?>
      </tbody>
    </table>
  </div>
<!--FIN TABLA-->
<div class="jumbotron text-center"> <!--Div Para agregar clases y ubicar texto-->
    <h2>Formulario Base</h2>
</div>
<!--Formulario -> Aqui ingresamos todos los input-->
<div class="container">
<div class="row">
<div class="form-group col-xl-4">
  <form action="reserva2.php" method="POST">

    <label for="nombre">Nombre:</label><br>
    <input class="form-control border border-primary shadow p-4" type="text"  name="txtNombre" placeholder="Click aqui"><br><br>
  
    <label for="apellido">Apellido:</label><br>
    <input class="form-control border border-primary shadow p-4" type="text"  name="txtApellido" placeholder="Click aqui"><br><br>
  
    <label for="identificacion">Numero Identificación:</label><br>
    <input class="form-control border border-primary shadow p-4" type="number"  name="txtIdentificacion" placeholder="Click aqui"><br><br>
  
    <label for="tel">Telefono:</label><br>
    <input class="form-control border border-primary shadow p-4" type="number"  name="txtTel" placeholder="Click aqui"><br><br>
    <button type="submit" class="btn btn-primary">Aceptar</button>
  
  </form> 
</div> <!--PRIMERA COLUMNA-->
  <div class=" col-xl"> 
          <!--SEGUNDA COLUMNA-->
<!--PARA LLAMAR DATOS NECESITO HACER UNA TABLA AL LADO DEL FORMULARIO-->
        
 <h2><?php echo "RESERVAS" ?></h2>
 <!--SEGUNDA TABLA AQUI-->
 <table class=" table table-hover ">
     <thead class="thead-light">
         <tr>
         <th>NOMBRE</th>
          <th>APELLIDO</th>
          <th>IDENTIFICACION</th>
          <th>TELEFONO</th>
         </tr>
         <?php
           include('database.php'); 
           $sql2="SELECT * from reserva";
           $result2=mysqli_query($conexion,$sql2);
   
           while($mostrar=mysqli_fetch_array($result2)){
         ?>
     </thead>
     <tbody>
         <tr>
             <td><?php echo $mostrar['Nombre'] ?></td>
             <td><?php echo $mostrar['Apellido'] ?></td>
             <td><?php echo $mostrar['Identificacion'] ?></td>
             <td><?php echo $mostrar['Telefono'] ?></td>
         </tr>
         <?php
     }
      ?>
     </tbody>
    </table>

    </div>
    <div class="col-xl">
  <!--<div class="col jumbotron">
          <h2>Text Area</h2> -->
       
    </div><!--Div fin de este container-->
  </div> 
  
  
    </div>
   
    </div>

</body>
</html>