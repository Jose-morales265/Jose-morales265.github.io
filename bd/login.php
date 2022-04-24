<?php 
	if ($_POST) {
		require('conexion.php');
		$u = $_POST['user'];
		$p = $_POST['pass'];
		$conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$query = $conexion->prepare("SELECT * FROM administrador WHERE mail = :u AND pass = :p");
		$query -> bindParam(":u", $u);
		$query -> bindParam(":p", $p);
		$query -> execute();
		$usuario=$query->fetch(PDO::FETCH_ASSOC);
		$ID ="";
		if ($usuario) {
			echo "success";
			session_start();
			$_SESSION["usuario"] = $usuario["user"];
			$_SESSION['ID'] = $usuario["id_admin"];
		}else{
			echo "error";
		}
 	}
 ?>