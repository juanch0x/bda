<?php 
session_start();
if(!isset($_SESSION["email"])){
	echo "<script> location.href='../index.html';</script>";
}

require("../../constantes.php");
require("../../conexion.php");

$id_genero = $_POST['id_genero'];

$sql = "DELETE FROM genero_juego WHERE id_genero='".$id_genero."'";


mysql_query($sql) or die ("Error".$sql);

	echo "<script>
			alert('El genero fue eliminado correctamente'); 
			location.href='adm_genero.php';</script>";

?>