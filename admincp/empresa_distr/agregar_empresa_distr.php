<?php 

 
session_start();
if(!isset($_SESSION["email"])){
	echo "<script> location.href='../index.html';</script>";
}


require("../../constantes.php");
require("../../conexion.php");

 ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">


<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Agregar Empresa de Distribución!</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900" rel="stylesheet" />
<link href="../../default.css" rel="stylesheet" type="text/css" media="all" />
<link href="../../fonts.css" rel="stylesheet" type="text/css" media="all" />
<link href="../../css/main.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="../js/main.js"></script>



</head>
<body>
<div id="header-wrapper">
	<div id="header" class="container">
		<div id="logo">
			<span class="icon icon-group"></span>
			<h1><a href="#">Plushiness</a></h1>
			<span>Design by <a href="http://templated.co" rel="nofollow">TEMPLATED</a></span>
		</div>
		<div id="triangle-up"></div>
	</div>
</div>

<?php
//Inclusión Menu
include ("../../includes/menu_usuario_normal.php");
?>

<div id="wrapper">
	<div id="featured-wrapper">
	
		<div class="extra2 container">
			<div class="ebox1">
				<div class="hexagon"><span class="icon icon-lightbulb"></span></div>
				<div class="title">
					<h2>Agregar Empresa</h2>
					<span class="byline"></span>
					<br /><br /><br />
			<center>
				<table>	

					<form action="" method="POST">
				
						<tr><td>Empresa de Distribución</td><td><input type="text" id="empresa_distr" name="empresa_distr" /></td></tr>
						<tr><td colspan="2"><input type="submit" value="Crear" /></td></tr>
						
					</form>

				</table>
			</center>

			
				</div>
				
<?php 

if(isset($_POST['empresa_distr'])){

$empresa_distr = $_POST['empresa_distr'];

$sql = "SELECT count(*) FROM empresa_distribucion WHERE empresa_distr='".$empresa_distr."'";

$sql_result = mysql_query($sql) or die ("Error:".$sql);

$valida_empresa = mysql_fetch_array($sql_result);

if($valida_empresa[0]==0){


		$insert = "INSERT INTO empresa_distribucion (empresa_distr)
					VALUES('".$empresa_distr."')";

		$insert_result = mysql_query($insert) or die ("Error: No se ejecutó el INSERT");

		echo "La empresa se inserto correctamente";

		echo "<script>
			alert('La empresa fue agregada correctamente'); 
			location.href='adm_empresa_distr.php';</script>";

}}

 ?>	

			</div>		

				

		</div>	

	</div>
</div>
<div id="stamp" class="container">
	<div class="hexagon"><span class="icon icon-wrench"></span></div>
</div>
<div id="copyright" class="container">
	<p>&copy; Untitled. All rights reserved. | Photos by <a href="http://fotogrph.com/">Fotogrph</a> | Design by <a href="http://templated.co" rel="nofollow">TEMPLATED</a>.</p>
</div>
</body>
</html>