<?php

$iddepartamento = $_GET['param3_id'];
$user="root";
$pass="pirineos";
$server="localhost";
$bd="indicadores";
$con=mysqli_connect($server,$user,$pass,$bd);


$consutl="SELECT nombredep FROM selectdepartamento where iddepartamento='".$iddepartamento."'";
$lis=mysqli_query($con,$consutl);
$nomtabla = mysqli_fetch_array($lis);



//Almacen de refacciones
if($nomtabla['nombredep'] == "Almacen de Refacciones")
{
	$tabla="a1_rot";
}
//CUENTAS POR PAGAR
elseif($nomtabla['nombredep'] == "Cuentas Por Pagar")
{
	$tabla="cpp1_plaz";
}

//CUENTAS POR COBRAR
elseif($nomtabla['nombredep'] == "Cuentas Por Cobrar")
{
	$tabla="cpc1_ind";
}
//CEDI
elseif($nomtabla['nombredep'] == "Cedi")
{
	$tabla="ced1_rot";
}


//Gestion de personal
elseif($nomtabla['nombredep'] == "Gestion de Personal")
{
	$tabla="gest1_tiem";
}

//SEGURIDAD INDUSTRIAL
elseif($nomtabla['nombredep'] == "Seguridad Industrial")
{
	$tabla="seg1_ries";
}


//COMPRAS
elseif($nomtabla['nombredep'] == "Compras")
{
	$tabla="com1_efic";
}

//SISTEMAS
elseif($nomtabla['nombredep'] == "Sistemas")
{
	$tabla="sis1_efic";
}

//ADMINISTRACION
elseif($nomtabla['nombredep'] == "Administracion")
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


	if($esdoce[0]== 0) //SI ESTA COMPLETO PONEMOS EL SIGUIENTE AÑO
	{
		$lmes="SELECT idmes FROM ".$tabla." where year1='".$yearanterior."' ORDER BY idmes DESC LIMIT 1";
	}
	else
	{
		$lmes="SELECT idmes FROM ".$tabla." where year1='".$yearactual."' ORDER BY idmes DESC LIMIT 1";
	}
	
	$limitmes=mysqli_query($con,$lmes);
	$nummes = mysqli_fetch_array($limitmes);
	$numerodelmes=$nummes['idmes']+0;



$resultad=mysqli_query($con,"SELECT * FROM mes where idmes<=".$numerodelmes." group by idmes asc");

while($row2 = mysqli_fetch_array($resultad))
{
	//echo '<option value="'.$row['idindicador'].'">'.$row['nombreind'].'</option>';
	echo '<option value="'.$row2['idmes'].'">'.$row2['mes'].'</option>';
}
?>