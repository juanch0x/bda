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
<title>Juego</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900" rel="stylesheet" />
<link href="default.css" rel="stylesheet" type="text/css" media="all" />
<link href="fonts.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/main.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="js/main.js"></script>

<!--[if IE 6]><link href="default_ie6.css" rel="stylesheet" type="text/css" /><![endif]-->

<!--FancyBox para youtube-->
<!-- Add jQuery library -->
<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>

<!-- Add mousewheel plugin (this is optional) -->
<script type="text/javascript" src="includes/lib/jquery.mousewheel-3.0.6.pack.js"></script>

<!-- Add fancyBox -->
<link rel="stylesheet" href="includes/source/jquery.fancybox.css?v=2.1.5" type="text/css" media="screen" />
<script type="text/javascript" src="includes/source/jquery.fancybox.pack.js?v=2.1.5"></script>

<script type="text/javascript" src="includes/source/youtubemodal.js"></script>


<!--FIN -->

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
<?php 
				$id_juego = $_GET['id'];
		
				$juego = "SELECT * FROM juegos INNER JOIN genero_juego ON juegos.id_genero=genero_juego.id_genero
												INNER JOIN compania_juego ON juegos.id_compania=compania_juego.id_compania
					INNER JOIN empresa_distribucion ON juegos.id_empresa_distribucion=empresa_distribucion.id_empresa_distr
									WHERE id_juegos=".$id_juego."";

				$resultado = mysql_query($juego) or die ("Error". $juego);

				$array_juego = mysql_fetch_array($resultado);?>

					<h2><?php echo $array_juego['titulo']; ?></h2>
					<span class="byline"></span>
					<br /><br /><br />
<?php
// AGREGAR COMENTARIO // 

				if(isset($_POST['comentario'])){
					$puntos = $_POST['puntos'];
					$email = $_SESSION['email'];
					$comentario = $_POST['comentario'];
					$sql = "INSERT INTO comentarios (email,id_juego,comentario_juego,puntos)
						VALUES('".$email."',".$id_juego.",'".$comentario."',".$puntos.")";
					$insert_result = mysql_query($sql) or die ("Error: No se ejecutó el sql".$sql);

				}

//CALCULAR PUNTAJE JUEGO//
				$cont = 0;
				$promedio_puntos = 0;
				$puntaje = "SELECT puntos FROM comentarios WHERE id_juego=".$id_juego."";
				$resultado_puntaje = mysql_query($puntaje) or die ("Error". $puntaje);
				while ($array_puntaje = mysql_fetch_array($resultado_puntaje)) {
					$cont++;
					$promedio_puntos = $array_puntaje['puntos'] + $promedio_puntos;
				}
				if($cont!=0){
				$promedio_puntos = $promedio_puntos / $cont;
				}
				else{$promedio_puntos=0;}
				
				?>

<center>
<table border="1">
	
<tr>
	<td rowspan="10"><?php echo "<img src='image/portada/".$array_juego['id_juegos'].".jpg'/>"; ?></td>
	<td><b>Titulo</b></td>
	<td><?php echo $array_juego['titulo']; ?></td>
</tr>
<tr>
	<td><b>Trailer</b></td>
	<td><?php echo "<a class='fancybox fancybox.iframe' href='http://www.youtube.com/embed/".$array_juego['trailer']."'>Ver Trailer</a>"; ?></td>
</tr>
<tr>
	<td><b>Lanzamiento</b></td>
	<td><?php echo $array_juego['fecha_lanzamiento']; ?></td>
</tr>
<tr>
	<td><b>Edad Mínima</b></td>
	<td><?php echo $array_juego['edad_minima']; ?></td>
</tr>	
<tr>
	<td><b>Precio</b></td>
	<td><?php echo $array_juego['precio'] ?></td>
</tr>
<tr>
	<td><b>Plataforma</b></td>
	<td><?php echo $array_juego['plataforma'] ?></td>
</tr>
<tr>
	<td><b>Genero</b></td>
 	<td><?php echo $array_juego['genero']; ?></td>
</tr>
<tr>
	<td><b>Compañia</b></td>
	<td><?php echo $array_juego['compania']; ?></td>
</tr>
<tr>
	<td><b>Distribución</b></td>
	<td><?php echo $array_juego['empresa_distr']; ?></td>
</tr>
<tr>
	<td><b>Puntaje</b></td><td>
		<?php echo $promedio_puntos; ?>
	</td>	
</tr>
<tr>
	<td colspan="3">
		<b>Comentar</b>
		<form method="POST" action="">
		<textarea style="width: 99%;" name="comentario"></textarea>
	</td>
<tr>
	<td>
		<input type="submit" value="Comentar!">
	</td>
	<td>
		<b>Puntuar</b>
	</td>
	<td><select name="puntos">
		<?php 
			for ($i=1; $i < 11 ; $i++) {
				echo "<option value='".$i."'>".$i."</option>";
			}
		 ?>
		</select>
		</form>
	</td>
</tr>
<tr>
	<td colspan="3">
	<table style="width:100%;">
	
		<?php 
			$comentarios = "SELECT * FROM comentarios WHERE id_juego=".$id_juego."";
			$resultado_comentarios = mysql_query($comentarios) or die ("Error". $comentarios);
			while ($array_comentarios = mysql_fetch_array($resultado_comentarios)) {
			echo "<tr><td>".$array_comentarios['email']."</td>
				<td>".$array_comentarios['comentario_juego']."</td></tr>";
			} ?>
			</table>
		</td>
</tr>


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

</body>
</html>
