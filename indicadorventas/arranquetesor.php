<?php
session_start();
?>
<?php
$user="root";
$pass="pirineos";
$server="localhost";
$bd="indicadores2";
$idnomtabla = $_GET['param2_id'];

$con=mysqli_connect($server,$user,$pass,$bd);

		
	$lmes="SELECT idmes FROM tesorer1 where year1=".date('Y')." ORDER BY idmes DESC LIMIT 1";
	//$lmes="SELECT idmes FROM tesorer1 where year1='2016' ORDER BY idmes DESC LIMIT 1";
	$limitmes=mysqli_query($con,$lmes);
	$nummes = mysqli_fetch_array($limitmes);
	//$numerodelmes=$nummes['idmes']+0;
	$numerodelmes=$nummes['idmes']+1;


	//$resultad=mysqli_query($con,"SELECT * FROM mes where idmes=".$numerodelmes." group by idmes asc");
	$resultad=mysqli_query($con,"SELECT * FROM mes where idmes=".$numerodelmes." group by idmes asc");

	while($row2 = mysqli_fetch_array($resultad))
	{
		//echo '<option value="'.$row['idindicador'].'">'.$row['nombreind'].'</option>';
		echo '<option value="'.$row2['idmes'].'">'.$row2['mes'].'</option>';
	}
	
//}
?>