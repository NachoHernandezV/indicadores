<?php
session_start();
include("conect.php");
?>

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Pirineos</title>
</head>
<style type="text/css">
</style>

<script src="jquery/jquerymin.js"></script>
	<script type="text/javascript">
	
	$("document").ready(function()
		{
			$("#year2").load("mesescalcu3.php");
		})
	$("document").ready(function()
		{
			$("#year3").load("mesescalcu3.php");
		})
	$("document").ready(function()
		{
			$("#year4").load("mesescalcu3.php");
	})
	$("document").ready(function()
		{
			$("#year5").load("mesescalcu3.php");
	})
		$("document").ready(function(){
			$("#proveedor").load("proveedores.php");
			
			$("#proveedor").change(function(){
				var id= $("#proveedor").val();
				$.get("productos.php",{param_id:id})
				.done(function(data){
					$("#producto").html(data);
				})
				//min 30.15
			})
		})
	</script>
	
<script src="jquery/jquerymin.js"></script>
	<script type="text/javascript">
	
	$("document").ready(function(){
			$("#producto2").load("productos2.php");
		})
	
		$("document").ready(function(){
			$("#proveedor2").load("proveedores2.php");
			
			$("#proveedor2").change(function(){
				var id= $("#proveedor2").val();
				$.get("productos2.php",{param_id:id})
				.done(function(data){
					$("#producto2").html(data);
				})
				//min 30.15
			})
		})
	</script>

</head>
<body background="background.jpg">

<TABLE BORDER=0 WIDTH=100%>
	<TD align="left" valign="top">
		<input title="actualz" src="log4.png" type="image" name="actualz" width="190" height="130" />
	</TD>

	<TD align="right" valign="top">

	</TD>

	<TD align="right" valign="top">
		<form action=salir.php method=POST name="delet">
	<input type="hidden" name="salir2" value=salir2 > 
	<input type="hidden" name="salir" value="no" > 

	<input title="actualz" src="<?php echo $_SESSION['foto']?>" type="image" name="actualz" width="90" height="90" /> 
	<font size=4.5 face="Arial Black" style="color:#000"></font>
	</br>
	<a href="salir.php" target="_top"><font size=2 face="Arial Black" color="red">Cerrar sesión</font></a>
	</form>
	</TD>
</TABLE>


<br>
<div align="center">
<TABLE width="52%">
<tr>
	<td colspan="2" valign="middle" ALIGN=CENTER><font size=4.5 face="Arial Black" style="color:#000"><?php echo$_SESSION['depart']?></font></td>
</tr>
    <tr>
	<FORM ACTION=supervision.php METHOD=post name="Actualiz" id="Actualiz">
	<td><input title="actualz" alt=" conton comprar " src="act.png" type="image" name="actualz" width="45" height="40" />
	</FORM></td>

	
	</TR>
</TABLE></div><br>



<?php

//Inicializar la variable del año, en le año actual
date_default_timezone_set('America/Monterrey');

//include("conect.php");
//$link=Conectarse();


$idnomtabla = $_GET['param2_id'];
$user="root";
$pass="pirineos";
$server="localhost";
$bd="indicadores";
$link=mysqli_connect($server,$user,$pass,$bd);

$usuario=$user;
$contrasena=$pass;
$departamento=$departamento;


if($salir == "salir")
{

echo '<script>window.location="salir.php"</script>';
}



if($Registrar=="Registrar")
{
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

	
	
	/*if($existe = mysql_fetch_object($query))
	{
		echo 'El usuario ya existe';
	}
	elseif($usuario == "" or $contrasena == "" ) //detectar $OrdenVenta vacia $UE
	{
		echo "No se pudieron Insertar los datos!, Campo VACIO en usuario o password";
	}
	else
	{*/
	
	//obtener EL NOMBRE DE DEPARTAMENTO Y EL INDICADOR
	$query=mysqli_query($link,"Select * from selectdepartamento where iddepartamento='".$proveedor."'");
	mysqli_data_seek($query,0);
    $nombredepartamento = mysqli_fetch_row($query);
	
	$query2=mysqli_query($link,"Select * from selectindicador where idindicador='".$producto."'");
	mysqli_data_seek($query2,0);
    $nombreindicador = mysqli_fetch_row($query2);
	///////////////	
		
	
	//Almacen de Refacciones
	if($nombredepartamento[1]=="Almacen de Refacciones") 
	{
		//Repetido para ROTACION DE INVENTARIOS
		$consultarep="SELECT COUNT( * ) FROM  a1_rot WHERE idmes ='$mesnum' AND year1='$year1'";
		$REP=mysqli_query($link,$consultarep);
		mysqli_data_seek($REP,0);
		$repetido = mysqli_fetch_row($REP);
		
		$consultarep2="SELECT COUNT( * ) FROM  a2_tiem WHERE idmes ='$mesnum' AND year1='$year1'";
		$REP2=mysqli_query($link,$consultarep2);
		mysqli_data_seek($REP2,0);
		$repetido2 = mysqli_fetch_row($REP2);
		
		if($repetido[0]==0)
		{
			if($nombreindicador[1]=="Rotacion de inventarios")
			{
				$sqlz="INSERT INTO a1_rot (idmes,objetivo,reals,year1) VALUES ('$mesnum','$user','$pass','$year1')";
				mysqli_query($link,$sqlz);
			}
			
		}
		
		if($repetido2[0]==0)
		{	
			if($nombreindicador[1]=="Tiempo de permanencia de inventarios")
			{
				$sqlz="INSERT INTO a2_tiem (idmes,objetivo,reals,year1) VALUES ('$mesnum','$user','$pass','$year1')";
				mysqli_query($link,$sqlz);
			}
			
		}
	}
	
	//Cuentas Por Pagar
	if($nombredepartamento[1]=="Cuentas Por Cobrar") 
	{
		//Repetido 1 PARA Indice de rotacion de cartera
		$consultarep="SELECT COUNT( * ) FROM  cpc1_ind WHERE idmes ='$mesnum' AND year1='$year1'";
		$REP=mysqli_query($link,$consultarep);
		mysqli_data_seek($REP,0);
		$repetido = mysqli_fetch_row($REP);
		
		//Repetido 2
		$consultarep2="SELECT COUNT( * ) FROM  cpc2_plaz WHERE idmes ='$mesnum' AND year1='$year1'";
		$REP2=mysqli_query($link,$consultarep2);
		mysqli_data_seek($REP2,0);
		$repetido2 = mysqli_fetch_row($REP2);
		
		//Repetido 3
		$consultarep3="SELECT COUNT( * ) FROM  cpc3_cart WHERE idmes ='$mesnum' AND year1='$year1'";
		$REP3=mysqli_query($link,$consultarep3);
		mysqli_data_seek($REP3,0);
		$repetido3 = mysqli_fetch_row($REP3);
		
		if($repetido[0]==0)
		{
			if($nombreindicador[1]=="Indice de rotacion de cartera")
			{
				$sqlz="INSERT INTO cpc1_ind (idmes,objetivo,reals,year1) VALUES ('$mesnum','$user','$pass','$year1')";
				mysqli_query($link,$sqlz);
			}
		}
		if($repetido2[0]==0)
		{
			if($nombreindicador[1]=="Plazo promedio de cobro")
			{
				$sqlz="INSERT INTO cpc2_plaz (idmes,objetivo,reals,year1) VALUES ('$mesnum','$user','$pass','$year1')";
				mysqli_query($link,$sqlz);
			}
		}
		if($repetido3[0]==0)
		{
			if($nombreindicador[1]=="Cartera vencida a mas de 120 dias")
			{
				$sqlz="INSERT INTO cpc3_cart (idmes,objetivo,reals,year1) VALUES ('$mesnum','$user','$pass','$year1')";
				mysqli_query($link,$sqlz);
			}
		}
	}
	
	
	
	//Cuentas Por Pagar
	if($nombredepartamento[1]=="Cuentas Por Pagar") 
	{
		//Repetido 1 Plazo promedio de pago sin trigos
		$consultarep="SELECT COUNT( * ) FROM  cpp1_plaz WHERE idmes ='$mesnum' AND year1='$year1'";
		$REP=mysqli_query($link,$consultarep);
		mysqli_data_seek($REP,0);
		$repetido = mysqli_fetch_row($REP);
		
		//Repetido 2 Indice de rotacion de cartera sin trigos
		$consultarep2="SELECT COUNT( * ) FROM  cpp2_ind WHERE idmes ='$mesnum' AND year1='$year1'";
		$REP2=mysqli_query($link,$consultarep2);
		mysqli_data_seek($REP2,0);
		$repetido2 = mysqli_fetch_row($REP2);
		
		if($repetido[0]==0)
		{
			if($nombreindicador[1]=="Plazo promedio de pago sin trigos")
			{
				$sqlz="INSERT INTO cpp1_plaz (idmes,objetivo,reals,year1) VALUES ('$mesnum','$user','$pass','$year1')";
				mysqli_query($link,$sqlz);
			}
		}
		if($repetido2[0]==0)
		{
			if($nombreindicador[1]=="Indice de rotacion de cartera sin trigos")
			{
				$sqlz="INSERT INTO cpp2_ind (idmes,objetivo,reals,year1) VALUES ('$mesnum','$user','$pass','$year1')";
				mysqli_query($link,$sqlz);
			}
		}
		
	}
	
	
	//CEDI
	if($nombredepartamento[1]=="Cedi") 
	{
		//Repetido 1 Plazo promedio de pago sin trigos
		$consultarep="SELECT COUNT( * ) FROM  ced1_rot WHERE idmes ='$mesnum' AND year1='$year1'";
		$REP=mysqli_query($link,$consultarep);
		mysqli_data_seek($REP,0);
		$repetido = mysqli_fetch_row($REP);
		
		//Repetido 1 Plazo promedio de pago sin trigos
		$consultarep2="SELECT COUNT( * ) FROM  ced2_tiem WHERE idmes ='$mesnum' AND year1='$year1'";
		$REP2=mysqli_query($link,$consultarep2);
		mysqli_data_seek($REP2,0);
		$repetido2 = mysqli_fetch_row($REP2);
		
		//Repetido 1 Plazo promedio de pago sin trigos
		$consultarep3="SELECT COUNT( * ) FROM  ced3_cicl WHERE idmes ='$mesnum' AND year1='$year1'";
		$REP3=mysqli_query($link,$consultarep3);
		mysqli_data_seek($REP3,0);
		$repetido3 = mysqli_fetch_row($REP3);
		
		if($repetido[0]==0)
		{
			if($nombreindicador[1]=="Rotacion de inventarios")
			{
				$sqlz="INSERT INTO ced1_rot (idmes,objetivo,reals,year1) VALUES ('$mesnum','$user','$pass','$year1')";
				mysqli_query($link,$sqlz);
			}
		}
		if($repetido2[0]==0)
		{
			if($nombreindicador[1]=="Tiempo de permanencia de inventarios")
			{
				$sqlz="INSERT INTO ced2_tiem (idmes,objetivo,reals,year1) VALUES ('$mesnum','$user','$pass','$year1')";
				mysqli_query($link,$sqlz);
			}
		}
		if($repetido3[0]==0)
		{
			if($nombreindicador[1]=="Ciclo operacional")
			{
				$sqlz="INSERT INTO ced3_cicl (idmes,objetivo,reals,year1) VALUES ('$mesnum','$user','$pass','$year1')";
				mysqli_query($link,$sqlz);
			}
		}
	
	}
	
	

	//Gestion de personal
	if($nombredepartamento[1]=="Gestion de personal") 
	{	
		//Repetido 1 Plazo promedio de pago sin trigos
		$consultarep="SELECT COUNT( * ) FROM  gest1_tiem WHERE idmes ='$mesnum' AND year1='$year1'";
		$REP=mysqli_query($link,$consultarep);
		mysqli_data_seek($REP,0);
		$repetido = mysqli_fetch_row($REP);
		
		//Repetido 2 Plazo promedio de pago sin trigos
		$consultarep2="SELECT COUNT( * ) FROM  gest2_aus WHERE idmes ='$mesnum' AND year1='$year1'";
		$REP2=mysqli_query($link,$consultarep2);
		mysqli_data_seek($REP2,0);
		$repetido2 = mysqli_fetch_row($REP2);
		
		//Repetido 3 Plazo promedio de pago sin trigos
		$consultarep3="SELECT COUNT( * ) FROM  gest3_rot WHERE idmes ='$mesnum' AND year1='$year1'";
		$REP3=mysqli_query($link,$consultarep3);
		mysqli_data_seek($REP3,0);
		$repetido3 = mysqli_fetch_row($REP3);
		
		//Repetido 4 Plazo promedio de pago sin trigos
		$consultarep4="SELECT COUNT( * ) FROM  gest4_hor WHERE idmes ='$mesnum' AND year1='$year1'";
		$REP4=mysqli_query($link,$consultarep4);
		mysqli_data_seek($REP4,0);
		$repetido4 = mysqli_fetch_row($REP4);
		
		//Repetido 5 Plazo promedio de pago sin trigos
		$consultarep5="SELECT COUNT( * ) FROM gest5_gas WHERE idmes ='$mesnum' AND year1='$year1'";
		$REP5=mysqli_query($link,$consultarep5);
		mysqli_data_seek($REP5,0);
		$repetido5 = mysqli_fetch_row($REP5);
		
		if($repetido[0]==0)
		{
			if($nombreindicador[1]=="Tiempo extra")
			{
				$sqlz="INSERT INTO gest1_tiem (idmes,objetivo,reals,year1) VALUES ('$mesnum','$user','$pass','$year1')";
				mysqli_query($link,$sqlz);
			}
		}
		if($repetido2[0]==0)
		{
			if($nombreindicador[1]=="Ausentismo")
			{
				$sqlz="INSERT INTO gest2_aus (idmes,objetivo,reals,year1) VALUES ('$mesnum','$user','$pass','$year1')";
				mysqli_query($link,$sqlz);
			}
		}
		if($repetido3[0]==0)
		{
			if($nombreindicador[1]=="Rotacion de personal")
			{
				$sqlz="INSERT INTO gest3_rot (idmes,objetivo,reals,year1) VALUES ('$mesnum','$user','$pass','$year1')";
				mysqli_query($link,$sqlz);
			}
		}
		if($repetido4[0]==0)
		{
			if($nombreindicador[1]=="Horas de capacitacion")
			{
				$sqlz="INSERT INTO gest4_hor (idmes,objetivo,reals,year1) VALUES ('$mesnum','$user','$pass','$year1')";
				mysqli_query($link,$sqlz);
			}
		}
		if($repetido5[0]==0)
		{
			if($nombreindicador[1]=="Gastos de capacitacion")
			{
				$sqlz="INSERT INTO gest5_gas (idmes,objetivo,reals,year1) VALUES ('$mesnum','$user','$pass','$year1')";
				mysqli_query($link,$sqlz);
			}
		}
	}
	
	
	//Seguridad Industrial
	if($nombredepartamento[1]=="Seguridad Industrial") 
	{	
		//Repetido 3 Plazo promedio de pago sin trigos
		$consultarep="SELECT COUNT( * ) FROM  seg1_ries WHERE idmes ='$mesnum' AND year1='$year1'";
		$REP=mysqli_query($link,$consultarep);
		mysqli_data_seek($REP,0);
		$repetido = mysqli_fetch_row($REP);
		
		//Repetido 4 Plazo promedio de pago sin trigos
		$consultarep2="SELECT COUNT( * ) FROM  seg2_acci WHERE idmes ='$mesnum' AND year1='$year1'";
		$REP2=mysqli_query($link,$consultarep2);
		mysqli_data_seek($REP2,0);
		$repetido2 = mysqli_fetch_row($REP2);
		
		//Repetido 5 Plazo promedio de pago sin trigos
		$consultarep3="SELECT COUNT( * ) FROM seg3_prim WHERE idmes ='$mesnum' AND year1='$year1'";
		$REP3=mysqli_query($link,$consultarep3);
		mysqli_data_seek($REP3,0);
		$repetido3 = mysqli_fetch_row($REP3);
		
		if($repetido[0]==0)
		{
			if($nombreindicador[1]=="Indice de riesgo")
			{
				$sqlz="INSERT INTO seg1_ries (idmes,objetivo,reals,year1) VALUES ('$mesnum','$user','$pass','$year1')";
				mysqli_query($link,$sqlz);
			}
		}
		if($repetido2[0]==0)
		{
			if($nombreindicador[1]=="Indice de accidentabilidad")
			{
				$sqlz="INSERT INTO seg2_acci (idmes,objetivo,reals,year1) VALUES ('$mesnum','$user','$pass','$year1')";
				mysqli_query($link,$sqlz);
			}
		}
		if($repetido3[0]==0)
		{
			if($nombreindicador[1]=="Prima de riesgo")
			{
				$sqlz="INSERT INTO seg3_prim (idmes,objetivo,reals,year1) VALUES ('$mesnum','$user','$pass','$year1')";
				mysqli_query($link,$sqlz);
			}
		}
		
	}
	
		//Compras
		if($nombredepartamento[1]=="Compras") 
	{ 	
		//Repetido 3 Plazo promedio de pago sin trigos
		$consultarep="SELECT COUNT( * ) FROM  com1_efic WHERE idmes ='$mesnum' AND year1='$year1'";
		$REP=mysqli_query($link,$consultarep);
		mysqli_data_seek($REP,0);
		$repetido = mysqli_fetch_row($REP);
		
		if($repetido[0]==0 and $nombreindicador[1]=="Eficiencia de Compras")
		{
			$sqlz="INSERT INTO com1_efic (idmes,objetivo,reals,year1) VALUES ('$mesnum','$user','$pass','$year1')";
			mysqli_query($link,$sqlz);
		}
	}
	
	//Sistemas
		if($nombredepartamento[1]=="Sistemas") 
	{	
		//Repetido 
		$consultarep="SELECT COUNT( * ) FROM  sis1_efic WHERE idmes ='$mesnum' AND year1='$year1'";
		$REP=mysqli_query($link,$consultarep);
		mysqli_data_seek($REP,0);
		$repetido = mysqli_fetch_row($REP);
		
		if($repetido[0]==0 and $nombreindicador[1]=="Eficiencia de Sistemas" )
		{
			$sqlz="INSERT INTO sis1_efic (idmes,objetivo,reals,year1) VALUES ('$mesnum','$user','$pass','$year1')";
			mysqli_query($link,$sqlz);
		}
	}
	
	
	//Administracion
	if($nombredepartamento[1]=="Administracion") 
	{	
		//Repetido 
		$consultarep="SELECT COUNT( * ) FROM  adm1_end WHERE idmes ='$mesnum' AND year1='$year1'";
		$REP=mysqli_query($link,$consultarep);
		mysqli_data_seek($REP,0);
		$repetido = mysqli_fetch_row($REP);
		
		//Repetido 
		$consultarep2="SELECT COUNT( * ) FROM  adm2_liq WHERE idmes ='$mesnum' AND year1='$year1'";
		$REP2=mysqli_query($link,$consultarep2);
		mysqli_data_seek($REP2,0);
		$repetido2 = mysqli_fetch_row($REP2);
		
		//Repetido 
		$consultarep3="SELECT COUNT( * ) FROM  adm3_rent WHERE idmes ='$mesnum' AND year1='$year1'";
		$REP3=mysqli_query($link,$consultarep3);
		mysqli_data_seek($REP3,0);
		$repetido3 = mysqli_fetch_row($REP3);
		
		//Repetido 
		$consultarep4="SELECT COUNT( * ) FROM  adm4_cap WHERE idmes ='$mesnum' AND year1='$year1'";
		$REP4=mysqli_query($link,$consultarep4);
		mysqli_data_seek($REP4,0);
		$repetido4 = mysqli_fetch_row($REP4);
		
		if($repetido[0]==0 and $nombreindicador[1]=="Endeudamiento")
		{
			$sqlz="INSERT INTO adm1_end (idmes,objetivo,reals,year1) VALUES ('$mesnum','$user','$pass','$year1')";
			mysqli_query($link,$sqlz);
		}
		if($repetido2[0]==0 and $nombreindicador[1]=="Liquidez")
		{
			$sqlz="INSERT INTO adm2_liq (idmes,objetivo,reals,year1) VALUES ('$mesnum','$user','$pass','$year1')";
			mysqli_query($link,$sqlz);
		}
		if($repetido3[0]==0 and $nombreindicador[1]=="Rentabilidad")
		{
			$sqlz="INSERT INTO adm3_rent (idmes,objetivo,reals,year1) VALUES ('$mesnum','$user','$pass','$year1')";
			mysqli_query($link,$sqlz);
		}
		if($repetido4[0]==0 and $nombreindicador[1]=="Capital de trabajo")
		{
			$sqlz="INSERT INTO adm4_cap (idmes,objetivo,reals,year1) VALUES ('$mesnum','$user','$pass','$year1')";
			mysqli_query($link,$sqlz);
		}
		
	}
	
	//Impuestos
		if($nombredepartamento[1]=="Impuestos") 
	{	
		//Repetido 
		$consultarep="SELECT COUNT( * ) FROM  impuest1 WHERE idmes ='$mesnum' AND year1='$year1'";
		$REP=mysqli_query($link,$consultarep);
		mysqli_data_seek($REP,0);
		$repetido = mysqli_fetch_row($REP);
		
		if($repetido[0]==0 and $nombreindicador[1]=="Impuestos")
		{
			$sqlz="INSERT INTO impuest1 (idmes,objetivo,reals,year1) VALUES ('$mesnum','$user','$pass','$year1')";
			mysqli_query($link,$sqlz);
		}
	}
	
	
	//Tesoreria
		if($nombredepartamento[1]=="Tesoreria") 
	{	
		//Repetido 
		$consultarep="SELECT COUNT( * ) FROM  tesorer1 WHERE idmes ='$mesnum' AND year1='$year1'";
		$REP=mysqli_query($link,$consultarep);
		mysqli_data_seek($REP,0);
		$repetido = mysqli_fetch_row($REP);
		
		if($repetido[0]==0 and $nombreindicador[1]=="Tesoreria")
		{
		$sqlz="INSERT INTO tesorer1 (idmes,objetivo,reals,year1) VALUES ('$mesnum','$user','$pass','$year1')";
		mysqli_query($link,$sqlz);
		}
	}
}










?>


<div align="center">
	
<table>

<tr></tr><tr></tr><tr></tr>
<tr></tr><tr></tr><tr></tr>
<tr></tr><tr></tr><tr></tr>


<tr>
<td colspan="2" valign="middle" ALIGN=LEFT><font size=3.5 face="Arial Black" style="color:#44822F">Graficas y Reportes de tesoreria&nbsp&nbsp&nbsp&nbsp</font></td>
</tr>


<form action=ReportesGraficos4.php method="POST" target="ventanita" onsubmit="ventanita=window.open('','ventanita','width=900,height=600′)">

	<tr></tr><tr></tr><tr></tr>
	<tr></tr><tr></tr><tr></tr>

	<tr>
		<td ALIGN=CENTER><font size=2 face="verdana" style="color:#44822F">Año&nbsp </font></td>
		<td>
		<select style="color: #000; background-color: #90EE90" id="year2" name="year2">
			<option>2015</option>
			<option>2016</option>
			<option>2017</option>
			<option>2018</option>
			<option>2019</option>
			<option>2020</option>
			<option>2021</option>
			<option>2022</option>
			</select>	
		</td>
	</tr>
	
	<tr>
		<td ALIGN=CENTER><font size=2 face="verdana" style="color:#44822F">Periodo&nbsp </font></td>
		<td>
		<select style="color: #000; background-color: #90EE90" id="period" name="period">
			<option>Primer Trimestre</option>
			<option>Segundo Trimestre</option>
			<option>Tercer Trimestre</option>
			<option>Cuarto Trimestre</option>
			<option>Primer Cuatrimestre</option>
			<option>Segundo Cuatrimestre</option>
			<option>Tercer Cuatrimestre</option>
			<option>Primer Semestre</option>
			<option>Segundo Semestre</option>
			<option>Anual</option>
			</select>	
		</td>
	</tr>
	<td>
	</td>
	<td ALIGN=RIGHT>
	<input title="genreporte" alt="genreporte" src="barra.png" type="image" value="genreporte" name="genreporte" id="genreporte" width="45" height="40" />
	<font size=1 face="Arial" style="color:#44822F">Ver Grafico</font>
	</td>
</FORM>

<td></td><td></td><td></td>
<td></td><td></td><td></td>
<td></td><td></td><td></td>
<td>
	<input type="image" value="B" src="antiguos2.jpg" type="image" width="80" height="35" onclick="window.open('buercartesor.php','nuevaVentana','width=500, height=650')" />
</td>

<tr></tr><tr></tr><tr></tr>
<tr></tr><tr></tr><tr></tr>
<tr></tr><tr></tr><tr></tr>
<tr></tr><tr></tr><tr></tr>
<tr></tr><tr></tr><tr></tr>
<tr></tr><tr></tr><tr></tr>
<tr></tr><tr></tr><tr></tr>
<tr></tr><tr></tr><tr></tr>

<tr>
<td colspan="2" valign="middle" ALIGN=left>
<font size=3.5 face="Arial Black" style="color:#44822F">Graficas y reportes de impuestos</font>
</td>
</tr>
</form>

<form action=ReportesGraficos3.php method="POST" target="ventanita" onsubmit="ventanita=window.open('','ventanita','width=900,height=600′)">

	<tr></tr>
	<tr></tr><tr></tr><tr></tr>

	<tr>
		<td ALIGN=CENTER><font size=2 face="verdana" style="color:#44822F">Año&nbsp </font></td>
		<td>
		<select style="color: #000; background-color: #90EE90" id="year3" name="year3">
			<option>2015</option>
			<option>2016</option>
			<option>2017</option>
			<option>2018</option>
			<option>2019</option>
			<option>2020</option>
			<option>2021</option>
			<option>2022</option>
			</select>	
		</td>
	</tr>
	
	<tr>
		<td ALIGN=CENTER><font size=2 face="verdana" style="color:#44822F">Periodo&nbsp </font></td>
		<td>
		<select style="color: #000; background-color: #90EE90" id="period" name="period">
			<option>Primer Trimestre</option>
			<option>Segundo Trimestre</option>
			<option>Tercer Trimestre</option>
			<option>Cuarto Trimestre</option>
			<option>Primer Cuatrimestre</option>
			<option>Segundo Cuatrimestre</option>
			<option>Tercer Cuatrimestre</option>
			<option>Primer Semestre</option>
			<option>Segundo Semestre</option>
			<option>Anual</option>
			</select>	
		</td>
	</tr>
	<td ALIGN=RIGHT>
	<font size=1 face="Arial" style="color:#44822F"></font>
	</td>
	<td ALIGN=RIGHT>
	<input title="genreporte" alt="genreporte" src="barra.png" type="image" value="genreporte" name="genreporte" id="genreporte" width="45" height="40" />
	<font size=1 face="Arial" style="color:#44822F">Ver Grafico</font>
	</td>

</FORM>


<td></td><td></td><td></td>
<td></td><td></td><td></td>
<td></td><td></td><td></td>
<td>
	<input type="image" value="B" src="antiguos2.jpg" type="image" width="80" height="35" onclick="window.open('impuestosbuscar.php','nuevaVentana','width=500, height=600')" />
</td>


<form action="general.php" method="POST">
<tr></tr><tr></tr><tr></tr>
<tr></tr><tr></tr><tr></tr>
<tr></tr><tr></tr><tr></tr>
<tr></tr><tr></tr><tr></tr>
<tr></tr><tr></tr><tr></tr>
<tr></tr><tr></tr><tr></tr>
<tr></tr><tr></tr><tr></tr>
<tr></tr><tr></tr><tr></tr>
<tr></tr><tr></tr><tr></tr>
<tr></tr><tr></tr><tr></tr>


<td colspan="2" valign="middle" ALIGN=left>
<font size=3.5 face="Arial Black" style="color:#44822F">Graficas y Reportes de oficinas en general </font>
</td>

</form>


<form action=ReportesGraficos2.php method="POST" target="ventanita" onsubmit="ventanita=window.open('','ventanita','width=900,height=600′)">

	<tr></tr>
<td ALIGN=CENTER><font size=2 face="verdana" style="color:#44822F">Departamento</font></td>
	<td>
		<select style="color: #000; background-color: #90EE90" id="proveedor2" name="proveedor2">
		</select>		
	</td>

</tr>
<tr>
	<td ALIGN=CENTER><font size=2 face="verdana" style="color:#44822F">Indicador</font></td>
	<td>	
		<select style="color: #000; background-color: #90EE90" id="producto2" name="producto2">
		</select>
	</td>

</tr>

	<tr>
		<td ALIGN=CENTER><font size=2 face="verdana" style="color:#44822F">Año&nbsp </font></td>
		<td>
		<select style="color: #000; background-color: #90EE90" id="year4" name="year4">
		
			</select>	
		</td>
	</tr>
	
	<tr>
		<td ALIGN=CENTER><font size=2 face="verdana" style="color:#44822F">Periodo&nbsp </font></td>
		<td>
		<select style="color: #000; background-color: #90EE90" id="period" name="period">
			<option>Primer Trimestre</option>
			<option>Segundo Trimestre</option>
			<option>Tercer Trimestre</option>
			<option>Cuarto Trimestre</option>
			<option>Primer Cuatrimestre</option>
			<option>Segundo Cuatrimestre</option>
			<option>Tercer Cuatrimestre</option>
			<option>Primer Semestre</option>
			<option>Segundo Semestre</option>
			<option>Anual</option>
			</select>	
		</td>
	</tr>

	<td ALIGN=RIGHT>
	<font size=1 face="Arial" style="color:#44822F"></font>
	</td>
	<td ALIGN=RIGHT>
	<input title="genreporte" alt="genreporte" src="barra.png" type="image" value="genreporte" name="genreporte" id="genreporte" width="45" height="40" />
	<font size=1 face="Arial" style="color:#44822F">Ver Grafico</font>
	</td>

</FORM>
	
	
	
</div>


<td></td><td></td>
<td></td><td></td><td></td>
<td></td><td></td><td></td>
<td></td>

<td>
	<input type="image" value="B" src="antiguos2.jpg" width="80" height="35" onclick="window.open('buscargenerall.php','nuevaVentana','width=500, height=600')" />
</td>


<tr></tr><tr></tr><tr></tr>
<tr></tr><tr></tr><tr></tr>
<tr></tr><tr></tr><tr></tr>

<FORM ACTION=excelreportgen.php METHOD=post name="gragen" id="gragen">
	<tr>
		<td ALIGN=left>
		<font size=3.5 face="Arial Black" style="color:#44822F">Seleccione el año: </font>
		
			<select style="color: #000; background-color: #90EE90"  id="year5" name="year5">
			
			</select>	
		</td>
	</tr>
	<tr>
		<td>
		
			<input title="vergraficagen" alt="vergraficagen" src="ReporteGen.png" type="image" value="vergraficagen" name="vergraficagen" id="vergraficagen" width="45" height="40" />
				<br><font size=1.5 face="Arial" style="color:#44822F">Plan tactico</font>
		</td>
		
	</tr>
</form>

</body>
</html>