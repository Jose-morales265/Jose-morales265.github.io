<?php
	require("conexion2.php");

	if(isset($_POST['passnew'])){

		$id = $_POST['ID'];
		$pw = $_POST['passnew'];
		$vacio = "";

		if($id != $vacio && $pw != $vacio){

			$sql = "UPDATE administrador SET pass = '$pw' WHERE id_admin = '$id' ";
			
			$sentencia = $conexion->query($sql);

			if($sentencia === true){

				echo "success";

			}else{

				echo "error ejecucion";
			}

		}else{
			echo "completar campos";
		}

	}else{
		echo "sin datos";
	}	
?>