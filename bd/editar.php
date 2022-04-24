<?php

	require('conexion2.php');

	if (isset($_POST['nombre1e'])) {

		$id = $_POST['idalume'];
		$nombre1 = $_POST['nombre1e'];
		$nombre2 = $_POST['nombre2e'];			
		$amaterno = $_POST['amaternoe'];
		$apaterno = $_POST['apaternoe'];
		$carrera = $_POST['carrerae'];
		$estegre = $_POST['tituloe'];
		$trabajo = $_POST['trabajoe'];
		$razon = $_POST['razone'];
		$telecel = $_POST['telecele'];
		$telfi = $_POST['telfie'];
		$correo = $_POST['correoe'];
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