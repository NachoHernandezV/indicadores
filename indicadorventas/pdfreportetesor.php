<?php
session_start();
?>
<?php header("Content-Type: text/html; charset=utf-8");

//Inicializar la variable del año, en le año actual
date_default_timezone_set('America/Monterrey');

include_once('Classes/pdf/fpdf.php');

/*$pdf=new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial','B',16);

/*$pdf->Output();
*/
$imagen='ImagenesReportes/'.$_SESSION['FECB'].'.png';
$logo='fondos/logo.jpg';
$tapa='fondos/tapa.png';

$pdf=new FPDF('L','mm','letter');
$pdf->SetMargins(20,18);
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->Image($imagen,40,10,180,160,'PNG'); // GRAFICA
$pdf->Image($tapa,50,10,40,40,'PNG'); //X Y  TAPA BLANCA 
$pdf->Image($logo,20,6,35,20,'JPG'); //   LOGO PIRINEOS

$pdf->SetFont('arial','',6); 
$pdf->Cell(50); 
$pdf->Ln(140); 


class PDF extends FPDF 
{ 
function header() 
{ 
$this->Image($imagen,16,10,85,150,'PNG'); // 
$this->SetFont('arial','',6); 
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
$pdf->SetFont("Arial","",6);


//CONEXION CON LA BASE DE DATOS
//CONEXION CON LA BASE DE DATOS
		
		$idnomtabla = $_GET['param2_id'];
		$user="root";
		$pass="pirineos";
		$server="localhost";
		$bd="indicadores2";
		$con=mysqli_connect($server,$user,$pass,$bd);
	
		//$conexion = mysql_connect ("localhost", "root", "pirineos");
		//mysql_select_db ("indicadores", $conexion); 
		 
		 //recolectar Los datos ENVIADOS DESDE EL QUE GENERA LA GRAFICA
		 $Departamento=$_SESSION['DepartamentoSend'];
		 $Indicador=$_SESSION['IndicadorSend'];
		 
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
		
		//obtener los datos con la consulta
		
		//$sql3="SELECT SUM(SUM(c.proveedores),SUM(c.cadenas),SUM(c.trenes),SUM(c.garantias),SUM(c.creditos)) from mes m, tesorer1 c WHERE m.idmes=c.idmes ".$periodo." ORDER BY  m.idmes ASC";
		
		$sql2="SELECT SUM(c.proveedores) AS proveedores ,SUM(c.cadenas) AS cadenas,SUM(c.trenes) AS trenes,SUM(c.garantias) AS garantias,SUM(c.creditos) AS creditos from mes m, tesorer1 c WHERE m.idmes=c.idmes ".$periodo." ORDER BY  m.idmes ASC";
		
		$sql="SELECT m.mes,FORMAT(c.proveedores,1),FORMAT(c.cadenas,1),FORMAT(c.trenes,1),FORMAT(c.garantias,1),FORMAT(c.creditos,1),c.year1 from mes m, tesorer1 c WHERE m.idmes=c.idmes ".$periodo." ORDER BY  m.idmes ASC";


//$link=Conectarse();


//MOstramos la tabla
$pdf->Ln();

$cabecer1[0]='Mes';
$cabecer1[1]='Proveedores';
$cabecer1[2]='Cadenas';
$cabecer1[3]='Trenes';
$cabecer1[4]='Garantias';
$cabecer1[5]='Creditos';
$cabecer1[6]='Año';

$suma[0]='Total';
//$cabecer1[7]='';
$yearzs = iconv ( 'UTF-8' ,  'windows-1252' , $cabecer1[6] );

$resultado2 = mysqli_query ($con,$sql2);
while($row2=mysqli_fetch_array($resultado2))
{
	$suma[1]=$row2[0];
	$suma[2]=$row2[1];
	$suma[3]=$row2[2];
	$suma[4]=$row2[3];
	$suma[5]=$row2[4];
	$suma[6]=$row2[0] + $row2[1] + $row2[2] + $row2[3] + $row2[4];
}

$i=0;
$resultado = mysqli_query ($con,$sql);
while($row=mysqli_fetch_array($resultado))
{
	$mes1[$i]=$row[0];
	$proveedor1[$i]=$row[1];
	$cadenas1[$i]=$row[2];
	$trenes1[$i]=$row[3];
	$garantias1[$i]=$row[4];
	$creditos1[$i]=$row[5];
	$anio1[$i]=$row[6];
	$i++;
	
}
	$mes1[$i]=$suma[0];
	$proveedor1[$i]=$suma[1];
	$cadenas1[$i]=$suma[2];
	$trenes1[$i]=$suma[3];
	$garantias1[$i]=$suma[4];
	$creditos1[$i]=$suma[5];
	$i++;
$pdf->Cell(15,5,$cabecer1[0],1,0,'C');
for($a=0;$a<$i;$a++)
{
	if($a==($i-1))
	$pdf->Cell(26,5,$mes1[$a],1,0,'C');
	else
	$pdf->Cell(17,5,$mes1[$a],1,0,'C');
}
$pdf->Ln();
$pdf->Cell(15,5,$cabecer1[1],1,0,'C');
for($b=0;$b<$i;$b++)
{
	if($b==($i-1))
	$pdf->Cell(26,5,number_format($proveedor1[$b],1,'.',',')."  ".round(($proveedor1[$b]*100)/$suma[6],1). "%",1,0,'C');
	else
	$pdf->Cell(17,5,$proveedor1[$b],1,0,'C');
}
$pdf->Ln();
$pdf->Cell(15,5,$cabecer1[2],1,0,'C');
for($c=0;$c<$i;$c++)
{
	if($c==($i-1))
	$pdf->Cell(26,5,number_format($cadenas1[$c],1,'.',',')."  ".round(($cadenas1[$c]*100)/$suma[6],1). "%",1,0,'C');
	else
	$pdf->Cell(17,5,$cadenas1[$c],1,0,'C');
}

$pdf->Ln();
$pdf->Cell(15,5,$cabecer1[3],1,0,'C');
for($e=0;$e<$i;$e++)
{
	if($e==($i-1))
	$pdf->Cell(26,5,number_format($trenes1[$e],1,'.',',')."  ".round(($trenes1[$e]*100)/$suma[6],1). "%",1,0,'C');
	else
	$pdf->Cell(17,5,$trenes1[$e],1,0,'C');
}
$pdf->Ln();
$pdf->Cell(15,5,$cabecer1[4],1,0,'C');
for($f=0;$f<$i;$f++)
{
	if($f==($i-1))
	$pdf->Cell(26,5,number_format($garantias1[$f],1,'.',',')."  ".round(($garantias1[$f]*100)/$suma[6],1). "%",1,0,'C');
	else
	$pdf->Cell(17,5,$garantias1[$f],1,0,'C');
}
$pdf->Ln();
$pdf->Cell(15,5,$cabecer1[5],1,0,'C');
for($g=0;$g<$i;$g++)
{
	if($g==($i-1))
	$pdf->Cell(26,5,number_format($creditos1[$g],1,'.',',')."  ".round(($creditos1[$g]*100)/$suma[6],1). "%",1,0,'C');
	else
	$pdf->Cell(17,5,$creditos1[$g],1,0,'C');
}

$pdf->Ln();
$pdf->Cell(15,5,$yearzs,1,0,'C');
for($d=0;$d<$i;$d++)
{
	if($d==($i-1))
	$pdf->Cell(26,5,number_format($suma[6],1,'.',','). " 100%",1,0,'C');
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
