<?php
session_start();
?>
<?php

$user="root";
$pass="pirineos";
$server="localhost";
$bd="indicadores2";
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
		
			//PARA VENTASSSS
		//VENTAS 1
		if($Departamento=="Ventas1") 
		{
			if($Indicador=="Programa de Carga Diaria (a tiempo)")
			{
			$sql="SELECT m.mes,c.objetivo,c.reals,c.year1 from mes m, ventas1_prog c WHERE m.idmes=c.idmes ".$periodo." ORDER BY  m.idmes ASC";
			$nombreimagenfondo="Ventas1";
			}
		}
		//VENTAS 2
		if($Departamento=="Ventas2") 
		{
			if($Indicador=="Avance de proyectos tecnicos de marketing")
			{
			$sql="SELECT m.mes,c.objetivo,c.reals,c.year1 from mes m, ventas2_marketi c WHERE m.idmes=c.idmes ".$periodo." ORDER BY  m.idmes ASC";
			$nombreimagenfondo="Ventas2";
			}
		}
		//VENTAS 3
				if($Departamento=="Ventas3") 
		{
			if($Indicador=="Bultos de Harina 44")
			{
			$sql="SELECT m.mes,c.objetivo,c.reals,c.year1 from mes m, ventas3_bult44 c WHERE m.idmes=c.idmes ".$periodo." ORDER BY  m.idmes ASC";
			$nombreimagenfondo="Ventas3";
			}
		
			if($Indicador=="Bultos de Harina preparada 20kg")
			{
			$sql="SELECT m.mes,c.objetivo,c.reals,c.year1 from mes m, ventas3_bult20 c WHERE m.idmes=c.idmes ".$periodo." ORDER BY  m.idmes ASC";
			$nombreimagenfondo="Ventas3_1";
			}
		
			if($Indicador=="Cajas de Mejorante 8.8 kg")
			{
			$sql="SELECT m.mes,c.objetivo,c.reals,c.year1 from mes m, ventas3_cajas c WHERE m.idmes=c.idmes ".$periodo." ORDER BY  m.idmes ASC";
			$nombreimagenfondo="Ventas3_2";
			}
			
			if($Indicador=="Clientes nuevos (Numero)")
			{
			$sql="SELECT m.mes,c.objetivo,c.reals,c.year1 from mes m, ventas3_clientes c WHERE m.idmes=c.idmes ".$periodo." ORDER BY  m.idmes ASC";
			$nombreimagenfondo="Ventas3_3";
			}
			
			if($Indicador=="Numero de Clientes Perdidos")
			{
			$sql="SELECT m.mes,c.objetivo,c.reals,c.year1 from mes m, ventas3_numero c WHERE m.idmes=c.idmes ".$periodo." ORDER BY  m.idmes ASC";
			$nombreimagenfondo="Ventas3_4";
			}
			
				if($Indicador=="Demostraciones a Clientes Nuevos")
			{
			$sql="SELECT m.mes,c.objetivo,c.reals,c.year1 from mes m, ventas3_demos c WHERE m.idmes=c.idmes ".$periodo." ORDER BY  m.idmes ASC";
			$nombreimagenfondo="Ventas3_5";
			}
			
				if($Indicador=="Visita a Clientes por Direccion de Ventas")
			{
			$sql="SELECT m.mes,c.objetivo,c.reals,c.year1 from mes m, ventas3_visit c WHERE m.idmes=c.idmes ".$periodo." ORDER BY  m.idmes ASC";
			$nombreimagenfondo="Ventas3_6";
			}
		}
		//ventas4
		if($Departamento=="Ventas4") 
		{
			if($Indicador=="Estadisticas de Venta Contra el Mes Anterior (Bultos)")
			{
			$sql="SELECT m.mes,c.objetivo,c.reals,c.year1 from mes m, ventas4_esta c WHERE m.idmes=c.idmes ".$periodo." ORDER BY  m.idmes ASC";
			$nombreimagenfondo="Ventas4";
			}
			if($Indicador=="Retroalimentacion Estadistica")
			{
			$sql="SELECT m.mes,c.objetivo,c.reals,c.year1 from mes m, ventas4_retro c WHERE m.idmes=c.idmes ".$periodo." ORDER BY  m.idmes ASC";
			$nombreimagenfondo="Ventas4_1";
			}
		}
		
			//ventas5
		if($Departamento=="Ventas5") 
		{
			if($Indicador=="Avance de proyectos tecnicos Inv. y Des. Harinas Blancas")
			{
			$sql="SELECT m.mes,c.objetivo,c.reals,c.year1 from mes m, ventas5_avanc c WHERE m.idmes=c.idmes ".$periodo." ORDER BY  m.idmes ASC";
			$nombreimagenfondo="Ventas5";
			}
		}
		
			//ventas6
		if($Departamento=="Ventas6") 
		{
			if($Indicador=="Nivel de Surtimiento Palm (Paqueteria)")
			{
			$sql="SELECT m.mes,c.objetivo,c.reals,c.year1 from mes m, ventas6_palm c WHERE m.idmes=c.idmes ".$periodo." ORDER BY  m.idmes ASC";
			$nombreimagenfondo="Ventas6";
			}
		}
		
				//ventas7
		if($Departamento=="Ventas7") 
		{
			if($Indicador=="Nivel Surtimiento Pellets")
			{
			$sql="SELECT m.mes,c.objetivo,c.reals,c.year1 from mes m, ventas7_pellets c WHERE m.idmes=c.idmes ".$periodo." ORDER BY  m.idmes ASC";
			$nombreimagenfondo="Ventas7";
			}
				if($Indicador=="Nivel de Surtimiento Bimbo")
			{
			$sql="SELECT m.mes,c.objetivo,c.reals,c.year1 from mes m, ventas7_bimbo c WHERE m.idmes=c.idmes ".$periodo." ORDER BY  m.idmes ASC";
			$nombreimagenfondo="Ventas7_1";
			}
		}
		
				//ventas8
		if($Departamento=="Ventas8") 
		{
			if($Indicador=="Nivel de Surtimiento Kellogg")
			{
			$sql="SELECT m.mes,c.objetivo,c.reals,c.year1 from mes m, ventas8_kellog c WHERE m.idmes=c.idmes ".$periodo." ORDER BY  m.idmes ASC";
			$nombreimagenfondo="Ventas8";
			}
				if($Indicador=="Nivel de Surtimiento Nestle Gerber")
			{
			$sql="SELECT m.mes,c.objetivo,c.reals,c.year1 from mes m, ventas8_nestle c WHERE m.idmes=c.idmes ".$periodo." ORDER BY  m.idmes ASC";
			$nombreimagenfondo="Ventas8_1";
			}
				if($Indicador=="Nivel de Surtimiento a Purina")
			{
			$sql="SELECT m.mes,c.objetivo,c.reals,c.year1 from mes m, ventas8_purina c WHERE m.idmes=c.idmes ".$periodo." ORDER BY  m.idmes ASC";
			$nombreimagenfondo="Ventas8_2";
			}
					if($Indicador=="Nivel de Surtimiento a Wal-Mart")
			{
			$sql="SELECT m.mes,c.objetivo,c.reals,c.year1 from mes m, ventas8_walmart c WHERE m.idmes=c.idmes ".$periodo." ORDER BY  m.idmes ASC";
			$nombreimagenfondo="Ventas8_3";
			}
		}
		
		//ventas9
		if($Departamento=="Ventas9") 
		{
			if($Indicador=="Nivel de Surtimiento Harinas Galletas")
			{
			$sql="SELECT m.mes,c.objetivo,c.reals,c.year1 from mes m, ventas9_harinas c WHERE m.idmes=c.idmes ".$periodo." ORDER BY  m.idmes ASC";
			$nombreimagenfondo="Ventas9";
			}
			if($Indicador=="Nivel de Surtimiento Harinas Global")
			{
			$sql="SELECT m.mes,c.objetivo,c.reals,c.year1 from mes m, ventas9_global c WHERE m.idmes=c.idmes ".$periodo." ORDER BY  m.idmes ASC";
			$nombreimagenfondo="Ventas9_1";
			}
			if($Indicador=="Nivel de Surtimiento Harinas Ferrero")
			{
			$sql="SELECT m.mes,c.objetivo,c.reals,c.year1 from mes m, ventas9_ferrero c WHERE m.idmes=c.idmes ".$periodo." ORDER BY  m.idmes ASC";
			$nombreimagenfondo="Ventas9_2";
			}
		}
		
		if($Departamento=="Ventas10") 
		{
			if($Indicador=="Crecimiento Guadalajara (con respecto al mes anterior)")
			{
			$sql="SELECT m.mes,c.objetivo,c.reals,c.year1 from mes m, ventas10_creci c WHERE m.idmes=c.idmes ".$periodo." ORDER BY  m.idmes ASC";
			$nombreimagenfondo="Ventas10";
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
