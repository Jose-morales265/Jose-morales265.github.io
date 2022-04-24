<?php 
session_start();
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
  <title>Datos perosnales del ex-alumno</title>
</head>
<body>
 <!--Barra de navegacion-->
 
 <header class="fixed-top">
            <nav class="navbar navbar-expand-lg navbar-dark bg-primary bg-gradient fs-5">
                <div class="container-fluid">
                    <div class="m-3">
                        <a class="navbar-brand" href="#">
                            <img src="img/upam.png" alt="" width="30" height="30">
                            Datos personales ex-Alumnos
                        </a>
                    </div>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="floa-end">
                        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                            <div class="navbar-nav">
                                <a class="nav-link" aria-current="page" href="admin1.php">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-house" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd" d="M2 13.5V7h1v6.5a.5.5 0 0 0 .5.5h9a.5.5 0 0 0 .5-.5V7h1v6.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5zm11-11V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z"/>
                                        <path fill-rule="evenodd" d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z"/>
                                    </svg>
                                    Inicio
                                </a>
                                
                                <a class="nav-link" aria-current="page" href="bd/salir.php">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-left" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd" d="M6 12.5a.5.5 0 0 0 .5.5h8a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 0-.5-.5h-8a.5.5 0 0 0-.5.5v2a.5.5 0 0 1-1 0v-2A1.5 1.5 0 0 1 6.5 2h8A1.5 1.5 0 0 1 16 3.5v9a1.5 1.5 0 0 1-1.5 1.5h-8A1.5 1.5 0 0 1 5 12.5v-2a.5.5 0 0 1 1 0v2z"/>
                                        <path fill-rule="evenodd" d="M.146 8.354a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L1.707 7.5H10.5a.5.5 0 0 1 0 1H1.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3z"/>
                                    </svg>
                                    Cerrar sesión
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
  </header>
  <div class="container-fluid">
        <h1 class="mt-4 text-light" >Datos Personales del Ex-Alumno</h1>
            <!--div class="table " -->
              <div class="table" width="1000px"  id="table">
              
              <table class=" table-hover table-bordered" id="Alumnos1">
                    
                        <!--thead-->
                        <tbody id="Alumnos2">
                          <tr>
                            <th width="20%"> <strong>ID USUARIO:</strong></th>
                            <th id="Alumnos"></th>
                          </tr>
                          <tr>
                            <th width="20%"> <strong>NOMBRE:</strong> </th>
                            <th id="Alumnos"></th>
                          </tr>
                          <tr>
                            <th width="20%"> <strong>APELLIDO PATERNO:</strong> </th>
                            <th id="Alumnos"></th>
                          </tr>
                          <tr>
                            <th width="20%"> <strong>APELLIDO MATERNO:</strong> </th>
                            <th id="Alumnos"></th>
                          </tr>
                          <tr>
                            <th width="20%"> <strong>CORREO ELECTRONICO:</strong> </th> 
                            <th id="Alumnos"></th>
                          </tr>
                          <tr>
                            <th width="20%"> <strong>NUMERO DE CELULAR :</strong></th>
                            <th id="Alumnos"></th>
                          </tr>
                          <tr>
                            <th width="20%"> <strong>ID CARRERA:</strong> </th>
                            <th  id="Alumnos"></th>
                          <tr>
                            <th> <strong>ID ESTADO:</strong> </th>
                            <th></th>
                          </tr>
                          </tbody>
                        <!--/thead-->
                        <!--tbody id="Alumnos2"-->
                        </tbody>
                  </table>
                </div>
              </div--->
<script src="js/jquery-3.6.0.min.js"></script>
  <script type="text/javascript" src="js/jquery.table2excel.js"></script>
	<script src="js/mantenimiento.js"></script>
    <script>
          $(document).ready(function hola() {
            var parametros = 
      {
        "id_alumno" : "123456789",
        "Nombre" : "dostin",
        "Apellido_paterno" : "hurtado",
        "Apellido_materno" : "123456789",
        "Correo" : "123456789",
        "contraseña" : "123456789",
        "celular" : "123456789",
        "id_carrera" : "123456789",
        "id_estatus" : "123456789"
      };

      $.ajax({
        data: parametros,
        url: 'bd/consulta_dp.php',
        //url: 'validar.php'
        type: 'POST',
        
        beforesend: function()
        {
          $('#Alumnos1').html("Mensaje antes de Enviar");
        },

        success: function(mensaje)
        {
          $('#Alumnos1').html(mensaje);
        }
      });
      });
        </script>
</body>
</html>
<?php
} else{
	header("location:login1.php");
}
?>