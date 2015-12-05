<?php 
session_start();
if(!isset($_SESSION["email"])){
	echo "<script> location.href='../index.html';</script>";
}

require("../../constantes.php");
require("../../conexion.php");

$id_juego = $_POST['id'];

$sql = "DELETE FROM juegos WHERE id_juegos='".$id_juego."'";


mysql_query($sql) or die ("Error".$sql);

	echo "<script>
			alert('El juego fue eliminada correctamente'); 
			location.href='../index.php';</script>";

?>