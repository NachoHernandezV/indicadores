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
$bd="indicadores";

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

		if($nombreindicador[1]=="Numero de Servicios")
		{
				$q="SELECT objetivo,reals,nota FROM sis2_numserv WHERE year1 ='".$year1."' and idmes=".$mesnum;
				$tabla1 = mysqli_query($link,$q);
				$extraido = mysqli_fetch_row($tabla1);
		}

		if($nombreindicador[1]=="Horas perdidas de red")
		{
				$q="SELECT objetivo,reals,nota FROM sis3_horaslost WHERE year1 ='".$year1."' and idmes=".$mesnum;
				$tabla1 = mysqli_query($link,$q);
				$extraido = mysqli_fetch_row($tabla1);
		}

		if($nombreindicador[1]=="Desarrollo de software")
		{
				$q="SELECT objetivo,reals,nota FROM sis4_desarrollo WHERE year1 ='".$year1."' and idmes=".$mesnum;
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

		if($nombreindicador1=="Horas de soporte")
		{
				$q = "UPDATE sis2_horas SET reals='$realz', nota='$comentarios' WHERE year1 ='".$year1."' and idmes='". $_SESSION['meses']."'";
				$tabla1 = mysqli_query($link,$q);
		}

		if($nombreindicador1=="Eficiencia de red")
		{
				$q = "UPDATE sis3_red SET reals='$realz', nota='$comentarios' WHERE year1 ='".$year1."' and idmes='". $_SESSION['meses']."'";
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
