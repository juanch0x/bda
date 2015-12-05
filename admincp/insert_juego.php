<?php 

session_start();
if(!isset($_SESSION["email"])){
	echo "<script> location.href='index.php';</script>";
}

require("../constantes.php");
require("../conexion.php");



$titulo = $_POST['titulo'];
$trailer = $_POST['trailer'];
$fecha = $_POST['fecha'];
$edad = $_POST['edad'];
$precio = $_POST['precio'];
$plataforma = $_POST['plataforma'];
$genero = $_POST['genero'];
$empresa = $_POST['empresa_distr'];
$compania = $_POST['compania'];
$resena = $_POST['resena'];

//Insertando el juego

$insert = "INSERT INTO juegos (titulo,resena,edad_minima,fecha_lanzamiento,trailer,precio,plataforma,id_genero,id_empresa_distribucion,id_compania)
		VALUES('".$titulo."','".$resena."','".$edad."','".$fecha."','".$trailer."','".$precio."','".$plataforma."','".$genero."','".$empresa."','".$compania."')";

$insert_result = mysql_query($insert) or die ("Error: No se ejecutó el INSERT".$insert);

//Dando id a la imagen

$sql = "SELECT * FROM juegos WHERE titulo='".$titulo."'";
				$resultado = mysql_query($sql) or die ("Error". $sql);
				$array_juego = mysql_fetch_array($resultado);

$imagen = $array_juego['id_juegos'];


copy($_FILES['archivo']['tmp_name'] , '../image/portada/' .$imagen.".jpg");

echo "<script>alert('El juego fue añadido correctamente!');</script>";
echo "<script>location.href='index.php';</script>";

 ?>