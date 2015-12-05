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
					<h2>Agregar, Borrar o Editar usuarios</h2>
					<span class="byline">Todos los campos son obligatorios</span>
					<br /><br /><br />

				

			
			<div id="admin_principal_lista_usuario">
			<center>		
			<table border="1">
			<th>E-mail</th>
			<th>Usuario</th>
			<th>Contraseña</th>	
			<th>Editar</th>
			<th>Eliminar</th>
			
			<?php 


				$usuario = "SELECT * FROM usuario ORDER BY email DESC";
				$resultado = mysql_query($usuario) or die ("Error". $usuario);

				while ($array_usuario = mysql_fetch_array($resultado)) {
						
					echo "<tr><td>".$array_usuario['email']."</td>
							<td>".$array_usuario['username']."</td>
							<td>".$array_usuario['password']."</td>
							<td><a href='editar_usuario.php?email=".$array_usuario['email']."'>Editar</a></td>
							<td><a href='eliminar_usuario.php?email=".$array_usuario['email']."'>Borrar </a></td></tr>";
					}	


			 ?>

			</table>
			</center>
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
