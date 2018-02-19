<?php
session_start();
?>
<?php // content="text/plain; charset=utf-8"

//Inicializar la variable del año, en le año actual
date_default_timezone_set('America/Monterrey');

require_once ('jpgraph/src/jpgraph.php');
require_once ('jpgraph/src/jpgraph_pie.php');
require_once ('jpgraph/src/jpgraph_pie3d.php');


	//Conectar con  la Base de datos
		$user="root";
		$pass="pirineos";
		$server="localhost";
		$bd="indicadores2";
		$link=mysqli_connect($server,$user,$pass,$bd);
	
	//mysql_connect("localhost","root","pirineos");
	//mysql_select_db("indicadores");

///para Enviar a el Archivo de Reportes
	$_SESSION['DepartamentoSend']="Impuestos";
	$_SESSION['IndicadorSend']="Impuestos";

	$year2=$_SESSION['anioget'];
	$period=$_SESSION['periodoget'];
	$_SESSION['periodo']=$period;
	
	$query2=mysqli_query($link,"Select * from anios where idanio='".$year2."'");
	mysqli_data_seek($query2,0);
    $anio = mysqli_fetch_row($query2);
	$year2=$anio[1];
	
	///Trimestre
	if($period=="Primer Trimestre")	
	$periodo="and c.year1=".$year2." and m.idmes BETWEEN 1 AND 3";

	if($period=="Segundo Trimestre")	
	$periodo="and c.year1=".$year2." and m.idmes BETWEEN 4 AND 6";
	
	if($period=="Tercer Trimestre")	
	$periodo="and c.year1=".$year2." and m.idmes BETWEEN 7 AND 9";
	
	if($period=="Cuarto Trimestre")	
	$periodo="and c.year1=".$year2." and m.idmes BETWEEN 10 AND 12";
	
	///Cuatrimestre
	if($period=="Primer Cuatrimestre")	
	$periodo="and c.year1=".$year2." and m.idmes BETWEEN 1 AND 4";

	if($period=="Segundo Cuatrimestre")	
	$periodo="and c.year1=".$year2." and m.idmes BETWEEN 5 AND 8";
	
	if($period=="Tercer Cuatrimestre")	
	$periodo="and c.year1=".$year2." and m.idmes BETWEEN 9 AND 12";

	if($period=="Primer Semestre")	
	$periodo="and c.year1=".$year2." and m.idmes<7";

	if($period=="Segundo Semestre")	
	$periodo="and c.year1=".$year2." and m.idmes>6";
	
	if($period=="Anual")	
	$periodo="and c.year1=".$year2." and m.idmes<13";
	///
        $nombreimagenfondo="vacio";
		
		
		$sql="SELECT SUM(c.compensacion) AS compensacion,SUM(c.devolucion) AS devolucion from mes m, impuest1 c WHERE m.idmes=c.idmes ".$periodo." ORDER BY  m.idmes ASC";
		$nombreimagenfondo="impuestos";
	
		$result=mysqli_query($link,$sql);


		$sql2="SELECT FORMAT(SUM(c.compensacion),2) AS compensacion,FORMAT(SUM(c.devolucion),2) AS devolucion from mes m, impuest1 c WHERE m.idmes=c.idmes ".$periodo." ORDER BY  m.idmes ASC";
		$result2=mysqli_query($link,$sql2);

		
//		Variables
		$Proveedor = array();
		$Valores = array();
		$conobjetivo = array();
		$conmes= array();
		$i=0;
//	

	//		Variables
		$Proveedor2 = array();
		$Valores2 = array();
		$conobjetivo2 = array();
		$conmes2= array();
		$j=0;
	
        while($row = mysqli_fetch_array($result))
        {   
            //guardamos en rawdata todos los vectores/filas que nos devuelve la consulta
			//$conmes[$i]=$row['mes'];
			$Valores[$i]=$row['compensacion'];
			$Valores[$i+1]=$row['devolucion'];
            $i++;
        }
		
		while($row2 = mysqli_fetch_array($result2))
        {   
            //guardamos en rawdata todos los vectores/filas que nos devuelve la consulta
			//$conmes[$i]=$row['mes'];
			$Valores2[$j]=$row2['compensacion'];
			$Valores2[$j+1]=$row2['devolucion'];
            $j++;
        }







// Some data

// A new graph
$graph = new PieGraph(650,600,'auto');

$theme_class="VividTheme";
$graph->SetTheme(new $theme_class());
$graph->title->Set("\nImpuestos");
$graph->title->SetFont(FF_ARIAL,FS_NORMAL,20);
$graph->title->SetColor("#000000");
// Setup background

// Setup background
//$graph->SetBackgroundImage('fondos/impuestos.png',BGIMG_FILLFRAME);


//$p = array();

// Position the four pies and change color
    $p= new PiePlot3D($Valores);
	//$p->SetLabelType(PIE_VALUE_ABS);
	$p->SetSize(0.3); 
	$p->SetCenter(0.5); 
	//$p->SetCenter(0.5,0.5);
	
	$lbl = array("%.1f%%","%.1f%%");
	//$p->SetLabels($lbl);
	$p->SetLegends($lbl);
	//$p->SetLabels($lbl);
	
	
    $graph->Add($p);

	$p->ShowBorder();
	//$p->SetColor('black');
	$p->ExplodeALL();

    // Set the titles

    $p->title->SetFont(FF_DEFAULT, FS_BOLD, 10);
    $p->title->SetColor('white');
	
	$nombres=array("Compensaciones $$Valores2[0]","Devoluciones $$Valores2[1]"); 
	$p->SetLegends($nombres); 


$graph->SetAntiAliasing(false);
$FEC=date('Y-m-d-', time()).date('G_i_s', time());
$_SESSION['FECB']=$FEC;
// sALIDA

$graph->Stroke(_IMG_HANDLER);

$fileName ="ImagenesReportes/".$FEC.".png";
$graph->img->Stream($fileName);

// Mandarlo al navegador
$graph->img->Headers();
$graph->img->Stream();

?>

