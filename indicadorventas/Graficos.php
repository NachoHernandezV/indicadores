<?php
session_start();
?>
<?php // content="text/plain; charset=utf-8"

require_once ('jpgraph/src/jpgraph.php');
require_once ('jpgraph/src/jpgraph_pie.php');
require_once ('jpgraph/src/jpgraph_pie3d.php');


	//Conectar con  la Base de datos
		//mysql_connect("localhost","root","pirineos");
	//mysql_select_db("indicadores");
	
	//Conectar con  la Base de datos
		$user="root";
		$pass="pirineos";
		$server="localhost";
		$bd="indicadores2";
		$link=mysqli_connect($server,$user,$pass,$bd);

///para Enviar a el Archivo de Reportes
	$_SESSION['DepartamentoSend']="Tesoreria";
	$_SESSION['IndicadorSend']="Tesoreria";
	$_SESSION['periodo']=$period;
	
	$query2=mysqli_query($link,"Select * from anios where idanio='".$year2."'");
	mysqli_data_seek($query2,0);
    $anio = mysqli_fetch_row($query2);
	$year21=$anio[1];
	
	///Trimestre
	if($period=="Primer Trimestre")	
	$periodo="and c.year1=".$year21." and m.idmes BETWEEN 1 AND 3";

	if($period=="Segundo Trimestre")	
	$periodo="and c.year1=".$year21." and m.idmes BETWEEN 4 AND 6";
	
	if($period=="Tercer Trimestre")	
	$periodo="and c.year1=".$year21." and m.idmes BETWEEN 7 AND 9";
	
	if($period=="Cuarto Trimestre")	
	$periodo="and c.year1=".$year21." and m.idmes BETWEEN 10 AND 12";
	
	///Cuatrimestre
	if($period=="Primer Cuatrimestre")	
	$periodo="and c.year1=".$year21." and m.idmes BETWEEN 1 AND 4";

	if($period=="Segundo Cuatrimestre")	
	$periodo="and c.year1=".$year21." and m.idmes BETWEEN 5 AND 8";
	
	if($period=="Tercer Cuatrimestre")	
	$periodo="and c.year1=".$year21." and m.idmes BETWEEN 9 AND 12";

	if($period=="Primer Semestre")	
	$periodo="and c.year1=".$year21." and m.idmes<7";

	if($period=="Segundo Semestre")	
	$periodo="and c.year1=".$year21." and m.idmes>6";
	
	if($period=="Anual")	
	$periodo="and c.year1=".$year21." and m.idmes<13";
	///
        $nombreimagenfondo="vacio";
		
		
		$sql="SELECT SUM(c.proveedores) AS proveedores ,SUM(c.cadenas) AS cadenas,SUM(c.trenes) AS trenes,SUM(c.garantias) AS garantias,SUM(c.creditos) AS creditos from mes m, tesorer1 c WHERE m.idmes=c.idmes ".$periodo." ORDER BY  m.idmes ASC";
		$nombreimagenfondo="tesoreria";
		
		$result=mysqli_query($link,$sql);
		
		$sql2="SELECT FORMAT(SUM(c.proveedores),2) AS proveedores ,FORMAT(SUM(c.cadenas),2) AS cadenas,FORMAT(SUM(c.trenes),2) AS trenes,FORMAT(SUM(c.garantias),2) AS garantias,FORMAT(SUM(c.creditos),2) AS creditos from mes m, tesorer1 c WHERE m.idmes=c.idmes ".$periodo." ORDER BY  m.idmes ASC";
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
//	
        while($row = mysqli_fetch_array($link,$result))
        {   
            //guardamos en rawdata todos los vectores/filas que nos devuelve la consulta
			//$conmes[$i]=$row['mes'];
			$Valores[$i]=$row['proveedores'];
			$Valores[$i+4]=$row['cadenas'];
			$Valores[$i+1]=$row['trenes'];
			$Valores[$i+3]=$row['garantias'];
			$Valores[$i+2]=$row['creditos'];
            $i++;

        }

		while($row2 = mysqli_fetch_array($link,$result2))
        {   
            //guardamos en rawdata todos los vectores/filas que nos devuelve la consulta
			//$conmes[$i]=$row['mes'];
			$Valores2[$j]=$row2['proveedores'];
			$Valores2[$j+1]=$row2['cadenas'];
			$Valores2[$j+2]=$row2['creditos'];
			$Valores2[$j+3]=$row2['garantias'];
			$Valores2[$j+4]=$row2['trenes'];
			
            $j++;

        }

		$total=$Valores[0]+$Valores[1]+$Valores[2]+$Valores[3]+$Valores[4];
		$porproveedores=round(($Valores[0]/$total)*100,1);
		$porcadenas=round(($Valores[4]/$total)*100,1);
		$porcreditos=round(($Valores[2]/$total)*100,1);
		$porgarantias=round(($Valores[3]/$total)*100,1);
		$portrenes=round(($Valores[1]/$total)*100,1);


// Some data

// A new graph
$graph = new PieGraph(650,600,'auto');

$theme_class="VividTheme";
$graph->SetTheme(new $theme_class());
$graph->title->Set("\nTesoreria");
$graph->title->SetFont(FF_ARIAL,FS_NORMAL,20);
$graph->title->SetColor("#298A08");
// Setup background
//$graph->SetBackgroundImage('fondos/tesoreria2.png',BGIMG_FILLFRAME);


$p = array();

// Position the four pies and change color
    $p= new PiePlot3D($Valores);
	$p->SetSize(0.3); 
	$p->SetCenter(0.5,0.5);
	//$p->SetLabelPos(0.5);
	//$p->SetGuideLines();
	/*$lbl = array("%.1f%%","%.1f%%","%.1f%%",
         "%.1f%%","%.1f%%");*/
	
	$nombres=array("Proveedores $porproveedores%%","Trenes $portrenes%%","Creditos $porcreditos%%","Garantias $porgarantias%%","Cadenas $porcadenas%%"); 
	
	$p->SetLabels($nombres);
	$p->SetLabelPos(1);
	
	
    $graph->Add($p);
	
	$p->ExplodeALL();

    // Set the titles

    $p->title->SetFont(FF_DEFAULT, FS_BOLD, 10);
    $p->title->SetColor('white');
	
	$nombres=array("$$Valores2[0]","$$Valores2[1]","$$Valores2[2]","$$Valores2[3]","$$Valores2[4]"); 
	$p->SetLegends($nombres); 


$graph->SetAntiAliasing(false);
//$graph->Stroke();
$FEC=date('Y-m-d-', time()).date('G_i_s', time());
$_SESSION['FECB']=$FEC;
// sALIDA

$graph->Stroke(_IMG_HANDLER);

$fileName ="ImagenesReportes/".$FEC.".png";
$graph->img->Stream($fileName);

// Mandarlo al navegador
$graph->img->Headers();
$graph->img->Stream();

//$graph->Stroke("ImagenesReportes/".$FEC.".png");
?>

<?php
 // content="text/plain; charset=utf-8"
/*
require_once ('jpgraph/src/jpgraph.php');
require_once ('jpgraph/src/jpgraph_pie.php');
require_once ('jpgraph/src/jpgraph_pie3d.php');


	//Conectar con  la Base de datos
	mysql_connect("localhost","root","pirineos");
	mysql_select_db("indicadores");

///para Enviar a el Archivo de Reportes
	$_SESSION['DepartamentoSend']="Tesoreria";
	$_SESSION['IndicadorSend']="Tesoreria";
	$_SESSION['periodo']=$period;
	
	$query2=mysql_query("Select * from anios where idanio='".$year2."'");
	mysql_data_seek($query2,0);
    $anio = mysql_fetch_row($query2);
	$year21=$anio[1];
	
	///Trimestre
	if($period=="Primer Trimestre")	
	$periodo="and c.year1=".$year21." and m.idmes BETWEEN 1 AND 3";

	if($period=="Segundo Trimestre")	
	$periodo="and c.year1=".$year21." and m.idmes BETWEEN 4 AND 6";
	
	if($period=="Tercer Trimestre")	
	$periodo="and c.year1=".$year21." and m.idmes BETWEEN 7 AND 9";
	
	if($period=="Cuarto Trimestre")	
	$periodo="and c.year1=".$year21." and m.idmes BETWEEN 10 AND 12";
	
	///Cuatrimestre
	if($period=="Primer Cuatrimestre")	
	$periodo="and c.year1=".$year21." and m.idmes BETWEEN 1 AND 4";

	if($period=="Segundo Cuatrimestre")	
	$periodo="and c.year1=".$year21." and m.idmes BETWEEN 5 AND 8";
	
	if($period=="Tercer Cuatrimestre")	
	$periodo="and c.year1=".$year21." and m.idmes BETWEEN 9 AND 12";

	if($period=="Primer Semestre")	
	$periodo="and c.year1=".$year21." and m.idmes<7";

	if($period=="Segundo Semestre")	
	$periodo="and c.year1=".$year21." and m.idmes>6";
	
	if($period=="Anual")	
	$periodo="and c.year1=".$year21." and m.idmes<13";
	///
        $nombreimagenfondo="vacio";
		
		
		$sql="SELECT SUM(c.proveedores) AS proveedores ,SUM(c.cadenas) AS cadenas,SUM(c.trenes) AS trenes,SUM(c.garantias) AS garantias,SUM(c.creditos) AS creditos from mes m, tesorer1 c WHERE m.idmes=c.idmes ".$periodo." ORDER BY  m.idmes ASC";
		$nombreimagenfondo="tesoreria";
		
		$result=mysql_query($sql);
		
		$sql2="SELECT FORMAT(SUM(c.proveedores),2) AS proveedores ,FORMAT(SUM(c.cadenas),2) AS cadenas,FORMAT(SUM(c.trenes),2) AS trenes,FORMAT(SUM(c.garantias),2) AS garantias,FORMAT(SUM(c.creditos),2) AS creditos from mes m, tesorer1 c WHERE m.idmes=c.idmes ".$periodo." ORDER BY  m.idmes ASC";
		$result2=mysql_query($sql2);

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
//	
        while($row = mysql_fetch_array($result))
        {   
            //guardamos en rawdata todos los vectores/filas que nos devuelve la consulta
			//$conmes[$i]=$row['mes'];
			$Valores[$i]=$row['proveedores'];
			$Valores[$i+1]=$row['cadenas'];
			$Valores[$i+2]=$row['trenes'];
			$Valores[$i+3]=$row['garantias'];
			$Valores[$i+4]=$row['creditos'];
            $i++;

        }

		while($row2 = mysql_fetch_array($result2))
        {   
            //guardamos en rawdata todos los vectores/filas que nos devuelve la consulta
			//$conmes[$i]=$row['mes'];
			$Valores2[$j]=$row2['proveedores'];
			$Valores2[$j+1]=$row2['cadenas'];
			$Valores2[$j+2]=$row2['trenes'];
			$Valores2[$j+3]=$row2['garantias'];
			$Valores2[$j+4]=$row2['creditos'];
            $j++;

        }

		$total=$Valores[0]+$Valores[1]+$Valores[2]+$Valores[3]+$Valores[4];
		$porproveedores=round(($Valores[0]/$total)*100,1);
		$porcadenas=round(($Valores[1]/$total)*100,1);
		$portrenes=round(($Valores[2]/$total)*100,1);
		$porgarantias=round(($Valores[3]/$total)*100,1);
		$porcreditos=round(($Valores[4]/$total)*100,1);


// Some data

// A new graph
$graph = new PieGraph(650,600,'auto');

$theme_class="VividTheme";
$graph->SetTheme(new $theme_class());
$graph->title->Set("\nTesoreria");
$graph->title->SetFont(FF_ARIAL,FS_NORMAL,20);
$graph->title->SetColor("#298A08");
// Setup background
//$graph->SetBackgroundImage('fondos/tesoreria2.png',BGIMG_FILLFRAME);


$p = array();

// Position the four pies and change color
    $p= new PiePlot3D($Valores);
	$p->SetSize(0.3); 
	$p->SetCenter(0.5,0.5);
	//$p->SetLabelPos(0.5);
	//$p->SetGuideLines();
	//$lbl = array("%.1f%%","%.1f%%","%.1f%%",
        // "%.1f%%","%.1f%%");
	
	$nombres=array("Proveedores $porproveedores%%","Cadenas $porcadenas%%","Trenes $portrenes%%","Garantias $porgarantias%%","Creditos $porcreditos%%"); 
	
	$p->SetLabels($nombres);
	$p->SetLabelPos(1);
	
	
    $graph->Add($p);
	
	$p->ExplodeALL();

    // Set the titles

    $p->title->SetFont(FF_DEFAULT, FS_BOLD, 10);
    $p->title->SetColor('white');
	
	$nombres=array("$$Valores2[0]","$$Valores2[1]","$$Valores2[2]","$$Valores2[3]","$$Valores2[4]"); 
	$p->SetLegends($nombres); 


$graph->SetAntiAliasing(false);
//$graph->Stroke();
$FEC=date('Y-m-d-', time()).date('G_i_s', time());
$_SESSION['FECB']=$FEC;
// sALIDA

$graph->Stroke(_IMG_HANDLER);

$fileName ="ImagenesReportes/".$FEC.".png";
$graph->img->Stream($fileName);

// Mandarlo al navegador
$graph->img->Headers();
$graph->img->Stream();

//$graph->Stroke("ImagenesReportes/".$FEC.".png");
*/
?>