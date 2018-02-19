<?php
session_start();
?>
<?php header("Content-Type: text/html; charset=utf-8");

	//zona horaria php
	date_default_timezone_set('America/Monterrey');
	////////////////////////////////////////////////////////////////////////


include_once('Classes/pdf/fpdf.php');

/*$pdf=new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial','B',16);

/*$pdf->Output();
*/
$imagen='ImagenesReportes/'.$_SESSION['FECB'].'.png';
$logo='fondos/logo.jpg';

$pdf=new FPDF('L','mm','letter');
$pdf->SetMargins(20,18);
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->Image($imagen,16,10,238,168,'PNG'); //
$pdf->Image($logo,20,6,35,20,'JPG'); //   LOGO PIRINEOS
$pdf->SetFont('arial','',6);
$pdf->Cell(50);
$pdf->Ln(150);


class PDF extends FPDF
{
function header()
{
$this->Image($imagen,16,10,115,200,'PNG'); //
$this->SetFont('arial','',6);
$this->Cell(50);

$this->Ln(30);
}

function Footer()
{
$this->SetY(-10);
$this->SetFont('Arial','',6);
$this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
}
}




$pdf->SetTextColor(0x00,0x00,0x00);
$pdf->SetFont("Arial","",5.5);


//CONEXION CON LA BASE DE DATOS
//CONEXION CON LA BASE DE DATOS

		$user="root";
		$pass="pirineos";
		$server="localhost";
		$bd="indicadores";
		$link=mysqli_connect($server,$user,$pass,$bd);

		//$conexion = mysql_connect ("localhost", "root", "pirineos");
		//mysql_select_db ("indicadores", $conexion);

		 //recolectar Los datos ENVIADOS DESDE EL QUE GENERA LA GRAFICA
		 //$Departamento=$_SESSION['DepartamentoSend'];
		 //$Indicador=$_SESSION['IndicadorSend'];
		 //$period=$_SESSION['periodo'];
		 $proveedor2=$_SESSION['proveedorget'];
		 $producto2=$_SESSION['productoget'];
		 $year2=$_SESSION['aniioget'];
		 $period=$_SESSION['periodoget'];

	$query=mysqli_query($link,"Select * from selectdepartamento where iddepartamento='".$proveedor2."'");
	mysqli_data_seek($query,0);
    $Departament = mysqli_fetch_row($query);
	$Departamento=$Departament[1];

	$query2=mysqli_query($link,"Select * from selectindicador where idindicador='".$producto2."'");
	mysqli_data_seek($query2,0);
    $Indicad = mysqli_fetch_row($query2);
	$Indicador=$Indicad[1];

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

		 if($_SESSION['periodo']=="Primer Semestre")
			$periodo="and c.year1=".$year2." and m.idmes<7";

		if($_SESSION['periodo']=="Segundo Semestre")
			$periodo="and c.year1=".$year2." and m.idmes>6";

		if($_SESSION['periodo']=="Anual")
			$periodo="and c.year1=".$year2." and m.idmes<13";

		//obtener los datos con la consulta
		/*
		if($Departamento=="Almacen de Refacciones")
		{
			if($Indicador=="Rotacion de inventarios")
			{
				$sql="SELECT m.mes,c.objetivo,c.reals,c.year1 from mes m, a1_rot c WHERE m.idmes=c.idmes ".$periodo." ORDER BY  m.idmes ASC";
			}
			if($Indicador=="Tiempo de permanencia de inventarios")
			{
				$sql="SELECT m.mes,c.objetivo,c.reals,c.year1 from mes m, a2_tiem c WHERE m.idmes=c.idmes ".$periodo." ORDER BY  m.idmes ASC";
			}
		}
		if($Departamento=="Cuentas Por Cobrar")
		{
			if($Indicador=="Indice de rotacion de cartera")
			{
			$sql="SELECT m.mes,c.objetivo,c.reals,c.year1 from mes m, cpc1_ind c WHERE m.idmes=c.idmes ".$periodo." ORDER BY  m.idmes ASC";
			}
			if($Indicador=="Plazo promedio de cobro")
			{
			$sql="SELECT m.mes,c.objetivo,c.reals,c.year1 from mes m, cpc2_plaz c WHERE m.idmes=c.idmes ".$periodo." ORDER BY  m.idmes ASC";
			}
			if($Indicador=="Cartera vencida a mas de 120 dias")
			{
			$sql="SELECT m.mes,c.objetivo,c.reals,c.year1 from mes m, cpc3_cart c WHERE m.idmes=c.idmes ".$periodo." ORDER BY  m.idmes ASC";
			}
		}

		if($Departamento=="Cuentas Por Pagar")
		{
			if($Indicador=="Plazo promedio de pago sin trigos")
			{
			$sql="SELECT m.mes,c.objetivo,c.reals,c.year1 from mes m, cpp1_plaz c WHERE m.idmes=c.idmes ".$periodo." ORDER BY  m.idmes ASC";
			}
			if($Indicador=="Indice de rotacion de cartera sin trigos")
			{
			$sql="SELECT m.mes,c.objetivo,c.reals,c.year1 from mes m, cpp2_ind c WHERE m.idmes=c.idmes ".$periodo." ORDER BY  m.idmes ASC";
			}
		}

		if($Departamento=="Cedi")
		{
			if($Indicador=="Rotacion de inventarios")
			{
			$sql="SELECT m.mes,c.objetivo,c.reals,c.year1 from mes m, ced1_rot c WHERE m.idmes=c.idmes ".$periodo." ORDER BY  m.idmes ASC";
			}
			if($Indicador=="Tiempo de permanencia de inventarios")
			{
			$sql="SELECT m.mes,c.objetivo,c.reals,c.year1 from mes m, ced2_tiem c WHERE m.idmes=c.idmes ".$periodo." ORDER BY  m.idmes ASC";
			}
			if($Indicador=="Ciclo operacional")
			{
			$sql="SELECT m.mes,c.objetivo,c.reals,c.year1 from mes m, ced3_cicl c WHERE m.idmes=c.idmes ".$periodo." ORDER BY  m.idmes ASC";
			}
		}

		if($Departamento=="Gestion de Personal")
		{
			if($Indicador=="Tiempo extra")
			{
			$sql="SELECT m.mes,c.objetivo,c.reals,c.year1 from mes m, gest1_tiem c WHERE m.idmes=c.idmes ".$periodo." ORDER BY  m.idmes ASC";
			}
			if($Indicador=="Ausentismo")
			{
			$sql="SELECT m.mes,c.objetivo,c.reals,c.year1 from mes m, gest2_aus c WHERE m.idmes=c.idmes ".$periodo." ORDER BY  m.idmes ASC";
			}
			if($Indicador=="Rotacion de personal")
			{
			$sql="SELECT m.mes,c.objetivo,c.reals,c.year1 from mes m, gest3_rot c WHERE m.idmes=c.idmes ".$periodo." ORDER BY  m.idmes ASC";
			}
			if($Indicador=="Horas de capacitacion")
			{
			$sql="SELECT m.mes,c.objetivo,c.reals,c.year1 from mes m, gest4_hor c WHERE m.idmes=c.idmes ".$periodo." ORDER BY  m.idmes ASC";
			}
			if($Indicador=="Gastos de capacitacion")
			{
			$sql="SELECT m.mes,c.objetivo,c.reals,c.year1 from mes m, gest5_gas c WHERE m.idmes=c.idmes ".$periodo." ORDER BY  m.idmes ASC";
			}
		}

		if($Departamento=="Seguridad Industrial")
		{
			if($Indicador=="Indice de riesgo")
			{
			$sql="SELECT m.mes,c.objetivo,c.reals,c.year1 from mes m, seg1_ries c WHERE m.idmes=c.idmes ".$periodo." ORDER BY  m.idmes ASC";
			}
			if($Indicador=="Indice de accidentabilidad")
			{
			$sql="SELECT m.mes,c.objetivo,c.reals,c.year1 from mes m, seg2_acci c WHERE m.idmes=c.idmes ".$periodo." ORDER BY  m.idmes ASC";
			}
			if($Indicador=="Prima de riesgo")
			{
			$sql="SELECT m.mes,c.objetivo,c.reals,c.year1 from mes m, seg3_prim c WHERE m.idmes=c.idmes ".$periodo." ORDER BY  m.idmes ASC";
			}
		}

		if($Departamento=="Compras")
		{
			if($Indicador=="Eficiencia de Compras")
			{
			$sql="SELECT m.mes,c.objetivo,c.reals,c.year1 from mes m, com1_efic c WHERE m.idmes=c.idmes ".$periodo." ORDER BY  m.idmes ASC";
			}
		}
		if($Departamento=="Sistemas")
		{
			if($Indicador=="Eficiencia de Sistemas")
			{
			$sql="SELECT m.mes,c.objetivo,c.reals,c.year1 from mes m, sis1_efic c WHERE m.idmes=c.idmes ".$periodo." ORDER BY  m.idmes ASC";
			}
		}

		if($Departamento=="Administracion")
		{
			if($Indicador=="Endeudamiento")
			{
			$sql="SELECT m.mes,c.objetivo,c.reals,c.year1 from mes m, adm1_end c WHERE m.idmes=c.idmes ".$periodo." ORDER BY  m.idmes ASC";
			}
			if($Indicador=="Liquidez")
			{
			$sql="SELECT m.mes,c.objetivo,c.reals,c.year1 from mes m, adm2_liq c WHERE m.idmes=c.idmes ".$periodo." ORDER BY  m.idmes ASC";
			}
			if($Indicador=="Rentabilidad")
			{
			$sql="SELECT m.mes,c.objetivo,c.reals,c.year1 from mes m, adm3_rent c WHERE m.idmes=c.idmes ".$periodo." ORDER BY  m.idmes ASC";
			}
			if($Indicador=="Capital de trabajo")
			{
			$sql="SELECT m.mes,c.objetivo,c.reals,c.year1 from mes m, adm4_cap c WHERE m.idmes=c.idmes ".$periodo." ORDER BY  m.idmes ASC";
			}
		}

		if($Departamento=="Impuestos")
		{
			if($Indicador=="Impuestos")
			{
			$sql="SELECT m.mes,c.objetivo,c.reals,c.year1 from mes m, impuest1 c WHERE m.idmes=c.idmes ".$periodo." ORDER BY  m.idmes ASC";
			}
		}

		if($Departamento=="Tesoreria")
		{
			if($Indicador=="Tesoreria")
			{
			$sql="SELECT m.mes,c.objetivo,c.reals,c.year1 from mes m, tesorer1 c WHERE m.idmes=c.idmes ".$periodo." ORDER BY  m.idmes ASC";
			}
		}
		*/
		//obtener los datos con la consulta
		$Bandera=0;
		if($Departamento=="Almacen de Refacciones")
		{
			if($Indicador=="Rotacion de inventarios")
			{
				$sql="SELECT m.mes,c.objetivo,c.reals,c.year1 from mes m, a1_rot c WHERE m.idmes=c.idmes ".$periodo." ORDER BY  m.idmes ASC";
			}
			if($Indicador=="Tiempo de permanencia de inventarios")
			{
				$sql="SELECT m.mes,c.objetivo,c.reals,c.year1 from mes m, a2_tiem c WHERE m.idmes=c.idmes ".$periodo." ORDER BY  m.idmes ASC";
				$Bandera=1;
			}
		}
		if($Departamento=="Cuentas Por Cobrar")
		{
			if($Indicador=="Indice de rotacion de cartera")
			{
			$sql="SELECT m.mes,c.objetivo,c.reals,c.year1 from mes m, cpc1_ind c WHERE m.idmes=c.idmes ".$periodo." ORDER BY  m.idmes ASC";
			}
			if($Indicador=="Plazo promedio de cobro")
			{
			$sql="SELECT m.mes,c.objetivo,c.reals,c.year1 from mes m, cpc2_plaz c WHERE m.idmes=c.idmes ".$periodo." ORDER BY  m.idmes ASC";
			$Bandera=1;
			}
			if($Indicador=="Cartera vencida a mas de 120 dias")
			{
			$sql="SELECT m.mes,c.objetivo,c.reals,c.year1 from mes m, cpc3_cart c WHERE m.idmes=c.idmes ".$periodo." ORDER BY  m.idmes ASC";
			$Bandera=1;
			}
		}

		if($Departamento=="Cuentas Por Pagar")
		{
			if($Indicador=="Plazo promedio de pago sin trigos")
			{
			$sql="SELECT m.mes,c.objetivo,c.reals,c.year1 from mes m, cpp1_plaz c WHERE m.idmes=c.idmes ".$periodo." ORDER BY  m.idmes ASC";
			}
			if($Indicador=="Indice de rotacion de cartera sin trigos")
			{
			$sql="SELECT m.mes,c.objetivo,c.reals,c.year1 from mes m, cpp2_ind c WHERE m.idmes=c.idmes ".$periodo." ORDER BY  m.idmes ASC";
			$Bandera=1;
			}
		}

		if($Departamento=="Cedi")
		{
			if($Indicador=="Rotacion de inventarios")
			{
			$sql="SELECT m.mes,c.objetivo,c.reals,c.year1 from mes m, ced1_rot c WHERE m.idmes=c.idmes ".$periodo." ORDER BY  m.idmes ASC";
			}
			if($Indicador=="Tiempo de permanencia de inventarios")
			{
			$sql="SELECT m.mes,c.objetivo,c.reals,c.year1 from mes m, ced2_tiem c WHERE m.idmes=c.idmes ".$periodo." ORDER BY  m.idmes ASC";
			$Bandera=1;
			}
			if($Indicador=="Ciclo operacional")
			{
			$sql="SELECT m.mes,c.objetivo,c.reals,c.year1 from mes m, ced3_cicl c WHERE m.idmes=c.idmes ".$periodo." ORDER BY  m.idmes ASC";
			$Bandera=1;
			}
		}

		if($Departamento=="Gestion de Personal")
		{
			if($Indicador=="Tiempo extra")
			{
			$sql="SELECT m.mes,c.objetivo,c.reals,c.year1 from mes m, gest1_tiem c WHERE m.idmes=c.idmes ".$periodo." ORDER BY  m.idmes ASC";
			$Bandera=1;
			}
			if($Indicador=="Ausentismo")
			{
			$sql="SELECT m.mes,c.objetivo,c.reals,c.year1 from mes m, gest2_aus c WHERE m.idmes=c.idmes ".$periodo." ORDER BY  m.idmes ASC";
			$Bandera=1;
			}
			if($Indicador=="Rotacion de personal")
			{
			$sql="SELECT m.mes,c.objetivo,c.reals,c.year1 from mes m, gest3_rot c WHERE m.idmes=c.idmes ".$periodo." ORDER BY  m.idmes ASC";
			$Bandera=1;
			}
			if($Indicador=="Horas de capacitacion")
			{
			$sql="SELECT m.mes,c.objetivo,c.reals,c.year1 from mes m, gest4_hor c WHERE m.idmes=c.idmes ".$periodo." ORDER BY  m.idmes ASC";
			}
			if($Indicador=="Gastos de capacitacion")
			{
			$sql="SELECT m.mes,c.objetivo,c.reals,c.year1 from mes m, gest5_gas c WHERE m.idmes=c.idmes ".$periodo." ORDER BY  m.idmes ASC";
			}
		}

		if($Departamento=="Seguridad Industrial")
		{
			if($Indicador=="Indice de riesgo")
			{
			$sql="SELECT m.mes,c.objetivo,c.reals,c.year1 from mes m, seg1_ries c WHERE m.idmes=c.idmes ".$periodo." ORDER BY  m.idmes ASC";
			$Bandera=1;
			}
			if($Indicador=="Indice de accidentabilidad")
			{
			$sql="SELECT m.mes,c.objetivo,c.reals,c.year1 from mes m, seg2_acci c WHERE m.idmes=c.idmes ".$periodo." ORDER BY  m.idmes ASC";
			$Bandera=1;
			}
			if($Indicador=="Prima de riesgo")
			{
			$sql="SELECT m.mes,c.objetivo,c.reals,c.year1 from mes m, seg3_prim c WHERE m.idmes=c.idmes ".$periodo." ORDER BY  m.idmes ASC";
			$Bandera=1;
			}
		}

		if($Departamento=="Compras")
		{
			if($Indicador=="Eficiencia de Compras")
			{
			$sql="SELECT m.mes,c.objetivo,c.reals,c.year1 from mes m, com1_efic c WHERE m.idmes=c.idmes ".$periodo." ORDER BY  m.idmes ASC";
			}
		}
		if($Departamento=="Sistemas")
		{
			if($Indicador=="Eficiencia de Sistemas")
			{
				$sql="SELECT m.mes,c.objetivo,c.reals,c.year1 from mes m, sis1_efic c WHERE m.idmes=c.idmes ".$periodo." ORDER BY  m.idmes ASC";
			}

			if($Indicador=="Numero de Servicios")
			{
			$sql="SELECT m.mes,c.objetivo,c.reals,c.year1 from mes m, sis2_numserv c WHERE m.idmes=c.idmes ".$periodo." ORDER BY  m.idmes ASC";
			}

			if($Indicador=="Horas perdidas de red")
			{
			$sql="SELECT m.mes,c.objetivo,c.reals,c.year1 from mes m, sis3_horaslost c WHERE m.idmes=c.idmes ".$periodo." ORDER BY  m.idmes ASC";
			$Bandera=1;
			}

			if($Indicador=="Desarrollo de software")
			{
			$sql="SELECT m.mes,c.objetivo,c.reals,c.year1 from mes m, sis4_desarrollo c WHERE m.idmes=c.idmes ".$periodo." ORDER BY  m.idmes ASC";
			}
		}

		if($Departamento=="Administracion")
		{
			if($Indicador=="Endeudamiento")
			{
			$sql="SELECT m.mes,c.objetivo,c.reals,c.year1 from mes m, adm1_end c WHERE m.idmes=c.idmes ".$periodo." ORDER BY m.idmes ASC";
			$Bandera=1;
			}
			if($Indicador=="Liquidez")
			{
			$sql="SELECT m.mes,c.objetivo,c.reals,c.year1 from mes m, adm2_liq c WHERE m.idmes=c.idmes ".$periodo." ORDER BY  m.idmes ASC";
			}
			if($Indicador=="Rentabilidad")
			{
			$sql="SELECT m.mes,c.objetivo,c.reals,c.year1 from mes m, adm3_rent c WHERE m.idmes=c.idmes ".$periodo." ORDER BY  m.idmes ASC";
			}
			if($Indicador=="Capital de trabajo")
			{
			$sql="SELECT m.mes,c.objetivo,c.reals,c.year1 from mes m, adm4_cap c WHERE m.idmes=c.idmes ".$periodo." ORDER BY  m.idmes ASC";
			}
		}

		if($Departamento=="Impuestos")
		{
			if($Indicador=="Impuestos")
			{
			$sql="SELECT m.mes,c.objetivo,c.reals,c.year1 from mes m, impuest1 c WHERE m.idmes=c.idmes ".$periodo." ORDER BY  m.idmes ASC";
			}
		}

		if($Departamento=="Tesoreria")
		{
			if($Indicador=="Tesoreria")
			{
			$sql="SELECT m.mes,c.objetivo,c.reals,c.year1 from mes m, tesorer1 c WHERE m.idmes=c.idmes ".$periodo." ORDER BY  m.idmes ASC";
			}
		}


//$link=Conectarse();


//MOstramos la tabla
$pdf->Ln();

$cabecer1[0]='Mes';
$cabecer1[1]='Objetivo';
$cabecer1[2]='Real';
$cabecer1[3]='Cumplimiento';
$cabecer1[4]='Año';
$yearzs = iconv ( 'UTF-8' ,  'windows-1252' , $cabecer1[4] );

$i=0;
$resultado = mysqli_query ($link,$sql);
while($row=mysqli_fetch_array($resultado))
{
	$mes1[$i]=$row[0];
	$objetiv1[$i]=$row[1];
	$real1[$i]=$row[2];
	$anio1[$i]=$row[3];
	$i++;

}
$pdf->Cell(22,5,$cabecer1[0],1,0,'C');
for($a=0;$a<$i;$a++)
{
	$pdf->Cell(15,5,$mes1[$a],1,0,'C');
}
$pdf->Ln();
$pdf->Cell(22,5,$cabecer1[1],1,0,'C');
for($b=0;$b<$i;$b++)
{
	$pdf->Cell(15,5,$objetiv1[$b],1,0,'C');
}
$pdf->Ln();
$pdf->Cell(22,5,$cabecer1[2],1,0,'C');
for($c=0;$c<$i;$c++)
{
	$pdf->Cell(15,5,$real1[$c],1,0,'C');
}
$pdf->Ln();
$pdf->Cell(22,5,$cabecer1[3],1,0,'C');
for($e=0;$e<$i;$e++)
{
		$Cumplimientoz=0;
		if($real1[$e] < 0)
		{
			$Cumplimientoz=100;
		}
		elseif($real1[$e] == 0)
		{
			$Cumplimientoz=100;
		}
		else
		{
			if($Bandera==1)
				$Cumplimientoz=round((($objetiv1[$e]/$real1[$e])*100),2);
			else
				$Cumplimientoz=round((($real1[$e]/$objetiv1[$e])*100),2);
		}

	$pdf->Cell(15,5,$Cumplimientoz."%",1,0,'C');
}
$pdf->Ln();
$pdf->Cell(22,5,$yearzs,1,0,'C');
for($d=0;$d<$i;$d++)
{
	$pdf->Cell(15,5,$anio1[$d],1,0,'C');
}


$pdf->Output('Reporte.pdf','D');
$pdfcode = $pdf->output();
$fp=fopen('','wb');
fwrite($fp,$pdfcode);
fclose($fp);

//$pdf->Output("pdf","pdIf.pdf");*/
?>
