<?php

include('conexion2.php');

$search = $_POST['search'];

if(!empty($search)) {
  //la consulta debe ser aplicada a cada busqueda
  $sql="SELECT id_alumno, nombre1, nombre2, apaterno, amaterno FROM alumnos WHERE nombre1 LIKE '$search%' AND id_carrera = 4";
  $resultado= $conexion->query($sql);
  
  if(!$resultado) {
    die('Query Error' . mysqli_error($conexion));
  }
  
  $json = array();
  while($row = mysqli_fetch_array($resultado)) {
    $json[] = array(
      'id_alumno' => $row['id_alumno'],
      'nombre1' => $row['nombre1'],
      'nombre2' => $row['nombre2'],
      'apaterno' => $row['apaterno'],
      'amaterno' => $row['amaterno']
    );
  }
  $jsonstring = json_encode($json);
  echo $jsonstring;
}

?>