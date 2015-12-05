<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Usuario Creado</title>
</head>
<body>
	
<?php 

require("constantes.php");
require("conexion.php");


$user = $_POST['user'];
$password = md5($_POST['password']);
$email = $_POST['email'];
$ip = $_SERVER['REMOTE_ADDR'];
$id_accion = 0;


$sql = "SELECT count(*) FROM usuario WHERE email='".$email."' OR username='".$user."'";

$sql_result = mysql_query($sql) or die ("Error:".$sql);

$valida_usuario = mysql_fetch_array($sql_result);

if($valida_usuario[0]==0){

	//Crear el nuevo usuario

		$insert = "INSERT INTO usuario (username,email,password)
					VALUES('".$user."','".$email."','".$password."')";

		$insert_result = mysql_query($insert) or die ("Error: No se ejecutó el INSERT");

		echo "El usuario se creó correctamente";

	//Agregar el log correspondiente a la tabla logs

		$insert_log = "INSERT INTO log (email,id_accion,ip)
						VALUES('".$email."',".$id_accion.",'".$ip."')";
		
		$insert_log_result = mysql_query($insert_log) or die ("Error al insertar el log!");

		}

else {echo "El usuario o la dirección de email ya se encuentran en la base de datos";}



 ?>

</body>
</html>