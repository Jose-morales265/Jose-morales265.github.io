<?php 
	
	$conexion = null;
	$servidor = 'localhost';
	$bd='upam2';
	$user='root';
	$pass='';

	try{
		$conexion = new PDO('mysql:host='.$servidor.';dbname='.$bd,$user,$pass);
	}catch(PDOException $e){
		echo "Error en la conexion!";
		exit;
	}
	return $conexion;
?>