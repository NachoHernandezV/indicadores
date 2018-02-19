<?php
session_start();
?>
<?php
//Inicializar la variable del año, en le año actual
date_default_timezone_set('America/Monterrey');

include_once('Classes/pdf/fpdf.php');

/*$pdf=new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial','B',16);

/*$pdf->Output();
*/
//$imagen='ImagenesReportes/'.$_SESSION['FECB'].'.png';
$imagen='ImagenesReportes/'.$_SESSION['FECB'].'.png';
$logo='fondos/logo.jpg';


$pdf=new FPDF('L','mm','letter');
$pdf->SetMargins(20,18);
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->Image($imagen,40,10,180,160,'PNG'); // GRAFICA
$pdf->Image($logo,20,6,35,20,'JPG'); //   LOGO PIRINEOS
//$pdf->Image($imagen,16,10,238,168,'PNG'); // 
$pdf->SetFont('arial','',6); 
$pdf->Cell(50); 
$pdf->Ln(150); 


class PDF extends FPDF 
{ 
function header() 
{ 
$this->Image($imagen,16,10,115,200,'PNG'); // 
$this->SetFont('arial','',5); 
$this->Cell(50); 

$this->Ln(30); 
}

function Footer() 
{ 
$this->SetY(-10); 
$this->SetFont('Arial','',5); 
$this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C'); 
} 
} 




$pdf->SetTextColor(0x00,0x00,0x00);
$pdf->SetFont("Arial","",5);


//CONEXION CON LA BASE DE DATOS
//CONEXION CON LA BASE DE DATOS
	
		//$conexion = mysql_connect ("localhost", "root", "pirineos");
		//mysql_select_db ("indicadores", $conexion); 
		
		$idnomtabla = $_GET['param2_id'];
		$user="root";
		$pass="pirineos";
		$server="localhost";
		$bd="indicadores2";
		$con=mysqli_connect($server,$user,$pass,$bd);
		 
		 //recolectar Los datos ENVIADOS DESDE EL QUE GENERA LA GRAFICA
	$year2=$_SESSION['anioget'];
	$period=$_SESSION['periodoget'];
	
	$query2=mysqli_query($con,"Select * from anios where idanio='".$year2."'");
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
		
	
		$sql2="SELECT SUM(c.compensacion) AS compensacion,SUM(c.devolucion) AS devolucion from mes m, impuest1 c WHERE m.idmes=c.idmes ".$periodo." ORDER BY  m.idmes ASC";
	
		$sql="SELECT m.mes,c.compensacion,c.devolucion,c.year1 from mes m, impuest1 c WHERE m.idmes=c.idmes ".$periodo." ORDER BY  m.idmes ASC";
	

//$link=Conectarse();


//MOstramos la tabla
$pdf->Ln();

$cabecer1[0]='Mes';
$cabecer1[1]='Compensaciones';
$cabecer1[2]='Devoluciones';
$cabecer1[3]='Cumplimiento en %';
$cabecer1[4]='Año';
$yearzs = iconv ( 'UTF-8' ,  'windows-1252' , $cabecer1[4] );

$i=0;

$suma[0]='Total';
$resultado2 = mysqli_query ($con,$sql2);
while($row2=mysqli_fetch_array($resultado2))
{
	$suma[1]=$row2[0];
	$suma[2]=$row2[1];
	$suma[3]=$row2[0] + $row2[1];
}


$resultado = mysqli_query ($con,$sql);
while($row=mysqli_fetch_array($resultado))
{
	$mes1[$i]=$row[0];
	$objetiv1[$i]=$row[1];
	$real1[$i]=$row[2];
	$anio1[$i]=$row[3];
	$i++;
	
}
	$mes1[$i]=$suma[0];
	$objetiv1[$i]=$suma[1];
	$real1[$i]=$suma[2];
	$anio1[$i]=$suma[3];
	$i++;
	
	
	
$pdf->Cell(19,5,$cabecer1[0],1,0,'C');
for($a=0;$a<$i;$a++)
{	
	if($a==($i-1))
	$pdf->Cell(20,5,$mes1[$a],1,0,'C');
	else
	$pdf->Cell(17,5,$mes1[$a],1,0,'C');
}
$pdf->Ln();
$pdf->Cell(19,5,$cabecer1[1],1,0,'C');
for($b=0;$b<$i;$b++)
{	
	if($b==($i-1))
	$pdf->Cell(20,5,number_format($objetiv1[$b],1,'.',',')."  ".round(($objetiv1[$b]*100)/$suma[3],1). "%",1,0,'C');
	else
	$pdf->Cell(17,5,number_format($objetiv1[$b],1,'.',','),1,0,'C');
}
$pdf->Ln();
$pdf->Cell(19,5,$cabecer1[2],1,0,'C');
for($c=0;$c<$i;$c++)
{	
	if($c==($i-1))
	$pdf->Cell(20,5,number_format($real1[$c],1,'.',',')."  ".round(($real1[$c]*100)/$suma[3],1). "%",1,0,'C');
	else
	$pdf->Cell(17,5,number_format($real1[$c],1,'.',','),1,0,'C');
}
/*$pdf->Ln();
$pdf->Cell(19,5,$cabecer1[3],1,0,'C');
for($e=0;$e<$i;$e++)
{
	$pdf->Cell(17,5,round(($real1[$e]/$objetiv1[$e])*100,2),1,0,'C');
}*/
$pdf->Ln();
$pdf->Cell(19,5,$yearzs,1,0,'C');
for($d=0;$d<$i;$d++)
{
	if($d==($i-1))
	$pdf->Cell(20,5,number_format($anio1[$d],1,'.',',')."  100%",1,0,'C');
	else
	$pdf->Cell(17,5,$anio1[$d],1,0,'C');
}


$pdf->Output('Reporte.pdf','D');
$pdfcode = $pdf->output();
$fp=fopen('','wb');
fwrite($fp,$pdfcode);
fclose($fp);

//$pdf->Output("pdf","pdIf.pdf");*/
?>
