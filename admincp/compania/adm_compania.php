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
<title>ABM Compañía!</title>
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
					<h2>ABM Compañía</h2>
					<span class="byline"></span>
					<br /><br /><br />
			
		<center>		
			<table border="1">
			<th>ID</th>
			<th>Compañía</th>
			<th>Editar</th>
			<th>Borrar</th>
			
			<?php 


				$compania = "SELECT * FROM compania_juego ORDER BY id_compania ASC";
				$resultado = mysql_query($compania) or die ("Error". $compania);

				while ($array_compania = mysql_fetch_array($resultado)) {
						
					echo "<tr><td>".$array_compania['id_compania']."</td>
							<td>".$array_compania['compania']."</td>
							<td><a href='editar_compania.php?id_compania=".$array_compania['id_compania']."'>Editar</a></td>
							<td><a href='eliminar_compania.php?id_compania=".$array_compania['id_compania']."'>Borrar </a></td></tr>";
					}	


			 ?>

			</table>

<a href="agregar_compania.php" class="button">Agregar Compañía</a>

			</center>


				</div>
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