<?php
session_start();
include("conect.php");
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Registro</title>
</head>
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
				d.Guardar.style.background="#A9E6B5";
			}
			else
			{
				d.Guardar.disabled= true;
				d.Guardar.style.background="#D8D8D8";
			}
		}
		
</script>

<body style="background:#FFFFFF">


<?php

//Inicializar la variable del año, en le año actual
date_default_timezone_set('America/Monterrey');


$user="root";
$pass="pirineos";
$server="localhost";
$bd="indicadores2";
$idnomtabla = $_GET['param2_id'];

$link=mysqli_connect($server,$user,$pass,$bd);

//include("conect.php");
//$link=Conectarse();

$usuario=$user;
$contrasena=$pass;
$departamento=$departamento;

//Inicializar la variable del año, en le año actual
$extraido[5]=date('Y', time());

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
	
	$query4=mysqli_query($link,"Select mes from mes where idmes='".$mesnum."'");
	mysqli_data_seek($query4,0);
    $mesmes = mysqli_fetch_row($query4);
	$mes=$mesmes[0];

   $_SESSION['meses']=$mesnum;
	
	$query2=mysqli_query($link,"Select * from anios where idanio='".$year1."'");
	mysqli_data_seek($query2,0);
    $anio = mysqli_fetch_row($query2);
	$year1=$anio[1];
	
		$q2="SELECT FORMAT(proveedores, 2),FORMAT(cadenas, 2), FORMAT(trenes, 2),FORMAT(garantias, 2),FORMAT(creditos, 2)  FROM tesorer1 WHERE year1 ='".$year1."' and idmes=".$mesnum;
		$tabla2 = mysqli_query($link,$q2);
		$extraido2 = mysqli_fetch_row($tabla2);

		$q="SELECT proveedores,cadenas,trenes,garantias,creditos FROM tesorer1 WHERE year1 ='".$year1."' and idmes=".$mesnum;
		$tabla1 = mysqli_query($link,$q);
		$extraido = mysqli_fetch_row($tabla1);
	
	$Resultado =" Tesoreria Tuvo en:\n Proveedores $".$extraido2[0]." \n Cadenas $".$extraido2[1]."\n Trenes $".$extraido2[2]."\n Garantias $".$extraido2[3]."\n Creditos $".$extraido2[4];
	$departament=$proveedor;
	$indicator=$producto;
	$extraido[8]=$mes." del ".$year1;
}

if($Guardar == "Guardar")
{
	
		$query2=mysqli_query($link,"Select * from anios where idanio='".$year1."'");
		mysqli_data_seek($query2,0);
		$anio = mysqli_fetch_row($query2);
		$year1=$anio[1];
	
		$q = "UPDATE tesorer1 SET proveedores='$Proveedores', cadenas='$Cadenas', trenes='$Trenes', garantias='$Garantias', creditos='$Creditos' WHERE year1 ='".$year1."' and idmes='". $_SESSION['meses']."'";
		$tabla1 = mysqli_query($link,$q);
}



?>

<div align="center">
<br>
	
<table>

<form name="form1" action="buscartesor2.php" method="POST">
	
	<tr></tr><tr></tr><tr></tr>
	<tr></tr><tr></tr><tr></tr>
	
	<tr>
		<td ALIGN=CENTER><font size=2 face="verdana" style="color:#44822F">Mes</font>
		</td>
		<td>
			<select style="color: #000; background-color: #E6FCDF" id="mes" name="mes" value="<?php echo $extraido[2]?>">
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
	</tr>
	
	<tr>
		<td ALIGN=CENTER><font size=2 face="verdana" style="color:#44822F">Año&nbsp </font>
		</td>
		<td>
			<select style="color: #000; background-color: #E6FCDF" id="year1" name="year1">
			</select>		
		</td>
	</tr>
	<tr>
		<td colspan="3" valign="middle" align="right">
		<input style="background-color: #A9E6B5" title="Clic para buscar indicador" alt="Buscar" src="busc.png" type="submit" value="Buscar" name="Buscar" id="Buscar" width="85" height="30" />
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
			<input style="background-color: #D8D8D8"  title="Clic para guardar cambios" alt="Guardar" type="submit" value="Guardar" name="Guardar" id="Guardar" disabled>
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