<?php

	require('conexion2.php');

	if (isset($_POST['nombre1e5'])) {

		$id = $_POST['idalume5'];
		$nombre1 = $_POST['nombre1e5'];
		$nombre2 = $_POST['nombre2e5'];			
		$amaterno = $_POST['amaternoe5'];
		$apaterno = $_POST['apaternoe5'];
		$carrera = $_POST['carrerae5'];
		$estegre = $_POST['tituloe5'];
		$trabajo = $_POST['trabajoe5'];
		$razon = $_POST['razone5'];
		$telecel = $_POST['telecele5'];
		$telfi = $_POST['telfie5'];
		$correo = $_POST['correoe5'];
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