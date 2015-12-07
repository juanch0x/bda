<?php 
include ("../../includes/jgraph/jpgraph.php");
include ("../../includes/jgraph/jpgraph_pie.php");
include ("../../includes/jgraph/jpgraph_pie3d.php");


require ("../../constantes.php");
require ("../../conexion.php");

$datos_genero = array();
$datos_puntaje = array();

$generos = "SELECT SUM(visitas),genero FROM juegos RIGHT JOIN genero_juego ON(juegos.id_genero=genero_juego.id_genero) GROUP BY genero
";
	$resultado_genero = mysql_query($generos) or die ("Error" .$generos);

	while($array_generos = mysql_fetch_array($resultado_genero)){

		array_push($datos_genero,$array_generos['genero']);
		array_push($datos_puntaje,$array_generos['0']);


	}

//print_r($datos_genero);
//print_r($datos_puntaje);


//$data = array(40,60,21,33); 

$graph = new PieGraph(450,200,"auto"); 
$graph->img->SetAntiAliasing(); 
$graph->SetMarginColor('gray'); 
//$graph->SetShadow(); 

// Setup margin and titles 
$graph->title->Set("Cantidad de visitas según género"); 

$p1 = new PiePlot3D($datos_puntaje); 
$p1->SetSize(0.35); 
$p1->SetCenter(0.5); 

// Setup slice labels and move them into the plot 
$p1->value->SetFont(FF_FONT1,FS_BOLD); 
$p1->value->SetColor("black"); 
$p1->SetLabelPos(0.2); 

//$nombres=array("pepe","luis","miguel","alberto"); 
$p1->SetLegends($datos_genero); 

// Explode all slices 
$p1->ExplodeAll(); 

$graph->Add($p1); 
$graph->Stroke(); 
?>