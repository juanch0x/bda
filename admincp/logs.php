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
<title>Registro!</title>
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
					<h2>LOGS</h2>
					<span class="byline">Chequeo de logs de usuarios</span>
					<br /><br /><br />

					<form action="" name="formulario" method="POST">
					
						<table border="1">
							<tr>
							<td>
							
								<select name="idaccion" id="idaccion" class="registro">
									
								<?php 

								$tipo_log = "SELECT * FROM tipo_accion ORDER BY descripcion ASC";
								$resultado = mysql_query($tipo_log) or die ("Error". $tipo_log);

			

									while($row = mysql_fetch_array($resultado)){

											if(isset($_POST['idaccion'])){

												
											?>

				<option value="<?php echo $row['id'] ?>" <?php if($row['id']==$_POST['idaccion']){echo "selected='selected'";} ?>><?php echo $row['descripcion']; ?></option>
											
											<?php 

											}
											else{

										echo "<option value='".$row['id']."'>".$row['descripcion']."</option>";
											}
									}

								 ?>

									</select>
									</td>
							
							<td>
								<input type="submit" class="button" />
							</td></tr>
						</table>
					</form>

<?php 
//Inicio obtención logs

if(isset($_POST['idaccion'])){
	$idaccion = $_POST['idaccion'];
					$logs = "SELECT * FROM log WHERE id_accion = ".$idaccion." ORDER BY fecha DESC";
					$resultado_logs = mysql_query($logs) or die ("Error en logs". $logs);

echo "<table border=1";

						while($row_logs = mysql_fetch_array($resultado_logs)){

							echo "<tr><td>".$row_logs['email']."</td>
								<td>".$row_logs['fecha']."</td>
								<td>".$row_logs['id_accion']."</td>
								<td>".$row_logs['ip']."</td></tr>";

						}
echo "</table>";

}
 ?>

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
