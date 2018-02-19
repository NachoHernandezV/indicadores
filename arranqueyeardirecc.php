
<?php
/*$user="root";
$pass="pirineos";
$server="localhost";
$bd="indicadores";
$idnomtabla = $_GET['param2_id'];

$con=mysqli_connect($server,$user,$pass,$bd);
	
	
	//temporal 8
	$resultad=mysqli_query($con,"SELECT * FROM anios where year1s='2016' group by year1s desc");
	//$resultad=mysqli_query($con,"SELECT * FROM anios where year1s=".date("Y")." group by year1s desc");

	while($row2 = mysqli_fetch_array($resultad))
	{
		echo '<option value="'.$row2['idanio'].'">'.$row2['year1s'].'</option>';
	}
	
//}*/

$user="root";
$pass="pirineos";
$server="localhost";
$bd="indicadores";

$con=mysqli_connect($server,$user,$pass,$bd);

//para php version nueva zona horaria
date_default_timezone_set('America/Monterrey');



	$yearactual=date("Y");
	$yearanterior=date('Y', strtotime('-1 year')) ;

	$sqlani="SELECT count(*) FROM a1_rot WHERE year1='".$yearanterior."'";
	$numanio=mysqli_query($con,$sqlani);
	mysqli_data_seek($numanio,0);
	$esdoce = mysqli_fetch_row($numanio);


if($esdoce[0]== 12)
{
	$resultad=mysqli_query($con,"SELECT * FROM anios where year1s<='".date("Y")."' group by year1s desc");
}
else
{
	$resultad=mysqli_query($con,"SELECT * FROM anios where year1s<='".$yearanterior."' group by year1s desc");
}
	
	while($row2 = mysqli_fetch_array($resultad))
	{
		echo '<option value="'.$row2['idanio'].'">'.$row2['year1s'].'</option>';
	}
	

?>