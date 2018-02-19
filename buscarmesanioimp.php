<?php
session_start();
?>
<?php
//include("conect.php");
//$link=Conectarse();
date_default_timezone_set('America/Monterrey');

$user="root";
$pass="pirineos";
$server="localhost";
$bd="indicadores";
$anio= $_GET['param2_id'];
$con=mysqli_connect($server,$user,$pass,$bd);


////General el anio
	$sqlani="SELECT year1s FROM anios WHERE idanio='".$anio."'";
	$numanio=mysqli_query($con,$sqlani);
	mysqli_data_seek($numanio,0);
	$nameyear = mysqli_fetch_row($numanio);


	$lmes="SELECT idmes FROM impuest1 where year1='".$nameyear[0]."' ORDER BY idmes DESC LIMIT 1";

//$lmes="SELECT idmes FROM ".$tabla." where year1='".date("Y")."' ORDER BY idmes DESC LIMIT 1";
$limitmes=mysqli_query($con,$lmes);
$nummes = mysqli_fetch_array($limitmes);
$numerodelmes=$nummes['idmes']+0;



$resultad=mysqli_query($con,"SELECT * FROM mes where idmes<=".$numerodelmes." group by idmes asc");

while($row2 = mysqli_fetch_array($resultad))
{
	//echo '<option value="'.$row['idindicador'].'">'.$row['nombreind'].'</option>';
	echo '<option value="'.$row2['idmes'].'">'.$row2['mes'].'</option>';
}
?>