<?php
include("conect.php");
$user="root";
$pass="pirineos";
$server="localhost";
$bd="indicadores";
$idnomtabla = $_GET['param2_id'];

//$link=Conectarse();
//para php version nueva zona horaria
date_default_timezone_set('America/Monterrey');

$con=mysqli_connect($server,$user,$pass,$bd);

//temporal 1

////General el anio
	$yearactual=date("Y");
	$yearanterior=date('Y', strtotime('-1 year')) ;

	$sqlani="SELECT count(*) FROM impuest1 WHERE year1='".$yearanterior."'";
	$numanio=mysqli_query($con,$sqlani);
	mysqli_data_seek($numanio,0);
	$esdoce = mysqli_fetch_row($numanio);

	if($esdoce[0]== 12)
	{
		$resultad=mysqli_query($con,"SELECT * FROM anios where year1s=".date("Y")." group by year1s desc limit 1");
	}
	else
	{
		$resultad=mysqli_query($con,"SELECT * FROM anios where year1s<".date("Y")." group by year1s desc limit 1");
	}
	


	while($row2 = mysqli_fetch_array($resultad))
	{
		echo '<option value="'.$row2['idanio'].'">'.$row2['year1s'].'</option>';
	}
	
//}
?>