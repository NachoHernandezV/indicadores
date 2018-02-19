
<?php
$user="root";
$pass="pirineos";
$server="localhost";
$bd="indicadores";
$iddepart = $_GET['param_id'];


$con=mysqli_connect($server,$user,$pass,$bd);

//para php version nueva zona horaria
date_default_timezone_set('America/Monterrey');


//Almacen de refacciones
if($iddepart == 1)
{
	$tabla="a1_rot";
}


//CUENTAS POR COBRAR
elseif($iddepart == 2)
{
	$tabla="cpc1_ind";
}


//CUENTAS POR PAGAR
elseif($iddepart == 3)
{
	$tabla="cpp1_plaz";
}


//CEDI
elseif($iddepart == 4)
{
	$tabla="ced1_rot";
}


//Gestion de personal
elseif($iddepart == 6)
{
	$tabla="gest1_tiem";
}


//SEGURIDAD INDUSTRIAL
elseif($iddepart == 9)
{
	$tabla="seg1_ries";
}


//COMPRAS
elseif($iddepart == 5)
{
	$tabla="com1_efic";
}

//SISTEMAS
elseif($iddepart == 10)
{
	$tabla="sis1_efic";
}

//ADMINISTRACION
elseif($iddepart == 7)
{
	$tabla="adm1_end";
}

else{
	
}

	$yearactual=date("Y");
	$yearanterior=date('Y', strtotime('-1 year')) ;

	//$sqlani="SELECT count(*) FROM ".$tabla." WHERE year1='".$yearanterior."'";
	$sqlani="SELECT count(*) FROM ".$tabla." WHERE year1='".$yearactual."'";
	$numanio=mysqli_query($con,$sqlani);
	mysqli_data_seek($numanio,0);
	$esdoce = mysqli_fetch_row($numanio);


if($esdoce[0]== 0)
{
	$resultad=mysqli_query($con,"SELECT * FROM anios where year1s<'".date("Y")."' group by year1s desc");
}
else
{
	$resultad=mysqli_query($con,"SELECT * FROM anios where year1s<='".date("Y")."' group by year1s desc");
}
	
	while($row2 = mysqli_fetch_array($resultad))
	{
		echo '<option value="'.$row2['idanio'].'">'.$row2['year1s'].'</option>';
	}
	

?>