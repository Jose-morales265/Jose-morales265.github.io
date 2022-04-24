<?php

include('conexion2.php');

if(isset($_POST['id'])) {
  $id = mysqli_real_escape_string($conexion, $_POST['id']);

  $query = "SELECT * from alumnos WHERE id_alumno = {$id}";

  $result = mysqli_query($conexion, $query);
  if(!$result) {
    die('Query Failed'. mysqli_error($conexion));
  }

  $json = array();
  while($row = mysqli_fetch_array($result)) {
    $json[] = array(
      'id_alumno' => $row['id_alumno'],
      'nombre1' => $row['nombre1'],
      'nombre2' => $row['nombre2'],
      'apaterno' => $row['apaterno'],
      'amaterno' => $row['amaterno'],
      'tel_cel' => $row['tel_cel'],
      'tel_fijo' => $row['tel_fijo'],
      'id_est_tra' => $row['id_est_tra'],
      'razon' => $row['razon'],
      'correo' => $row['correo'],
      'pass' => $row['pass'],
      'id_carrera' => $row['id_carrera'],
      'id_est_ti' => $row['id_est_ti'],
      'fecha_reg' => $row['fecha_reg']
    );
  }
  $jsonstring = json_encode($json[0]);
  echo $jsonstring;
}

?>