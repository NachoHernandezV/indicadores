<?php

$tabla = $_GET['param2_id'];
$idanio = $_GET['param3_id'];
$user="root";
$pass="pirineos";
$server="localhost";
$bd="indicadores2";
$con=mysqli_connect($server,$user,$pass,$bd);


	
$lmes="SELECT idmes FROM ".$tabla." where year1=".$idanio." ORDER BY idmes DESC LIMIT 1";
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