<?php 
session_start();
if(!isset($_SESSION["email"])){
	echo "<script> location.href='../index.html';</script>";
}

require("../../constantes.php");
require("../../conexion.php");

$id = $_POST['id'];
$titulo = $_POST['titulo'];
$trailer = $_POST['trailer'];
$fecha = $_POST['fecha'];
$edad = $_POST['edad'];
$precio = $_POST['precio'];
$plataforma = $_POST['plataforma'];
$genero = $_POST['genero'];
$empresa_distr = $_POST['empresa_distr'];
$compania = $_POST['compania'];
$resena = $_POST['resena'];


$sql = "UPDATE juegos 
			SET titulo = '".$titulo."',
				trailer = '".$trailer."',
				fecha_lanzamiento = '".$fecha."',
				edad_minima = ".$edad.",
				precio = ".$precio.",
				plataforma = '".$plataforma."',
				id_genero = ".$genero.",
				id_empresa_distribucion = ".$empresa_distr.",
				id_compania = ".$compania.",
				resena = '".$resena."' 
				WHERE id_juegos=".$id."";

mysql_query($sql) or die ("Error".$sql);

echo "<script>
		alert('El juego fue modificado correctamente'); 
		location.href='editar_juego.php';</script>";