<?php

	require('conexion2.php');

	if (isset($_POST['nombre1e4'])) {

		$id = $_POST['idalume4'];
		$nombre1 = $_POST['nombre1e4'];
		$nombre2 = $_POST['nombre2e4'];			
		$amaterno = $_POST['amaternoe4'];
		$apaterno = $_POST['apaternoe4'];
		$carrera = $_POST['carrerae4'];
		$estegre = $_POST['tituloe4'];
		$trabajo = $_POST['trabajoe4'];
		$razon = $_POST['razone4'];
		$telecel = $_POST['telecele4'];
		$telfi = $_POST['telfie4'];
		$correo = $_POST['correoe4'];
		$vacio = "";

		if ($id != $vacio && $nombre1 != $vacio && $amaterno != $vacio && $apaterno != $vacio && $carrera != $vacio && $estegre != $vacio && $trabajo != $vacio && $correo != $vacio && $telecel != $vacio && $razon != $vacio){

			$sql="UPDATE alumnos SET nombre1 = '$nombre1', nombre2 = '$nombre2', apaterno = '$apaterno', amaterno = '$amaterno', id_carrera = '$carrera', id_est_ti = '$estegre', id_est_tra = '$trabajo', razon = '$razon', tel_cel = '$telecel', tel_fijo = '$telfi', correo = '$correo' WHERE id_alumno = '$id' ";

			$sentencia = $conexion->query($sql);

			if ($sentencia === true){

				echo "success";
				
			}else{
				echo "error de ejecucion";
			}

		}else{
			echo "error datos vacios";
		}
	}else{
		echo "error al encontrar los datos";
	}
?>