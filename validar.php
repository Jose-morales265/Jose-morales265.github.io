<?php
try{
$base=new PDO("mysql:host=localhost; dbname=upam2" ,"root", "" );
$base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$sql="SELECT * FROM alumnos WHERE correo=:login AND pass=:password";
$resultado=$base->prepare($sql);
$login=htmlentities(addslashes($_POST["login"]));
$password=htmlentities(addslashes($_POST["password"]));
$resultado->bindValue(':login',$login);
$resultado->bindValue(':password',$password);
$resultado->execute();
$numero_registros=$resultado->rowCount();
if($numero_registros!=0){
session_start();
$_SESSION["usuario"]=$_POST["login"];
$_SESSION["contraseña"]=$_POST["password"];
header("Location:admin1.php");
}else{
 header("Location:login1.php");
}
}catch(Exception $e){
 die("Error: " . $e->getMessage());
}
