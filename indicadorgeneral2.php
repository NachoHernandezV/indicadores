<?php
session_start();
?>
<?php
$user="root";
$pass="pirineos";
$server="localhost";
$bd="indicadores";

$con=mysqli_connect($server,$user,$pass,$bd);
$sql3="SELECT * FROM selectindicador where iddepartamento='".$_SESSION['clave']."'";
$result=mysqli_query($con,$sql3);

while($row = mysqli_fetch_array($result)){
	echo '<option value="'.$row['idindicador'].'">'.$row['nombreind'].'</option>';
}
?>