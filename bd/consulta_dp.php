<?php  
session_start();

if (isset($_SESSION["usuario"])  ) {


include("conexion2.php");

$cor=$_SESSION['usuario'];
$pass=$_SESSION['contraseña'];

$resultados = mysqli_query($conexion,"SELECT * FROM alumnos WHERE Correo='$cor' and pass = '$pass'");

  
  while($consulta = mysqli_fetch_array($resultados))
  {?>
    
    <tr>
    <th width="20%"> <strong>ID USUARIO:</strong></th><th><?php echo $consulta['id_alumno']."<br>"; ?></th></tr><tr>
    <th width="20%"> <strong>NOMBRE(S):</strong></th><th><?php echo $consulta['nombre1']; ?> <?php echo $consulta['nombre2']."<br>"; ?></th></tr><tr>
    <th width="20%"> <strong>APELLIDO PATERNO:</strong></th><th><?php echo $consulta['apaterno']."<br>";  ?></th></tr><tr>
    <th width="20%"> <strong>APELLIDO MATERNO:</strong></th><th><?php echo $consulta['amaterno']."<br>"; ?></th></tr><tr>
    <th width="20%"> <strong>CORREO ELECTRONICO:</strong></th><th><?php echo $consulta['correo']."<br>"; ?></th></tr><tr>
    <th width="20%"> <strong>NUMERO DE CELULAR:</strong></th><th><?php echo $consulta['tel_cel']."<br>"; ?></th></tr><tr>
    <th width="20%"> <strong>NUMERO DE TELEFONO:</strong></th><th><?php echo $consulta['tel_fijo']."<br>"; ?></th></tr><tr>
    <th width="20%"> <strong>RAZON:</strong></th><th><?php echo $consulta['razon']."<br>"; ?></th></tr><tr>
    <th width="20%"> <strong>ID CARRERA:</strong></th><th><?php echo $consulta['id_carrera']."<br>"; ?></th></tr><tr>
    <th width="20%"> <strong>FECHA DE REGISTRO:</strong></th><th><?php echo $consulta['fecha_reg']."<br>"; ?></th></tr><tr>
    

    <?php }
  }else{
      echo "error";
  }

    ?>