<?php
session_start();
?>
<?php // content="text/plain; charset=utf-8"

//include("conect.php");
//$link=Conectarse();

$user="root";
$pass="pirineos";
$server="localhost";
$bd="indicadores2";
$link=mysqli_connect($server,$user,$pass,$bd);

//zona horaria para php
date_default_timezone_set('America/Monterrey');

require_once('jpgraph/src/jpgraph.php');
require_once ('jpgraph/src/jpgraph_line.php');
require_once ('jpgraph/src/jpgraph_scatter.php');
//para una grafica circular
require_once 'jpgraph/src/jpgraph_pie.php';



	//Conectar con  la Base de datos
	//mysql_connect("localhost","root","pirineos");
	//mysql_select_db("indicadores");
	
	$proveedor2=$_SESSION['proveedorget'];
	$producto2=$_SESSION['productoget'];
	$year2=$_SESSION['aniioget'];
	$period=$_SESSION['periodoget'];

	$query=mysqli_query($link,"Select * from selectdepartamento where iddepartamento='".$proveedor2."'");
	mysqli_data_seek($query,0);
    $Departamento = mysqli_fetch_row($query);
	
	$query2=mysqli_query($link,"Select * from selectindicador where idindicador='".$producto2."'");
	mysqli_data_seek($query2,0);
    $Indicador = mysqli_fetch_row($query2);
	
	
	$query2=mysqli_query($link,"Select * from anios where idanio='".$year2."'");
	mysqli_data_seek($query2,0);
    $anio = mysqli_fetch_row($query2);
	$year2=$anio[1];
	
	///para Enviar a el Archivo de Reportes
	$_SESSION['DepartamentoSend']=$Departamento[1];
	$_SESSION['IndicadorSend']=$Indicador[1];
	$_SESSION['periodo']=$period;
	$_SESSION['anio']=$year2;
	
	
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
	
	///Semestre
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
		
		///PARA VENTASSSS
		//VENTAS 1
		if($Departamento[1]=="Ventas1") 
		{
			if($Indicador[1]=="Programa de Carga Diaria (a tiempo)")
			{
			$sql="SELECT m.mes,c.objetivo,c.reals from mes m, ventas1_prog c WHERE m.idmes=c.idmes ".$periodo." ORDER BY  m.idmes ASC";
			$nombreimagenfondo="Ventas1";
			}
		}
		//VENTAS 2
		if($Departamento[1]=="Ventas2") 
		{
			if($Indicador[1]=="Avance de proyectos tecnicos de marketing")
			{
			$sql="SELECT m.mes,c.objetivo,c.reals from mes m, ventas2_marketi c WHERE m.idmes=c.idmes ".$periodo." ORDER BY  m.idmes ASC";
			$nombreimagenfondo="Ventas2";
			}
		}
		//VENTAS 3
				if($Departamento[1]=="Ventas3") 
		{
			if($Indicador[1]=="Bultos de Harina 44")
			{
			$sql="SELECT m.mes,c.objetivo,c.reals from mes m, ventas3_bult44 c WHERE m.idmes=c.idmes ".$periodo." ORDER BY  m.idmes ASC";
			$nombreimagenfondo="Ventas3";
			}
		
			if($Indicador[1]=="Bultos de Harina preparada 20kg")
			{
			$sql="SELECT m.mes,c.objetivo,c.reals from mes m, ventas3_bult20 c WHERE m.idmes=c.idmes ".$periodo." ORDER BY  m.idmes ASC";
			$nombreimagenfondo="Ventas3_1";
			}
		
			if($Indicador[1]=="Cajas de Mejorante 8.8 kg")
			{
			$sql="SELECT m.mes,c.objetivo,c.reals from mes m, ventas3_cajas c WHERE m.idmes=c.idmes ".$periodo." ORDER BY  m.idmes ASC";
			$nombreimagenfondo="Ventas3_2";
			}
			
			if($Indicador[1]=="Clientes nuevos (Numero)")
			{
			$sql="SELECT m.mes,c.objetivo,c.reals from mes m, ventas3_clientes c WHERE m.idmes=c.idmes ".$periodo." ORDER BY  m.idmes ASC";
			$nombreimagenfondo="Ventas3_3";
			}
			
			if($Indicador[1]=="Numero de Clientes Perdidos")
			{
			$sql="SELECT m.mes,c.objetivo,c.reals from mes m, ventas3_numero c WHERE m.idmes=c.idmes ".$periodo." ORDER BY  m.idmes ASC";
			$nombreimagenfondo="Ventas3_4";
			}
			
				if($Indicador[1]=="Demostraciones a Clientes Nuevos")
			{
			$sql="SELECT m.mes,c.objetivo,c.reals from mes m, ventas3_demos c WHERE m.idmes=c.idmes ".$periodo." ORDER BY  m.idmes ASC";
			$nombreimagenfondo="Ventas3_5";
			}
			
				if($Indicador[1]=="Visita a Clientes por Direccion de Ventas")
			{
			$sql="SELECT m.mes,c.objetivo,c.reals from mes m, ventas3_visit c WHERE m.idmes=c.idmes ".$periodo." ORDER BY  m.idmes ASC";
			$nombreimagenfondo="Ventas3_6";
			}
		}
		//ventas4
		if($Departamento[1]=="Ventas4") 
		{
			if($Indicador[1]=="Estadisticas de Venta Contra el Mes Anterior (Bultos)")
			{
			$sql="SELECT m.mes,c.objetivo,c.reals from mes m, ventas4_esta c WHERE m.idmes=c.idmes ".$periodo." ORDER BY  m.idmes ASC";
			$nombreimagenfondo="Ventas4";
			}
			if($Indicador[1]=="Retroalimentacion Estadistica")
			{
			$sql="SELECT m.mes,c.objetivo,c.reals from mes m, ventas4_retro c WHERE m.idmes=c.idmes ".$periodo." ORDER BY  m.idmes ASC";
			$nombreimagenfondo="Ventas4_1";
			}
		}
		
			//ventas5
		if($Departamento[1]=="Ventas5") 
		{
			if($Indicador[1]=="Avance de proyectos tecnicos Inv. y Des. Harinas Blancas")
			{
			$sql="SELECT m.mes,c.objetivo,c.reals from mes m, ventas5_avanc c WHERE m.idmes=c.idmes ".$periodo." ORDER BY  m.idmes ASC";
			$nombreimagenfondo="Ventas5";
			}
		}
		
			//ventas6
		if($Departamento[1]=="Ventas6") 
		{
			if($Indicador[1]=="Nivel de Surtimiento Palm (Paqueteria)")
			{
			$sql="SELECT m.mes,c.objetivo,c.reals from mes m, ventas6_palm c WHERE m.idmes=c.idmes ".$periodo." ORDER BY  m.idmes ASC";
			$nombreimagenfondo="Ventas6";
			}
		}
		
				//ventas7
		if($Departamento[1]=="Ventas7") 
		{
			if($Indicador[1]=="Nivel Surtimiento Pellets")
			{
			$sql="SELECT m.mes,c.objetivo,c.reals from mes m, ventas7_pellets c WHERE m.idmes=c.idmes ".$periodo." ORDER BY  m.idmes ASC";
			$nombreimagenfondo="Ventas7";
			}
				if($Indicador[1]=="Nivel de Surtimiento Bimbo")
			{
			$sql="SELECT m.mes,c.objetivo,c.reals from mes m, ventas7_bimbo c WHERE m.idmes=c.idmes ".$periodo." ORDER BY  m.idmes ASC";
			$nombreimagenfondo="Ventas7_1";
			}
		}
		
				//ventas8
		if($Departamento[1]=="Ventas8") 
		{
			if($Indicador[1]=="Nivel de Surtimiento Kellogg")
			{
			$sql="SELECT m.mes,c.objetivo,c.reals from mes m, ventas8_kellog c WHERE m.idmes=c.idmes ".$periodo." ORDER BY  m.idmes ASC";
			$nombreimagenfondo="Ventas8";
			}
				if($Indicador[1]=="Nivel de Surtimiento Nestle Gerber")
			{
			$sql="SELECT m.mes,c.objetivo,c.reals from mes m, ventas8_nestle c WHERE m.idmes=c.idmes ".$periodo." ORDER BY  m.idmes ASC";
			$nombreimagenfondo="Ventas8_1";
			}
				if($Indicador[1]=="Nivel de Surtimiento a Purina")
			{
			$sql="SELECT m.mes,c.objetivo,c.reals from mes m, ventas8_purina c WHERE m.idmes=c.idmes ".$periodo." ORDER BY  m.idmes ASC";
			$nombreimagenfondo="Ventas8_2";
			}
					if($Indicador[1]=="Nivel de Surtimiento a Wal-Mart")
			{
			$sql="SELECT m.mes,c.objetivo,c.reals from mes m, ventas8_walmart c WHERE m.idmes=c.idmes ".$periodo." ORDER BY  m.idmes ASC";
			$nombreimagenfondo="Ventas8_3";
			}
		}
		
		//ventas9
		if($Departamento[1]=="Ventas9") 
		{
			if($Indicador[1]=="Nivel de Surtimiento Harinas Galletas")
			{
			$sql="SELECT m.mes,c.objetivo,c.reals from mes m, ventas9_harinas c WHERE m.idmes=c.idmes ".$periodo." ORDER BY  m.idmes ASC";
			$nombreimagenfondo="Ventas9";
			}
			if($Indicador[1]=="Nivel de Surtimiento Harinas Global")
			{
			$sql="SELECT m.mes,c.objetivo,c.reals from mes m, ventas9_global c WHERE m.idmes=c.idmes ".$periodo." ORDER BY  m.idmes ASC";
			$nombreimagenfondo="Ventas9_1";
			}
			if($Indicador[1]=="Nivel de Surtimiento Harinas Ferrero")
			{
			$sql="SELECT m.mes,c.objetivo,c.reals from mes m, ventas9_ferrero c WHERE m.idmes=c.idmes ".$periodo." ORDER BY  m.idmes ASC";
			$nombreimagenfondo="Ventas9_2";
			}
		}
		
		if($Departamento[1]=="Ventas10") 
		{
			if($Indicador[1]=="Crecimiento Guadalajara (con respecto al mes anterior)")
			{
			$sql="SELECT m.mes,c.objetivo,c.reals from mes m, ventas10_creci c WHERE m.idmes=c.idmes ".$periodo." ORDER BY  m.idmes ASC";
			$nombreimagenfondo="Ventas10";
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
		if($menor>=11 and $menor<=1000)
			$menor=$menor-10;
		elseif($menor>1000 and $menor<=100000)
			$menor=$menor-20;
		elseif($menor>100000)
			$menor=$menor-1000;	
		elseif($menor<11)
			$menor=$menor-0.2;
		else
			$menor=$menor;
		
		//ajustando mayor
		if($mayor>=11 and $mayor<=1000)
			$mayor=$mayor+10;
		elseif($mayor>1000 and $mayor<=100000)
			$mayor=$mayor+20;
		elseif($mayor>100000)
			$mayor=$mayor+1000;
		elseif($mayor<11)
			$mayor=$mayor+0.2;
		else
			$mayor=$mayor;
		
// Setup the graph
$graph = new Graph(880,600);
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

$graph->xaxis->SetTickLabels($conmes);
$graph->xaxis->SetPos($menor);
$graph->ygrid->SetFill(false);
$graph->SetBackgroundImage("fondos/".$nombreimagenfondo.".png",BGIMG_FILLFRAME);

//$graph->title->Set('');

////////////////////////////////////////////////Lineas a Graficar
// Create the first line
$p1 = new LinePlot($contreal);
$graph->Add($p1);
$p1->SetColor("#B22222");
$p1->SetLegend('Resultados Reales');

$p1->mark->SetType(MARK_FILLEDCIRCLE,'',0.9); //0.8
$p1->mark->SetColor('#B22222');
$p1->value->SetFormat('%.2f');
$p1->value->SetMargin(5);
$p1->value->Show();
$p1->mark->SetFillColor('#B22222');
$p1->SetCenter();

// Create the second line
$p2 = new LinePlot($conobjetivo);
$graph->Add($p2);
$p2->SetColor("#6495ED");
$p2->value->SetFormat('%.2f');
$p2->value->SetMargin(-13);
$p2->value->Show();
$p2->SetLegend('Objetivos');
$p2->mark->SetType(MARK_UTRIANGLE,'',1.0);
$p1->mark->SetColor('#6495ED');
$p2->mark->SetFillColor('#6495ED');

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




