<?php
session_start();
?>
<?php
////////////////////////////////////////////////////////////////////////
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
		 $Departamento=$_SESSION['DepartamentoSend'];
		 $Indicador=$_SESSION['IndicadorSend'];

		 	//obtener EL NOMBRE DE DEPARTAMENTO Y EL INDICADOR
		$query=mysqli_query($conexion,"Select year1s from anios where idanio='".$_POST['year5']."'");
		mysqli_data_seek($query,0);
		$aniio = mysqli_fetch_row($query);



	$periodo="and c.year1='".$aniio[0]."' and m.idmes<13";



	//Rotacion de inventarios
	$sql1="SELECT m.mes,c.objetivo,c.reals,c.year1 from mes m, a1_rot c WHERE m.idmes=c.idmes ".$periodo." ORDER BY  m.idmes ASC";
	//Tiempo de permanencia de inventarios
	$sql2="SELECT m.mes,c.objetivo,c.reals,c.year1 from mes m, a2_tiem c WHERE m.idmes=c.idmes ".$periodo." ORDER BY  m.idmes ASC";


	//Indice de rotacion de cartera
	$sql3="SELECT m.mes,c.objetivo,c.reals,c.year1 from mes m, cpc1_ind c WHERE m.idmes=c.idmes ".$periodo." ORDER BY  m.idmes ASC";
	//Plazo promedio de cobro
	$sql4="SELECT m.mes,c.objetivo,c.reals,c.year1 from mes m, cpc2_plaz c WHERE m.idmes=c.idmes ".$periodo." ORDER BY  m.idmes ASC";
	//Cartera vencida a mas de 120 dias
	$sql5="SELECT m.mes,c.objetivo,c.reals,c.year1 from mes m, cpc3_cart c WHERE m.idmes=c.idmes ".$periodo." ORDER BY  m.idmes ASC";



	//Plazo promedio de pago sin trigos
	$sql6="SELECT m.mes,c.objetivo,c.reals,c.year1 from mes m, cpp1_plaz c WHERE m.idmes=c.idmes ".$periodo." ORDER BY  m.idmes ASC";
	//Indice de rotacion de cartera sin trigos
	$sql7="SELECT m.mes,c.objetivo,c.reals,c.year1 from mes m, cpp2_ind c WHERE m.idmes=c.idmes ".$periodo." ORDER BY  m.idmes ASC";



	//Rotacion de inventarios
	$sql8="SELECT m.mes,c.objetivo,c.reals,c.year1 from mes m, ced1_rot c WHERE m.idmes=c.idmes ".$periodo." ORDER BY  m.idmes ASC";
	//Tiempo de permanencia de inventarios
	$sql9="SELECT m.mes,c.objetivo,c.reals,c.year1 from mes m, ced2_tiem c WHERE m.idmes=c.idmes ".$periodo." ORDER BY  m.idmes ASC";
	//Ciclo operacional
	$sql10="SELECT m.mes,c.objetivo,c.reals,c.year1 from mes m, ced3_cicl c WHERE m.idmes=c.idmes ".$periodo." ORDER BY  m.idmes ASC";


	//Tiempo extra")
	$sql11="SELECT m.mes,c.objetivo,c.reals,c.year1 from mes m, gest1_tiem c WHERE m.idmes=c.idmes ".$periodo." ORDER BY  m.idmes ASC";
	//Ausentismo")
	$sql12="SELECT m.mes,c.objetivo,c.reals,c.year1 from mes m, gest2_aus c WHERE m.idmes=c.idmes ".$periodo." ORDER BY  m.idmes ASC";
	//Rotacion de personal")
	$sql13="SELECT m.mes,c.objetivo,c.reals,c.year1 from mes m, gest3_rot c WHERE m.idmes=c.idmes ".$periodo." ORDER BY  m.idmes ASC";
	//Horas de capacitacion")
	$sql14="SELECT m.mes,c.objetivo,c.reals,c.year1 from mes m, gest4_hor c WHERE m.idmes=c.idmes ".$periodo." ORDER BY  m.idmes ASC";
	//Gastos de capacitacion")
	$sql15="SELECT m.mes,c.objetivo,c.reals,c.year1 from mes m, gest5_gas c WHERE m.idmes=c.idmes ".$periodo." ORDER BY  m.idmes ASC";




	//Indice de riesgo")
	$sql16="SELECT m.mes,c.objetivo,c.reals,c.year1 from mes m, seg1_ries c WHERE m.idmes=c.idmes ".$periodo." ORDER BY  m.idmes ASC";
	//Indice de accidentabilidad")
	$sql17="SELECT m.mes,c.objetivo,c.reals,c.year1 from mes m, seg2_acci c WHERE m.idmes=c.idmes ".$periodo." ORDER BY  m.idmes ASC";
	//Prima de riesgo")
	$sql18="SELECT m.mes,c.objetivo,c.reals,c.year1 from mes m, seg3_prim c WHERE m.idmes=c.idmes ".$periodo." ORDER BY  m.idmes ASC";




	//Eficiencia de Compras
	$sql19="SELECT m.mes,c.objetivo,c.reals,c.year1 from mes m, com1_efic c WHERE m.idmes=c.idmes ".$periodo." ORDER BY  m.idmes ASC";


	//Endeudamiento
	$sql21="SELECT m.mes,c.objetivo,c.reals,c.year1 from mes m, adm1_end c WHERE m.idmes=c.idmes ".$periodo." ORDER BY m.idmes ASC";
	//Liquidez
	$sql22="SELECT m.mes,c.objetivo,c.reals,c.year1 from mes m, adm2_liq c WHERE m.idmes=c.idmes ".$periodo." ORDER BY  m.idmes ASC";
	//Rentabilidad
	$sql23="SELECT m.mes,c.objetivo,c.reals,c.year1 from mes m, adm3_rent c WHERE m.idmes=c.idmes ".$periodo." ORDER BY  m.idmes ASC";
	//Capital de trabajo
	$sql24="SELECT m.mes,c.objetivo,c.reals,c.year1 from mes m, adm4_cap c WHERE m.idmes=c.idmes ".$periodo." ORDER BY  m.idmes ASC";

		//Eficiencia de Sistemas")
		//Eficiencia de Sistemas")
		$sql20="SELECT m.mes,c.objetivo,c.reals,c.year1 from mes m, sis1_efic c WHERE m.idmes=c.idmes ".$periodo." ORDER BY  m.idmes ASC";
		$sql25="SELECT m.mes,c.objetivo,c.reals,c.year1 from mes m, sis2_numserv c WHERE m.idmes=c.idmes ".$periodo." ORDER BY  m.idmes ASC";
		$sql26="SELECT m.mes,c.objetivo,c.reals,c.year1 from mes m, sis3_horaslost c WHERE m.idmes=c.idmes ".$periodo." ORDER BY  m.idmes ASC";
		$sql27="SELECT m.mes,c.objetivo,c.reals,c.year1 from mes m, sis4_desarrollo c WHERE m.idmes=c.idmes ".$periodo." ORDER BY  m.idmes ASC";




		 //$resultado = mysql_query ($sql, $conexion) or die (mysql_error ());
		 //$registros = mysql_num_rows ($resultado);
		 //------------------

		 $resultadoalm1 = mysqli_query ($conexion,$sql1);
		 $registrosalm1 = mysqli_num_rows ($resultadoalm1);
		 //
		 $resultadoalm2 = mysqli_query ($conexion,$sql2) ;
		 $registrosalm2 = mysqli_num_rows ($resultadoalm2);


		 $resultadocpc1 = mysqli_query ($conexion,$sql3);
		 $registroscpc1 = mysqli_num_rows ($resultadocpc1);
		 //
		 $resultadocpc2 = mysqli_query ($conexion,$sql4);
		 $registroscpc2 = mysqli_num_rows ($resultadocpc2);
		 //
		 $resultadocpc3 = mysqli_query ($conexion,$sql5);
		 $registroscpc3 = mysqli_num_rows ($resultadocpc3);

		$resultadocpp1 = mysqli_query ($conexion,$sql6);
		$registroscpp1 = mysqli_num_rows ($resultadocpp1);
		//
		$resultadocpp2 = mysqli_query ($conexion,$sql7);
		$registroscpp2 = mysqli_num_rows ($resultadocpp2);

		$resultadoced1 = mysqli_query ($conexion,$sql8);
		$registrosced1 = mysqli_num_rows ($resultadoced1);
		//
		$resultadoced2 = mysqli_query ($conexion,$sql9);
		$registrosced2 = mysqli_num_rows ($resultadoced2);
		//
		$resultadoced3 = mysqli_query ($conexion,$sql10);
		$registrosced3 = mysqli_num_rows ($resultadoced3);
		//


		$resultadogp1 = mysqli_query ($conexion,$sql11);
		$registrosgp1 = mysqli_num_rows ($resultadogp1);
		//
		$resultadogp2 = mysqli_query ($conexion,$sql12);
		$registrosgp2 = mysqli_num_rows ($resultadogp2);
		//
		$resultadogp3 = mysqli_query ($conexion,$sql13);
		$registrosgp3 = mysqli_num_rows ($resultadogp3);
		//
		$resultadogp4 = mysqli_query ($conexion,$sql14);
		$registrosgp4 = mysqli_num_rows ($resultadogp4);
		//
		$resultadogp5 = mysqli_query ($conexion,$sql15);
		$registrosgp5 = mysqli_num_rows ($resultadogp5);
		//

		$resultadoseg1 = mysqli_query ($conexion,$sql16);
		$registrosseg1 = mysqli_num_rows ($resultadoseg1);
		//
		$resultadoseg2 = mysqli_query ($conexion,$sql17);
		$registrosseg2 = mysqli_num_rows ($resultadoseg2);
		//
		$resultadoseg3 = mysqli_query ($conexion,$sql18);
		$registrosseg3 = mysqli_num_rows ($resultadoseg3);
		//

		$resultadoadm1 = mysqli_query ($conexion,$sql21);
		$registrosadm1 = mysqli_num_rows ($resultadoadm1);
		//
		$resultadoadm2 = mysqli_query ($conexion,$sql22);
		$registrosadm2 = mysqli_num_rows ($resultadoadm2);
		//
		$resultadoadm3 = mysqli_query ($conexion,$sql23);
		$registrosadm3 = mysqli_num_rows ($resultadoadm3);
		//
		$resultadoadm4 = mysqli_query ($conexion,$sql24);
		$registrosadm4 = mysqli_num_rows ($resultadoadm4);
		//

		$resultadocomp = mysqli_query ($conexion,$sql19);
		$registroscomp = mysqli_num_rows ($resultadocomp);
		//

		$resultadosis = mysqli_query ($conexion,$sql20);
		$registrossis = mysqli_num_rows ($resultadosis);

		$resultadosis2 = mysqli_query ($conexion,$sql25);
		$registrossis2 = mysqli_num_rows ($resultadosis2);

		$resultadosis3 = mysqli_query ($conexion,$sql26);
		$registrossis3 = mysqli_num_rows ($resultadosis3);

		$resultadosis4 = mysqli_query ($conexion,$sql27);
		$registrossis4 = mysqli_num_rows ($resultadosis4);
		//


		//
		//$objPHPExcel->createSheet(0); //crear hoja
		$excel->setActiveSheetIndex(0); //seleccionar hora
		$excel->getActiveSheet()->setTitle("Plan Táctico"); //establecer titulo de hoja

		//orientacion hoja
		$excel->getActiveSheet()->getPageSetup()->setOrientation(PHPExcel_Worksheet_PageSetup::ORIENTATION_LANDSCAPE);


		$excel->getDefaultStyle()->getFont()->setName('Times new Roman');
		$excel->getDefaultStyle()->getFont()->setSize(12);
		//$excel->getActiveSheet()->getRowDimension('1')->setRowHeight(20);
		$excel->getActiveSheet()->getRowDimension(1)->setRowHeight(-1);
		$excel->getActiveSheet()->getColumnDimension('A')->setWidth(12);
		$excel->getActiveSheet()->getColumnDimension('B')->setWidth(30);
		$excel->getActiveSheet()->getColumnDimension('C')->setWidth(35);//bien
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
	$y=2;
	$excel->setActiveSheetIndex(0)
		->setCellValue("B".(string)(4),'Área')
		->setCellValue("C".(string)(4),'Indicador');

	$excel->setActiveSheetIndex(0)
		->setCellValue("B".(string)(6),'Cuentas Por Cobrar') //y = 3
		->setCellValue("B".(string)(9),'Cuentas Por Pagar')     //y=6
		->setCellValue("B".(string)(11),'Almacen de Refacciones') //y=8
		->setCellValue("B".(string)(13),'Cedi')     //y=10
		->setCellValue("B".(string)(16),'Gestion de Personal') //y=13
		->setCellValue("B".(string)(21),'Seguridad Industrial')     //y=18
		->setCellValue("B".(string)(24),'Administracion') 	//y=21
		->setCellValue("B".(string)(28),'Compras')  // y=25
		->setCellValue("B".(string)(29),'Sistemas'); 	//26

	$excel->setActiveSheetIndex(0)->mergeCells('B4:B5');
	$excel->getActiveSheet()->getStyle('B4')->getAlignment()->setVertical(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
	$excel->getActiveSheet()->getStyle('B4')->getAlignment()->setVertical(PHPExcel_Style_Alignment::VERTICAL_CENTER);

	$excel->setActiveSheetIndex(0)->mergeCells('C4:C5');
	$excel->getActiveSheet()->getStyle('C4')->getAlignment()->setVertical(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
	$excel->getActiveSheet()->getStyle('C4')->getAlignment()->setVertical(PHPExcel_Style_Alignment::VERTICAL_CENTER);

	$excel->setActiveSheetIndex(0)->mergeCells('B6:B8');
	$excel->getActiveSheet()->getStyle('B6')->getAlignment()->setVertical(PHPExcel_Style_Alignment::VERTICAL_CENTER);
	$excel->getActiveSheet()->getStyle('B6')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
	$excel->setActiveSheetIndex(0)->mergeCells('B9:B10');
	$excel->getActiveSheet()->getStyle('B9')->getAlignment()->setVertical(PHPExcel_Style_Alignment::VERTICAL_CENTER);
	$excel->getActiveSheet()->getStyle('B9')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
	$excel->setActiveSheetIndex(0)->mergeCells('B11:B12');
	$excel->getActiveSheet()->getStyle('B11')->getAlignment()->setVertical(PHPExcel_Style_Alignment::VERTICAL_CENTER);
	$excel->getActiveSheet()->getStyle('B11')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
	$excel->setActiveSheetIndex(0)->mergeCells('B13:B15');
	$excel->getActiveSheet()->getStyle('B13')->getAlignment()->setVertical(PHPExcel_Style_Alignment::VERTICAL_CENTER);
	$excel->getActiveSheet()->getStyle('B13')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
	$excel->setActiveSheetIndex(0)->mergeCells('B16:B20');
	$excel->getActiveSheet()->getStyle('B16')->getAlignment()->setVertical(PHPExcel_Style_Alignment::VERTICAL_CENTER);
	$excel->getActiveSheet()->getStyle('B16')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
	$excel->setActiveSheetIndex(0)->mergeCells('B21:B23');
	$excel->getActiveSheet()->getStyle('B21')->getAlignment()->setVertical(PHPExcel_Style_Alignment::VERTICAL_CENTER);
	$excel->getActiveSheet()->getStyle('B21')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
	$excel->setActiveSheetIndex(0)->mergeCells('B24:B27');
	$excel->getActiveSheet()->getStyle('B27')->getAlignment()->setVertical(PHPExcel_Style_Alignment::VERTICAL_CENTER);
	$excel->getActiveSheet()->getStyle('B27')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);

	$excel->getActiveSheet()->getStyle('B28')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
	$excel->getActiveSheet()->getStyle('B28')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);

	$excel->setActiveSheetIndex(0)->mergeCells('B29:B32');
	$excel->getActiveSheet()->getStyle('B29')->getAlignment()->setVertical(PHPExcel_Style_Alignment::VERTICAL_CENTER);
	$excel->getActiveSheet()->getStyle('B29')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);




		$excel->setActiveSheetIndex(0)
		->setCellValue("C".(string)(6),'Indice de rotación de cartera') //y = 3
		->setCellValue("C".(string)(7),'Plazo promedio de cobro')     //y=6
		->setCellValue("C".(string)(8),'Cartera vencida a + de 120 días') //y=8
		->setCellValue("C".(string)(9),'Plazo promedio de pago (sin trigos)')     //y=10
		->setCellValue("C".(string)(10),'Índice de rotación de cartera (sin trigos)') //y=13
		->setCellValue("C".(string)(11),'Rotación de inventarios')     //y=18
		->setCellValue("C".(string)(12),'Tiempo de permanencia de inventarios') 	//y=21
		->setCellValue("C".(string)(13),'Rotación de inventarios')  // y=25
		->setCellValue("C".(string)(14),'Tiempo de permanencia de inventarios')  // y=25
		->setCellValue("C".(string)(15),'Ciclo operacional')  // y=25
		->setCellValue("C".(string)(16),'Tiempo extra')  // y=25
		->setCellValue("C".(string)(17),'Ausentismo')  // y=25
		->setCellValue("C".(string)(18),'Rotación de personal')  // y=25
		->setCellValue("C".(string)(19),'Horas de capacitación')  // y=25
		->setCellValue("C".(string)(20),'Gastos de capacitación')  // y=25
		->setCellValue("C".(string)(21),'Índice de riesgo')  // y=25
		->setCellValue("C".(string)(22),'Índice de accidentabilidad')  // y=25
		->setCellValue("C".(string)(23),'Prima de riesgo')	//26
		->setCellValue("C".(string)(24),'Endeudamiento') 	//26
		->setCellValue("C".(string)(25),'Liquidez') 	//26
		->setCellValue("C".(string)(26),'Rentabilidad') 	//26
		->setCellValue("C".(string)(27),'Capital de trabajo') 	//26
		->setCellValue("C".(string)(28),'Eficiencia de Compras') 	//26
		->setCellValue("C".(string)(29),'Eficiencia de Sistemas')
		->setCellValue("C".(string)(30),'Numero de Servicios')
		->setCellValue("C".(string)(31),'Horas perdidas de red')
		->setCellValue("C".(string)(32),'Desarrollo de software');


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


	//TITULO EN COLOR MARRON
	$excel->getActiveSheet()->getStyle('B4:C4')->getFill()
        ->applyFromArray(array('type' => PHPExcel_Style_Fill::FILL_SOLID,
        'startcolor' => array('rgb' => 'BF8C8C')
        ));
//TITULO DE CUENTAS POR PAGAR
		$excel->getActiveSheet()->getStyle('B9:C9')->getFill()
        ->applyFromArray(array('type' => PHPExcel_Style_Fill::FILL_SOLID,
        'startcolor' => array('rgb' => 'ABD7AC')
        ));


			//TITULO CEDI
		$excel->getActiveSheet()->getStyle('B13:C13')->getFill()
        ->applyFromArray(array('type' => PHPExcel_Style_Fill::FILL_SOLID,
        'startcolor' => array('rgb' => 'ABD7AC')
        ));


						//TITULO SEGURIDAD INDUSTRIAL
		$excel->getActiveSheet()->getStyle('B21:C21')->getFill()
        ->applyFromArray(array('type' => PHPExcel_Style_Fill::FILL_SOLID,
        'startcolor' => array('rgb' => 'ABD7AC')
        ));


						//TITULO DE COMPRAS
		$excel->getActiveSheet()->getStyle('B28:C8')->getFill()
        ->applyFromArray(array('type' => PHPExcel_Style_Fill::FILL_SOLID,
        'startcolor' => array('rgb' => 'ABD7AC')
        ));


				//TITULO DE CUENTAS POR COBRAR
		$excel->getActiveSheet()->getStyle('B6:C6')->getFill()
        ->applyFromArray(array('type' => PHPExcel_Style_Fill::FILL_SOLID,
        'startcolor' => array('rgb' => 'F5F5F2')
        ));


						// ALMACEN
		$excel->getActiveSheet()->getStyle('B11:C11')->getFill()
        ->applyFromArray(array('type' => PHPExcel_Style_Fill::FILL_SOLID,
        'startcolor' => array('rgb' => 'F5F5F2')
        ));


						//GESTION DE PERSONAL
		$excel->getActiveSheet()->getStyle('B16:C16')->getFill()
        ->applyFromArray(array('type' => PHPExcel_Style_Fill::FILL_SOLID,
        'startcolor' => array('rgb' => 'F5F5F2')
        ));


						//ADMINISTRACION
		$excel->getActiveSheet()->getStyle('B24:C24')->getFill()
        ->applyFromArray(array('type' => PHPExcel_Style_Fill::FILL_SOLID,
        'startcolor' => array('rgb' => 'F5F5F2')
        ));


		$excel->getActiveSheet()->getStyle('B29:C29')->getFill()
        ->applyFromArray(array('type' => PHPExcel_Style_Fill::FILL_SOLID,
        'startcolor' => array('rgb' => 'F5F5F2')
        ));


$mayor=0;
///despuessss
if ($registrosalm1 > 0)
{
	$i=0;
	$letra = array('D','E','F','G','H','I','J','K','L','M','N','O','P','Q');
	while ($registro = mysqli_fetch_object ($resultadoalm1))
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

		//corregir divicion entre cero
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
			//$Cumplimientoz=round((($registro->objetivo/$registro->reals)*100),2);
			$Cumplimientoz=round((($registro->reals/$registro->objetivo)*100),2); //normal
		}

	$excel->getActiveSheet()
			  ->getStyle("$letra[$i]11") // A D
			  ->applyFromArray($borders);

      $excel->setActiveSheetIndex(0)
			->setCellValue($letra[$i].(string)(11),$Cumplimientoz."%");

      $i++;
   }
	$mayor=$i;
}
if ($registrosalm2 > 0)
{
	$i=0;
	$letra = array('D','E','F','G','H','I','J','K','L','M','N','O','P','Q');
	while ($registro2 = mysqli_fetch_object ($resultadoalm2))
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
	$Cumplimientoz=0;
		if($registro2->reals < 0)
		{
			$Cumplimientoz=100;
		}
		elseif($registro2->reals == 0)
		{
			$Cumplimientoz=100;
		}
		else
		{
			$Cumplimientoz=round((($registro2->objetivo/$registro2->reals)*100),2); //inverso
			//$Cumplimientoz=round((($registro->reals/$registro->objetivo)*100),2); //normal
		}
	$excel->getActiveSheet()
			  ->getStyle("$letra[$i]12") // A D
			  ->applyFromArray($borders);

      $excel->setActiveSheetIndex(0)
			->setCellValue($letra[$i].(string)(12),$Cumplimientoz."%");

      $i++;
   }

	if($mayor<$i)
		$mayor=$i;
}
//cpc
if ($registroscpc1 > 0)
{
	$i=0;
	$letra = array('D','E','F','G','H','I','J','K','L','M','N','O','P','Q');
	while ($registro3 = mysqli_fetch_object ($resultadocpc1))
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
	$Cumplimientoz=0;
		if($registro3->reals < 0)
		{
			$Cumplimientoz=100;
		}
		elseif($registro3->reals == 0)
		{
			$Cumplimientoz=100;
		}
		else
		{
			//$Cumplimientoz=round((($registro->objetivo/$registro->reals)*100),2); //inverso
			$Cumplimientoz=round((($registro3->reals/$registro3->objetivo)*100),2); //normal
		}
	$excel->getActiveSheet()
			  ->getStyle("$letra[$i]6") // A D
			  ->applyFromArray($borders);

      $excel->setActiveSheetIndex(0)
			->setCellValue($letra[$i].(string)(6),$Cumplimientoz."%");

      $i++;
   }
		if($mayor<$i)
		$mayor=$i;
}
if ($registroscpc2 > 0)
{
	$i=0;
	$Cumplimientoz=0;
	$letra = array('D','E','F','G','H','I','J','K','L','M','N','O','P','Q');
	while ($registro3 = mysqli_fetch_object ($resultadocpc2))
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

		if($registro3->reals < 0)
		{
			$Cumplimientoz=100;
		}
		elseif($registro3->reals == 0)
		{
			$Cumplimientoz=100;
		}
		else
		{
			$Cumplimientoz=round((($registro3->objetivo/$registro3->reals)*100),2); //inverso
			//$Cumplimientoz=round((($registro->reals/$registro->objetivo)*100),2); //normal
		}
	$excel->getActiveSheet()
			  ->getStyle("$letra[$i]7") // A D
			  ->applyFromArray($borders);

      $excel->setActiveSheetIndex(0)
			->setCellValue($letra[$i].(string)(7),$Cumplimientoz."%");

      $i++;
   }

		if($mayor<$i)
		$mayor=$i;
}
if ($registroscpc3 > 0)
{
	$i=0;
	$Cumplimientoz=0;
	$letra = array('D','E','F','G','H','I','J','K','L','M','N','O','P','Q');
	while ($registro3 = mysqli_fetch_object ($resultadocpc3))
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

		if($registro3->reals < 0)
		{
			$Cumplimientoz=100;
		}
		elseif($registro3->reals == 0)
		{
			$Cumplimientoz=100;
		}
		else
		{
			$Cumplimientoz=round((($registro3->objetivo/$registro3->reals)*100),2); //inverso
			//$Cumplimientoz=round((($registro->reals/$registro->objetivo)*100),2); //normal
		}
	$excel->getActiveSheet()
			  ->getStyle("$letra[$i]8") // A D
			  ->applyFromArray($borders);

      $excel->setActiveSheetIndex(0)
			->setCellValue($letra[$i].(string)(8),$Cumplimientoz."%");

      $i++;
   }
	if($mayor<$i)
		$mayor=$i;
}

if ($registroscpp1 > 0)
{
	$i=0;
	$Cumplimientoz=0;
	$letra = array('D','E','F','G','H','I','J','K','L','M','N','O','P','Q');
	while ($registro3 = mysqli_fetch_object ($resultadocpp1))
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

		if($registro3->reals < 0)
		{
			$Cumplimientoz=100;
		}
		elseif($registro3->reals == 0)
		{
			$Cumplimientoz=100;
		}
		else
		{
			//$Cumplimientoz=round((($registro->objetivo/$registro->reals)*100),2); //inverso
			$Cumplimientoz=round((($registro3->reals/$registro3->objetivo)*100),2); //normal
		}
	$excel->getActiveSheet()
			  ->getStyle("$letra[$i]9") // A D
			  ->applyFromArray($borders);

      $excel->setActiveSheetIndex(0)
			->setCellValue($letra[$i].(string)(9),$Cumplimientoz."%");

      $i++;
   }
	if($mayor<$i)
		$mayor=$i;
}
if ($registroscpp2 > 0)
{
	$i=0;
	$Cumplimientoz=0;
	$letra = array('D','E','F','G','H','I','J','K','L','M','N','O','P','Q');
	while ($registro3 = mysqli_fetch_object ($resultadocpp2))
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

		if($registro3->reals < 0)
		{
			$Cumplimientoz=100;
		}
		elseif($registro3->reals == 0)
		{
			$Cumplimientoz=100;
		}
		else
		{
			$Cumplimientoz=round((($registro3->objetivo/$registro3->reals)*100),2); //inverso
			//$Cumplimientoz=round((($registro->reals/$registro->objetivo)*100),2); //normal
		}
	$excel->getActiveSheet()
			  ->getStyle("$letra[$i]10") // A D
			  ->applyFromArray($borders);

      $excel->setActiveSheetIndex(0)
			->setCellValue($letra[$i].(string)(10),$Cumplimientoz."%");

      $i++;
   }
	if($mayor<$i)
		$mayor=$i;
}
if ($registrosced1 > 0)
{
	$i=0;
	$Cumplimientoz=0;
	$letra = array('D','E','F','G','H','I','J','K','L','M','N','O','P','Q');
	while ($registro3 = mysqli_fetch_object ($resultadoced1))
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

		if($registro3->reals < 0)
		{
			$Cumplimientoz=100;
		}
		elseif($registro3->reals == 0)
		{
			$Cumplimientoz=100;
		}
		else
		{
			//$Cumplimientoz=round((($registro->objetivo/$registro->reals)*100),2); //inverso
			$Cumplimientoz=round((($registro3->reals/$registro3->objetivo)*100),2); //normal
		}
	$excel->getActiveSheet()
			  ->getStyle("$letra[$i]13") // A D
			  ->applyFromArray($borders);

      $excel->setActiveSheetIndex(0)
			->setCellValue($letra[$i].(string)(13),$Cumplimientoz."%");

      $i++;
   }
	if($mayor<$i)
		$mayor=$i;
}
if ($registrosced2 > 0)
{
	$i=0;
	$Cumplimientoz=0;
	$letra = array('D','E','F','G','H','I','J','K','L','M','N','O','P','Q');
	while ($registro3 = mysqli_fetch_object ($resultadoced2))
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

		if($registro3->reals < 0)
		{
			$Cumplimientoz=100;
		}
		elseif($registro3->reals == 0)
		{
			$Cumplimientoz=100;
		}
		else
		{
			$Cumplimientoz=round((($registro3->objetivo/$registro3->reals)*100),2); //inverso
			//$Cumplimientoz=round((($registro->reals/$registro->objetivo)*100),2); //normal
		}
	$excel->getActiveSheet()
			  ->getStyle("$letra[$i]14") // A D
			  ->applyFromArray($borders);

      $excel->setActiveSheetIndex(0)
			->setCellValue($letra[$i].(string)(14),$Cumplimientoz."%");

      $i++;
   }
	if($mayor<$i)
		$mayor=$i;
}
if ($registrosced3 > 0)
{
	$i=0;
	$Cumplimientoz=0;
	$letra = array('D','E','F','G','H','I','J','K','L','M','N','O','P','Q');
	while ($registro3 = mysqli_fetch_object ($resultadoced3))
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

		if($registro3->reals < 0)
		{
			$Cumplimientoz=100;
		}
		elseif($registro3->reals == 0)
		{
			$Cumplimientoz=100;
		}
		else
		{
			$Cumplimientoz=round((($registro3->objetivo/$registro3->reals)*100),2); //inverso
			//$Cumplimientoz=round((($registro->reals/$registro->objetivo)*100),2); //normal
		}
	$excel->getActiveSheet()
			  ->getStyle("$letra[$i]15") // A D
			  ->applyFromArray($borders);

      $excel->setActiveSheetIndex(0)
			->setCellValue($letra[$i].(string)(15),$Cumplimientoz."%");

      $i++;
   }
   if($mayor<$i)
		$mayor=$i;
}
if ($registrosgp1 > 0)
{
	$i=0;
	$Cumplimientoz=0;
	$letra = array('D','E','F','G','H','I','J','K','L','M','N','O','P','Q');
	while ($registro3 = mysqli_fetch_object ($resultadogp1))
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


		if($registro3->reals < 0)
		{
			$Cumplimientoz=100;
		}
		elseif($registro3->reals == 0)
		{
			$Cumplimientoz=100;
		}
		else
		{
			$Cumplimientoz=round((($registro3->objetivo/$registro3->reals)*100),2); //inverso
			//$Cumplimientoz=round((($registro->reals/$registro->objetivo)*100),2); //normal
		}

	$excel->getActiveSheet()
			  ->getStyle("$letra[$i]16") // A D
			  ->applyFromArray($borders);

      $excel->setActiveSheetIndex(0)
			->setCellValue($letra[$i].(string)(16),$Cumplimientoz."%");

      $i++;
   }
	if($mayor<$i)
		$mayor=$i;
}
if ($registrosgp2 > 0)
{
	$i=0;
	$Cumplimientoz=0;
	$letra = array('D','E','F','G','H','I','J','K','L','M','N','O','P','Q');
	while ($registro3 = mysqli_fetch_object ($resultadogp2))
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


		if($registro3->reals < 0)
		{
			$Cumplimientoz=100;
		}
		elseif($registro3->reals == 0)
		{
			$Cumplimientoz=100;
		}
		else
		{
			$Cumplimientoz=round((($registro3->objetivo/$registro3->reals)*100),2); //inverso
			//$Cumplimientoz=round((($registro->reals/$registro->objetivo)*100),2); //normal
		}

	$excel->getActiveSheet()
			  ->getStyle("$letra[$i]17") // A D
			  ->applyFromArray($borders);

      $excel->setActiveSheetIndex(0)
			->setCellValue($letra[$i].(string)(17),$Cumplimientoz."%");

      $i++;
   }
	if($mayor<$i)
		$mayor=$i;
}
if ($registrosgp3 > 0)
{
	$i=0;
	$Cumplimientoz=0;
	$letra = array('D','E','F','G','H','I','J','K','L','M','N','O','P','Q');
	while ($registro3 = mysqli_fetch_object ($resultadogp3))
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


		if($registro3->reals < 0)
		{
			$Cumplimientoz=100;
		}
		elseif($registro3->reals == 0)
		{
			$Cumplimientoz=100;
		}
		else
		{
			$Cumplimientoz=round((($registro3->objetivo/$registro3->reals)*100),2); //inverso
			//$Cumplimientoz=round((($registro->reals/$registro->objetivo)*100),2); //normal
		}

	$excel->getActiveSheet()
			  ->getStyle("$letra[$i]18") // A D
			  ->applyFromArray($borders);

      $excel->setActiveSheetIndex(0)
			->setCellValue($letra[$i].(string)(18),$Cumplimientoz."%");

      $i++;
   }
	if($mayor<$i)
		$mayor=$i;
}
if ($registrosgp4 > 0)
{
	$i=0;
	$Cumplimientoz=0;
	$letra = array('D','E','F','G','H','I','J','K','L','M','N','O','P','Q');
	while ($registro3 = mysqli_fetch_object ($resultadogp4))
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


		if($registro3->reals < 0)
		{
			$Cumplimientoz=100;
		}
		elseif($registro3->reals == 0)
		{
			$Cumplimientoz=100;
		}
		else
		{
			//$Cumplimientoz=round((($registro->objetivo/$registro->reals)*100),2); //inverso
			$Cumplimientoz=round((($registro3->reals/$registro3->objetivo)*100),2); //normal
		}

	$excel->getActiveSheet()
			  ->getStyle("$letra[$i]19") // A D
			  ->applyFromArray($borders);

      $excel->setActiveSheetIndex(0)
			->setCellValue($letra[$i].(string)(19),$Cumplimientoz."%");

      $i++;
   }
	if($mayor<$i)
		$mayor=$i;
}
if ($registrosgp5 > 0)
{
	$i=0;
	$Cumplimientoz=0;
	$letra = array('D','E','F','G','H','I','J','K','L','M','N','O','P','Q');
	while ($registro3 = mysqli_fetch_object ($resultadogp5))
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


		if($registro3->reals < 0)
		{
			$Cumplimientoz=100;
		}
		elseif($registro3->reals == 0)
		{
			$Cumplimientoz=100;
		}
		else
		{
			//$Cumplimientoz=round((($registro->objetivo/$registro->reals)*100),2); //inverso
			$Cumplimientoz=round((($registro3->reals/$registro3->objetivo)*100),2); //normal
		}

	$excel->getActiveSheet()
			  ->getStyle("$letra[$i]20") // A D
			  ->applyFromArray($borders);

      $excel->setActiveSheetIndex(0)
			->setCellValue($letra[$i].(string)(20),$Cumplimientoz."%");

      $i++;
   }
	if($mayor<$i)
		$mayor=$i;
}

if ($registrosseg1 > 0)
{
	$i=0;
	$Cumplimientoz=0;
	$letra = array('D','E','F','G','H','I','J','K','L','M','N','O','P','Q');
	while ($registro3 = mysqli_fetch_object ($resultadoseg1))
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


		if($registro3->reals < 0)
		{
			$Cumplimientoz=100;
		}
		elseif($registro3->reals == 0)
		{
			$Cumplimientoz=100;
		}
		else
		{
			$Cumplimientoz=round((($registro3->objetivo/$registro3->reals)*100),2); //inverso
			//$Cumplimientoz=round((($registro->reals/$registro->objetivo)*100),2); //normal
		}

	$excel->getActiveSheet()
			  ->getStyle("$letra[$i]21") // A D
			  ->applyFromArray($borders);

      $excel->setActiveSheetIndex(0)
			->setCellValue($letra[$i].(string)(21),$Cumplimientoz."%");

      $i++;
   }
	if($mayor<$i)
		$mayor=$i;
}

if ($registrosseg2 > 0)
{
	$i=0;
	$Cumplimientoz=0;
	$letra = array('D','E','F','G','H','I','J','K','L','M','N','O','P','Q');
	while ($registro3 = mysqli_fetch_object ($resultadoseg2))
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


		if($registro3->reals < 0)
		{
			$Cumplimientoz=100;
		}
		elseif($registro3->reals == 0)
		{
			$Cumplimientoz=100;
		}
		else
		{
			$Cumplimientoz=round((($registro3->objetivo/$registro3->reals)*100),2); //inverso
			//$Cumplimientoz=round((($registro->reals/$registro->objetivo)*100),2); //normal
		}
	$excel->getActiveSheet()
			  ->getStyle("$letra[$i]22") // A D
			  ->applyFromArray($borders);

      $excel->setActiveSheetIndex(0)
			->setCellValue($letra[$i].(string)(22),$Cumplimientoz."%");

      $i++;
   }
	if($mayor<$i)
		$mayor=$i;
}

if ($registrosseg3 > 0)
{
	$i=0;
	$Cumplimientoz=0;
	$letra = array('D','E','F','G','H','I','J','K','L','M','N','O','P','Q');
	while ($registro3 = mysqli_fetch_object ($resultadoseg3))
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


		if($registro3->reals < 0)
		{
			$Cumplimientoz=100;
		}
		elseif($registro3->reals == 0)
		{
			$Cumplimientoz=100;
		}
		else
		{
			$Cumplimientoz=round((($registro3->objetivo/$registro3->reals)*100),2); //inverso
			//$Cumplimientoz=round((($registro->reals/$registro->objetivo)*100),2); //normal
		}
	$excel->getActiveSheet()
			  ->getStyle("$letra[$i]23") // A D
			  ->applyFromArray($borders);

      $excel->setActiveSheetIndex(0)
			->setCellValue($letra[$i].(string)(23),$Cumplimientoz."%");

      $i++;
   }
	if($mayor<$i)
		$mayor=$i;
}

if ($registrosadm1 > 0)
{
	$i=0;
	$Cumplimientoz=0;
	$letra = array('D','E','F','G','H','I','J','K','L','M','N','O','P','Q');
	while ($registro3 = mysqli_fetch_object ($resultadoadm1))
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

		if($registro3->reals < 0)
		{
			$Cumplimientoz=100;
		}
		elseif($registro3->reals == 0)
		{
			$Cumplimientoz=100;
		}
		else
		{
			$Cumplimientoz=round((($registro3->objetivo/$registro3->reals)*100),2); //inverso
			//$Cumplimientoz=round((($registro->reals/$registro->objetivo)*100),2); //normal
		}

	$excel->getActiveSheet()
			  ->getStyle("$letra[$i]24") // A D
			  ->applyFromArray($borders);

      $excel->setActiveSheetIndex(0)
			->setCellValue($letra[$i].(string)(24),$Cumplimientoz."%");

      $i++;
   }
	if($mayor<$i)
		$mayor=$i;
}
if ($registrosadm2 > 0)
{
	$i=0;
	$Cumplimientoz=0;
	$letra = array('D','E','F','G','H','I','J','K','L','M','N','O','P','Q');
	while ($registro3 = mysqli_fetch_object ($resultadoadm2))
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


		if($registro3->reals < 0)
		{
			$Cumplimientoz=100;
		}
		elseif($registro3->reals == 0)
		{
			$Cumplimientoz=100;
		}
		else
		{
			//$Cumplimientoz=round((($registro->objetivo/$registro->reals)*100),2); //inverso
			$Cumplimientoz=round((($registro3->reals/$registro3->objetivo)*100),2); //normal
		}

	$excel->getActiveSheet()
			  ->getStyle("$letra[$i]25") // A D
			  ->applyFromArray($borders);

      $excel->setActiveSheetIndex(0)
			->setCellValue($letra[$i].(string)(25),$Cumplimientoz."%");

      $i++;
   }
	if($mayor<$i)
		$mayor=$i;
}
if ($registrosadm3 > 0)
{
	$i=0;
	$Cumplimientoz=0;
	$letra = array('D','E','F','G','H','I','J','K','L','M','N','O','P','Q');
	while ($registro3 = mysqli_fetch_object ($resultadoadm3))
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


		if($registro3->reals < 0)
		{
			$Cumplimientoz=100;
		}
		elseif($registro3->reals == 0)
		{
			$Cumplimientoz=100;
		}
		else
		{
			//$Cumplimientoz=round((($registro->objetivo/$registro->reals)*100),2); //inverso
			$Cumplimientoz=round((($registro3->reals/$registro3->objetivo)*100),2); //normal
		}

	$excel->getActiveSheet()
			  ->getStyle("$letra[$i]26") // A D
			  ->applyFromArray($borders);

      $excel->setActiveSheetIndex(0)
			->setCellValue($letra[$i].(string)(26),$Cumplimientoz."%");

      $i++;
   }
	if($mayor<$i)
		$mayor=$i;
}
if ($registrosadm4 > 0)
{
	$i=0;
	$Cumplimientoz=0;
	$letra = array('D','E','F','G','H','I','J','K','L','M','N','O','P','Q');
	while ($registro3 = mysqli_fetch_object ($resultadoadm4))
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

		if($registro3->reals < 0)
		{
			$Cumplimientoz=100;
		}
		elseif($registro3->reals == 0)
		{
			$Cumplimientoz=100;
		}
		else
		{
			//$Cumplimientoz=round((($registro->objetivo/$registro->reals)*100),2); //inverso
			$Cumplimientoz=round((($registro3->reals/$registro3->objetivo)*100),2); //normal
		}

	$excel->getActiveSheet()
			  ->getStyle("$letra[$i]27") // A D
			  ->applyFromArray($borders);

      $excel->setActiveSheetIndex(0)
			->setCellValue($letra[$i].(string)(27),$Cumplimientoz."%");

      $i++;
   }
	if($mayor<$i)
		$mayor=$i;
}

if ($registroscomp > 0)
{
	$i=0;
	$Cumplimientoz=0;
	$letra = array('D','E','F','G','H','I','J','K','L','M','N','O','P','Q');
	while ($registro3 = mysqli_fetch_object ($resultadocomp))
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


		if($registro3->reals < 0)
		{
			$Cumplimientoz=100;
		}
		elseif($registro3->reals == 0)
		{
			$Cumplimientoz=100;
		}
		else
		{
			//$Cumplimientoz=round((($registro->objetivo/$registro->reals)*100),2); //inverso
			$Cumplimientoz=round((($registro3->reals/$registro3->objetivo)*100),2); //normal
		}

	$excel->getActiveSheet()
			  ->getStyle("$letra[$i]28") // A D
			  ->applyFromArray($borders);

      $excel->setActiveSheetIndex(0)
			->setCellValue($letra[$i].(string)(28),$Cumplimientoz."%");

      $i++;
   }
	if($mayor<$i)
		$mayor=$i;
}


///sistemas
if ($registrossis > 0 )
{
	$i=0;
	$Cumplimientoz=0;
	$letra = array('D','E','F','G','H','I','J','K','L','M','N','O','P','Q');
	while ($registro3 = mysqli_fetch_object ($resultadosis))
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

		if($registro3->reals < 0)
		{
			$Cumplimientoz=100;
		}
		elseif($registro3->reals == 0)
		{
			$Cumplimientoz=100;
		}
		else
		{
			//$Cumplimientoz=round((($registro->objetivo/$registro->reals)*100),2); //inverso
			$Cumplimientoz=round((($registro3->reals/$registro3->objetivo)*100),2); //normal
		}
	$excel->getActiveSheet()
			  ->getStyle("$letra[$i]29") // A D
			  ->applyFromArray($borders);

      $excel->setActiveSheetIndex(0)
			->setCellValue($letra[$i].(string)(29),$Cumplimientoz."%");

      $i++;
   }
	if($mayor<$i)
		$mayor=$i;
}
if ($registrossis2 > 0 )
{
	$i=0;
	$Cumplimientoz=0;
	$letra = array('D','E','F','G','H','I','J','K','L','M','N','O','P','Q');
	while ($registro3 = mysqli_fetch_object ($resultadosis2))
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

		if($registro3->reals < 0)
		{
			$Cumplimientoz=100;
		}
		elseif($registro3->reals == 0)
		{
			$Cumplimientoz=100;
		}
		else
		{
			//$Cumplimientoz=round((($registro3->objetivo/$registro3->reals)*100),2); //inverso
			$Cumplimientoz=round((($registro3->reals/$registro3->objetivo)*100),2); //normal
		}
	$excel->getActiveSheet()
			  ->getStyle("$letra[$i]30") // A D
			  ->applyFromArray($borders);

      $excel->setActiveSheetIndex(0)
			->setCellValue($letra[$i].(string)(30),$Cumplimientoz."%");

      $i++;
   }
	if($mayor<$i)
		$mayor=$i;
}
if ($registrossis3 > 0)
{
	$i=0;
	$Cumplimientoz=0;
	$letra = array('D','E','F','G','H','I','J','K','L','M','N','O','P','Q');
	while ($registro3 = mysqli_fetch_object ($resultadosis3))
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

		if($registro3->reals < 0)
		{
			$Cumplimientoz=100;
		}
		elseif($registro3->reals == 0)
		{
			$Cumplimientoz=100;
		}
		else
		{
			$Cumplimientoz=round((($registro3->objetivo/$registro3->reals)*100),2); //inverso
			//$Cumplimientoz=round((($registro->reals/$registro->objetivo)*100),2); //normal
		}
	$excel->getActiveSheet()
			  ->getStyle("$letra[$i]31") // A D
			  ->applyFromArray($borders);

      $excel->setActiveSheetIndex(0)
			->setCellValue($letra[$i].(string)(31),$Cumplimientoz."%");

      $i++;
   }
   if($mayor<$i)
		$mayor=$i;
}
if ($registrossis4 > 0)
{
	$i=0;
	$Cumplimientoz=0;
	$letra = array('D','E','F','G','H','I','J','K','L','M','N','O','P','Q');
	while ($registro3 = mysqli_fetch_object ($resultadosis4))
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

		if($registro3->reals < 0)
		{
			$Cumplimientoz=100;
		}
		elseif($registro3->reals == 0)
		{
			$Cumplimientoz=100;
		}
		else
		{
			//$Cumplimientoz=round((($registro3->objetivo/$registro3->reals)*100),2); //inverso
			$Cumplimientoz=round((($registro3->reals/$registro3->objetivo)*100),2); //normal
		}
	$excel->getActiveSheet()
			  ->getStyle("$letra[$i]32") // A D
			  ->applyFromArray($borders);

      $excel->setActiveSheetIndex(0)
			->setCellValue($letra[$i].(string)(32),$Cumplimientoz."%");

      $i++;
   }
   if($mayor<$i)
		$mayor=$i;
}


/*
if ($registrossis > 0)
{
	$i=0;
	$Cumplimientoz=0;
	$letra = array('D','E','F','G','H','I','J','K','L','M','N','O','P','Q');
	while ($registro3 = mysqli_fetch_object ($resultadosis))
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

		if($registro3->reals < 0)
		{
			$Cumplimientoz=100;
		}
		elseif($registro3->reals == 0)
		{
			$Cumplimientoz=100;
		}
		else
		{
			//$Cumplimientoz=round((($registro->objetivo/$registro->reals)*100),2); //inverso
			$Cumplimientoz=round((($registro3->reals/$registro3->objetivo)*100),2); //normal
		}

	$excel->getActiveSheet()
			  ->getStyle("$letra[$i]29") // A D
			  ->applyFromArray($borders);

      $excel->setActiveSheetIndex(0)
			->setCellValue($letra[$i].(string)(29),$Cumplimientoz."%");

      $i++;
   }
	if($mayor<$i)
		$mayor=$i;
}
*/
if ($registrossis > 0)
{
	$i=0;
	$letra = array('D','E','F','G','H','I','J','K','L','M','N','O','P','Q');
	$mes=array('Enero','Febrero','Marzo','Abril','Mayo','Junio','Julio','Agosto','Septiembre','Octubre','Noviembre','Diciembre','P','Q');

	$limite=$mayor-1;
	$excel->getActiveSheet()
			  ->getStyle("B3:$letra[$limite]32") // A D
			  ->applyFromArray($borders);
	while ($mayor != 0)
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
								  ->getStyle("$letra[$i]5") // A D
								  ->applyFromArray($borders);

					      $excel->setActiveSheetIndex(0)
								->setCellValue($letra[$i].(string)(5),$mes[$i]);

							$excel->getActiveSheet()->getStyle("$letra[$i]5")->getFill()
					        ->applyFromArray(array('type' => PHPExcel_Style_Fill::FILL_SOLID,
					        'startcolor' => array('rgb' => 'BF8C8C')
					        ));


					      $i++;
						  $mayor--;
   }
   $i--;


   //CUMPLIMIENTO
		  $excel->setActiveSheetIndex(0)->mergeCells("D4:$letra[$i]4");
		  $excel->setActiveSheetIndex(0)
				->setCellValue("D".(string)(4),'Cumplimiento en %'); //y = 3

		$excel->getActiveSheet()->getStyle("D4")->getFill()
        ->applyFromArray(array('type' => PHPExcel_Style_Fill::FILL_SOLID,
        'startcolor' => array('rgb' => 'BF8C8C')
        ));

	//PLAN TACTICO
		$excel->setActiveSheetIndex(0)
				->setCellValue("B3",'PLAN TÁCTICO'); //y = 3
		$excel->setActiveSheetIndex(0)->mergeCells("B3:$letra[$i]3");


		//COLOREAR LAS CELDAS DE LOS Resultados

		//TITULO DE CUENTAS POR PAGAR
						$excel->getActiveSheet()->getStyle("C9:$letra[$i]10")->getFill()
								->applyFromArray(array('type' => PHPExcel_Style_Fill::FILL_SOLID,
								'startcolor' => array('rgb' => 'ABD7AC')
								));

					//TITULO CEDI
						$excel->getActiveSheet()->getStyle("C13:$letra[$i]15")->getFill()
				        ->applyFromArray(array('type' => PHPExcel_Style_Fill::FILL_SOLID,
				        'startcolor' => array('rgb' => 'ABD7AC')
				        ));

								//TITULO SEGURIDAD INDUSTRIAL
						$excel->getActiveSheet()->getStyle("C21:$letra[$i]23")->getFill()
				        ->applyFromArray(array('type' => PHPExcel_Style_Fill::FILL_SOLID,
				        'startcolor' => array('rgb' => 'ABD7AC')
				        ));

								//TITULO DE COMPRAS
				$excel->getActiveSheet()->getStyle("B28:$letra[$i]28")->getFill()
		        ->applyFromArray(array('type' => PHPExcel_Style_Fill::FILL_SOLID,
		        'startcolor' => array('rgb' => 'ABD7AC')
		        ));


						//TITULO DE CUENTAS POR COBRAR
						$excel->getActiveSheet()->getStyle("C6:$letra[$i]8")->getFill()
				        ->applyFromArray(array('type' => PHPExcel_Style_Fill::FILL_SOLID,
				        'startcolor' => array('rgb' => 'F5F5F2')
				        ));

								// ALMACEN
						$excel->getActiveSheet()->getStyle("C11:$letra[$i]12")->getFill()
								->applyFromArray(array('type' => PHPExcel_Style_Fill::FILL_SOLID,
								'startcolor' => array('rgb' => 'F5F5F2')
								));

								//GESTION DE PERSONAL
						$excel->getActiveSheet()->getStyle("C16:$letra[$i]20")->getFill()
				        ->applyFromArray(array('type' => PHPExcel_Style_Fill::FILL_SOLID,
				        'startcolor' => array('rgb' => 'F5F5F2')
				        ));

								//ADMINISTRACION
						$excel->getActiveSheet()->getStyle("C24:$letra[$i]27")->getFill()
				        ->applyFromArray(array('type' => PHPExcel_Style_Fill::FILL_SOLID,
				        'startcolor' => array('rgb' => 'F5F5F2')
				        ));


						$excel->getActiveSheet()->getStyle("C29:$letra[$i]32")->getFill()
				        ->applyFromArray(array('type' => PHPExcel_Style_Fill::FILL_SOLID,
				        'startcolor' => array('rgb' => 'F5F5F2')
				        ));


}




	$writer = PHPExcel_IOFactory::createWriter($excel, 'Excel5');

	// This line will force the file to download
	$writer->save('php://output');


?>
