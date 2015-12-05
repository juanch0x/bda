<?php 
session_start();
if(!isset($_SESSION["email"])){
	echo "<script> location.href='../index.html';</script>";
}

require("../../constantes.php");
require("../../conexion.php");

$id_compania = $_POST['id_compania'];
$compania = $_POST['compania'];



$sql = "UPDATE compania_juego 
			SET compania = '".$compania."' 
				WHERE id_compania='".$id_compania."'";

mysql_query($sql) or die ("Error".$sql);

	echo "<script>
			alert('La compania fue modificado correctamente'); 
			location.href='adm_compania.php';</script>";




?>