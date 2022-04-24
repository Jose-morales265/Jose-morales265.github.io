<?php  

	require('conexion2.php');

	if (isset($_POST['id'])) {

		$id = $_POST['id'];

		$sql = "DELETE FROM alumnos WHERE id_alumno = $id ";

		$resultado = mysqli_query($conexion, $sql);

		if (!$resultado) {
			die("error".$conexion-> error);
		}
		echo "borrado";
	}


?>