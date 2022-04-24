<?php

	require('conexion2.php');

	if (isset($_POST['nombre1e2'])) {

		$id = $_POST['idalume2'];
		$nombre1 = $_POST['nombre1e2'];
		$nombre2 = $_POST['nombre2e2'];			
		$amaterno = $_POST['amaternoe2'];
		$apaterno = $_POST['apaternoe2'];
		$carrera = $_POST['carrerae2'];
		$estegre = $_POST['tituloe2'];
		$trabajo = $_POST['trabajoe2'];
		$razon = $_POST['razone2'];
		$telecel = $_POST['telecele2'];
		$telfi = $_POST['telfie2'];
		$correo = $_POST['correoe2'];
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