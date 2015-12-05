<?php 
session_start();
if(!isset($_SESSION["email"])){
	echo "<script> location.href='../index.html';</script>";
}

require("../constantes.php");
require("../conexion.php");

$email = $_POST['email'];
$username = $_POST['user'];

if(isset($_POST['password'])){

$password = md5($_POST['password']);

$sql = "UPDATE usuario 
			SET username = '".$username."', password = '".$password."' 
				WHERE email='".$email."'";

mysql_query($sql) or die ("Error".$sql);

	echo "<script>
			alert('El usuario fue modificado correctamente'); 
			location.href='adm_usuarios.php';</script>";

}

else{

$sql = "UPDATE usuario 
			SET username = '".$username."' 
				WHERE email='".$email."'";

mysql_query($sql) or die ("Error".$sql);

	echo "<script>
			alert('El usuario fue modificado correctamente'); 
			location.href='adm_usuarios.php';</script>";

}


?>