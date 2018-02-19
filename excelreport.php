<?php
session_start();
?>
<?php

$user="root";
$pass="pirineos";
$server="localhost";
$bd="indicadores";
$link=mysqli_connect($server,$user,$pass,$bd);

	//zona horaria php
	date_default_timezone_set('America/Monterrey');
	////////////////////////////////////////////////////////////////////////

		require_once 'Classes/PHPExcel.php';
		$excel = new PHPExcel();
		header('Content-Type: application/vnd.ms-excel');
		header('Content-Disposition: attachment;filename="Reporte.xls"');
		header('Cache-Control: max-age=0');

		//CONEXION CON LA BASE DE DATOS
		//$conexion = mysql_connect ("localhost", "root", "pirineos");
		//mysql_select_db ("indicadores", $conexion);

		//recolectar Los datos ENVIADOS DESDE EL QUE GENERA LA GRAFICA

		//$Departamento=$_SESSION['DepartamentoSend'];
		//$Indicador=$_SESSION['IndicadorSend'];
		//$year2=$_SESSION['anio'];
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


		//PARA EVITAR QUE TRUENE EL PROGRAMA
		if($year2==' ' || $year2==0 || $year2=='')
		{
			$year2=date("Y");
		}
		if($year2!='2015' && $year2!='2016' && $year2!='2017' && $year2!='2018' && $year2!='2019'&& $year2!='2019')
		{
		$year2=date("Y");
		}
		//// SI NO ENCUENTRA EL AÑO POR LA SESION


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


		$Bandera=0;
		//obtener los datos con la consulta
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

		 $resultado = mysqli_query ($link,$sql);
		 //$link=Conectarse();
		 //$resultado = mysql_query ($sql, $link) or die (mysql_error ());
		 $registros = mysqli_num_rows ($resultado);
		 //------------------

				//incluir una imagen
		$objDrawing = new PHPExcel_Worksheet_Drawing();
		$objDrawing->setPath("ImagenesReportes/".$_SESSION['FECB'].'.png'); //ruta
		$objDrawing->setHeight(550); //altura
		//$objDrawing->setWeight(100); //altura
		$objDrawing->setCoordinates('A1');
		$objDrawing->setWorksheet($excel->getActiveSheet()); //incluir la imagen
		//fin: incluir una imagen

		//incluir una imagen
		$objDrawing = new PHPExcel_Worksheet_Drawing();
		$objDrawing->setPath('fondos/logo.jpg'); //ruta
		$objDrawing->setHeight(50); //altura
		//$objDrawing->setWeight(100); //altura
		$objDrawing->setCoordinates('B2');
		$objDrawing->setWorksheet($excel->getActiveSheet()); //incluir la imagen
		//fin: incluir una imagen

		//
		//$objPHPExcel->createSheet(0); //crear hoja
		$excel->setActiveSheetIndex(0); //seleccionar hora
		$excel->getActiveSheet()->setTitle($Departamento); //establecer titulo de hoja

		//orientacion hoja
		$excel->getActiveSheet()->getPageSetup()->setOrientation(PHPExcel_Worksheet_PageSetup::ORIENTATION_LANDSCAPE);


		$excel->getDefaultStyle()->getFont()->setName('Times new Roman');
		$excel->getDefaultStyle()->getFont()->setSize(6);
		//$excel->getActiveSheet()->getRowDimension('1')->setRowHeight(20);
		$excel->getActiveSheet()->getRowDimension(1)->setRowHeight(-1);
		$excel->getActiveSheet()->getColumnDimension('A')->setWidth(12);
		$excel->getActiveSheet()->getColumnDimension('B')->setWidth(10);
		$excel->getActiveSheet()->getColumnDimension('C')->setWidth(10);//bien
		$excel->getActiveSheet()->getColumnDimension('D')->setWidth(10);
		$excel->getActiveSheet()->getColumnDimension('E')->setWidth(10);
		$excel->getActiveSheet()->getColumnDimension('F')->setWidth(10);//bien
		$excel->getActiveSheet()->getColumnDimension('G')->setWidth(10);//bien
		$excel->getActiveSheet()->getColumnDimension('H')->setWidth(10);
		$excel->getActiveSheet()->getColumnDimension('I')->setWidth(10);
		$excel->getActiveSheet()->getColumnDimension('J')->setWidth(10);//bien
		$excel->getActiveSheet()->getColumnDimension('K')->setWidth(10);//bien
		$excel->getActiveSheet()->getColumnDimension('L')->setWidth(10);
		$excel->getActiveSheet()->getColumnDimension('M')->setWidth(10);

	// Do your stuff here
	$y=56;
	$excel->setActiveSheetIndex(0)
		->setCellValue("A".$y,'Mes')
		->setCellValue("A".(string)($y+1),'Objetivo')
		->setCellValue("A".(string)($y+2),'Real')
		->setCellValue("A".(string)($y+3),'Cumplimiento')
		->setCellValue("A".(string)($y+4),'Año');



		$borders = array
	(
			'borders' =>array(
			'allborders' => array(
			'style' => PHPExcel_Style_Border::BORDER_THIN,
			'color' => array('argb'),
			)
			),
		'alignment' =>  array(
        'horizontal'=> PHPExcel_Style_Alignment::HORIZONTAL_CENTER,
        'vertical'  => PHPExcel_Style_Alignment::VERTICAL_CENTER,
        'wrap'      => TRUE
    )
	);

	$excel->getActiveSheet()
			  ->getStyle('A56:A60')
			  ->applyFromArray($borders);

if ($registros > 0)
{
	$i=0;
	$j=56;
	$letra = array('B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q');
	while ($registro = mysqli_fetch_object ($resultado))
	{
		$borders = array
	(
			'borders' =>array(
			'allborders' => array(
			'style' => PHPExcel_Style_Border::BORDER_THIN,
			'color' => array('argb'),
			)
			),
		'alignment' =>  array(
        'horizontal'=> PHPExcel_Style_Alignment::HORIZONTAL_CENTER,
        'vertical'  => PHPExcel_Style_Alignment::VERTICAL_CENTER,
        'wrap'      => TRUE
    )
	);

	$excel->getActiveSheet()
			  ->getStyle("$letra[$i]56:$letra[$i]60") // A D
			  ->applyFromArray($borders);

		$Cumplimientoz=0;
		if($registro->reals < 0)
		{
			$Cumplimientoz=100;
		}
		elseif($registro->reals == 0)
		{
			$Cumplimientoz=100;
		}
		else
		{
			if($Bandera==1)
				$Cumplimientoz=round((($registro->objetivo/$registro->reals)*100),2);
			else
				$Cumplimientoz=round((($registro->reals/$registro->objetivo)*100),2);
		}

      $excel->setActiveSheetIndex(0)
            ->setCellValue($letra[$i].(string)(56), $registro->mes)
			->setCellValue($letra[$i].(string)(57), $registro->objetivo)
			->setCellValue($letra[$i].(string)(58), $registro->reals)
			//->setCellValue($letra[$i].(string)(59), round((($registro->reals/$registro->objetivo)*100),2)."%")
			->setCellValue($letra[$i].(string)(59),$Cumplimientoz."%")
			->setCellValue($letra[$i].(string)(60),$registro->year1);

      $i++;
	  $j++;
	 // $letra++;

   }

}
	$writer = PHPExcel_IOFactory::createWriter($excel, 'Excel5');

	// This line will force the file to download
	$writer->save('php://output');
?>
