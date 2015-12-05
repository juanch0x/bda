<?php 
session_start();
if(!isset($_SESSION["email"])){
	echo "<script> location.href='../index.html';</script>";
}

require("../constantes.php");
require("../conexion.php");

$email = $_POST['email'];

$sql = "DELETE FROM usuario WHERE email='".$email."'";


mysql_query($sql) or die ("Error".$sql);

	echo "<script>
			alert('El usuario fue eliminado correctamente'); 
			location.href='adm_usuarios.php';</script>";

?>