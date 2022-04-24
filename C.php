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

  <title>Cambiar contraseña</title>
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


        while($consulta = mysqli_fetch_array($resultados))
        {?>
        <h5 class="text-light h6">Nombre(s): <?php echo "<br>".$consulta['nombre1']; ?> <?php echo $consulta['nombre2']."<br>"; ?></h5>
        <h5 class="text-light h6">Apellidos:<?php echo "<br>".$consulta['apaterno']; ?> <?php echo $consulta['amaterno']."<br>"; ?></h5>
        <h5 class="text-light h6">Id Carrera: <?php echo $consulta['id_carrera']; ?></h5>
        <h5 class="text-light h6">Matricula: <?php echo $consulta['id_alumno']."<br>"; ?></h5>
        <?php }?>
        </div>
        <div class="list-group list-group-flush bg-secondary">
           <a class="list-group-item list-group-item-action list-group-item-light p-3 bg-secondary text-light" href="admin1.php" id="Dp"  >Regresar </a> 
        </div>
    </div>
    <!-- HEADER-->
    <div id="page-content-wrapper">
        <!-- HADER MENU-->
        <nav class="navbar navbar-expand-lg navbar-light bg-primary border-bottom">
            <div class="container-fluid">
                <button class="btn btn-dark" id="sidebarToggle">Menu</button>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mt-2 mt-lg-0">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-light" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Salir</a>
                            <div class="dropdown-menu dropdown-menu-end text-center" aria-labelledby="navbarDropdown">

                                <a class="dropdown-item" href="bd/salir.php">Cerrar Sesion</a>

                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <div class="container">
          <div class="row align-items-start">
        <section class="container-fluid">
        <h1 class="mt-4 text-light" >Edite aqui su contraseña</h1>
        <form action="C.php"  method="post">
            <img src="img/logoupam5.png" width="300px" class="rounded mx-auto rounded d-block" >
            <img src="img/logoupam2.png" width="300px" class="rounded mx-auto rounded d-block" >
            <div class="from-group">
                <label class="mt-4 h4">Nueva Contraseña</label>
                <input type="password" name="NC" placeholder="Nueva Contraseña" class="form-control">
            </div>

            <div class="from-group">
              <button class="btn btn-danger   mt-4 ">Cambiar Contraseña</button>
            </div>

        </form>
        </div>
        </div>
        </section>
        <?php
            if(isset($_POST['NC'])){
                $nc=$_POST['NC'];
                $sql="UPDATE alumnos SET pass= '$nc' WHERE pass='$pass' ";

            if($conexion->query($sql)===true){
              header("location:login1.php");
            }else{
              die("Error al insertar datos: ".$conexion->error);
            }
          }
        ?>

        <div class="container-fluid"></div-->

<header style="height: 70px">
     </header>
    <div style="height: 30px;"></div>
    <div class="container">
        <div class="row">


          <div class="col-lg-12">

        </div>
        </div>
    </div>
    </div>
  </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" ></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        <script src="js/jquery-3.6.0.min.js"></script>

</body>
</html>
<?php
} else{
	header("location:login1.php");
}
?>
