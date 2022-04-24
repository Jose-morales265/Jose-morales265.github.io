<?php 
	//SELECT a.id_alumno,c.carrera,t.estado_ti,e.estado_tra FROM alumnos a , carreras c, est_tra e, est_ti t WHERE a.correo='a7x265@gmail.com'=c.id_carrera=e.id_est_tra=t.id_est_ti LIMIT 0,30;

	session_start();

if (isset($_SESSION["usuario"])  ) {


include("conexion2.php");

$cor=$_SESSION['usuario'];
$pass=$_SESSION['contraseña'];

$resultados = mysqli_query($conexion,"SELECT a.correo, a.fecha_reg, a.id_alumno,c.carrera,t.estado_ti,e.estado_tra FROM alumnos a , carreras c, est_tra e, est_ti t WHERE a.correo='$cor'=c.id_carrera=e.id_est_tra=t.id_est_ti LIMIT 0,1");

  
  while($consulta = mysqli_fetch_array($resultados))
  {?>
    
    <tr>
    <th width="20%"> <strong>ID USUARIO:</strong></th><th><?php echo $consulta['id_alumno']."<br>"; ?></th></tr><tr>
    <th width="20%"> <strong>CARRERA:</strong></th><th><?php echo $consulta['carrera']; ?> </th></tr><tr>
    <th width="20%"> <strong>ESTADO TITULO:</strong></th><th><?php echo $consulta['estado_ti']."<br>";  ?></th></tr><tr>
    <th width="20%"> <strong>ESTADO TRABAJO:</strong></th><th><?php echo $consulta['estado_tra']."<br>"; ?></th></tr><tr>
    <th width="20%"> <strong>CORREO ELECTRONICO:</strong></th><th><?php echo $consulta['correo']."<br>"; ?></th></tr><tr>
    <th width="20%"> <strong>FECHA DE REGISTRO:</strong></th><th><?php echo $consulta['fecha_reg']."<br>"; ?></th></tr><tr>
    

    <?php }
  }else{
      echo "error";
  }

    ?>