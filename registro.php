<?php 

session_start();
require("constantes.php");
require("conexion.php");

 ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<!--
Design by TEMPLATED
http://templated.co
Released for free under the Creative Commons Attribution License

Name       : Plushiness 
Description: A two-column, fixed-width design with dark color scheme.
Version    : 1.0
Released   : 20131117

-->
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Registro!</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900" rel="stylesheet" />
<link href="default.css" rel="stylesheet" type="text/css" media="all" />
<link href="fonts.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/main.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="js/main.js"></script>

<!--[if IE 6]><link href="default_ie6.css" rel="stylesheet" type="text/css" /><![endif]-->

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
<?php include ("includes/menu_usuario_normal.php"); ?>
<div id="wrapper">
	<div id="featured-wrapper">
	
		<div class="extra2 container">
			<div class="ebox1">
				<div class="hexagon"><span class="icon icon-lightbulb"></span></div>
				<div class="title">
					<h2>Registro de Usuario</h2>
					<span class="byline">Todos los campos son obligatorios</span>
					<br /><br /><br />

					<form action="insert_usuario.php" name="formulario" method="POST" onsubmit="return validarContrasena();">
						<input type="text" name="user" class="registro" placeholder="Usuario" />	<br />
						<input type="email" name="email" class="registro" placeholder="E-m@il" /><br />
						<select name="pais" id="pais" class="registro">
							
						<?php 

						$pais = "SELECT * FROM pais ORDER BY descripcion ASC";
						$resultado = mysql_query($pais) or die ("Error". $pais);

	

							while($paises = mysql_fetch_array($resultado)){

								echo "<option value='".$paises['codigo']."'>".$paises['descripcion']."</option>";

							}

						 ?>

						</select><br />
						 </input>
						<input type="password" name="password" class="registro" placeholder="Contraseña" id="password" /><br />
						<input type="password" name="vpassword" class="registro" placeholder="Repetir Contraseña" id="vpassword" /><br />
						<br /><input type="submit" name="enviar" class="button" value="Registrate!" />
					</form>


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
