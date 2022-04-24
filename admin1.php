<?php 
session_start();
//include ("../1/conexion.php");
if (isset($_SESSION["usuario"])  ){
  $cor=$_SESSION['usuario'];
  $pass=$_SESSION['contraseña'];

include("bd/conexion2.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="css/styles.css" rel="stylesheet" >
  <link rel="shortcut icon"  href="img/upam.png">
  <script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
  <link rel="stylesheet" href="css/header.css">
  <title>Datos Ex Alumno</title>
</head>
<body>
  <div class="d-flex" id="wrapper">
    <!-- NENU LATERAL-->
    <div class="border-end bg-secondary" id="sidebar-wrapper">
        <div class="sidebar-heading border-bottom bg-primary  "> <h5 class="h1 text-light"> UPAM <img class="img-fluid" width="50px" src="img/upam.png" alt=""></h5>  </div>
        <div class="sidebar-heading border-bottom bg-secondary  "> <img class="img-fluid" width="50px" src="img/1.png">
        <?php
        $cor=$_SESSION['usuario'];
        $pass=$_SESSION['contraseña'];

        $resultados = mysqli_query($conexion,"SELECT * FROM alumnos WHERE Correo='$cor' and pass = '$pass'");


          while($consulta = mysqli_fetch_array($resultados)){
        ?>
        <h5 class="text-light h6">Nombre(s): <?php echo "<br>".$consulta['nombre1']; ?> <?php echo $consulta['nombre2']."<br>"; ?></h5>
        <h5 class="text-light h6">Apellidos:<?php echo "<br>".$consulta['apaterno']; ?> <?php echo $consulta['amaterno']."<br>"; ?></h5>
        <h5 class="text-light h6">Id Carrera: <?php echo $consulta['id_carrera']; ?></h5>
        <h5 class="text-light h6">Matricula: <?php echo $consulta['id_alumno']."<br>"; ?></h5>
        <?php }?>
        </div>
        <div class="list-group list-group-flush bg-secondary">
           <a class="list-group-item list-group-item-action list-group-item-light p-3 bg-secondary text-light" href="C.php" id="Dp" >Cambiar contraseña</a>
            <a class="list-group-item list-group-item-action list-group-item-light p-3 bg-secondary text-light" href="bd/salir.php" id="Da" >Cerrar Secion</a>

        </div>
    </div>
    <!-- HEADER-->
    <div id="page-content-wrapper">
        <!---HADER MENU-->
        <nav class="navbar navbar-expand-lg navbar-primary bg-primary border-bottom">
            <div class="container-fluid">
                <button class="btn btn-dark" id="sidebarToggle">Menu</button>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
              <h2 class="mt-4 text-light h1">¡Bienvenido al menú de inicio!</h2>
            </div>

        </nav>
        <!-- contenido principal de la pagina "TABLA"-->

        <div class="container-fluid">
        <h1 class="mt-4 text-light" >¡Agenda Ex-alumnos UPAM!</h1>
        <img src="img/logoupam5.png" width="300px" class="rounded mx-auto rounded d-block" >
        <img src="img/logoupam2.png" width="300px" class="rounded mx-auto rounded d-block" >
        <!-------->
        <div class="row">
          <div class="col-12 col-lg-4"></div>
     		<div class="col-6 col-lg-2">
     			<div class="text-center">
     				<div class="m-4">
     					<button class="btn btn-outline-dark" id="btn-DP">
              Datos
              personales
              <h4>
                <div id="conteo-isw"></div>
                <h6>Ex Alumno</h6>
              </h4>
            </button>
     				</div>
     			</div>
     		</div>
        <div class="col-6 col-lg-3">
     			<div class="text-center">
     				<div class="m-4">
     					<button class="btn btn-outline-dark" id="btn-DA">
              Datos academicos
              <h4>
                <div id="conteo-isw"></div>
                <h6>Ex Alumno</h6>
              </h4>
            </button>
     				</div>
     			</div>
     		</div>
   		 </div>

       </div>
    <!--/div--->
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" ></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        <script src="js/mantenimiento.js"></script>
</body>

</html>
<?php
} else{
	header("location:login1.php");
}
?>