<?php

	require('conexion2.php');

	if (isset($_POST['nombre1e3'])) {

		$id = $_POST['idalume3'];
		$nombre1 = $_POST['nombre1e3'];
		$nombre2 = $_POST['nombre2e3'];			
		$amaterno = $_POST['amaternoe3'];
		$apaterno = $_POST['apaternoe3'];
		$carrera = $_POST['carrerae3'];
		$estegre = $_POST['tituloe3'];
		$trabajo = $_POST['trabajoe3'];
		$razon = $_POST['razone3'];
		$telecel = $_POST['telecele3'];
		$telfi = $_POST['telfie3'];
		$correo = $_POST['correoe3'];
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