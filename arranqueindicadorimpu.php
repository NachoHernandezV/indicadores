<?php
date_default_timezone_set('America/Monterrey');

$user="root";
$pass="pirineos";
$server="localhost";
$bd="indicadores";

$link=mysqli_connect($server,$user,$pass,$bd);

////General el anio
	$yearactual=date("Y");
	$yearanterior=date('Y', strtotime('-1 year')) ;
	
	$sqlani="SELECT count(*) FROM impuest1 WHERE year1='".$yearanterior."'";
	$numanio=mysqli_query($link,$sqlani);
	mysqli_data_seek($numanio,0);
	$esdoc = mysqli_fetch_row($numanio);


	if($esdoc[0] == 12)
	{
		$lmes="SELECT idmes FROM impuest1 where year1=".date("Y")." ORDER BY idmes DESC LIMIT 1";
	}
	else
	{
		$lmes="SELECT idmes FROM impuest1 where year1=".$yearanterior." ORDER BY idmes DESC LIMIT 1";
	}
	
		
	
	$limitmes=mysqli_query($link,$lmes);
	$nummes = mysqli_fetch_array($limitmes);
	$numerodelmes=$nummes['idmes']+1;



	$resultad=mysqli_query($link,"SELECT * FROM mes where idmes=".$numerodelmes." group by idmes asc");

	while($row2 = mysqli_fetch_array($resultad))
	{
		echo '<option value="'.$row2['idmes'].'">'.$row2['mes'].'</option>';
		//echo '<option value="'.$row2['idmes'].'">'.$esdoc[0].'</option>';
	}
	
//}
?>