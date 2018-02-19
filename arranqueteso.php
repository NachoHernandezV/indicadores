<?php
session_start();
?>
<?php
include("conect.php");
//$link=Conectarse();
date_default_timezone_set('America/Monterrey');

$user="root";
$pass="pirineos";
$server="localhost";
$bd="indicadores";
$idnomtabla = $_GET['param2_id'];

$link=mysqli_connect($server,$user,$pass,$bd);

	
	
	$yearactual=date("Y");
	$yearanterior=date('Y', strtotime('-1 year')) ;

	//$sqlani="SELECT count(*) FROM ".$tabla." WHERE year1='".$yearanterior."'";
	$sqlani="SELECT count(*) FROM tesorer1 WHERE year1='".$yearactual."'";
	$numanio=mysqli_query($con,$sqlani);
	mysqli_data_seek($numanio,0);
	$esdoce = mysqli_fetch_row($numanio);


	if($esdoce[0]== 0) //SI ESTA COMPLETO PONEMOS EL SIGUIENTE AÑO
	{
		$lmes="SELECT idmes FROM tesorer1 where year1=".$yearanterior." ORDER BY idmes DESC LIMIT 1";
	}
	else
	{
		$lmes="SELECT idmes FROM tesorer1 where year1=".$yearactual." ORDER BY idmes DESC LIMIT 1";
		//$resultad=mysqli_query($con,"SELECT * FROM anios where year1s='".$yearanterior."' group by year1s desc");
	}
	

		
	//$lmes="SELECT idmes FROM tesorer1 where year1=".date("Y")." ORDER BY idmes DESC LIMIT 1";
	$limitmes=mysqli_query($link,$lmes);
	$nummes = mysqli_fetch_array($limitmes);
	$numerodelmes=$nummes['idmes']+0;



	$resultad=mysqli_query($link,"SELECT * FROM mes where idmes<=".$numerodelmes." group by idmes asc");

	while($row2 = mysqli_fetch_array($resultad))
	{
		//echo '<option value="'.$row['idindicador'].'">'.$row['nombreind'].'</option>';
		echo '<option value="'.$row2['idmes'].'">'.$row2['mes'].'</option>';
	}
	
//}
?>