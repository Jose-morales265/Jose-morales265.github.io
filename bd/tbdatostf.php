<?php  
	require('conexion2.php');

	$sql = "SELECT id_alumno, nombre1, nombre2, apaterno, amaterno, tel_cel, tel_fijo, razon, correo, fecha_reg, carrera, estado_ti, estado_tra FROM alumnos as a INNER JOIN carreras as c ON a.id_carrera=c.id_carrera INNER JOIN est_ti as et on et.id_est_ti = a.id_est_ti INNER JOIN est_tra as eta ON eta.id_est_tra = a.id_est_tra WHERE a.id_carrera = 3";

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
			'tel_cel' => $row['tel_cel'],
			'tel_fijo' => $row['tel_fijo'],
			'estado_tra' => $row['estado_tra'],
			'razon' => $row['razon'],
			'estado_ti' => $row['estado_ti'],
			'correo' => $row['correo'],
			'fecha_reg' => $row['fecha_reg'],
			'carrera' => $row['carrera']
		);
	}
	$jsonstring = json_encode($json);
	echo $jsonstring;

?>