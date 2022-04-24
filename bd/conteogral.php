<?php
 	require('conexion.php');
 	$count = current($conexion->query("SELECT count(*) FROM alumnos")->fetch());
 	echo $count;
?>