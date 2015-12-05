<?php 

 
session_start();
if(!isset($_SESSION["email"])){
	echo "<script> location.href='../../index.php';</script>";
}


require("../../constantes.php");
require("../../conexion.php");

 ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">


<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Busca el juego para editar!</title>
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
					<h2>Editar Juego</h2>
					<span class="byline">Para editar el juego simplemente haz click en la imagen del mismo</span>
					<br /><br /><br />
			
				<form action="" method="GET">
				<input type="text" name="busqueda"><br/>
				<input type="submit" value="Buscar" class="button">		
				</form>
					<br/><br/>
				<?php 

						if(isset($_GET['busqueda'])){

							$sql = "SELECT * FROM juegos WHERE titulo LIKE '%".$_GET['busqueda']."%'";
							$result = mysql_query($sql) or die ("Error". $sql);
							echo "<center><table>";
							while ($array_busqueda = mysql_fetch_array($result)) {
								echo "<tr><td><b>".$array_busqueda['titulo']."</b></td></tr>";
								echo "<tr><td><a href='editar_juego_form.php?id=".$array_busqueda['id_juegos']."'><img src='../../image/portada/".$array_busqueda['id_juegos'].".jpg'/></a></td></tr>";
	}


						}

				 ?>
			</table>
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