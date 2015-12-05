<?php 
session_start();
if(!isset($_SESSION["email"])){
	echo "<script> location.href='index.php';</script>";
}

require("../constantes.php");
require("../conexion.php");

$email = $_GET['email'];

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Eliminar Usuario</title>
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
					<h2>Editar Usuario</h2>
					<span class="byline">Todos los campos son obligatorios</span>
					<br /><br /><br />

				<?php 

				$sql = "SELECT * FROM usuario WHERE email='".$email."'";
				$resultado = mysql_query($sql) or die ("Error". $sql);
				$array_usuario = mysql_fetch_array($resultado);
				
				 ?>

<script type="">
function pregunta(email){ 
return confirm('¿Estas seguro de eliminar el usuario?'); 
} </script>


			<center>
			<table>
			<form action="delete_usuario.php" method="POST" onsubmit="return pregunta();">
				<tr><td>Email</td><td> <input type="text" name="email" disabled value="<?php echo $email;?>" /></td></tr>
				<tr><td>Usuario</td><td> <input type="text" name="user" disabled value="<?php echo $array_usuario['username'];?>" /></td></tr>
				<input type="text" name="user" hidden value="<?php echo $array_usuario['username'];?>"/>
				<input type="text" name="email" hidden value="<?php echo $email;?>"
				
				<tr><td colspan="2"><center><input type="submit" value="Borrar" class="button" /></center></td></tr>
			</form>
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
