<?php 
session_start();
if(!isset($_SESSION["email"])){
	echo "<script> location.href='../index.html';</script>";
}

require("../../constantes.php");
require("../../conexion.php");

$id_genero = $_POST['id_genero'];
$genero = $_POST['genero'];



$sql = "UPDATE genero_juego 
			SET genero = '".$genero."' 
				WHERE id_genero='".$id_genero."'";

mysql_query($sql) or die ("Error".$sql);

	echo "<script>
			alert('El genero fue modificado correctamente'); 
			location.href='adm_genero.php';</script>";




?>