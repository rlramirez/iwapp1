<?php
extract($_POST);
include("../dll/config.php");
include("../dll/class_mysqli.php");

$miconexion = new clase_mysqli;
$miconexion->conectar(DBHOST, DBUSER, DBPASS, DBNAME);
$sql="insert into usuarios values ('','$nombres','$apellidos','$correo','$tipoUser')";
$resSql=$miconexion->consulta($sql);
if (!$resSql) {
	echo '<script>alert("SQL Incorrectos...");</script>';
	echo "<script>location.href='contactos.php'</script>";
}else{
	echo '<script>alert("SQL correctos :)...");</script>';
	echo "<script>location.href='contactos.php'</script>";
}
?>