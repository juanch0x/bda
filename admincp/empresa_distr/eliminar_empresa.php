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
<title>Eliminar empresa de distribucion!</title>
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
					<h2>Eliminar Empresa</h2>
					<span class="byline"></span>
					<br /><br /><br />


					<?php 

					$id_empresa_distr = $_GET['id_empresa_distr'];

									$sql = "SELECT * FROM empresa_distribucion WHERE id_empresa_distr=".$id_empresa_distr."";
									$resultado = mysql_query($sql) or die ("Error". $sql);
									$array_empresa = mysql_fetch_array($resultado);
									
									 ?>

					<script type="">
					function pregunta(genero){ 
					return confirm('¿Estas seguro de eliminar la empresa?'); 
					} </script>


			
		<center>
			<table>
			<form action="delete_empresa.php" method="POST" onsubmit="return pregunta();">
				<tr><td>ID</td><td> <input type="text" name="id_empresa_distr" disabled value="<?php echo $id_empresa_distr;?>" /></td></tr>
				<tr><td>Empresa de Distribucion</td><td> <input type="text" name="empresa_distr" disabled value="<?php echo $array_empresa['empresa_distr'];?>" /></td></tr>
				<input type="text" name="empresa_distr" hidden value="<?php echo $array_empresa['empresa_distr'];?>"/>
				<input type="text" name="id_empresa_distr" hidden value="<?php echo $id_empresa_distr;?>"
				
				<tr><td colspan="2"><center><input type="submit" value="Borrar" class="button" /></center></td></tr>
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