<?php
session_start();
?>
<?php
//include("conect.php");
//$link=Conectarse();
date_default_timezone_set('America/Monterrey');

$user="root";
$pass="pirineos";
$server="localhost";
$bd="indicadores";
$idnomtabla = $_GET['param2_id'];

$con=mysqli_connect($server,$user,$pass,$bd);

	//$sql3="SELECT nombreind FROM selectindicador where iddepartamento='".$_SESSION['clave']."' group by  idindicador asc limit 1";
	$sql3="SELECT i.nombreind,d.nombredep FROM selectindicador i, selectdepartamento d where i.iddepartamento=d.iddepartamento and d.iddepartamento='".$_SESSION['clave']."' group by  i.idindicador asc limit 1";
	//$result=mysql_query($sql3);
	//$nomtabla = mysql_fetch_array($result);
	$result=mysqli_query($con,$sql3);
	$nomtabla = mysqli_fetch_array($result);

//Almacen de refacciones
if(($nomtabla['nombreind']=="Rotacion de inventarios") and ($nomtabla['nombredep']=="Almacen de Refacciones"))
{
	$tabla="a1_rot";
}
elseif($nomtabla['nombreind'] == "Tiempo de permanencia de inventarios" and ($nomtabla['nombredep']=="Almacen de Refacciones"))
{
	$tabla="a2_tiem";	
}
//CUENTAS POR PAGAR
elseif($nomtabla['nombreind'] == "Plazo promedio de pago sin trigos")
{
	$tabla="cpp1_plaz";
}
elseif($nomtabla['nombreind'] == "Indice de rotacion de cartera sin trigos")
{
	$tabla="cpp2_ind";		
}

//CUENTAS POR COBRAR
elseif($nomtabla['nombreind'] == "Indice de rotacion de cartera")
{
	$tabla="cpc1_ind";
}
elseif($nomtabla['nombreind'] == "Plazo promedio de cobro")
{
	$tabla="cpc2_plaz";		
}
elseif($nomtabla['nombreind'] == "Cartera vencida a mas de 120 dias")
{
	$tabla="cpc3_cart";		
}

	//CEDI
	elseif(($nomtabla['nombreind'] == "Rotacion de inventarios") and ($nomtabla['nombredep']=="Cedi"))
	{
		$tabla="ced1_rot";
	}
	elseif(($nomtabla['nombreind'] == "Tiempo de permanencia de inventarios") and ($nomtabla['nombredep']=="Cedi"))
	{
		$tabla="ced2_tiem";		
	}
	elseif($nomtabla['nombreind'] == "Ciclo operacional")
	{
		$tabla="ced3_cicl";		
	}


	//Gestion de personal
	elseif($nomtabla['nombreind'] == "Tiempo extra")
	{
		$tabla="gest1_tiem";
	}
	elseif($nomtabla['nombreind'] == "Ausentismo")
	{
		$tabla="gest2_aus";		
	}
	elseif($nomtabla['nombreind'] == "Rotacion de personal")
	{
		$tabla="gest3_rot";		
	}
	elseif($nomtabla['nombreind'] == "Horas de capacitacion")
	{
		$tabla="gest4_hor";	
	}
	elseif($nomtabla['nombreind'] == "Gastos de capacitacion")
	{
		$tabla="gest5_gas";	
	}

	//SEGURIDAD INDUSTRIAL
	elseif($nomtabla['nombreind'] == "Indice de riesgo")
	{
		$tabla="seg1_ries";
	}
	elseif($nomtabla['nombreind'] == "Indice de accidentabilidad")
	{
		$tabla="seg2_acci";		
	}
	elseif($nomtabla['nombreind'] == "Prima de riesgo")
	{
		$tabla="seg3_prim";		
	}



	//COMPRAS
	elseif($nomtabla['nombreind'] == "Eficiencia de Compras")
	{
		$tabla="com1_efic";
	}

	//SISTEMAS
	elseif($nomtabla['nombreind'] == "Eficiencia de Sistemas")
	{
		$tabla="sis1_efic";
	}

	//ADMINISTRACION
	elseif($nomtabla['nombreind'] == "Endeudamiento")
	{
		$tabla="adm1_end";
	}
	elseif($nomtabla['nombreind'] == "Liquidez")
	{
		$tabla="adm2_liq";		
	}
	elseif($nomtabla['nombreind'] == "Rentabilidad")
	{
		$tabla="adm3_rent";		
	}
	elseif($nomtabla['nombreind'] == "Capital de trabajo")
	{
		$tabla="adm4_cap";	
	}
	else{
		
	}

	$_SESSION['tablle']=$tabla;
	

	//selector de AÑOO
	
	$yearactual=date("Y");
	$yearanterior=date('Y', strtotime('-1 year')) ;

	//$sqlani="SELECT count(*) FROM ".$tabla." WHERE year1='".$yearanterior."'";
	$sqlani="SELECT count(*) FROM ".$tabla." WHERE year1='".$yearactual."'";
	$numanio=mysqli_query($con,$sqlani);
	mysqli_data_seek($numanio,0);
	$esdoce = mysqli_fetch_row($numanio);


if($esdoce[0]== 0)
{
	$lmes="SELECT idmes FROM ".$tabla." where year1='".$yearanterior."' ORDER BY idmes DESC LIMIT 1";
}
else
{
	$lmes="SELECT idmes FROM ".$tabla." where year1='".$yearactual."' ORDER BY idmes DESC LIMIT 1";
}
	
	//Temporal 7
	//$lmes="SELECT idmes FROM ".$tabla." where year1='2016' ORDER BY idmes DESC LIMIT 1";
	//$lmes="SELECT idmes FROM ".$tabla." where year1=".date("Y")." ORDER BY idmes DESC LIMIT 1";

	
	$limitmes=mysqli_query($con,$lmes);
	$nummes = mysqli_fetch_array($limitmes);
	
	$numerodelmes=$nummes['idmes']+0;



	//$resultad=mysql_query("SELECT * FROM mes where idmes<=".$numerodelmes." group by idmes asc");

	$resultad=mysqli_query($con,"SELECT * FROM mes where idmes<=".$numerodelmes." group by idmes asc");
	
	while($row2 = mysqli_fetch_array($resultad))
	{
		//echo '<option value="'.$row['idindicador'].'">'.$row['nombreind'].'</option>';
		echo '<option value="'.$row2['idmes'].'">'.$row2['mes'].'</option>';
	}
	
//}
?>