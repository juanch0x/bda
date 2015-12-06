

<?php 

//Se genera en el archivo "puntaje..."

include ("../../includes/jgraph/jpgraph.php");
include ("../../includes/jgraph/jpgraph_bar.php");

require ("../../constantes.php");
require ("../../conexion.php");

$datos_genero = array();
$datos_puntaje = array();

$generos = "SELECT AVG(comentarios.puntos),genero FROM juegos RIGHT JOIN genero_juego ON(juegos.id_genero=genero_juego.id_genero) LEFT JOIN comentarios ON(juegos.id_juegos=comentarios.id_juego) GROUP BY genero
";
	$resultado_genero = mysql_query($generos) or die ("Error" .$generos);

	while($array_generos = mysql_fetch_array($resultado_genero)){

		array_push($datos_genero,$array_generos['genero']);
		array_push($datos_puntaje,$array_generos['0']);


	}

		

	




//print_r($datos_genero);
//print_r($datos_puntaje);

//print_r($datos_genero);


 
// Setup the graph.
$graph = new Graph(400,240);
$graph->img->SetMargin(60,20,35,75);
$graph->SetScale("textlin");
$graph->SetMarginColor("lightblue:1.1");
$graph->SetShadow();
 
// Set up the title for the graph
$graph->title->Set("Generos mejor puntuados");
$graph->title->SetMargin(8);
$graph->title->SetFont(FF_VERDANA,FS_BOLD,12);
$graph->title->SetColor("black");
 
// Setup font for axis
$graph->xaxis->SetFont(FF_VERDANA,FS_NORMAL,10);
$graph->yaxis->SetFont(FF_VERDANA,FS_NORMAL,10);
 
// Show 0 label on Y-axis (default is not to show)
$graph->yscale->ticks->SupressZeroLabel(false);
 
// Setup X-axis labels
$graph->xaxis->SetTickLabels($datos_genero);
$graph->xaxis->SetLabelAngle(50);
 
// Create the bar pot
$bplot = new BarPlot($datos_puntaje);
$bplot->SetWidth(0.6);
 
// Setup color for gradient fill style
$bplot->SetFillGradient("navy:0.9","navy:1.85",GRAD_LEFT_REFLECTION);
 
// Set color for the frame of each bar
$bplot->SetColor("white");
$graph->Add($bplot);
 
// Finally send the graph to the browser
$graph->Stroke();

?>