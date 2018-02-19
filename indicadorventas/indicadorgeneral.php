<?php
session_start();
include("conect.php");
?>
<?php
//$link=Conectarse();
date_default_timezone_set('America/Monterrey');

$user="root";
$pass="pirineos";
$server="localhost";
$bd="indicadores2";

$con=mysqli_connect($server,$user,$pass,$bd);

$sql3="SELECT * FROM selectindicador where iddepartamento='".$_SESSION['clave']."' group by idindicador asc";
//$result=mysql_query($sql3);
$result=mysqli_query($con,$sql3);

while($row = mysqli_fetch_array($result)){
	echo '<option value="'.$row['idindicador'].'">'.$row['nombreind'].'</option>';
}
?>