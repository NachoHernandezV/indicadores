<?php
session_start();
include("conect.php");
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Registro</title>

</head>
<style type="text/css">
.boton1 {
	-moz-box-shadow: 0px 10px 14px -7px #3e7327;
	-webkit-box-shadow: 0px 10px 14px -7px #3e7327;
	box-shadow: 0px 10px 14px -7px #3e7327;
	background:-webkit-gradient(linear, left top, left bottom, color-stop(0.05, #A4A4A4), color-stop(1,#A4A4A4));
	background:-moz-linear-gradient(top, #A4A4A4 5%,#A4A4A4 100%);
	background:-webkit-linear-gradient(top, #A4A4A4 5%, #A4A4A4 100%);
	background:-o-linear-gradient(top, #A4A4A4 5%, #A4A4A4 100%);
	background:-ms-linear-gradient(top, #A4A4A4 5%, #A4A4A4 100%);
	background:linear-gradient(to bottom, #A4A4A4 5%, #A4A4A4 100%);
	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#A4A4A4', endColorstr='#A4A4A4',GradientType=0);
	background-color:#A4A4A4;
	-moz-border-radius:4px;
	-webkit-border-radius:4px;
	border-radius:4px;
	border:1px solid #4b8f29;
	display:inline-block;
	cursor:pointer;
	color:#ffffff;
	font-family:Arial;
	font-size:13px;
	font-weight:bold;
	padding:4px 11px;
	text-decoration:none;
	text-shadow:0px 1px 0px #5b8a3c;
}
.myButton:hover {
	background:-webkit-gradient(linear, left top, left bottom, color-stop(0.05, #72b352), color-stop(1, #77b55a));
	background:-moz-linear-gradient(top, #72b352 5%, #77b55a 100%);
	background:-webkit-linear-gradient(top, #72b352 5%, #77b55a 100%);
	background:-o-linear-gradient(top, #72b352 5%, #77b55a 100%);
	background:-ms-linear-gradient(top, #72b352 5%, #77b55a 100%);
	background:linear-gradient(to bottom, #72b352 5%, #77b55a 100%);
	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#72b352', endColorstr='#77b55a',GradientType=0);
	background-color:#72b352;
}
.myButton:active {
	position:relative;
	top:1px;
}

.boton {
	-moz-box-shadow: 0px 10px 14px -7px #3e7327;
	-webkit-box-shadow: 0px 10px 14px -7px #3e7327;
	box-shadow: 0px 10px 14px -7px #3e7327;
	background:-webkit-gradient(linear, left top, left bottom, color-stop(0.05, #77b55a), color-stop(1, #72b352));
	background:-moz-linear-gradient(top, #77b55a 5%, #72b352 100%);
	background:-webkit-linear-gradient(top, #77b55a 5%, #72b352 100%);
	background:-o-linear-gradient(top, #77b55a 5%, #72b352 100%);
	background:-ms-linear-gradient(top, #77b55a 5%, #72b352 100%);
	background:linear-gradient(to bottom, #77b55a 5%, #72b352 100%);
	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#77b55a', endColorstr='#72b352',GradientType=0);
	background-color:#77b55a;
	-moz-border-radius:4px;
	-webkit-border-radius:4px;
	border-radius:4px;
	border:1px solid #4b8f29;
	display:inline-block;
	cursor:pointer;
	color:#ffffff;
	font-family:Arial;
	font-size:13px;
	font-weight:bold;
	padding:4px 11px;
	text-decoration:none;
	text-shadow:0px 1px 0px #5b8a3c;
}
.myButton:hover {
	background:-webkit-gradient(linear, left top, left bottom, color-stop(0.05, #72b352), color-stop(1, #77b55a));
	background:-moz-linear-gradient(top, #72b352 5%, #77b55a 100%);
	background:-webkit-linear-gradient(top, #72b352 5%, #77b55a 100%);
	background:-o-linear-gradient(top, #72b352 5%, #77b55a 100%);
	background:-ms-linear-gradient(top, #72b352 5%, #77b55a 100%);
	background:linear-gradient(to bottom, #72b352 5%, #77b55a 100%);
	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#72b352', endColorstr='#77b55a',GradientType=0);
	background-color:#72b352;
}
.myButton:active {
	position:relative;
	top:1px;
}
</style>
<script src="jquery/jquerymin.js"></script>
	<script type="text/javascript">
	
	
	
			function activar(obj)
		{
			
			var d = document.form1;
			if(obj.checked==true)
			{
				d.Guardar.disabled = false;
				d.Guardar.className="boton";
				//d.Guardar.style.background="#A9E6B5";
			}
			else
			{
				d.Guardar.disabled= true;
				d.Guardar.className="boton1";
				//d.Guardar.style.background="#D8D8D8";
			}
		}
		
		
	</script>
<body>
<?php
//$link=Conectarse();

$user="root";
$pass="pirineos";
$server="localhost";
$bd="indicadores2";

$link=mysqli_connect($server,$user,$pass,$bd);

$usuario=$user;
$contrasena=$pass;
$departamento=$departamento;

//Inicializar la variable del año, en le año actual
date_default_timezone_set('America/Monterrey');
$extraido[5]=date('Y', time());

//recibir los datos
$Buscar=$_POST['Buscar'];
$year1=$_POST['year1'];
$proveedor=$_POST['proveedor'];
$mes=$_POST['mes'];
$producto=$_POST['producto'];

//
$realz=$_POST['realz'];
$comentarios=$_POST['comentarios'];
$Guardar=$_POST['Guardar'];

////////BUSCAR////////////////////////////////////////////////////////buscar
if ($Buscar == "Buscar") 
{	

	$query2=mysqli_query($link,"Select * from anios where idanio='".$year1."'");
	mysqli_data_seek($query2,0);
    $anio = mysqli_fetch_row($query2);
	$year1=$anio[1];
	$_SESSION['aniiio']=$year1;

//obtener EL NOMBRE DE DEPARTAMENTO Y EL INDICADOR
	$query=mysqli_query($link,"Select * from selectdepartamento where iddepartamento='".$proveedor."'");
	mysqli_data_seek($query,0);
    $nombredepartamento = mysqli_fetch_row($query);
	$_SESSION['ndepartamento']=$nombredepartamento[1];
	
	
	$query2=mysqli_query($link,"Select * from selectindicador where idindicador='".$producto."'");
	mysqli_data_seek($query2,0);
    $nombreindicador = mysqli_fetch_row($query2);
	$_SESSION['nindicador']=$nombreindicador[1];
	///////////////	
	
	$query4=mysqli_query($link,"Select mes from mes where idmes='".$mes."'");
	mysqli_data_seek($query4,0);
    $nombremes = mysqli_fetch_row($query4);
	$mes=$nombremes[0];
	
	$mesnum=0;
	if($mes=="Enero")
	$mesnum=1;
	if($mes=="Febrero")
	$mesnum=2;
	if($mes=="Marzo")
	$mesnum=3;
	if($mes=="Abril")
	$mesnum=4;
	if($mes=="Mayo")
	$mesnum=5;
	if($mes=="Junio")
	$mesnum=6;
	if($mes=="Julio")
	$mesnum=7;
	if($mes=="Agosto")
	$mesnum=8;
	if($mes=="Septiembre")
	$mesnum=9;
	if($mes=="Octubre")
	$mesnum=10;
	if($mes=="Noviembre")
	$mesnum=11;
	if($mes=="Diciembre")
	$mesnum=12;

   $_SESSION['meses']=$mesnum;
	
	if($nombredepartamento[1]=="Almacen de Refacciones") 
	{
			if($nombreindicador[1]=="Rotacion de inventarios")
			{	
				$q="SELECT objetivo,reals,nota FROM a1_rot WHERE year1 ='".$year1."' and idmes=".$mesnum;
				$tabla1 = mysqli_query($link,$q);
				$extraido = mysqli_fetch_row($tabla1);
			}
			if($nombreindicador[1]=="Tiempo de permanencia de inventarios")
			{
				$q="SELECT objetivo,reals,nota FROM a2_tiem WHERE year1 ='".$year1."' and idmes=".$mesnum;
				$tabla1 = mysqli_query($link,$q);
				$extraido = mysqli_fetch_row($tabla1);
			
			}
	
	}
	
	//Cuentas Por Pagar
	if($nombredepartamento[1]=="Cuentas Por Cobrar") 
	{
		
		if($nombreindicador[1]=="Indice de rotacion de cartera")
		{
				$q="SELECT objetivo,reals,nota FROM cpc1_ind WHERE year1 ='".$year1."' and idmes=".$mesnum;
				$tabla1 = mysqli_query($link,$q);
				$extraido = mysqli_fetch_row($tabla1);
		}
		if($nombreindicador[1]=="Plazo promedio de cobro")
		{
				$q="SELECT objetivo,reals,nota FROM cpc2_plaz WHERE year1 ='".$year1."' and idmes=".$mesnum;
				$tabla1 = mysqli_query($link,$q);
				$extraido = mysqli_fetch_row($tabla1);
		}
		if($nombreindicador[1]=="Cartera vencida a mas de 120 dias")
		{
				$q="SELECT objetivo,reals,nota FROM cpc3_cart WHERE year1 ='".$year1."' and idmes=".$mesnum;
				$tabla1 = mysqli_query($link,$q);
				$extraido = mysqli_fetch_row($tabla1);
		}
	}
	
	
	
	//Cuentas Por Pagar
	if($nombredepartamento[1]=="Cuentas Por Pagar") 
	{
		
		if($nombreindicador[1]=="Plazo promedio de pago sin trigos")
		{
				$q="SELECT objetivo,reals,nota FROM cpp1_plaz WHERE year1 ='".$year1."' and idmes=".$mesnum;
				$tabla1 = mysqli_query($link,$q);
				$extraido = mysqli_fetch_row($tabla1);
		}
		if($nombreindicador[1]=="Indice de rotacion de cartera sin trigos")
		{
				$q="SELECT objetivo,reals,nota FROM cpp2_ind WHERE year1 ='".$year1."' and idmes=".$mesnum;
				$tabla1 = mysqli_query($link,$q);
				$extraido = mysqli_fetch_row($tabla1);
		}
		
	}
	
	
	//CEDI
	if($nombredepartamento[1]=="Cedi") 
	{
		
		if($nombreindicador[1]=="Rotacion de inventarios")
		{
				$q="SELECT objetivo,reals,nota FROM ced1_rot WHERE year1 ='".$year1."' and idmes=".$mesnum;
				$tabla1 = mysqli_query($link,$q);
				$extraido = mysqli_fetch_row($tabla1);
		}
		if($nombreindicador[1]=="Tiempo de permanencia de inventarios")
		{
				$q="SELECT objetivo,reals,nota FROM ced2_tiem WHERE year1 ='".$year1."' and idmes=".$mesnum;
				$tabla1 = mysqli_query($link,$q);
				$extraido = mysqli_fetch_row($tabla1);
		}
		if($nombreindicador[1]=="Ciclo operacional")
		{
				$q="SELECT objetivo,reals,nota FROM ced3_cicl WHERE year1 ='".$year1."' and idmes=".$mesnum;
				$tabla1 = mysqli_query($link,$q);
				$extraido = mysqli_fetch_row($tabla1);
		}
		
	}
	
	

	//Gestion de personal
	if($nombredepartamento[1]=="Gestion de Personal") 
	{	
		if($nombreindicador[1]=="Tiempo extra")
		{
				$q="SELECT objetivo,reals,nota FROM gest1_tiem WHERE year1 ='".$year1."' and idmes=".$mesnum;
				$tabla1 = mysqli_query($link,$q);
				$extraido = mysqli_fetch_row($tabla1);
		}
		if($nombreindicador[1]=="Ausentismo")
		{
				$q="SELECT objetivo,reals,nota FROM gest2_aus WHERE year1 ='".$year1."' and idmes=".$mesnum;
				$tabla1 = mysqli_query($link,$q);
				$extraido = mysqli_fetch_row($tabla1);
		}
		if($nombreindicador[1]=="Rotacion de personal")
		{
				$q="SELECT objetivo,reals,nota FROM gest3_rot WHERE year1 ='".$year1."' and idmes=".$mesnum;
				$tabla1 = mysqli_query($link,$q);
				$extraido = mysqli_fetch_row($tabla1);
		}
		if($nombreindicador[1]=="Horas de capacitacion")
		{
				$q="SELECT objetivo,reals,nota FROM gest4_hor WHERE year1 ='".$year1."' and idmes=".$mesnum;
				$tabla1 = mysqli_query($link,$q);
				$extraido = mysqli_fetch_row($tabla1);
		}
		if($nombreindicador[1]=="Gastos de capacitacion")
		{
				$q="SELECT objetivo,reals,nota FROM gest5_gas WHERE year1 ='".$year1."' and idmes=".$mesnum;
				$tabla1 = mysqli_query($link,$q);
				$extraido = mysqli_fetch_row($tabla1);
		}
	}
	
	
	//Seguridad Industrial
	if($nombredepartamento[1]=="Seguridad Industrial") 
	{	
		if($nombreindicador[1]=="Indice de riesgo")
		{
				$q="SELECT objetivo,reals,nota FROM seg1_ries WHERE year1 ='".$year1."' and idmes=".$mesnum;
				$tabla1 = mysqli_query($link,$q);
				$extraido = mysqli_fetch_row($tabla1);
		}
		if($nombreindicador[1]=="Indice de accidentabilidad")
		{
				$q="SELECT objetivo,reals,nota FROM seg2_acci WHERE year1 ='".$year1."' and idmes=".$mesnum;
				$tabla1 = mysqli_query($link,$q);
				$extraido = mysqli_fetch_row($tabla1);
		}
		if($nombreindicador[1]=="Prima de riesgo")
		{
				$q="SELECT objetivo,reals,nota FROM seg3_prim WHERE year1 ='".$year1."' and idmes=".$mesnum;
				$tabla1 = mysqli_query($link,$q);
				$extraido = mysqli_fetch_row($tabla1);
		}
		
	}
	
		//Compras
		if($nombredepartamento[1]=="Compras") 
	{	
		if($nombreindicador[1]=="Eficiencia de Compras")
		{
				$q="SELECT objetivo,reals,nota FROM com1_efic WHERE year1 ='".$year1."' and idmes=".$mesnum;
				$tabla1 = mysqli_query($link,$q);
				$extraido = mysqli_fetch_row($tabla1);
		}
	}
	
	//Sistemas
		if($nombredepartamento[1]=="Sistemas") 
	{	
		if($nombreindicador[1]=="Eficiencia de Sistemas")
		{
				$q="SELECT objetivo,reals,nota FROM sis1_efic WHERE year1 ='".$year1."' and idmes=".$mesnum;
				$tabla1 = mysqli_query($link,$q);
				$extraido = mysqli_fetch_row($tabla1);
		}
	}
	
	
	//Administracion
	if($nombredepartamento[1]=="Administracion") 
	{	
		if($nombreindicador[1]=="Endeudamiento")
		{
				$q="SELECT objetivo,reals,nota FROM adm1_end WHERE year1 ='".$year1."' and idmes=".$mesnum;
				$tabla1 = mysqli_query($link,$q);
				$extraido = mysqli_fetch_row($tabla1);
		}
		if($nombreindicador[1]=="Liquidez")
		{
				$q="SELECT objetivo,reals,nota FROM adm2_liq WHERE year1 ='".$year1."' and idmes=".$mesnum;
				$tabla1 = mysqli_query($link,$q);
				$extraido = mysqli_fetch_row($tabla1);
		}
		if($nombreindicador[1]=="Rentabilidad")
		{
				$q="SELECT objetivo,reals,nota FROM adm3_rent WHERE year1 ='".$year1."' and idmes=".$mesnum;
				$tabla1 = mysqli_query($link,$q);
				$extraido = mysqli_fetch_row($tabla1);
		}
		if($nombreindicador[1]=="Capital de trabajo")
		{
				$q="SELECT objetivo,reals,nota FROM adm4_cap WHERE year1 ='".$year1."' and idmes=".$mesnum;
				$tabla1 = mysqli_query($link,$q);
				$extraido = mysqli_fetch_row($tabla1);
		}
	}
	
	//Impuestos
		if($nombredepartamento[1]=="Impuestos") 
	{	
		if($nombreindicador[1]=="Impuestos")
		{
				$q="SELECT objetivo,reals,nota FROM impuest1 WHERE year1 ='".$year1."' and idmes=".$mesnum;
				$tabla1 = mysqli_query($link,$q);
				$extraido = mysqli_fetch_row($tabla1);
		}
	}
	
	
	//Tesoreria
		if($nombredepartamento[1]=="Tesoreria") 
	{	
		if($nombreindicador[1]=="Tesoreria")
		{
				$q="SELECT objetivo,reals,nota FROM tesorer1 WHERE year1 ='".$year1."' and idmes=".$mesnum;
				$tabla1 = mysqli_query($link,$q);
				$extraido = mysqli_fetch_row($tabla1);
		}
	}
	
	//PARA VENTASSSS
		//VENTAS 1
		if($nombredepartamento[1]=="Ventas1") 
		{
			if($nombreindicador[1]=="Programa de Carga Diaria (a tiempo)")
			{
				$q="SELECT objetivo,reals,nota FROM ventas1_prog WHERE year1 ='".$year1."' and idmes=".$mesnum;
				$tabla1 = mysqli_query($link,$q);
				$extraido = mysqli_fetch_row($tabla1);
			}
		}
		//VENTAS 2
		if($nombredepartamento[1]=="Ventas2") 
		{
			if($nombreindicador[1]=="Avance de proyectos tecnicos de marketing")
			{
				$q="SELECT objetivo,reals,nota FROM ventas2_marketi WHERE year1 ='".$year1."' and idmes=".$mesnum;
				$tabla1 = mysqli_query($link,$q);
				$extraido = mysqli_fetch_row($tabla1);
			}
		}
		//VENTAS 3
			if($nombredepartamento[1]=="Ventas3") 
		{
			if($nombreindicador[1]=="Bultos de Harina 44")
			{
				$q="SELECT objetivo,reals,nota FROM ventas3_bult44 WHERE year1 ='".$year1."' and idmes=".$mesnum;
				$tabla1 = mysqli_query($link,$q);
				$extraido = mysqli_fetch_row($tabla1);
			}
		
			if($nombreindicador[1]=="Bultos de Harina preparada 20kg")
			{
				$q="SELECT objetivo,reals,nota FROM ventas3_bult20 WHERE year1 ='".$year1."' and idmes=".$mesnum;
				$tabla1 = mysqli_query($link,$q);
				$extraido = mysqli_fetch_row($tabla1);
			}
		
			if($nombreindicador[1]=="Cajas de Mejorante 8.8 kg")
			{
				$q="SELECT objetivo,reals,nota FROM ventas3_cajas WHERE year1 ='".$year1."' and idmes=".$mesnum;
				$tabla1 = mysqli_query($link,$q);
				$extraido = mysqli_fetch_row($tabla1);
			}
			
			if($nombreindicador[1]=="Clientes nuevos (Numero)")
			{
				$q="SELECT objetivo,reals,nota FROM ventas3_clientes WHERE year1 ='".$year1."' and idmes=".$mesnum;
				$tabla1 = mysqli_query($link,$q);
				$extraido = mysqli_fetch_row($tabla1);
			}
			
			if($nombreindicador[1]=="Numero de Clientes Perdidos")
			{
				$q="SELECT objetivo,reals,nota FROM ventas3_numero WHERE year1 ='".$year1."' and idmes=".$mesnum;
				$tabla1 = mysqli_query($link,$q);
				$extraido = mysqli_fetch_row($tabla1);
			}
			
				if($nombreindicador[1]=="Demostraciones a Clientes Nuevos")
			{
				$q="SELECT objetivo,reals,nota FROM ventas3_demos WHERE year1 ='".$year1."' and idmes=".$mesnum;
				$tabla1 = mysqli_query($link,$q);
				$extraido = mysqli_fetch_row($tabla1);
			}
			
				if($nombreindicador[1]=="Visita a Clientes por Direccion de Ventas")
			{
				$q="SELECT objetivo,reals,nota FROM ventas3_visit WHERE year1 ='".$year1."' and idmes=".$mesnum;
				$tabla1 = mysqli_query($link,$q);
				$extraido = mysqli_fetch_row($tabla1);
			}
		}
		//ventas4
		if($nombredepartamento[1]=="Ventas4") 
		{
			if($nombreindicador[1]=="Estadisticas de Venta Contra el Mes Anterior (Bultos)")
			{
				$q="SELECT objetivo,reals,nota FROM ventas4_esta WHERE year1 ='".$year1."' and idmes=".$mesnum;
				$tabla1 = mysqli_query($link,$q);
				$extraido = mysqli_fetch_row($tabla1);
			}
			if($nombreindicador[1]=="Retroalimentacion Estadistica")
			{
				$q="SELECT objetivo,reals,nota FROM ventas4_retro WHERE year1 ='".$year1."' and idmes=".$mesnum;
				$tabla1 = mysqli_query($link,$q);
				$extraido = mysqli_fetch_row($tabla1);
			}
		}
		
			//ventas5
		if($nombredepartamento[1]=="Ventas5") 
		{
			if($nombreindicador[1]=="Avance de proyectos tecnicos Inv. y Des. Harinas Blancas")
			{
				$q="SELECT objetivo,reals,nota FROM ventas5_avanc WHERE year1 ='".$year1."' and idmes=".$mesnum;
				$tabla1 = mysqli_query($link,$q);
				$extraido = mysqli_fetch_row($tabla1);
			}
		}
		
			//ventas6
		if($nombredepartamento[1]=="Ventas6") 
		{
			if($nombreindicador[1]=="Nivel de Surtimiento Palm (Paqueteria)")
			{
				$q="SELECT objetivo,reals,nota FROM ventas6_palm  WHERE year1 ='".$year1."' and idmes=".$mesnum;
				$tabla1 = mysqli_query($link,$q);
				$extraido = mysqli_fetch_row($tabla1);
			}
		}
		
				//ventas7
		if($nombredepartamento[1]=="Ventas7") 
		{
			if($nombreindicador[1]=="Nivel Surtimiento Pellets")
			{
				$q="SELECT objetivo,reals,nota FROM ventas7_pellets  WHERE year1 ='".$year1."' and idmes=".$mesnum;
				$tabla1 = mysqli_query($link,$q);
				$extraido = mysqli_fetch_row($tabla1);
			}
				if($nombreindicador[1]=="Nivel de Surtimiento Bimbo")
			{
				$q="SELECT objetivo,reals,nota FROM ventas7_bimbo  WHERE year1 ='".$year1."' and idmes=".$mesnum;
				$tabla1 = mysqli_query($link,$q);
				$extraido = mysqli_fetch_row($tabla1);
			}
		}
		
				//ventas8
		if($nombredepartamento[1]=="Ventas8") 
		{
			if($nombreindicador[1]=="Nivel de Surtimiento Kellogg")
			{
				$q="SELECT objetivo,reals,nota FROM ventas8_kellog  WHERE year1 ='".$year1."' and idmes=".$mesnum;
				$tabla1 = mysqli_query($link,$q);
				$extraido = mysqli_fetch_row($tabla1);
			}
				if($nombreindicador[1]=="Nivel de Surtimiento Nestle Gerber")
			{
				$q="SELECT objetivo,reals,nota FROM ventas8_nestle  WHERE year1 ='".$year1."' and idmes=".$mesnum;
				$tabla1 = mysqli_query($link,$q);
				$extraido = mysqli_fetch_row($tabla1);
			}
				if($nombreindicador[1]=="Nivel de Surtimiento a Purina")
			{
				$q="SELECT objetivo,reals,nota FROM ventas8_purina  WHERE year1 ='".$year1."' and idmes=".$mesnum;
				$tabla1 = mysqli_query($link,$q);
				$extraido = mysqli_fetch_row($tabla1);
			}
					if($nombreindicador[1]=="Nivel de Surtimiento a Wal-Mart")
			{
				$q="SELECT objetivo,reals,nota FROM ventas8_walmart  WHERE year1 ='".$year1."' and idmes=".$mesnum;
				$tabla1 = mysqli_query($link,$q);
				$extraido = mysqli_fetch_row($tabla1);
			}
		}
		
		//ventas9
		if($nombredepartamento[1]=="Ventas9") 
		{
			if($nombreindicador[1]=="Nivel de Surtimiento Harinas Galletas")
			{
				$q="SELECT objetivo,reals,nota FROM ventas9_harinas WHERE year1 ='".$year1."' and idmes=".$mesnum;
				$tabla1 = mysqli_query($link,$q);
				$extraido = mysqli_fetch_row($tabla1);
			}
			if($nombreindicador[1]=="Nivel de Surtimiento Harinas Global")
			{
				$q="SELECT objetivo,reals,nota FROM ventas9_global WHERE year1 ='".$year1."' and idmes=".$mesnum;
				$tabla1 = mysqli_query($link,$q);
				$extraido = mysqli_fetch_row($tabla1);
			}
			if($nombreindicador[1]=="Nivel de Surtimiento Ferrero")
			{
				$q="SELECT objetivo,reals,nota FROM ventas9_ferrero WHERE year1 ='".$year1."' and idmes=".$mesnum;
				$tabla1 = mysqli_query($link,$q);
				$extraido = mysqli_fetch_row($tabla1);
			}
		}
		
		if($nombredepartamento[1]=="Ventas10") 
		{
			if($nombreindicador[1]=="Crecimiento Guadalajara (con respecto al mes anterior)")
			{
				$q="SELECT objetivo,reals,nota FROM ventas10_creci WHERE year1 ='".$year1."' and idmes=".$mesnum;
				$tabla1 = mysqli_query($link,$q);
				$extraido = mysqli_fetch_row($tabla1);
			}
		}
	
	
	
	$Resultado =" ".$nombredepartamento[1]."\n en ".$nombreindicador[1]."\n"." Tuvo un objetivo de ".$extraido[0]."\n Y lo real fue ".$extraido[1];
	$departament=$proveedor;
	$indicator=$producto;
	
	$extraido[3]=$mes." del ".$year1;
	$extraido[4]=$nombreindicador[1];
	$extraido[7]=$nombredepartamento[1];
}

if($Guardar == "Guardar")
{
	$nombredepartamento1=$_SESSION['ndepartamento'];
	$nombreindicador1=$_SESSION['nindicador'];
	
	/*$query2=mysql_query("Select * from anios where idanio='".$year1."'");
	mysql_data_seek($query2,0);
    $anio = mysql_fetch_row($query2);
	$year1=$anio[1];*/
	$year1=$_SESSION['aniiio'];
	
	if($nombredepartamento1=="Almacen de Refacciones") 
	{
			if($nombreindicador1=="Rotacion de inventarios")
			{	
				$q = "UPDATE a1_rot SET reals='$realz', nota='$comentarios' WHERE year1 ='".$year1."' and idmes='". $_SESSION['meses']."'";
				$tabla1 = mysqli_query($link,$q);	
			}
			if($nombreindicador1=="Tiempo de permanencia de inventarios")
			{
				$q = "UPDATE a2_tiem SET reals='$realz', nota='$comentarios' WHERE year1 ='".$year1."' and idmes='". $_SESSION['meses']."'";				
				$tabla1 = mysqli_query($link,$q);		
			}
	
	}
	
	//Cuentas Por Pagar
	if($nombredepartamento1=="Cuentas Por Cobrar") 
	{
		
		if($nombreindicador1=="Indice de rotacion de cartera")
		{
				$q = "UPDATE cpc1_ind SET reals='$realz', nota='$comentarios' WHERE year1 ='".$year1."' and idmes='". $_SESSION['meses']."'";
				$tabla1 = mysqli_query($link,$q);
		}
		if($nombreindicador1=="Plazo promedio de cobro")
		{
				$q = "UPDATE cpc2_plaz SET reals='$realz', nota='$comentarios' WHERE year1 ='".$year1."' and idmes='". $_SESSION['meses']."'";			
				$tabla1 = mysqli_query($link,$q);
		}
		if($nombreindicador1=="Cartera vencida a mas de 120 dias")
		{
				$q = "UPDATE cpc3_cart SET reals='$realz', nota='$comentarios' WHERE year1 ='".$year1."' and idmes='". $_SESSION['meses']."'";
				$tabla1 = mysqli_query($link,$q);
		}
	}
	
	
	
	//Cuentas Por Pagar
	if($nombredepartamento1=="Cuentas Por Pagar") 
	{
		
		if($nombreindicador1=="Plazo promedio de pago sin trigos")
		{
				$q = "UPDATE cpp1_plaz SET reals='$realz', nota='$comentarios' WHERE year1 ='".$year1."' and idmes='". $_SESSION['meses']."'";
				$tabla1 = mysqli_query($link,$q);
		}
		if($nombreindicador1=="Indice de rotacion de cartera sin trigos")
		{
				$q = "UPDATE cpp2_ind SET reals='$realz', nota='$comentarios' WHERE year1 ='".$year1."' and idmes='". $_SESSION['meses']."'";
				$tabla1 = mysqli_query($link,$q);
		}
		
	}
	
	
	//CEDI
	if($nombredepartamento1=="Cedi") 
	{
		
		if($nombreindicador1=="Rotacion de inventarios")
		{
				$q = "UPDATE ced1_rot SET reals='$realz', nota='$comentarios' WHERE year1 ='".$year1."' and idmes='". $_SESSION['meses']."'";			
				$tabla1 = mysqli_query($link,$q);
		}
		if($nombreindicador1=="Tiempo de permanencia de inventarios")
		{
				$q = "UPDATE ced2_tiem SET reals='$realz', nota='$comentarios' WHERE year1 ='".$year1."' and idmes='". $_SESSION['meses']."'";
				$tabla1 = mysqli_query($link,$q);
		}
		if($nombreindicador1=="Ciclo operacional")
		{
				$q = "UPDATE ced3_cicl SET reals='$realz', nota='$comentarios' WHERE year1 ='".$year1."' and idmes='". $_SESSION['meses']."'";
				$tabla1 = mysqli_query($link,$q);
		}
		
	}
	
	

	//Gestion de personal
	if($nombredepartamento1=="Gestion de Personal") 
	{	
		if($nombreindicador1=="Tiempo extra")
		{
				$q = "UPDATE gest1_tiem SET reals='$realz', nota='$comentarios' WHERE year1 ='".$year1."' and idmes='". $_SESSION['meses']."'";
				$tabla1 = mysqli_query($link,$q);		
		}
		if($nombreindicador1=="Ausentismo")
		{
				$q = "UPDATE gest2_aus SET reals='$realz', nota='$comentarios' WHERE year1 ='".$year1."' and idmes='". $_SESSION['meses']."'";
				$tabla1 = mysqli_query($link,$q);
		}
		if($nombreindicador1=="Rotacion de personal")
		{
				$q = "UPDATE gest3_rot SET reals='$realz', nota='$comentarios' WHERE year1 ='".$year1."' and idmes='". $_SESSION['meses']."'";
				$tabla1 = mysqli_query($link,$q);
		}
		if($nombreindicador1=="Horas de capacitacion")
		{
				$q = "UPDATE gest4_hor SET reals='$realz', nota='$comentarios' WHERE year1 ='".$year1."' and idmes='". $_SESSION['meses']."'";
				$tabla1 = mysqli_query($link,$q);
				
		}
		if($nombreindicador1=="Gastos de capacitacion")
		{
				$q = "UPDATE gest5_gas SET reals='$realz', nota='$comentarios' WHERE year1 ='".$year1."' and idmes='". $_SESSION['meses']."'";
				$tabla1 = mysqli_query($link,$q);
		}
	}
	
	
	//Seguridad Industrial
	if($nombredepartamento1=="Seguridad Industrial") 
	{	
		if($nombreindicador1=="Indice de riesgo")
		{
				$q = "UPDATE seg1_ries SET reals='$realz', nota='$comentarios' WHERE year1 ='".$year1."' and idmes='". $_SESSION['meses']."'";
				$tabla1 = mysqli_query($link,$q);
		}
		if($nombreindicador1=="Indice de accidentabilidad")
		{
				$q = "UPDATE seg2_acci SET reals='$realz', nota='$comentarios' WHERE year1 ='".$year1."' and idmes='". $_SESSION['meses']."'";
				$tabla1 = mysqli_query($link,$q);
		}
		if($nombreindicador1=="Prima de riesgo")
		{
				$q = "UPDATE seg3_prim SET reals='$realz', nota='$comentarios' WHERE year1 ='".$year1."' and idmes='". $_SESSION['meses']."'";
				$tabla1 = mysqli_query($link,$q);
		}
		
	}
	
		//Compras
		if($nombredepartamento1=="Compras") 
	{	
		if($nombreindicador1=="Eficiencia de Compras")
		{
				$q = "UPDATE com1_efic SET reals='$realz', nota='$comentarios' WHERE year1 ='".$year1."' and idmes='". $_SESSION['meses']."'";
				$tabla1 = mysqli_query($link,$q);
		}
	}
	
	//Sistemas
		if($nombredepartamento1=="Sistemas") 
	{	
		if($nombreindicador1=="Eficiencia de Sistemas")
		{
				$q = "UPDATE sis1_efic SET reals='$realz', nota='$comentarios' WHERE year1 ='".$year1."' and idmes='". $_SESSION['meses']."'";				
				$tabla1 = mysqli_query($link,$q);		
		}
	}
	
	
	//Administracion
	if($nombredepartamento1=="Administracion") 
	{	
		if($nombreindicador1=="Endeudamiento")
		{
				$q = "UPDATE adm1_end SET reals='$realz', nota='$comentarios' WHERE year1 ='".$year1."' and idmes='". $_SESSION['meses']."'";
				$tabla1 = mysqli_query($link,$q);
				
		}
		if($nombreindicador1=="Liquidez")
		{
				$q = "UPDATE adm2_liq SET reals='$realz', nota='$comentarios' WHERE year1 ='".$year1."' and idmes='". $_SESSION['meses']."'";
				$tabla1 = mysqli_query($link,$q);
		}
		if($nombreindicador1=="Rentabilidad")
		{
				$q = "UPDATE adm3_rent SET reals='$realz', nota='$comentarios' WHERE year1 ='".$year1."' and idmes='". $_SESSION['meses']."'";
				$tabla1 = mysqli_query($link,$q);
		}
		if($nombreindicador1=="Capital de trabajo")
		{
			$q = "UPDATE adm4_cap SET reals='$realz', nota='$comentarios' WHERE year1 ='".$year1."' and idmes='". $_SESSION['meses']."'";
			$tabla1 = mysqli_query($link,$q);
			
		}
	}
	
	//Impuestos
		if($nombredepartamento1=="Impuestos") 
	{	
		if($nombreindicador1=="Impuestos")
		{
			$q = "UPDATE impuest1 SET reals='$realz', nota='$comentarios' WHERE year1 ='".$year1."' and idmes='". $_SESSION['meses']."'";
			$tabla1 = mysqli_query($link,$q);
		
		}
	}
	
		//Tesoreria
		if($nombredepartamento1=="Tesoreria") 
	{	
		if($nombreindicador1=="Tesoreria")
		{
				$q = "UPDATE tesorer1 SET reals='$realz', nota='$comentarios' WHERE year1 ='".$year1."' and idmes='". $_SESSION['meses']."'";
				$tabla1 = mysqli_query($link,$q);
		}
	}
	

	
	//PARA VENTASSSS
		//VENTAS 1
		if($nombredepartamento1=="Ventas1") 
		{
			if($nombreindicador1=="Programa de Carga Diaria (a tiempo)")
			{
				$q = "UPDATE ventas1_prog SET reals='$realz', nota='$comentarios' WHERE year1 ='".$year1."' and idmes='". $_SESSION['meses']."'";
				$tabla1 = mysqli_query($link,$q);
			}
		}
		//VENTAS 2
		if($nombredepartamento1=="Ventas2") 
		{
			if($nombreindicador1=="Avance de proyectos tecnicos de marketing")
			{
				$q = "UPDATE ventas2_marketi  SET reals='$realz', nota='$comentarios' WHERE year1 ='".$year1."' and idmes='". $_SESSION['meses']."'";
				$tabla1 = mysqli_query($link,$q);
			}
		}
		//VENTAS 3
			if($nombredepartamento1=="Ventas3") 
		{
			if($nombreindicador1=="Bultos de Harina 44")
			{
				$q = "UPDATE ventas3_bult44  SET reals='$realz', nota='$comentarios' WHERE year1 ='".$year1."' and idmes='". $_SESSION['meses']."'";
				$tabla1 = mysqli_query($link,$q);
			}
		
			if($nombreindicador1=="Bultos de Harina preparada 20kg")
			{
				$q = "UPDATE ventas3_bult20  SET reals='$realz', nota='$comentarios' WHERE year1 ='".$year1."' and idmes='". $_SESSION['meses']."'";
				$tabla1 = mysqli_query($link,$q);
			}
		
			if($nombreindicador1=="Cajas de Mejorante 8.8 kg")
			{
				$q = "UPDATE ventas3_cajas  SET reals='$realz', nota='$comentarios' WHERE year1 ='".$year1."' and idmes='". $_SESSION['meses']."'";
				$tabla1 = mysqli_query($link,$q);
			}
			
			if($nombreindicador1=="Clientes nuevos (Numero)")
			{
				$q = "UPDATE ventas3_clientes SET reals='$realz', nota='$comentarios' WHERE year1 ='".$year1."' and idmes='". $_SESSION['meses']."'";
				$tabla1 = mysqli_query($link,$q);
			}
			
			if($nombreindicador1=="Numero de Clientes Perdidos")
			{
				$q = "UPDATE ventas3_numero SET reals='$realz', nota='$comentarios' WHERE year1 ='".$year1."' and idmes='". $_SESSION['meses']."'";
				$tabla1 = mysqli_query($link,$q);
			}
			
				if($nombreindicador1=="Demostraciones a Clientes Nuevos")
			{
				$q = "UPDATE ventas3_demos SET reals='$realz', nota='$comentarios' WHERE year1 ='".$year1."' and idmes='". $_SESSION['meses']."'";
				$tabla1 = mysqli_query($link,$q);
			}
			
				if($nombreindicador1=="Visita a Clientes por Direccion de Ventas")
			{
				$q = "UPDATE ventas3_visit SET reals='$realz', nota='$comentarios' WHERE year1 ='".$year1."' and idmes='". $_SESSION['meses']."'";
				$tabla1 = mysqli_query($link,$q);
			}
		}
		//ventas4
		if($nombredepartamento1=="Ventas4") 
		{
			if($nombreindicador1=="Estadisticas de Ventas Contra el Mes Anterior (Bultos)")
			{
				$q = "UPDATE ventas4_esta SET reals='$realz', nota='$comentarios' WHERE year1 ='".$year1."' and idmes='". $_SESSION['meses']."'";
				$tabla1 = mysqli_query($link,$q);
			}
			if($nombreindicador1=="Retroalimentacion Estadistica")
			{
				$q = "UPDATE ventas4_retro SET reals='$realz', nota='$comentarios' WHERE year1 ='".$year1."' and idmes='". $_SESSION['meses']."'";
				$tabla1 = mysqli_query($link,$q);
			}
		}
		
			//ventas5
		if($nombredepartamento1=="Ventas5") 
		{
			if($nombreindicador1=="Avance de proyectos tecnicos Inv. y Des. Harinas Blancas")
			{
				$q = "UPDATE ventas5_avanc SET reals='$realz', nota='$comentarios' WHERE year1 ='".$year1."' and idmes='". $_SESSION['meses']."'";
				$tabla1 = mysqli_query($link,$q);
			}
		}
		
			//ventas6
		if($nombredepartamento1=="Ventas6") 
		{
			if($nombreindicador1=="Nivel de Surtimiento Palm (Paqueteria)")
			{
				$q = "UPDATE ventas6_palm SET reals='$realz', nota='$comentarios' WHERE year1 ='".$year1."' and idmes='". $_SESSION['meses']."'";
				$tabla1 = mysqli_query($link,$q);
			}
		}
		
				//ventas7
		if($nombredepartamento1=="Ventas7") 
		{
			if($nombreindicador1=="Nivel de Surtimiento Pellets")
			{
				$q = "UPDATE ventas7_pellets SET reals='$realz', nota='$comentarios' WHERE year1 ='".$year1."' and idmes='". $_SESSION['meses']."'";
				$tabla1 = mysqli_query($link,$q);
			}
				if($nombreindicador1=="Nivel de Surtimiento Bimbo")
			{
				$q = "UPDATE ventas7_bimbo SET reals='$realz', nota='$comentarios' WHERE year1 ='".$year1."' and idmes='". $_SESSION['meses']."'";
				$tabla1 = mysqli_query($link,$q);
			}
		}
		
				//ventas8
		if($nombredepartamento1=="Ventas8") 
		{
			if($nombreindicador1=="Nivel de Surtimiento Kellogg")
			{
				$q = "UPDATE ventas8_kellog SET reals='$realz', nota='$comentarios' WHERE year1 ='".$year1."' and idmes='". $_SESSION['meses']."'";
				$tabla1 = mysqli_query($link,$q);
			}
				if($nombreindicador1=="Nivel de Surtimiento Nestle Gerber")
			{
				$q = "UPDATE ventas8_nestle SET reals='$realz', nota='$comentarios' WHERE year1 ='".$year1."' and idmes='". $_SESSION['meses']."'";
				$tabla1 = mysqli_query($link,$q);
			}
				if($nombreindicador1=="Nivel de Surtimiento a Purina")
			{
				$q = "UPDATE ventas8_purina SET reals='$realz', nota='$comentarios' WHERE year1 ='".$year1."' and idmes='". $_SESSION['meses']."'";
				$tabla1 = mysqli_query($link,$q);
			}
					if($nombreindicador1=="Nivel de Surtimiento a Wal-Mart")
			{
				$q = "UPDATE ventas8_walmart SET reals='$realz', nota='$comentarios' WHERE year1 ='".$year1."' and idmes='". $_SESSION['meses']."'";
				$tabla1 = mysqli_query($link,$q);
			}
		}
		
		//ventas9
		if($nombredepartamento1=="Ventas9") 
		{
			if($nombreindicador1=="Nivel de Surtimiento Harinas Galletas")
			{
				$q = "UPDATE ventas9_harinas SET reals='$realz', nota='$comentarios' WHERE year1 ='".$year1."' and idmes='". $_SESSION['meses']."'";
				$tabla1 = mysqli_query($link,$q);
			}
			if($nombreindicador1=="Nivel de Surtimiento Harinas Global")
			{
				$q = "UPDATE ventas9_global SET reals='$realz', nota='$comentarios' WHERE year1 ='".$year1."' and idmes='". $_SESSION['meses']."'";
				$tabla1 = mysqli_query($link,$q);
			}
			if($nombreindicador1=="Nivel de Surtimiento Ferrero")
			{
				$q = "UPDATE ventas9_ferrero SET reals='$realz', nota='$comentarios' WHERE year1 ='".$year1."' and idmes='". $_SESSION['meses']."'";
				$tabla1 = mysqli_query($link,$q);
			}
		}
		
		if($nombredepartamento1=="Ventas10") 
		{
			if($nombreindicador1=="Crecimiento Guadalajara (con respecto al mes anterior)")
			{
				$q = "UPDATE ventas10_creci SET reals='$realz', nota='$comentarios' WHERE year1 ='".$year1."' and idmes='". $_SESSION['meses']."'";
				$tabla1 = mysqli_query($link,$q);
			}
		}
	
	
	
}


?>
<table style="width:100%">
<form name="form1" target="contenido" action="div.php" method="POST">
  <tr>
		<td ALIGN=CENTER><font size=2 face="verdana" style="color:#44822F">Departamento</font>
		</td>
		<td><input  style="color: #000; background-color: #F5DEB3" type="text" size="28" name="departam" id="departam" readonly="true" value="<?php echo $extraido[7]?>">
		</td>
	</tr>
	<tr>
		<td ALIGN=CENTER><font size=2 face="verdana" style="color:#44822F">Indicador</font>
		</td>
		<td><input  style="color: #000; background-color: #F5DEB3; " type="text" size="28" name="indicat" id="indicat" readonly="true" value="<?php echo $extraido[4]?>">
		</td>
	</tr>
	<tr>
		<td ALIGN=CENTER><font size=2 face="verdana" style="color:#44822F">Fecha</font>
		</td>
		<td><input  style="color: #000; background-color: #F5DEB3" type="text" size="15" name="fecha" id="fecha" readonly="true" value="<?php echo $extraido[3]?>">
		</td>
	</tr>
	<tr>
		<td ALIGN=CENTER><font size=2 face="verdana" style="color:#44822F">Objetivo&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</font>
		</td>
		<td><input  style="color: #000; background-color: #F5DEB3;font-weight: bold;" type="text" size="15" name="user" id="user" readonly="true" value="<?php echo $extraido[0]?>">
		</td>
	</tr>
	
	<tr>
		<td ALIGN=CENTER><font size=2 face="verdana" style="color:#44822F">Real&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</font>
		</td>
		<td><input  style=" color: #000; background-color: #F5DEB3;font-weight: bold;" type="text" size="15" name="realz" id="realz" value="<?php echo $extraido[1]?>">
		</td>
	</tr>
	<tr>
		<td ALIGN=CENTER><font size=2 face="verdana" style="color:#44822F ">Comentario&nbsp </font></td>
		<td>
		<textarea style="color:#000; background-color:#F5DEB3; WIDTH:228px; HEIGHT:98px"name="comentarios" rows="10" cols="40"><?php echo $extraido[2]?></textarea></textarea>
		</td>
	</tr>
	 
	 <tr>
		<td colspan="3" valign="middle" align="right">
			<font size=1 face="Arial Black"> &nbsp </font>
		</td>
	</tr>
	 
	<tr>
		<td colspan="3" valign="middle" align="right">
			<input type="checkbox" value="1" name="pepe" width="30" height="30" onclick="javascript:activar(this);">
			<font size=2 face="verdana" style="color:#44822F">Editar&nbsp&nbsp</font>
			<input title="Clic para guardar cambios" class="boton1" alt="Guardar" type="submit" value="Guardar" name="Guardar" id="Guardar"  disabled>
		</td>
		
	</tr>
	</form>
</table>

</body>
</html>