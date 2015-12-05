<?php 
session_start();
if(!isset($_SESSION["email"])){
	echo "<script> location.href='../index.html';</script>";
}

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
<?php 
require("../constantes.php");
require("../conexion.php");
?>

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Administración de Usuarios</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900" rel="stylesheet" />
<link href="../default.css" rel="stylesheet" type="text/css" media="all" />
<link href="../fonts.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" href="../css/main.css" />
<script type="text/javascript" src="../js/main.js"></script>

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
<?php include ("../includes/menu_usuario_normal.php"); ?>
<div id="wrapper">
	<div id="featured-wrapper">
	
		<div class="extra2 container">
			<div class="ebox1">
				<div class="hexagon"><span class="icon icon-lightbulb"></span></div>
				<div class="title">
					<h2>ADMIN HOMEPAGE</h2>
					<span class="byline"></span>
					<br /><br /><br />

					
					<h3>Bienvenido <?php echo $_SESSION['email']; ?></h3>				

			
					<a href="adm_usuarios.php" class="button">Administrar Usuarios</a>
					<a href="genero/adm_genero.php" class="button">Administrar Generos</a>
					<a href="empresa_distr/adm_empresa_distr.php" class="button">Administrar Empresas de Distribucion</a>
					<a href="compania/adm_compania.php" class="button">Administrar Compañías</a>
					<a href="agregar_juego.php" class="button">Agregar Juego</a>
					<a href="juegos/editar_juego.php" class="button">Modificar Juego</a>
					<a href="juegos/borrar_juego.php" class="button">Borrar Juego</a>

					</div>
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
