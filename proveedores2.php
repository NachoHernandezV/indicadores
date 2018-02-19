<?php
$user="root";
$pass="pirineos";
$server="localhost";
$bd="indicadores";

$con=mysqli_connect($server,$user,$pass,$bd);

$result=mysqli_query($con,"SELECT * FROM selectdepartamento");

while($row = mysqli_fetch_array($result)){
	echo '<option value="'.$row['iddepartamento'].'">'.$row['nombredep'].'</option>';
}
?>