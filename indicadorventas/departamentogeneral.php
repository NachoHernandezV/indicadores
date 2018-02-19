<?php
session_start();
include("conect.php");
?>
<?php
$link=Conectarse();
$user="root";
$pass="pirineos";
$server="localhost";
$bd="indicadores2";

$con=mysqli_connect($server,$user,$pass,$bd);
$sql3="SELECT * FROM selectdepartamento where iddepartamento='".$_SESSION['clave']."' group by nombredep asc";
$result=mysqli_query($con,$sql3);
//$result=mysql_query($sql3);




while($row = mysqli_fetch_array($result))
{
	if( $row['nombredep'] == "Ventas1" or $row['nombredep'] == "Ventas2" or $row['nombredep'] == "Ventas3" or $row['nombredep'] == "Ventas4" or $row['nombredep'] == "Ventas5")
	{
		$row['nombredep']= "Ventas";
		echo '<option value="'.$row['iddepartamento'].'">'.$row['nombredep'].'</option>';
	}
	elseif( $row['nombredep'] == "Ventas6" or $row['nombredep'] == "Ventas7" or $row['nombredep'] == "Ventas8" or $row['nombredep'] == "Ventas9" or $row['nombredep'] == "Ventas10")
	{
		$row['nombredep']= "Ventas";
		echo '<option value="'.$row['iddepartamento'].'">'.$row['nombredep'].'</option>';
	}
	else
	echo '<option value="'.$row['iddepartamento'].'">'.$row['nombredep'].'</option>';
}
?>