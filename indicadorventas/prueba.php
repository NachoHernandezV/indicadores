<?php
include("conect.php");

//$link=Conectarse();
date_default_timezone_set('America/Monterrey');


$idnomtabla = $_GET['param2_id'];
$user="root";
$pass="pirineos";
$server="localhost";
$bd="indicadores2";
$con=mysqli_connect($server,$user,$pass,$bd);


$consutl="SELECT i.nombreind,d.nombredep FROM selectindicador i, selectdepartamento d where i.iddepartamento=d.iddepartamento and i.idindicador='".$idnomtabla."'";
//$lis=mysql_query($consutl);
//$nomtabla = mysql_fetch_array($lis);
$lis=mysqli_query($con,$consutl);
$nomtabla = mysqli_fetch_array($lis);



//Almacen de refacciones
if(($nomtabla['nombreind'] == "Rotacion de inventarios") and ($nomtabla['nombredep']=="Almacen de Refacciones"))
{
	$tabla="a1_rot";
}
elseif(($nomtabla['nombreind'] == "Tiempo de permanencia de inventarios") and ($nomtabla['nombredep']=="Almacen de Refacciones"))
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
elseif(($nomtabla['nombreind'] == "Rotacion de inventarios") and ($nomtabla['nombredep'] == "Cedi"))
{
	$tabla="ced1_rot";
}
elseif(($nomtabla['nombreind'] == "Tiempo de permanencia de inventarios") and ($nomtabla['nombredep'] == "Cedi"))
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
//ventas1
	elseif($nomtabla['nombreind'] == "Programa de Carga Diaria (a tiempo)")
	{
		$tabla="ventas1_prog";
	}
		//ventas2
	elseif($nomtabla['nombreind'] == "Avance de proyectos tecnicos de marketing")
	{
		$tabla="ventas2_marketi";
	}
	//ventas3
	elseif($nomtabla['nombreind'] == "Bultos de Harina 44")
	{
		$tabla="ventas3_bult44";
	}
	//ventas3
	elseif($nomtabla['nombreind'] == "Bultos de Harina preparada 20kg")
	{
		$tabla="ventas3_bult20";
	}
	//ventas3
	elseif($nomtabla['nombreind'] == "Cajas de Mejorante 8.8 kg")
	{
		$tabla="ventas3_cajas";
	}
		//ventas3
	elseif($nomtabla['nombreind'] == "Clientes nuevos (Numero)")
	{
		$tabla="ventas3_clientes";
	}
	//ventas3
	elseif($nomtabla['nombreind'] == "Numero de Clientes Perdidos")
	{
		$tabla="ventas3_numero";
	}
	//ventas3
		elseif($nomtabla['nombreind'] == "Demostraciones a Clientes Nuevos")
	{
		$tabla="ventas3_demos";
	}
		//ventas3
		elseif($nomtabla['nombreind'] == "Visita a Clientes por Direccion de Ventas")
	{
		$tabla="ventas3_visit";
	}
		//ventas4
		elseif($nomtabla['nombreind'] == "Estadisticas de Venta Contra el Mes Anterior (Bultos)")
	{
		$tabla="ventas4_esta";
	}
		//ventas4
		elseif($nomtabla['nombreind'] == "Retroalimentacion Estadistica")
	{
		$tabla="ventas4_retro";
	}
		//ventas5
		elseif($nomtabla['nombreind'] == "Avance de proyectos tecnicos Inv. y Des. Harinas Blancas")
	{
		$tabla="ventas5_avanc";
	}
			//ventas6
		elseif($nomtabla['nombreind'] == "Nivel de Surtimiento Palm (Paqueteria)")
	{
		$tabla="ventas6_palm";
	}
	//ventas7
		elseif($nomtabla['nombreind'] == "Nivel Surtimiento Pellets")
	{
		$tabla="ventas7_pellets";
	}
	//ventas7
		elseif($nomtabla['nombreind'] == "Nivel de Surtimiento Bimbo")
	{
		$tabla="ventas7_bimbo";
	}
		//ventas8
		elseif($nomtabla['nombreind'] == "Nivel de Surtimiento Kellogg")
	{
		$tabla="ventas8_kellog";
	}
		//ventas8
		elseif($nomtabla['nombreind'] == "Nivel de Surtimiento Nestle Gerber")
	{
		$tabla="ventas8_nestle";
	}
		//ventas8
		elseif($nomtabla['nombreind'] == "Nivel de Surtimiento a Purina")
	{
		$tabla="ventas8_purina";
	}
		//ventas8
		elseif($nomtabla['nombreind'] == "Nivel de Surtimiento Wal-Mart")
	{
		$tabla="ventas8_walmart";
	}
		//ventas9
		elseif($nomtabla['nombreind'] == "Nivel de Surtimiento Harinas Galletas")
	{
		$tabla="ventas9_harinas";
	}
	//ventas9
		elseif($nomtabla['nombreind'] == "Nivel de Surtimiento Harinas Global")
	{
		$tabla="ventas9_global";
	}
	//ventas9
		elseif($nomtabla['nombreind'] == "Nivel de Surtimiento Ferrero")
	{
		$tabla="ventas9_ferrero";
	}
	//ventas10
		elseif($nomtabla['nombreind'] == "Crecimiento Guadalajara (con respecto al mes anterior)")
	{
		$tabla="ventas10_creci";
	}

else{
	
}


////General el anio
	$yearactual=date("Y");
	$yearanterior=date('Y', strtotime('-1 year')) ;

	$sqlani="SELECT count(*) FROM ".$tabla." WHERE year1='".$yearanterior."'";
	$numanio=mysqli_query($con,$sqlani);
	mysqli_data_seek($numanio,0);
	$esdoce = mysqli_fetch_row($numanio);

	if($esdoce[0]== 12)
	{
		$lmes="SELECT idmes FROM ".$tabla." where year1='".$yearactual."' ORDER BY idmes DESC LIMIT 1";
	}
	else
	{
		$lmes="SELECT idmes FROM ".$tabla." where year1='".$yearanterior."' ORDER BY idmes DESC LIMIT 1";
	}
	

$limitmes=mysqli_query($con,$lmes);
//$limitmes=mysql_query($lmes);
$nummes = mysqli_fetch_array($limitmes);
//$nummes = mysql_fetch_array($limitmes);
$numerodelmes=$nummes['idmes']+0;



//$resultad=mysql_query("SELECT * FROM mes where idmes>".$numerodelmes." group by idmes asc");

$resultad=mysqli_query($con,"SELECT * FROM mes where idmes>".$numerodelmes." group by idmes asc limit 1");

while($row2 = mysqli_fetch_array($resultad))
{
	//echo '<option value="'.$row['idindicador'].'">'.$row['nombreind'].'</option>';
	echo '<option value="'.$row2['idmes'].'">'.$row2['mes'].'</option>';
}
?>