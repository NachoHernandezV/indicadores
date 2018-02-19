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
$bd="indicadores2";
$anioyindicador= $_GET['param2_id'];
$con=mysqli_connect($server,$user,$pass,$bd);


//SE MANDAN 2 VARIABLES DE EL JAVA SCRIPT   EL IDAÑO Y EL ID DE INDICADOR  JUNTAS EN UN STRING
for ($i=0;$i<=10;$i++)
{ 
	if($anioyindicador[$i] == "y")
	{
		$separacion=$i;
	}
}

//VARIABLES SEPARADAS
$idindicador=substr($anioyindicador,$separacion+1);
$idanio=substr($anioyindicador,0,$separacion);


$consutl="SELECT i.nombreind,d.nombredep FROM selectindicador i, selectdepartamento d where i.iddepartamento=d.iddepartamento and i.idindicador='".$idindicador."'";
$lis=mysqli_query($con,$consutl);
$nomtabla = mysqli_fetch_array($lis);



	//ventas1
	if($nomtabla['nombreind'] == "Programa de Carga Diaria (a tiempo)")
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


	$sqlani="SELECT year1s FROM anios WHERE idanio='".$idanio."'";
	$numanio=mysqli_query($con,$sqlani);
	mysqli_data_seek($numanio,0);
	$nameyear = mysqli_fetch_row($numanio);


	$lmes="SELECT idmes FROM ".$tabla." where year1='".$nameyear[0]."' ORDER BY idmes DESC LIMIT 1";

//$lmes="SELECT idmes FROM ".$tabla." where year1='".date("Y")."' ORDER BY idmes DESC LIMIT 1";
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