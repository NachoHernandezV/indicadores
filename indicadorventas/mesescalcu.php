
<?php
$user="root";
$pass="pirineos";
$server="localhost";
$bd="indicadores2";
$idnomtabla = $_GET['param2_id'];

$con=mysqli_connect($server,$user,$pass,$bd);


	$resultad=mysqli_query($con,"SELECT * FROM anios where year1s=".date("Y")." group by year1s desc");

	while($row2 = mysqli_fetch_array($resultad))
	{
		echo '<option value="'.$row2['idanio'].'">'.$row2['year1s'].'</option>';
	}
	
//}
?>