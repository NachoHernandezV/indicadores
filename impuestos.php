<?php
session_start();
include("conect.php");
?>
<?php
if($salir2=="salir2")
{
	$_SESSION['impuestos']="no";
}
if($_SESSION['impuestos'] != "si") // MANDA A VENTANA DE VENTAS
{
	$_SESSION['impuestos']="no";
	echo '<script>window.location="salir.php"</script>';	
}
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Pirineos</title>
</head>
<style type="text/css">
.botonverde {
	-moz-box-shadow:inset 0px 1px 3px 0px #91b8b3;
	-webkit-box-shadow:inset 0px 1px 3px 0px #91b8b3;
	box-shadow:inset 0px 1px 3px 0px #91b8b3;
	background:-webkit-gradient(linear, left top, left bottom, color-stop(0.05, #5eb34f), color-stop(1, #53ad56));
	background:-moz-linear-gradient(top, #5eb34f 5%, #53ad56 100%);
	background:-webkit-linear-gradient(top, #5eb34f 5%, #53ad56 100%);
	background:-o-linear-gradient(top, #5eb34f 5%, #53ad56 100%);
	background:-ms-linear-gradient(top, #5eb34f 5%, #53ad56 100%);
	background:linear-gradient(to bottom, #5eb34f 5%, #53ad56 100%);
	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#5eb34f', endColorstr='#53ad56',GradientType=0);
	background-color:#5eb34f;
	-moz-border-radius:5px;
	-webkit-border-radius:5px;
	border-radius:5px;
	border:1px solid #566963;
	display:inline-block;
	cursor:pointer;
	color:#ffffff;
	font-family:Arial;
	font-size:12px;
	font-weight:bold;
	padding:6px 10px;
	text-decoration:none;
	text-shadow:0px -1px 0px #2b665e;
}
.myButton:hover {
	background:-webkit-gradient(linear, left top, left bottom, color-stop(0.05, #53ad56), color-stop(1, #5eb34f));
	background:-moz-linear-gradient(top, #53ad56 5%, #5eb34f 100%);
	background:-webkit-linear-gradient(top, #53ad56 5%, #5eb34f 100%);
	background:-o-linear-gradient(top, #53ad56 5%, #5eb34f 100%);
	background:-ms-linear-gradient(top, #53ad56 5%, #5eb34f 100%);
	background:linear-gradient(to bottom, #53ad56 5%, #5eb34f 100%);
	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#53ad56', endColorstr='#5eb34f',GradientType=0);
	background-color:#53ad56;
}
.myButton:active {
	position:relative;
	top:1px;
}


.botonbuscar {
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
	padding:7px 10px;
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

		$("document").ready(function(){
			$("#mes").load("arranqueindicadorimpu.php");
		})
		
			$("document").ready(function()
		{
			$("#year1").load("mesescalcu4.php");
		})
		
		$("document").ready(function()
		{
			$("#year2").load("mesescalcu6.php");
		})
		
</script>
	
<body background="background.jpg">

<TABLE BORDER=0 WIDTH=100%>
	<TD align="left" valign="top">
		<input title="actualz" src="log4.png" type="image" name="actualz" width="190" height="130" />
	</TD>

	<TD align="right" valign="top">

	</TD>

	<TD align="right" valign="top">
		<form action=salir.php method=POST name="delet">
		<input type="hidden" name="salir2" value=salir2> 
		<input type="hidden" name="salir" value="no">
		<input title="actualz" src="<?php echo $_SESSION['foto']?>" type="image" name="actualz" width="90" height="90" />
		<font size=4.5 face="Arial Black" style="color:#000"></font></br>
		<a href="salir.php" target="_top"><font size=2 face="Arial Black" color="red">Cerrar sesión</font></a>
		</form>
	</TD>
</TABLE>


<div align="center">
<TABLE width="52%">
	<tr>
		<td colspan="2" valign="middle" ALIGN=CENTER><font size=4.5 face="Arial Black" style="color:#000"><?php echo$_SESSION['depart']?></font></td>
	</tr>
	
    <tr>
	<FORM ACTION=impuestos.php METHOD=post name="Actualiz" id="Actualiz">
	<td><input title="actualz" alt=" conton comprar " src="act.png" type="image" name="actualz" width="45" height="40" />
	</FORM></td>

	
    <td  align=RIGHT><font size=2.5 face="Arial Black">Para buscar algun indicador</font>
	</td>
	<td>
	<input type="submit" value="Buscar" class="Botonbuscar" onclick="window.open('impuestosbuscar.php','nuevaVentana','width=500, height=600')" />
	</td>
	
	</TR>
</TABLE></div><br>



<?php
//include("conect.php");
//$link=Conectarse();

//Conectar con  la Base de datos
		$user="root";
		$pass="pirineos";
		$server="localhost";
		$bd="indicadores";
		$link=mysqli_connect($server,$user,$pass,$bd);

//Inicializar la variable del año, en le año actual
date_default_timezone_set('America/Monterrey');

$usuario=$user;
$contrasena=$pass;
$departamento=$departamento;


if($salir == "salir")
{

echo '<script>window.location="salir.php"</script>';
}

//RECIBIR LOS DATOS
$Registrar=$_POST["Registrar"];
$mes=$_POST["mes"];
$user=$_POST["user"];
$pass=$_POST["pass"];
//$year1=$_POST["year1"];

//TEMPORAL 6
$yearid=$_POST['year1'];
//$year1='2016';

//obtener EL NOMBRE DE objetivo
	$query7=mysqli_query($link,"SELECT * FROM anios where idanio='".$yearid."'");
	mysqli_data_seek($query7,0);
    $nombreyear = mysqli_fetch_row($query7);
	$year1=$nombreyear[1];


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
	
	$mesnum=$mes;
	
		//Repetido 
		$consultarep="SELECT COUNT( * ) FROM  impuest1 WHERE idmes ='$mesnum' AND year1='$year1'";
		$REP=mysqli_query($link,$consultarep);
		mysqli_data_seek($REP,0);
		$repetido = mysqli_fetch_row($REP);
		
		if($repetido[0]==0)
		{
			$sqlz="INSERT INTO impuest1 (idmes,devolucion,compensacion,year1) VALUES ('$mesnum','$user','$pass','$year1')";
			mysqli_query($link,$sqlz);
		}
	
}


?>


<div align="center">
	
<table>
<tr>
<td colspan="2" valign="middle" ALIGN=CENTER><font size=3.5 face="Arial Black" style="color:#CC7A00">Capture sus indicadores&nbsp&nbsp&nbsp&nbsp</font></td>
</tr>


<tr>
	<form action="impuestos.php" method="POST">
	
	
<tr>
	<td ALIGN=right><font size=2 face="verdana" style="color:#44822F">Devoluciones&nbsp&nbsp&nbsp&nbsp</font></td>
	<td><input  style="color: #000; background-color: #FFDBA5" type="text" size="13" name="user" value="<?php echo $extraido[0]?>">
	</td>
</tr>

<tr>
	<td ALIGN=right><font size=2 face="verdana" style="color:#44822F">Compensaciones&nbsp&nbsp&nbsp&nbsp&nbsp </font></td>
	<td><input  style="color: #000; background-color: #FFDBA5" type="text" size="13" name="pass" value="<?php echo $extraido[1]?>"></td>
</tr>

<tr>
<td ALIGN=right><font size=2 face="verdana" style="color:#44822F">Mes&nbsp&nbsp&nbsp&nbsp&nbsp</font></td>
	<td>
		<select style="color: #000; background-color: #FFDBA5" id="mes" name="mes">
		<option>Enero</option>
		<option>Febrero</option>
		<option>Marzo</option>
		<option>Abril</option>
		<option>Mayo</option>
		<option>Junio</option>
		<option>Julio</option>
		<option>Agosto</option>
		<option>Septiembre</option>
		<option>Octubre</option>
		<option>Noviembre</option>
		<option>Diciembre</option>
		</select>		
	</td>
<tr>
	<tr>
	<td ALIGN=right><font size=2 face="verdana" style="color:#44822F">Año&nbsp&nbsp&nbsp&nbsp&nbsp </font></td>
		<td>
		<select style="color: #000; background-color: #FFDBA5" id="year1" name="year1">
			</select>	
		</td>
	</tr>

<tr>
	<td ALIGN=right><font size=2 face="verdana" style="color:#44822F"></font></td>
	<td ALIGN=right><input title="Registrar" type="submit" class="botonverde" alt="Registrar" value="Registrar" name="Registrar" id="Registrar"  />
	
</tr>

	 
</form>


<form action="impuestos.php" method="POST">
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
<tr></tr><tr></tr><tr></tr>
<tr></tr><tr></tr>

<td colspan="2" valign="middle" ALIGN=left>
<font size=3.5 face="Arial Black" style="color:#44822F">Para hacer reportes o ver graficas llene los 2 campos de abajo</font>
</td>

</form>
<?php
//year3<form action=Grafico.php method="POST" target="ventanita" onsubmit="ventanita=window.open('','ventanita','width=900,height=600′)">
?>

<form action=ReportesGraficos7.php method="POST" target="ventanita" onsubmit="ventanita=window.open('','ventanita','width=900,height=600′)">

	<tr></tr>
	<tr></tr><tr></tr><tr></tr>

	<tr>
		<td ALIGN=CENTER><font size=2 face="verdana" style="color:#44822F">Año&nbsp </font></td>
		<td>
		<select style="color: #000; background-color: #90EE90" id="year2" name="year2">
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
	<font size=1 face="verdana" style="color:#44822F">Ver Grafico</font>
	</td>

	</FORM>
</div>
</body>
</html>