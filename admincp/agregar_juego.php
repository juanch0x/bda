<?php 

 
session_start();
if(!isset($_SESSION["email"])){
	echo "<script> location.href='../index.html';</script>";
}


require("../constantes.php");
require("../conexion.php");

 ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">


<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Agregar Juego</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900" rel="stylesheet" />
<link href="../default.css" rel="stylesheet" type="text/css" media="all" />
<link href="../fonts.css" rel="stylesheet" type="text/css" media="all" />
<link href="../css/main.css" rel="stylesheet" type="text/css" />
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
include ("../includes/menu_usuario_normal.php");
?>

<div id="wrapper">
	<div id="featured-wrapper">
	
		<div class="extra2 container">
			<div class="ebox1">
				<div class="hexagon"><span class="icon icon-lightbulb"></span></div>
				<div class="title">
					<h2>Agregar Juego</h2>
					<span class="byline">Al agregar el trailer de un juego utilizar el codigo que sigue a watch?v=<br>
					Ejemplo: https://www.youtube.com/watch?v=<b>jSi2LDkyKmI</b> se utiliza <b>jSi2LDkyKmI</b></span>
					<br /><br /><br />
			<center>
				<table>	

					<form action="insert_juego.php" method="POST" enctype="multipart/form-data">
				
						<tr><td>Titulo</td><td><input type="text" id="titulo" name="titulo" /></td></tr>
						<tr><td>Imagen</td><td><input type="file" id="archivo" name="archivo" /></td></tr>
						<tr><td>Trailer</td><td><input type="text" id="trailer" name="trailer" /></td></tr>
						<tr><td>Fecha de Lanzamiento</td><td><input type="DATE" id="fecha" name="fecha" /></td></tr>
						<tr><td>Edad Mínima</td><td><input type="text" id="edad" name="edad" /></td></tr>		
						<tr><td>Precio</td><td><input type="text" id="precio" name="precio" /></td></tr>
						<tr><td>Plataforma</td><td><input type="text" id="plataforma" name="plataforma" /></td></tr>
						<tr><td>Genero</td><td><select name="genero" id="genero">
							
							<?php 

								////////////////////
								//COMBO BOX GENERO//
								////////////////////

						$genero = "SELECT * FROM genero_juego ORDER BY genero ASC";
						$resultado = mysql_query($genero) or die ("Error". $genero);

	

							while($generos = mysql_fetch_array($resultado)){

								echo "<option value='".$generos['id_genero']."'>".$generos['genero']."</option>";

							}

						 ?>

						</select></td></tr>
						
						<tr><td>Empresa de Distribucion</td><td><select name="empresa_distr" id="empresa_distr">
							
							<?php 

								//////////////////////////////////
								//COMBO BOX EMPRESA DISTRIBUCION//
								/////////////////////////////////

						$empresa_distr = "SELECT * FROM empresa_distribucion ORDER BY empresa_distr ASC";
						$resultado = mysql_query($empresa_distr) or die ("Error". $empresa_distr);

	

							while($empresas = mysql_fetch_array($resultado)){

								echo "<option value='".$empresas['id_empresa_distr']."'>".$empresas['empresa_distr']."</option>";

							}

						 ?>

						</select></td></tr>

						
						<tr><td>Compañía</td><td><select name="compania" id="compania">
							
							<?php 

								//////////////////////////////////
								////COMBO BOX EMPRESA COMPAÑÍA////
								/////////////////////////////////

						$compania = "SELECT * FROM compania_juego ORDER BY id_compania ASC";
						$resultado = mysql_query($compania) or die ("Error". $compania);

	

							while($companias = mysql_fetch_array($resultado)){

								echo "<option value='".$companias['id_compania']."'>".$companias['compania']."</option>";

							}

						 ?>

						</select></td></tr>

						
						<tr><td>Reseña</td><td><textarea name="resena" id="resena" cols="22" rows="8"></textarea></td></tr>
						<tr><td colspan="2"><input type="submit" /></td></tr>


					</form>

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
