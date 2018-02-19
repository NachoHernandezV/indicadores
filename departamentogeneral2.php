<?php
session_start();
?>
<?php
$user="root";
$pass="pirineos";
$server="localhost";
$bd="indicadores";

$con=mysqli_connect($server,$user,$pass,$bd);

$sql3="SELECT * FROM selectdepartamento where iddepartamento='".$_SESSION['clave']."' group by nombredep asc";
$result=mysqli_query($con,$sql3);

while($row = mysqli_fetch_array($result)){
	echo '<option value="'.$row['iddepartamento'].'">'.$row['nombredep'].'</option>';
}
?>