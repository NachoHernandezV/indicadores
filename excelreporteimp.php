<?php
session_start();
?>
<?php

//Inicializar la variable del año, en le año actual
date_default_timezone_set('America/Monterrey');

require_once 'Classes/PHPExcel.php';
		$excel = new PHPExcel();
		header('Content-Type: application/vnd.ms-excel');
		header('Content-Disposition: attachment;filename="Reporte.xls"');
		header('Cache-Control: max-age=0');
		
		//CONEXION CON LA BASE DE DATOS
		$user="root";
		$pass="pirineos";
		$server="localhost";
		$bd="indicadores";

		$conexion=mysqli_connect($server,$user,$pass,$bd);
	
		//$conexion = mysql_connect ("localhost", "root", "pirineos");
		//mysql_select_db ("indicadores", $conexion); 
		 
		 //recolectar Los datos ENVIADOS DESDE EL QUE GENERA LA GRAFICA
		$year2=$_SESSION['anioget'];
		$period=$_SESSION['periodoget'];
		
	
	$query2=mysqli_query($conexion,"Select * from anios where idanio='".$year2."'");
	mysqli_data_seek($query2,0);
    $anio = mysqli_fetch_row($query2);
	$year2=$anio[1];
		 
	//echo "anio ".$year2;
	//echo "perio".$period;
		 ///Trimestre
	if($period=="Primer Trimestre")	
	$periodo="and c.year1=".$year2." and m.idmes BETWEEN 1 AND 3";

	ELSE if($period=="Segundo Trimestre")	
	$periodo="and c.year1=".$year2." and m.idmes BETWEEN 4 AND 6";
	
	ELSE if($period=="Tercer Trimestre")	
	$periodo="and c.year1=".$year2." and m.idmes BETWEEN 7 AND 9";
	
	if($period=="Cuarto Trimestre")	
	$periodo="and c.year1=".$year2." and m.idmes BETWEEN 10 AND 12";
	
	///Cuatrimestre
	ELSE if($period=="Primer Cuatrimestre")	
	$periodo="and c.year1=".$year2." and m.idmes BETWEEN 1 AND 4";

	ELSE if($period=="Segundo Cuatrimestre")	
	$periodo="and c.year1=".$year2." and m.idmes BETWEEN 5 AND 8";
	
	ELSE if($period=="Tercer Cuatrimestre")	
	$periodo="and c.year1=".$year2." and m.idmes BETWEEN 9 AND 12";
		 
	ELSE if($period=="Primer Semestre")	
	$periodo="and c.year1=".$year2." and m.idmes<7";

	ELSE if($period=="Segundo Semestre")	
	$periodo="and c.year1=".$year2." and m.idmes>6";
		
	ELSE if($period=="Anual")	
	$periodo="and c.year1=".$year2." and m.idmes<13";
     ELSE
	 {
		 
	 }
		
		
		
		$sql2="SELECT SUM(c.compensacion) as scompensacion,SUM(c.devolucion) as sdevolucion from mes m, impuest1 c WHERE m.idmes=c.idmes ".$periodo." ORDER BY  m.idmes ASC";
		
		$sql="SELECT m.mes,c.compensacion,c.devolucion,c.year1 from mes m, impuest1 c WHERE m.idmes=c.idmes ".$periodo." ORDER BY  m.idmes ASC";
		
		//
		 $resultado = mysqli_query ($conexion,$sql);
		 $registros = mysqli_num_rows ($resultado);
		 
		 //
		 $resultado2 = mysqli_query ($conexion,$sql2);
		 $registros2 = mysqli_num_rows ($resultado2);
		 //------------------

				//incluir una imagen
		$objDrawing = new PHPExcel_Worksheet_Drawing();
		$objDrawing->setPath("ImagenesReportes/".$_SESSION['FECB'].'.png'); //ruta
		$objDrawing->setHeight(550); //altura
		//$objDrawing->setWeight(100); //altura
		$objDrawing->setCoordinates('C1');
		$objDrawing->setWorksheet($excel->getActiveSheet()); //incluir la imagen
		//fin: incluir una imagen
		
		//incluir una imagen
		$objDrawing = new PHPExcel_Worksheet_Drawing();
		$objDrawing->setPath('fondos/logo.jpg'); //ruta
		$objDrawing->setHeight(50); //altura
		//$objDrawing->setWeight(100); //altura
		$objDrawing->setCoordinates('A2');
		$objDrawing->setWorksheet($excel->getActiveSheet()); //incluir la imagen
		//fin: incluir una imagen
		
		//
		//$objPHPExcel->createSheet(0); //crear hoja
		$excel->setActiveSheetIndex(0); //seleccionar hora
		$excel->getActiveSheet()->setTitle("Impuestos"); //establecer titulo de hoja
		 
		//orientacion hoja
		$excel->getActiveSheet()->getPageSetup()->setOrientation(PHPExcel_Worksheet_PageSetup::ORIENTATION_LANDSCAPE);
		 
		
		$excel->getDefaultStyle()->getFont()->setName('Times new Roman');
		$excel->getDefaultStyle()->getFont()->setSize(6);
		//$excel->getActiveSheet()->getRowDimension('1')->setRowHeight(20);
		$excel->getActiveSheet()->getRowDimension(1)->setRowHeight(-1);
		$excel->getActiveSheet()->getColumnDimension('A')->setWidth(15);
		$excel->getActiveSheet()->getColumnDimension('B')->setWidth(14);
		$excel->getActiveSheet()->getColumnDimension('C')->setWidth(14);//bien
		$excel->getActiveSheet()->getColumnDimension('D')->setWidth(14);
		$excel->getActiveSheet()->getColumnDimension('E')->setWidth(14);
		$excel->getActiveSheet()->getColumnDimension('F')->setWidth(14);//bien
		$excel->getActiveSheet()->getColumnDimension('G')->setWidth(14);//bien
		$excel->getActiveSheet()->getColumnDimension('H')->setWidth(14);
		$excel->getActiveSheet()->getColumnDimension('I')->setWidth(14);
		$excel->getActiveSheet()->getColumnDimension('J')->setWidth(14);//bien
		$excel->getActiveSheet()->getColumnDimension('K')->setWidth(14);//bien
		$excel->getActiveSheet()->getColumnDimension('L')->setWidth(14);
		$excel->getActiveSheet()->getColumnDimension('M')->setWidth(14);

	// Do your stuff here
	$y=56;
	$excel->setActiveSheetIndex(0)
		->setCellValue("A".$y,'Mes')
		->setCellValue("A".(string)($y+1),'Compensaciones')
		->setCellValue("A".(string)($y+2),'Devoluciones')
		->setCellValue("A".(string)($y+3),'Año');
		
		/*->setCellValue("A".$y,'MES')
		->setCellValue("B".$y,'REAL')
		->setCellValue("C".$y,'OBJETIVO')
		->setCellValue("D".$y,'AÑO');*/
 
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
			  ->getStyle('A56:A59')
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
			  ->getStyle("$letra[$i]56:$letra[$i]59") // A D
			  ->applyFromArray($borders);
			  
      $excel->setActiveSheetIndex(0)
            ->setCellValue($letra[$i].(string)(56), $registro->mes)
			->setCellValue($letra[$i].(string)(57), number_format($registro->compensacion,1,'.',','))
			->setCellValue($letra[$i].(string)(58), number_format($registro->devolucion,1,'.',','))
			->setCellValue($letra[$i].(string)(59), $registro->year1);
			
			/*->setCellValue('A'.$i, $registro->mes)
			->setCellValue('B'.$i, $registro->objetivo)
			->setCellValue('C'.$i, $registro->reals)
			->setCellValue('D'.$i, $registro->year1);*/
      $i++;
	  $j++;
	 // $letra++;
       
   }
      
	  	while ($registro2 = mysqli_fetch_object ($resultado2))
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
			  ->getStyle("$letra[$i]56:$letra[$i]59") // A D
			  ->applyFromArray($borders);
			  
	$suma=$registro2->scompensacion+$registro2->sdevolucion;  
	$excel->getActiveSheet()->getColumnDimension($letra[$i])->setWidth(17);
		
     $excel->setActiveSheetIndex(0)
            ->setCellValue($letra[$i].(string)(56),'Total')
			->setCellValue($letra[$i].(string)(57), number_format($registro2->scompensacion,1,'.',',')."  ".round(($registro2->scompensacion*100)/$suma,1). "%")
			->setCellValue($letra[$i].(string)(58), number_format($registro2->sdevolucion,1,'.',',')."  ".round(($registro2->sdevolucion*100)/$suma,1). "%")
			->setCellValue($letra[$i].(string)(59), number_format($suma,1,'.',',')."  100%");
       
   }
	  
	  

}
	$writer = PHPExcel_IOFactory::createWriter($excel, 'Excel5');

	// This line will force the file to download
	$writer->save('php://output');


?>