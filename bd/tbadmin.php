<?php

	require('conexion2.php');

	$sql = "SELECT id_alumno, nombre1, nombre2, apaterno, amaterno, fecha_reg, carrera  FROM alumnos as a INNER JOIN carreras as c ON a.id_carrera=c.id_carrera ORDER BY id_alumno DESC limit 10";

	$resultado = $conexion->query($sql);
	if (!$resultado) {
		die('error en la sentencia'.mysqli_error($conexion));
	}

	$json = array();
	while ($row = mysqli_fetch_array($resultado)) {
		$json[] = array(
			'id_alumno' => $row['id_alumno'],
			'nombre1' => $row['nombre1'],
			'nombre2' => $row['nombre2'],
			'apaterno' => $row['apaterno'],
			'amaterno' => $row['amaterno'],
			'fecha_reg' => $row['fecha_reg'],
			'carrera' => $row['carrera']
		);
	}
	$jsonstring = json_encode($json);
	echo $jsonstring;
?>