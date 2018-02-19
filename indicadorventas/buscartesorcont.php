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
	padding:5px 14px;
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
	padding:5px 13px;
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

.botongris {
	-moz-box-shadow:inset 0px 1px 3px 0px #949696;
	-webkit-box-shadow:inset 0px 1px 3px 0px #949696;
	box-shadow:inset 0px 1px 3px 0px #949696;
	background:-webkit-gradient(linear, left top, left bottom, color-stop(0.05, #949693), color-stop(1, #a5a8a5));
	background:-moz-linear-gradient(top, #949693 5%, #a5a8a5 100%);
	background:-webkit-linear-gradient(top, #949693 5%, #a5a8a5 100%);
	background:-o-linear-gradient(top, #949693 5%, #a5a8a5 100%);
	background:-ms-linear-gradient(top, #949693 5%, #a5a8a5 100%);
	background:linear-gradient(to bottom, #949693 5%, #a5a8a5 100%);
	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#949693', endColorstr='#a5a8a5',GradientType=0);
	background-color:#949693;
	-moz-border-radius:5px;
	-webkit-border-radius:5px;
	border-radius:5px;
	border:1px solid #7d807f;
	display:inline-block;
	cursor:pointer;
	color:#ffffff;
	font-family:Arial;
	font-size:12px;
	font-weight:bold;
	padding:5px 13px;
	text-decoration:none;
	text-shadow:0px -1px 0px #767a79;
}
.myButton:hover {
	background:-webkit-gradient(linear, left top, left bottom, color-stop(0.05, #a5a8a5), color-stop(1, #949693));
	background:-moz-linear-gradient(top, #a5a8a5 5%, #949693 100%);
	background:-webkit-linear-gradient(top, #a5a8a5 5%, #949693 100%);
	background:-o-linear-gradient(top, #a5a8a5 5%, #949693 100%);
	background:-ms-linear-gradient(top, #a5a8a5 5%, #949693 100%);
	background:linear-gradient(to bottom, #a5a8a5 5%, #949693 100%);
	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#a5a8a5', endColorstr='#949693',GradientType=0);
	background-color:#a5a8a5;
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
			$("#year1").load("mesescalcu3.php");
		})	
		function activar(obj)
		{
			var d = document.form1;
			if(obj.checked==true)
			{
				d.Guardar.disabled = false;
				d.Guardar.className="botonverde";
				//d.Guardar.style.background="#A9E6B5";
			}
			else
			{
				d.Guardar.disabled= true;
				d.Guardar.className="botongris";
				//d.Guardar.style.background="#D8D8D8";
			}
		}
</script>


<body style="background:#FFFFFF">
<div align="center">
<br>
	
<?php

//Inicializar la variable del año, en le año actual
date_default_timezone_set('America/Monterrey');

//include("conect.php");
$link=Conectarse();

$usuario=$user;
$contrasena=$pass;
$departamento=$departamento;

//Inicializar la variable del año, en le año actual
$extraido[5]=date('Y', time());

//recolectar datos
$Buscar=$_POST["Buscar"];
$mes=$_POST["mes"];
$year1=$_POST["year1"];


////////BUSCAR////////////////////////////////////////////////////////buscar
if ($Buscar == "Buscar") 
{	
//obtener EL NOMBRE DE DEPARTAMENTO Y EL INDICADOR
	///////////////	
	
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
	
	//$mesnum=$mes;
	
	$query4=mysql_query("Select mes from mes where idmes='".$mesnum."'");
	mysql_data_seek($query4,0);
    $mesmes = mysql_fetch_row($query4);
	$mes=$mesmes[0];

   $_SESSION['meses']=$mesnum;
	
	$query2=mysql_query("Select * from anios where idanio='".$year1."'");
	mysql_data_seek($query2,0);
    $anio = mysql_fetch_row($query2);
	$year1=$anio[1];
	
	 $_SESSION['aaniio']=$year1;
	
		$q2="SELECT FORMAT(proveedores, 2),FORMAT(cadenas, 2), FORMAT(trenes, 2),FORMAT(garantias, 2),FORMAT(creditos, 2)  FROM tesorer1 WHERE year1 ='".$year1."' and idmes=".$mesnum;
		$tabla2 = mysql_query($q2, $link);
		$extraido2 = mysql_fetch_row($tabla2);

		$q="SELECT proveedores,cadenas,trenes,garantias,creditos FROM tesorer1 WHERE year1 ='".$year1."' and idmes=".$mesnum;
		$tabla1 = mysql_query($q, $link);
		$extraido = mysql_fetch_row($tabla1);
	
	$Resultado =" Tesoreria Tuvo en:\n Proveedores $".$extraido2[0]." \n Cadenas $".$extraido2[1]."\n Trenes $".$extraido2[2]."\n Garantias $".$extraido2[3]."\n Creditos $".$extraido2[4];
	$departament=$proveedor;
	$indicator=$producto;
	$extraido[8]=$mes." del ".$year1;
}

//recolectar los datos
$Guardar=$_POST["Guardar"];
$Proveedores=$_POST["Proveedores"];
$Cadenas=$_POST["Cadenas"];
$Trenes=$_POST["Trenes"];
$Garantias=$_POST["Garantias"];
$Creditos=$_POST["Creditos"];

if($Guardar == "Guardar")
{
		/*$query2=mysql_query("Select * from anios where idanio='".$year1."'");
		mysql_data_seek($query2,0);
		$anio = mysql_fetch_row($query2);
		$year1=$anio[1];*/
		$year1=$_SESSION['aaniio'];
	
		$q = "UPDATE tesorer1 SET proveedores='$Proveedores', cadenas='$Cadenas', trenes='$Trenes', garantias='$Garantias', creditos='$Creditos' WHERE year1 ='".$year1."' and idmes='". $_SESSION['meses']."'";
		$tabla1 = mysql_query($q, $link);
}



?>
<table>
<form name="form1" target="contenido" action="buscartesorcont.php" method="POST">
	
	<tr></tr><tr></tr><tr></tr>	
	<tr>
		<td ALIGN=CENTER><font size=2 face="verdana" style="color:#44822F">Fecha</font>
		</td>
		<td><input  style="color: #000; background-color: #FFDBA5" type="text" size="14" name="fecha" id="fecha" readonly="true" value="<?php echo $extraido[8]?>">
		</td>
	</tr>
	
	<tr>
	<td ALIGN=right><font size=2 face="verdana" style="color:#44822F">Proveedores&nbsp&nbsp&nbsp&nbsp</font></td>
	<td><input  style="color: #000; background-color: #FFDBA5" type="text" size="14" name="Proveedores" value="<?php echo $extraido[0]?>">
	</td>
	</tr>

	<tr>
	<td ALIGN=right><font size=2 face="verdana" style="color:#44822F">Cadenas&nbsp&nbsp&nbsp&nbsp&nbsp </font></td>
	<td><input  style="color: #000; background-color: #FFDBA5" type="text" size="14" name="Cadenas" value="<?php echo $extraido[1]?>"></td>
</tr>
<tr>
	<td ALIGN=right><font size=2 face="verdana" style="color:#44822F">Trenes&nbsp&nbsp&nbsp&nbsp&nbsp </font></td>
	<td><input  style="color: #000; background-color: #FFDBA5" type="text" size="14" name="Trenes" value="<?php echo $extraido[2]?>"></td>
</tr>
<tr>
	<td ALIGN=right><font size=2 face="verdana" style="color:#44822F">Garantias&nbsp&nbsp&nbsp&nbsp&nbsp </font></td>
	<td><input  style="color: #000; background-color: #FFDBA5" type="text" size="14" name="Garantias" value="<?php echo $extraido[3]?>"></td>
</tr>
<tr>
	<td ALIGN=right><font size=2 face="verdana" style="color:#44822F">Creditos&nbsp&nbsp&nbsp&nbsp&nbsp </font></td>
	<td><input  style="color: #000; background-color: #FFDBA5" type="text" size="14" name="Creditos" value="<?php echo $extraido[4]?>"></td>
</tr>
	<tr>
		<td colspan="3" valign="middle" align="right">
			<input type="checkbox" value="1" name="pepe" width="30" height="30" onclick="javascript:activar(this);">
			<font size=2 face="verdana" style="color:#44822F">Editar&nbsp&nbsp</font>
			<input class="botongris" style="background-color: #D8D8D8"  title="Clic para guardar cambios" alt="Guardar" type="submit" value="Guardar" name="Guardar" id="Guardar" disabled>
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
		<textarea style="color:#000; background-color:#F5DEB3; WIDTH:228px; HEIGHT:98px"name="comentarios" rows="15" cols="40"><?php echo $Resultado?></textarea></textarea>
		</td>
	</tr> 
</form>
</table>
</body>
</html>