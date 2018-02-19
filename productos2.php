<?php
session_start();
include("conect.php");
?>
<?php
$idproveedor = $_GET['param_id'];
$idproveedor=$idproveedor+0;

$user="root";
$pass="pirineos";
$server="localhost";
$bd="indicadores";

$con=mysqli_connect($server,$user,$pass,$bd);

if($idproveedor==1 or $idproveedor==2 or $idproveedor==3 or $idproveedor==4 or $idproveedor==5 or $idproveedor==6 or $idproveedor==7 or $idproveedor==9 or $idproveedor==10)
$result=mysqli_query($con,"SELECT * FROM selectindicador where iddepartamento=$idproveedor");
else
$result=mysqli_query($con,"SELECT * FROM selectindicador where iddepartamento='1'");
//$result=mysqli_query($con,"SELECT * FROM mes where idmes>3 group by idmes asc");

while($row = mysqli_fetch_array($result))
{
	echo '<option value="'.$row['idindicador'].'">'.$row['nombreind'].'</option>';
	//echo '<option value="'.$row['idmes'].'">'.$row['mes'].'</option>';
}
?>