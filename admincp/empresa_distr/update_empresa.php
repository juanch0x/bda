<?php 
session_start();
if(!isset($_SESSION["email"])){
	echo "<script> location.href='../index.html';</script>";
}

require("../../constantes.php");
require("../../conexion.php");

$id_empresa_distr = $_POST['id_empresa_distr'];
$empresa_distr = $_POST['empresa_distr'];



$sql = "UPDATE empresa_distribucion 
			SET empresa_distr = '".$empresa_distr."' 
				WHERE id_empresa_distr='".$id_empresa_distr."'";

mysql_query($sql) or die ("Error".$sql);

	echo "<script>
			alert('La empresa de distribucion fue modificado correctamente'); 
			location.href='adm_empresa_distr.php';</script>";




?>