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
//$resultad=mysqli_query($con,"SELECT * FROM anios where year1s<='2016' group by year1s desc");
$resultad=mysqli_query($con,"SELECT * FROM anios where year1s<=".date("Y")." group by year1s desc");
//

	while($row2 = mysqli_fetch_array($resultad))
	{
		echo '<option value="'.$row2['idanio'].'">'.$row2['year1s'].'</option>';
	}
	
//}
?>