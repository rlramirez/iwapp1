<?php

//enlace a la base de datps
$conect=new mysqli("127.0.0.1","root","","app1db");

/*if ($conect) {
	echo "se conecto a la db";
}else{
	echo "error en la db";
}*/
//estraer los valores del formulario
//extract($_POST);

$nombres=$_POST['nombres'];
$apellidos=$_POST['apellidos'];
$correo=$_POST['correo'];
$tipoUser=$_POST['tipoUser'];

$sql="insert into usuarios values('','$nombres','$apellidos','$correo','$tipoUser')";
$resSql=mysqli_query($conect, $sql);
if (!$resSql) {
	echo "error de sentencia sql";
}else{
	echo "se ejecuto correctamente";
}
?>