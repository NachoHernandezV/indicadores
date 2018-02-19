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
$bd="indicadores2";
$idnomtabla = $_GET['param2_id'];

$link=mysqli_connect($server,$user,$pass,$bd);



		
	$lmes="SELECT idmes FROM tesorer1 where year1=".date("Y")." ORDER BY idmes DESC LIMIT 1";
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