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

		$("document").ready(function()
		{
			$("#year1").load("mesescalcu.php");
		})
		
		$("document").ready(function(){
			$("#mes").load("arranqueimp.php");
		})
		
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


<body style="background:#FFFFFF">



<?php
//include("conect.php");

$user="root";
$pass="pirineos";
$server="localhost";
$bd="indicadores2";
$idnomtabla = $_GET['param2_id'];

$link=mysqli_connect($server,$user,$pass,$bd);
//$link=Conectarse();

$usuario=$user;
$contrasena=$pass;
$departamento=$departamento;

//Inicializar la variable del año, en le año actual
date_default_timezone_set('America/Monterrey');
//Inicializar la variable del año, en le año actual
$extraido[5]=date('Y', time());

//recibir los datos
$Buscar=$_POST["Buscar"];
$mes=$_POST["mes"];
$year1=$_POST["year1"];

////////BUSCAR////////////////////////////////////////////////////////buscar
if ($Buscar == "Buscar") 
{	
//obtener EL NOMBRE DE DEPARTAMENTO Y EL INDICADOR
	
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
	
   $_SESSION['meses']=$mesnum;
   
   $query4=mysqli_query($link,"Select mes from mes where idmes='".$mesnum."'");
	mysqli_data_seek($query4,0);
    $mesmes = mysqli_fetch_row($query4);
	$mes=$mesmes[0];
   
   	$query2=mysqli_query($link,"Select * from anios where idanio='".$year1."'");
	mysqli_data_seek($query2,0);
    $anio = mysqli_fetch_row($query2);
	$year1=$anio[1];
	
	 $_SESSION['aaniiioo']=$year1;
	
	$q2="SELECT FORMAT(devolucion,2),FORMAT(compensacion,2) FROM impuest1 WHERE year1 ='".$year1."' and idmes=".$mesnum;
	$tabla2 = mysqli_query($link,$q2);
	$extraido2 = mysqli_fetch_row($tabla2);

	$q="SELECT devolucion,compensacion FROM impuest1 WHERE year1 ='".$year1."' and idmes=".$mesnum;
	$tabla1 = mysqli_query($link,$q);
	$extraido = mysqli_fetch_row($tabla1);
	
	
	$Resultado =" Impuestos \n"." Tuvo $".$extraido2[0]." en devoluciones \n Y $".$extraido2[1]." de compensaciones";
	$departament=$proveedor;
	$indicator=$producto;
	$extraido[3]=$mes." del ".$year1;
}

//recibir los datos
$Guardar=$_POST["Guardar"];
$user=$_POST["user"];
$realz=$_POST["realz"];

if($Guardar == "Guardar")
{
	/*$query2=mysql_query("Select * from anios where idanio='".$year1."'");
	mysql_data_seek($query2,0);
    $anio = mysql_fetch_row($query2);
	$year1=$anio[1];*/
	
	$q = "UPDATE impuest1 SET devolucion='$user',compensacion='$realz' WHERE year1 ='".$_SESSION['aaniiioo']."' and idmes='". $_SESSION['meses']."'";
	$tabla1 = mysqli_query($link,$q);
		
}
?>

<table style="width:100%">
<form name="form1" target="contenido" action="burcarimppart2.php" method="POST">
  <tr></tr><tr></tr><tr></tr>
  <tr></tr><tr></tr>
  <tr>
		<td ALIGN=Right>
		<font size=2 face="verdana" style="color:#44822F">Fecha&nbsp</font>
		</td>
		<td ALIGN=left>
		<input  style="color: #000; background-color: #F5DEB3" type="text" size="14" name="fecha" id="fecha" readonly="true" value="<?php echo $extraido[3]?>">
		</td>
	</tr>
	<tr>
		<td ALIGN=right>
		<font size=2 face="verdana" style="color:#44822F">Devoluciones&nbsp</font>
		</td>
		<td ALIGN=left>
		<input  style="color: #000; background-color: #F5DEB3" type="text" size="14" name="user" id="user" value="<?php echo $extraido[0]?>">
		</td>
	</tr>
	<tr>
		<td ALIGN=right>
		<font size=2 face="verdana" style="color:#44822F">Compensaciones&nbsp</font>
		</td>
		<td ALIGN=left>
		<input  style=" color: #000; background-color: #F5DEB3" type="text" size="14" name="realz" id="realz" value="<?php echo $extraido[1]?>">
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
			<input class="boton1" title="Clic para guardar cambios" alt="Guardar" type="submit" value="Guardar" name="Guardar" id="Guardar" disabled>
			<font size=1 face="Arial Black"> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp </font>
		</td>
		
	</tr>
	
	<tr>
		<td colspan="3" valign="middle" align="right">
			<font size=1 face="Arial Black"> &nbsp </font>
		</td>
	</tr>
	<tr>
		<td colspan="3" valign="middle" align="right">
			<font size=1 face="Arial Black"> &nbsp </font>
		</td>
	</tr>
	<tr>
		<td colspan="3" valign="middle" align="right">
			<font size=1 face="Arial Black"> &nbsp </font>
		</td>
	</tr>
	<tr>
		<td ALIGN=CENTER><font size=2 face="verdana" style="color:#44822F ">Resultado&nbsp </font></td>
		<td>
		<textarea style="color:#000; background-color:#F5DEB3; WIDTH:265px; HEIGHT:98px"name="comentarios" rows="10" cols="40"><?php echo $Resultado?></textarea></textarea>
		</td>
	</tr>
	</form>
</table>

</body>
</html>