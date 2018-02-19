<?php
$idproveedor = $_GET['param_id'];


$user="root";
$pass="pirineos";
$server="localhost";
$bd="indicadores";

$con=mysqli_connect($server,$user,$pass,$bd);

$result=mysqli_query($con,"SELECT * FROM selectindicador where iddepartamento=$idproveedor");

while($row = mysqli_fetch_array($result)){
	echo '<option value="'.$row['idindicador'].'">'.$row['nombreind'].'</option>';
}
?>