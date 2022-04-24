<?php
    require('conexion.php');
    $count = current($conexion->query("SELECT count(*) FROM alumnos WHERE id_carrera = 2 ")->fetch());
    echo $count;
?>