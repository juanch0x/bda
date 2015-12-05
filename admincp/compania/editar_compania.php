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
<title>Editar compañía!</title>
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
					<h2>Editar Compañía</h2>
					<span class="byline"></span>
					<br /><br /><br />
			
<?php 

	$id_compania = $_GET['id_compania'];

				$sql = "SELECT * FROM compania_juego WHERE id_compania=".$id_compania."";
				$resultado = mysql_query($sql) or die ("Error". $sql);
				$array_compania = mysql_fetch_array($resultado);
				
				 ?>


			<center>
			<table>
			<form action="update_compania.php" method="POST">
				<tr><td>ID</td><td> <input type="text" name="id_compania" disabled value="<?php echo $id_compania;?>" /></td></tr>
				<tr><td>Compañía</td><td> <input type="text" name="compania" value="<?php echo $array_compania['compania'];?>" /></td></tr>
				<input type="text" name="id_compania" hidden value="<?php echo $id_compania;?>"
				
				<tr><td colspan="2"><center><input type="submit" value="Editar" class="button" /></center></td></tr>
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