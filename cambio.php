<?php
//session_start();
session_start();

if (isset($_SESSION["usuario"])  ) {

include("bd/conexion2.php");
$cor=$_SESSION['usuario'];
$pass=$_SESSION['contraseña'];
if($_POST){
$n1=$_POST["nombre1"];
$n2=$_POST["nombre2"];
$ap=$_POST["apellidoP"];
$am=$_POST["apellidoM"];
$nc=$_POST["numeroC"];
$nt=$_POST["numeroT"];
$razon=$_POST["razon"];
//$correo=$_POST["correo"];
$resultados = mysqli_query($conexion,"UPDATE alumnos SET nombre1='$n1', nombre2='$n2',apaterno='$ap',amaterno='$am',tel_cel='$nc',trl_fijo='$nt', razon='$razon' ,correo='$cor',  WHERE correo='$cor'");
}





}