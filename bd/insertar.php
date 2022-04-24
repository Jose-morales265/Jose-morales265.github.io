<?php

	require('conexion2.php');

	if (isset($_POST['nombre1'])) {

		$nombre1 = $_POST['nombre1'];
		$nombre2 = $_POST['nombre2'];			
		$amaterno = $_POST['amaterno'];
		$apaterno = $_POST['apaterno'];
		$carrera = $_POST['RC'];
		$estegre = $_POST['RE'];
		$trabajo = $_POST['RS'];
		$razon = $_POST['razon'];
		$telecel = $_POST['telecel'];
		$telfi = $_POST['telfi'];
		$pass = $_POST['pass'];
		$correo = $_POST['correo'];
		$vacio = "";

		if ($nombre1 != $vacio && $amaterno != $vacio && $apaterno != $vacio && $carrera != $vacio && $estegre != $vacio && $trabajo != $vacio && $correo != $vacio && $telecel != $vacio && $pass != $vacio && $correo != $vacio && $trabajo != $vacio && $razon != $vacio){

			$sql="INSERT INTO alumnos(nombre1,nombre2, apaterno, amaterno, tel_cel, tel_fijo, id_est_tra, razon, correo, pass, id_carrera, id_est_ti) VALUES ('$nombre1', '$nombre2', '$apaterno', '$amaterno', '$telecel', '$telfi', '$trabajo', '$razon', '$correo', '$pass', '$carrera','$estegre')";

			$sentencia = $conexion->query($sql);

			if ($sentencia === true){

				echo "success";
				
			}else{
				echo "error";
			}

		}else{
			echo "completar";
		}
	}
?>