<?php
session_start();
?>
<?php // content="text/plain; charset=utf-8"

//Inicializar la variable del año, en le año actual
date_default_timezone_set('America/Monterrey');

require_once('jpgraph/src/jpgraph.php');
require_once ('jpgraph/src/jpgraph_line.php');
require_once ('jpgraph/src/jpgraph_scatter.php');
//para una grafica circular
require_once 'jpgraph/src/jpgraph_pie.php';

	//Conectar con  la Base de datos
	//Conectar con  la Base de datos
		$user="root";
		$pass="pirineos";
		$server="localhost";
		$bd="indicadores2";
		$link=mysqli_connect($server,$user,$pass,$bd);
	
	
	//mysql_connect("localhost","root","pirineos");
	//mysql_select_db("indicadores");
	
	$proveedor2=$_SESSION['proveedorget'];
	$producto2=$_SESSION['productoget'];
	$year4=$_SESSION['aniioget'];
	$period=$_SESSION['periodoget'];
	
	$query=mysqli_query($link,"Select * from selectdepartamento where iddepartamento='".$proveedor2."'");
	mysqli_data_seek($query,0);
    $Departamento = mysqli_fetch_row($query);
	
	$query2=mysqli_query($link,"Select * from selectindicador where idindicador='".$producto2."'");
	mysqli_data_seek($query2,0);
    $Indicador = mysqli_fetch_row($query2);
	
	
	///para Enviar a el Archivo de Reportes
	//$_SESSION['DepartamentoSend']=$Departamento[1];
	//$_SESSION['IndicadorSend']=$Indicador[1];
	//$_SESSION['periodo']=$period;
	
	$query2=mysqli_query($link,"Select * from anios where idanio='".$year4."'");
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
		
		//Crear la consulta
		if($Departamento[1]=="Almacen de Refacciones")
		{
			if($Indicador[1]=="Rotacion de inventarios")
			{
				$sql="SELECT m.mes,c.objetivo,c.reals from mes m, a1_rot c WHERE m.idmes=c.idmes ".$periodo." ORDER BY  m.idmes ASC";
				$nombreimagenfondo="almacen1";
			}
			if($Indicador[1]=="Tiempo de permanencia de inventarios")
			{
				$sql="SELECT m.mes,c.objetivo,c.reals from mes m, a2_tiem c WHERE m.idmes=c.idmes ".$periodo." ORDER BY  m.idmes ASC";
				$nombreimagenfondo="almacen2";
			}
		}
		
		if($Departamento[1]=="Cuentas Por Cobrar")
		{
			if($Indicador[1]=="Indice de rotacion de cartera")
			{
			$sql="SELECT m.mes,c.objetivo,c.reals from mes m, cpc1_ind c WHERE m.idmes=c.idmes ".$periodo." ORDER BY  m.idmes ASC";
			$nombreimagenfondo="cuentasporcobrar1";
			}
			if($Indicador[1]=="Plazo promedio de cobro")
			{
			$sql="SELECT m.mes,c.objetivo,c.reals from mes m, cpc2_plaz c WHERE m.idmes=c.idmes ".$periodo." ORDER BY  m.idmes ASC";
			$nombreimagenfondo="cuentasporcobrar2";
			}
			if($Indicador[1]=="Cartera vencida a mas de 120 dias")
			{
			$sql="SELECT m.mes,c.objetivo,c.reals from mes m, cpc3_cart c WHERE m.idmes=c.idmes ".$periodo." ORDER BY  m.idmes ASC";
			$nombreimagenfondo="cuentasporcobrar3";
			}
		}
		
		
		if($Departamento[1]=="Cuentas Por Pagar")
		{
			if($Indicador[1]=="Plazo promedio de pago sin trigos")
			{
			$sql="SELECT m.mes,c.objetivo,c.reals from mes m, cpp1_plaz c WHERE m.idmes=c.idmes ".$periodo." ORDER BY  m.idmes ASC";
			$nombreimagenfondo="cuentasporpagar1";
			}
			if($Indicador[1]=="Indice de rotacion de cartera sin trigos")
			{
			$sql="SELECT m.mes,c.objetivo,c.reals from mes m, cpp2_ind c WHERE m.idmes=c.idmes ".$periodo." ORDER BY  m.idmes ASC";
			$nombreimagenfondo="cuentasporpagar2";
			}
		}
		
		if($Departamento[1]=="Cedi") 
		{
			if($Indicador[1]=="Rotacion de inventarios")
			{
			$sql="SELECT m.mes,c.objetivo,c.reals from mes m, ced1_rot c WHERE m.idmes=c.idmes ".$periodo." ORDER BY  m.idmes ASC";
			$nombreimagenfondo="cedi1";
			}
			if($Indicador[1]=="Tiempo de permanencia de inventarios")
			{
			$sql="SELECT m.mes,c.objetivo,c.reals from mes m, ced2_tiem c WHERE m.idmes=c.idmes ".$periodo." ORDER BY  m.idmes ASC";
			$nombreimagenfondo="cedi2";
			}
			if($Indicador[1]=="Ciclo operacional")
			{
			$sql="SELECT m.mes,c.objetivo,c.reals from mes m, ced3_cicl c WHERE m.idmes=c.idmes ".$periodo." ORDER BY  m.idmes ASC";
			$nombreimagenfondo="cedi3";
			}
		}
		
		if($Departamento[1]=="Gestion de Personal") 
		{
			if($Indicador[1]=="Tiempo extra")
			{
			$sql="SELECT m.mes,c.objetivo,c.reals from mes m, gest1_tiem c WHERE m.idmes=c.idmes ".$periodo." ORDER BY  m.idmes ASC";
			$nombreimagenfondo="gestionpersonal1";
			}
			if($Indicador[1]=="Ausentismo")
			{
			$sql="SELECT m.mes,c.objetivo,c.reals from mes m, gest2_aus c WHERE m.idmes=c.idmes ".$periodo." ORDER BY  m.idmes ASC";
			$nombreimagenfondo="gestionpersonal2";
			}
			if($Indicador[1]=="Rotacion de personal")
			{
			$sql="SELECT m.mes,c.objetivo,c.reals from mes m, gest3_rot c WHERE m.idmes=c.idmes ".$periodo." ORDER BY  m.idmes ASC";
			$nombreimagenfondo="gestionpersonal3";
			}
			if($Indicador[1]=="Horas de capacitacion")
			{
			$sql="SELECT m.mes,c.objetivo,c.reals from mes m, gest4_hor c WHERE m.idmes=c.idmes ".$periodo." ORDER BY  m.idmes ASC";
			$nombreimagenfondo="gestionpersonal4";
			}
			if($Indicador[1]=="Gastos de capacitacion")
			{
			$sql="SELECT m.mes,c.objetivo,c.reals from mes m, gest5_gas c WHERE m.idmes=c.idmes ".$periodo." ORDER BY  m.idmes ASC";
			$nombreimagenfondo="gestionpersonal5";
			}
		}
		
		if($Departamento[1]=="Seguridad Industrial") 
		{
			if($Indicador[1]=="Indice de riesgo")
			{
			$sql="SELECT m.mes,c.objetivo,c.reals from mes m, seg1_ries c WHERE m.idmes=c.idmes ".$periodo." ORDER BY  m.idmes ASC";
			$nombreimagenfondo="seguridad1";
			}
			if($Indicador[1]=="Indice de accidentabilidad")
			{
			$sql="SELECT m.mes,c.objetivo,c.reals from mes m, seg2_acci c WHERE m.idmes=c.idmes ".$periodo." ORDER BY  m.idmes ASC";
			$nombreimagenfondo="seguridad2";
			}
			if($Indicador[1]=="Prima de riesgo")
			{
			$sql="SELECT m.mes,c.objetivo,c.reals from mes m, seg3_prim c WHERE m.idmes=c.idmes ".$periodo." ORDER BY  m.idmes ASC";
			$nombreimagenfondo="seguridad3";
			}
		}
		
		if($Departamento[1]=="Compras") 
		{
			if($Indicador[1]=="Eficiencia de Compras")
			{
			$sql="SELECT m.mes,c.objetivo,c.reals from mes m, com1_efic c WHERE m.idmes=c.idmes ".$periodo." ORDER BY  m.idmes ASC";
			$nombreimagenfondo="compras";
			}
		}
			if($Departamento[1]=="Sistemas") 
		{
			if($Indicador[1]=="Eficiencia de Sistemas")
			{
			$sql="SELECT m.mes,c.objetivo,c.reals from mes m, sis1_efic c WHERE m.idmes=c.idmes ".$periodo." ORDER BY  m.idmes ASC";
			$nombreimagenfondo="sistemas";
			}
		}
		
		if($Departamento[1]=="Administracion") 
		{
			if($Indicador[1]=="Endeudamiento")
			{
			$sql="SELECT m.mes,c.objetivo,c.reals from mes m, adm1_end c WHERE m.idmes=c.idmes ".$periodo." ORDER BY  m.idmes ASC";
			$nombreimagenfondo="administracion1";
			}
			if($Indicador[1]=="Liquidez")
			{
			$sql="SELECT m.mes,c.objetivo,c.reals from mes m, adm2_liq c WHERE m.idmes=c.idmes ".$periodo." ORDER BY  m.idmes ASC";
			$nombreimagenfondo="administracion2";
			}
			if($Indicador[1]=="Rentabilidad")
			{
			$sql="SELECT m.mes,c.objetivo,c.reals from mes m, adm3_rent c WHERE m.idmes=c.idmes ".$periodo." ORDER BY  m.idmes ASC";
			$nombreimagenfondo="administracion3";
			}
			if($Indicador[1]=="Capital de trabajo")
			{
			$sql="SELECT m.mes,c.objetivo,c.reals from mes m, adm4_cap c WHERE m.idmes=c.idmes ".$periodo." ORDER BY  m.idmes ASC";
			$nombreimagenfondo="administracion4";
			}
		}
		
		
		if($Departamento[1]=="Impuestos") 
		{
			if($Indicador[1]=="Impuestos")
			{
			$sql="SELECT m.mes,c.objetivo,c.reals from mes m, impuest1 c WHERE m.idmes=c.idmes ".$periodo." ORDER BY  m.idmes ASC";
			$nombreimagenfondo="impuestos";
			}
		}
		
			if($Departamento[1]=="Tesoreria") 
		{
			if($Indicador[1]=="Tesoreria")
			{
			$sql="SELECT m.mes,c.objetivo,c.reals from mes m, tesorer1 c WHERE m.idmes=c.idmes ".$periodo." ORDER BY  m.idmes ASC";
			$nombreimagenfondo="tesoreria";
			}
		}
		
		$result=mysqli_query($link,$sql);
		

//		Variables
		$contreal = array();
		$conobjetivo = array();
		$conmes= array();
		$i=0;
//	
		$mayor=0;
		$menor=0;
        while($row = mysqli_fetch_array($result))
        {   
            //guardamos en rawdata todos los vectores/filas que nos devuelve la consulta
			$conmes[$i]=$row['mes'];
			$contreal[$i]=$row['reals'];
			$conobjetivo[$i]=$row['objetivo'];
			
				if($mayor<$conobjetivo[$i])
				$mayor=$conobjetivo[$i];
			
				if($mayor<$contreal[$i])
				$mayor=$contreal[$i];
			
				if($i==0)
				$menor=$conobjetivo[$i];
				
				if($menor>$conobjetivo[$i])
				$menor=$conobjetivo[$i];
			
				if($menor>$contreal[$i])
				$menor=$contreal[$i];
			
            $i++;

        }

		//ajustando menor
		if($menor>=0 and $menor<=11)
			$menor=$menor-1;
		if($menor>11 and $menor<=100)
			$menor=$menor-5;
		elseif($menor>100 and $menor<=1000)
			$menor=$menor-10;
		elseif($menor>1000 and $menor<=100000)
			$menor=$menor-20;
		elseif($menor>100000)
			$menor=$menor-10000;	
		elseif($menor<0)
			$menor=$menor-0.2;
		else
			$menor=$menor;
		
		//ajustando mayor
		if($mayor>=0 and $mayor<=11)
			$mayor=$mayor+1;
		elseif($mayor>11 and $mayor<=100)
			$mayor=$mayor+5;
		elseif($mayor>100 and $mayor<=1000)
			$mayor=$mayor+10;
		elseif($mayor>1000 and $mayor<=100000)
			$mayor=$mayor+20;
		elseif($mayor>100000)
			$mayor=$mayor+10000;
		elseif($mayor<0)
			$mayor=$mayor+0.2;
		else
			$mayor=$mayor;
		
// Setup the graph
$graph = new Graph(800,600);
$graph->SetScale("textlin",$menor,$mayor);

//AquaTheme()  UniversalTheme
$theme_class= new UniversalTheme;
$graph->SetTheme($theme_class);

$graph->title->Set('');
$graph->SetBox(false);

//$graph->yaxis->title->Set('$','top');
$graph->yaxis->title->SetMargin(40);
$graph->img->SetAntiAliasing();

$graph->yaxis->HideZeroLabel();
$graph->yaxis->HideLine(false);
$graph->yaxis->HideTicks(false,false);
$graph->yaxis->SetLabelMargin(8); // SEPARACION DE LAS ETIQUETAS DEL EJE Y
$graph->img->SetMargin(95,95,90,90); //IZQ, DER , SUP, ABJ  AJUSTA TODA LA GRAFICA A COORDENADAS

$graph->xgrid->Show();
//$graph->xgrid->SetLineStyle("solid");
//$graph->xgrid->SetColor('#E3E3E3');

$graph->xaxis->SetTickLabels($conmes);
$graph->xaxis->SetPos($menor);
$graph->ygrid->SetFill(false);
$graph->SetBackgroundImage("fondos/".$nombreimagenfondo.".png",BGIMG_FILLFRAME);

//$graph->title->Set('');

////////////////////////////////////////////////Lineas a Graficar
// Create the first line
$p1 = new LinePlot($contreal);
$graph->Add($p1);
$p1->SetColor("#6495ED");
$p1->SetLegend('Resultados Reales');

$p1->mark->SetType(MARK_FILLEDCIRCLE,'',0.8);
$p1->mark->SetColor('#55bbdd');
$p1->value->SetFormat('%.2f');
$p1->value->SetMargin(5);
$p1->value->Show();
$p1->mark->SetFillColor('#55bbdd');
$p1->SetCenter();

// Create the second line
$p2 = new LinePlot($conobjetivo);
$graph->Add($p2);
$p2->SetColor("#B22222");
$p2->value->SetFormat('%.2f');
$p2->value->SetMargin(-13);
$p2->value->Show();
$p2->SetLegend('Objetivos');
$p2->mark->SetType(MARK_UTRIANGLE,'',1.0);
$p2->mark->SetColor('#aaaaaa');
$p2->mark->SetFillColor('#aaaaaa');

$p2->SetCenter();
///////////////////////////////////////////////



$graph->legend->SetFrameWeight(1);
$graph->legend->SetColor('#4E4E4E','#00A78A');
$graph->legend->SetMarkAbsSize(9);


// Output line
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
/*session_start();
 // content="text/plain; charset=utf-8"
require_once('jpgraph/src/jpgraph.php');
require_once ('jpgraph/src/jpgraph_line.php');
//para una grafica circular
require_once 'jpgraph/src/jpgraph_pie.php';

	//Conectar con  la Base de datos
	mysql_connect("localhost","root","pirineos");
	mysql_select_db("indicadores");
	
	$query=mysql_query("Select * from selectdepartamento where iddepartamento='".$proveedor2."'");
	mysql_data_seek($query,0);
    $Departamento = mysql_fetch_row($query);
	
	$query2=mysql_query("Select * from selectindicador where idindicador='".$producto2."'");
	mysql_data_seek($query2,0);
    $Indicador = mysql_fetch_row($query2);
	
	
	///para Enviar a el Archivo de Reportes
	$_SESSION['DepartamentoSend']=$Departamento[1];
	$_SESSION['IndicadorSend']=$Indicador[1];
	$_SESSION['periodo']=$period;
	
	$query2=mysql_query("Select * from anios where idanio='".$year4."'");
	mysql_data_seek($query2,0);
    $anio = mysql_fetch_row($query2);
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
		
		//Crear la consulta
		if($Departamento[1]=="Almacen de Refacciones")
		{
			if($Indicador[1]=="Rotacion de inventarios")
			{
				$sql="SELECT m.mes,c.objetivo,c.reals from mes m, a1_rot c WHERE m.idmes=c.idmes ".$periodo." ORDER BY  m.idmes ASC";
				$nombreimagenfondo="almacen1";
			}
			if($Indicador[1]=="Tiempo de permanencia de inventarios")
			{
				$sql="SELECT m.mes,c.objetivo,c.reals from mes m, a2_tiem c WHERE m.idmes=c.idmes ".$periodo." ORDER BY  m.idmes ASC";
				$nombreimagenfondo="almacen2";
			}
		}
		
		if($Departamento[1]=="Cuentas Por Cobrar")
		{
			if($Indicador[1]=="Indice de rotacion de cartera")
			{
			$sql="SELECT m.mes,c.objetivo,c.reals from mes m, cpc1_ind c WHERE m.idmes=c.idmes ".$periodo." ORDER BY  m.idmes ASC";
			$nombreimagenfondo="cuentasporcobrar1";
			}
			if($Indicador[1]=="Plazo promedio de cobro")
			{
			$sql="SELECT m.mes,c.objetivo,c.reals from mes m, cpc2_plaz c WHERE m.idmes=c.idmes ".$periodo." ORDER BY  m.idmes ASC";
			$nombreimagenfondo="cuentasporcobrar2";
			}
			if($Indicador[1]=="Cartera vencida a mas de 120 dias")
			{
			$sql="SELECT m.mes,c.objetivo,c.reals from mes m, cpc3_cart c WHERE m.idmes=c.idmes ".$periodo." ORDER BY  m.idmes ASC";
			$nombreimagenfondo="cuentasporcobrar3";
			}
		}
		
		
		if($Departamento[1]=="Cuentas Por Pagar")
		{
			if($Indicador[1]=="Plazo promedio de pago sin trigos")
			{
			$sql="SELECT m.mes,c.objetivo,c.reals from mes m, cpp1_plaz c WHERE m.idmes=c.idmes ".$periodo." ORDER BY  m.idmes ASC";
			$nombreimagenfondo="cuentasporpagar1";
			}
			if($Indicador[1]=="Indice de rotacion de cartera sin trigos")
			{
			$sql="SELECT m.mes,c.objetivo,c.reals from mes m, cpp2_ind c WHERE m.idmes=c.idmes ".$periodo." ORDER BY  m.idmes ASC";
			$nombreimagenfondo="cuentasporpagar2";
			}
		}
		
		if($Departamento[1]=="Cedi") 
		{
			if($Indicador[1]=="Rotacion de inventarios")
			{
			$sql="SELECT m.mes,c.objetivo,c.reals from mes m, ced1_rot c WHERE m.idmes=c.idmes ".$periodo." ORDER BY  m.idmes ASC";
			$nombreimagenfondo="cedi1";
			}
			if($Indicador[1]=="Tiempo de permanencia de inventarios")
			{
			$sql="SELECT m.mes,c.objetivo,c.reals from mes m, ced2_tiem c WHERE m.idmes=c.idmes ".$periodo." ORDER BY  m.idmes ASC";
			$nombreimagenfondo="cedi2";
			}
			if($Indicador[1]=="Ciclo operacional")
			{
			$sql="SELECT m.mes,c.objetivo,c.reals from mes m, ced3_cicl c WHERE m.idmes=c.idmes ".$periodo." ORDER BY  m.idmes ASC";
			$nombreimagenfondo="cedi3";
			}
		}
		
		if($Departamento[1]=="Gestion de Personal") 
		{
			if($Indicador[1]=="Tiempo extra")
			{
			$sql="SELECT m.mes,c.objetivo,c.reals from mes m, gest1_tiem c WHERE m.idmes=c.idmes ".$periodo." ORDER BY  m.idmes ASC";
			$nombreimagenfondo="gestionpersonal1";
			}
			if($Indicador[1]=="Ausentismo")
			{
			$sql="SELECT m.mes,c.objetivo,c.reals from mes m, gest2_aus c WHERE m.idmes=c.idmes ".$periodo." ORDER BY  m.idmes ASC";
			$nombreimagenfondo="gestionpersonal2";
			}
			if($Indicador[1]=="Rotacion de personal")
			{
			$sql="SELECT m.mes,c.objetivo,c.reals from mes m, gest3_rot c WHERE m.idmes=c.idmes ".$periodo." ORDER BY  m.idmes ASC";
			$nombreimagenfondo="gestionpersonal3";
			}
			if($Indicador[1]=="Horas de capacitacion")
			{
			$sql="SELECT m.mes,c.objetivo,c.reals from mes m, gest4_hor c WHERE m.idmes=c.idmes ".$periodo." ORDER BY  m.idmes ASC";
			$nombreimagenfondo="gestionpersonal4";
			}
			if($Indicador[1]=="Gastos de capacitacion")
			{
			$sql="SELECT m.mes,c.objetivo,c.reals from mes m, gest5_gas c WHERE m.idmes=c.idmes ".$periodo." ORDER BY  m.idmes ASC";
			$nombreimagenfondo="gestionpersonal5";
			}
		}
		
		if($Departamento[1]=="Seguridad Industrial") 
		{
			if($Indicador[1]=="Indice de riesgo")
			{
			$sql="SELECT m.mes,c.objetivo,c.reals from mes m, seg1_ries c WHERE m.idmes=c.idmes ".$periodo." ORDER BY  m.idmes ASC";
			$nombreimagenfondo="seguridad1";
			}
			if($Indicador[1]=="Indice de accidentabilidad")
			{
			$sql="SELECT m.mes,c.objetivo,c.reals from mes m, seg2_acci c WHERE m.idmes=c.idmes ".$periodo." ORDER BY  m.idmes ASC";
			$nombreimagenfondo="seguridad2";
			}
			if($Indicador[1]=="Prima de riesgo")
			{
			$sql="SELECT m.mes,c.objetivo,c.reals from mes m, seg3_prim c WHERE m.idmes=c.idmes ".$periodo." ORDER BY  m.idmes ASC";
			$nombreimagenfondo="seguridad3";
			}
		}
		
		if($Departamento[1]=="Compras") 
		{
			if($Indicador[1]=="Eficiencia de Compras")
			{
			$sql="SELECT m.mes,c.objetivo,c.reals from mes m, com1_efic c WHERE m.idmes=c.idmes ".$periodo." ORDER BY  m.idmes ASC";
			$nombreimagenfondo="compras";
			}
		}
			if($Departamento[1]=="Sistemas") 
		{
			if($Indicador[1]=="Eficiencia de Sistemas")
			{
			$sql="SELECT m.mes,c.objetivo,c.reals from mes m, sis1_efic c WHERE m.idmes=c.idmes ".$periodo." ORDER BY  m.idmes ASC";
			$nombreimagenfondo="sistemas";
			}
		}
		
		if($Departamento[1]=="Administracion") 
		{
			if($Indicador[1]=="Endeudamiento")
			{
			$sql="SELECT m.mes,c.objetivo,c.reals from mes m, adm1_end c WHERE m.idmes=c.idmes ".$periodo." ORDER BY  m.idmes ASC";
			$nombreimagenfondo="administracion1";
			}
			if($Indicador[1]=="Liquidez")
			{
			$sql="SELECT m.mes,c.objetivo,c.reals from mes m, adm2_liq c WHERE m.idmes=c.idmes ".$periodo." ORDER BY  m.idmes ASC";
			$nombreimagenfondo="administracion2";
			}
			if($Indicador[1]=="Rentabilidad")
			{
			$sql="SELECT m.mes,c.objetivo,c.reals from mes m, adm3_rent c WHERE m.idmes=c.idmes ".$periodo." ORDER BY  m.idmes ASC";
			$nombreimagenfondo="administracion3";
			}
			if($Indicador[1]=="Capital de trabajo")
			{
			$sql="SELECT m.mes,c.objetivo,c.reals from mes m, adm4_cap c WHERE m.idmes=c.idmes ".$periodo." ORDER BY  m.idmes ASC";
			$nombreimagenfondo="administracion4";
			}
		}
		
		
		if($Departamento[1]=="Impuestos") 
		{
			if($Indicador[1]=="Impuestos")
			{
			$sql="SELECT m.mes,c.objetivo,c.reals from mes m, impuest1 c WHERE m.idmes=c.idmes ".$periodo." ORDER BY  m.idmes ASC";
			$nombreimagenfondo="impuestos";
			}
		}
		
			if($Departamento[1]=="Tesoreria") 
		{
			if($Indicador[1]=="Tesoreria")
			{
			$sql="SELECT m.mes,c.objetivo,c.reals from mes m, tesorer1 c WHERE m.idmes=c.idmes ".$periodo." ORDER BY  m.idmes ASC";
			$nombreimagenfondo="tesoreria";
			}
		}
		
		$result=mysql_query($sql);
		

//		Variables
		$contreal = array();
		$conobjetivo = array();
		$conmes= array();
		$i=0;
//	
        while($row = mysql_fetch_array($result))
        {   
            //guardamos en rawdata todos los vectores/filas que nos devuelve la consulta
			$conmes[$i]=$row['mes'];
			$contreal[$i]=$row['reals'];
			$conobjetivo[$i]=$row['objetivo'];
            $i++;

        }


if($Departamento[1]=="Tesoreria")
	{
		// Some data
		$data = array(40,21,17,14,23);

		// Create the Pie Graph. 
		$graph = new PieGraph(700,600);

		$theme_class="DefaultTheme";
		//$graph->SetTheme(new $theme_class());

		// Set A title for the plot
		$graph->title->Set("A Simple Pie Plot");
		$graph->SetBox(true);

		// Create
		$p1 = new PiePlot($data);
		$graph->Add($p1);

		$p1->ShowBorder();
		$p1->SetColor('black');
		$p1->SetSliceColors(array('#1E90FF','#2E8B57','#ADFF2F','#DC143C','#BA55D3'));
		$graph->Stroke();
	}
	
	else
	{
// Setup the graph
$graph = new Graph(800,600);
$graph->SetScale("textlin");

//AquaTheme()  UniversalTheme
$theme_class= new UniversalTheme;
$graph->SetTheme($theme_class);

$graph->title->Set('');
$graph->SetBox(false);

$graph->yaxis->HideZeroLabel();
$graph->yaxis->HideLine(true);
$graph->yaxis->HideTicks(false,false);

$graph->xgrid->Show();
//$graph->xgrid->SetLineStyle("solid");
//$graph->xgrid->SetColor('#E3E3E3');

$graph->xaxis->SetTickLabels($conmes);
$graph->ygrid->SetFill(false);
$graph->SetBackgroundImage("fondos/".$nombreimagenfondo.".png",BGIMG_FILLFRAME);

$graph->title->Set('');

////////////////////////////////////////////////Lineas a Graficar
// Create the first line
$p1 = new LinePlot($contreal);
$graph->Add($p1);
$p1->SetColor("#6495ED");
$p1->SetLegend('Resultados Reales');

$p1->mark->SetType(MARK_FILLEDCIRCLE,'',1.0);
$p1->mark->SetColor('#55bbdd');
$p1->mark->SetFillColor('#55bbdd');
$p1->SetCenter();

// Create the second line
$p2 = new LinePlot($conobjetivo);
$graph->Add($p2);
$p2->SetColor("#B22222");
$p2->SetLegend('Objetivos');
$p2->mark->SetType(MARK_UTRIANGLE,'',1.0);
$p2->mark->SetColor('#aaaaaa');
$p2->mark->SetFillColor('#aaaaaa');
$p2->value->SetMargin(14);
$p2->SetCenter();
///////////////////////////////////////////////



$graph->legend->SetFrameWeight(1);
$graph->legend->SetColor('#4E4E4E','#00A78A');
$graph->legend->SetMarkAbsSize(8);


// Output line
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
	}
	*/
?>




