<?php 
session_start();
if(!isset($_SESSION["email"])){
	echo "<script> location.href='../index.html';</script>";
}

require("../../constantes.php");
require("../../conexion.php");

$id_empresa_distr = $_POST['id_empresa_distr'];

$sql = "DELETE FROM empresa_distribucion WHERE id_empresa_distr='".$id_empresa_distr."'";


mysql_query($sql) or die ("Error".$sql);

	echo "<script>
			alert('La empresa fue eliminado correctamente'); 
			location.href='adm_empresa_distr.php';</script>";

?>