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
	
		$("document").ready(function(){
			$("#mes").load("arranquebuscar.php");
		})
		
		
		//para cuando cambiamos los indicadores
		$("document").ready(function()
		{
			$("#producto").load("indicadorgeneral.php");
			
			$("#producto").change(function()
			{
				var id= $("#producto").val();
				$.get("buscargeneral.php",{param2_id:id})
				.done(function(data){
					$("#mes").html(data);
				})
				//min 30.15
				
					var id= $("#producto").val();
				$.get("aniocalcularb.php",{param2_id:id})
				.done(function(data){
					$("#year1").html(data);
				})
				
			})
			var indk=1;
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
		
		$("document").ready(function()
		{
			$("#year1").load("arranqueyearb.php");
		})
		
			$("document").ready(function()
			{
			$("#proveedor").load("departamentogeneral2.php");
			
			})
		
		$("document").ready(function()
		{
			$("#producto").load("indicadorgeneral2.php");
		})
		
		
		$("document").ready(function()
		{
			$("#year1").change(function()
			{
				//SE UNAN LAS 2 VARIABLES PARA MANDAR LAS A LA PAGINA BUSCARMESANIO  y separarlas despues
				var uno= $("#year1").val();
				var dos= $("#producto").val();
				var id= uno+"y"+dos;
				
				$.get("buscarmesanio.php",{param2_id:id})
				.done(function(data){
					$("#mes").html(data);
				})
				//min 30.15
				
			})	
		})
	</script>


<body style="background:#FFFFFF">


<?php
//include("conect.php");
$link=Conectarse();

$usuario=$user;
$contrasena=$pass;
$departamento=$departamento;

//Inicializar la variable del año, en le año actual
date_default_timezone_set('America/Monterrey');
$extraido[5]=date('Y', time());

?>

<div align="center">
<br>
	
<table>

	<tr>
		<td colspan="3" valign="middle" align="center">
		<font size=3.5 face="Arial Black">    Llene los campos para buscar el indicador</font>
		</td>
	</tr>
	<tr>
		<td colspan="3" valign="middle" align="center">
			<font size=2 face="Arial Black"> &nbsp </font>
		</td>
	</tr>

<form name="form1" target="contenido" action="div.php" method="POST">
	<tr>
		<td ALIGN=CENTER><font size=2 face="verdana" style="color:#44822F">Departamento</font>
		</td>
		<td>
			<select style="color: #000; background-color: #E6FCDF" id="proveedor" name="proveedor" value="<?php echo $extraido[3]?>">
			</select>		
		</td>
	</tr>
	<tr>
		<td ALIGN=CENTER><font size=2 face="verdana" style="color:#44822F">Indicador</font></td>
		<td>	
			<select style="color: #000; background-color: #E6FCDF" id="producto" name="producto" value="<?php echo $extraido[4]?>">
			</select>
		</td>
	</tr>
	
	<tr>
		<td ALIGN=CENTER><font size=2 face="verdana" style="color:#44822F">Año&nbsp </font>
		</td>
		<td>
			<select style="color: #000; background-color: #E6FCDF" id="year1" name="year1" >
			</select>		
		</td>
	</tr>
	
	<tr>
		<td ALIGN=CENTER><font size=2 face="verdana" style="color:#44822F">Mes</font>
		</td>
		<td>
			<select style="color: #000; background-color: #E6FCDF" id="mes" name="mes" value="<?php echo $extraido[4]?>">
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
		<td colspan="3" valign="middle" align="right">
		<input type="submit" value="Buscar" name="Buscar" id="Buscar" class="boton"> 
		
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

</form>
</table>

</body>
</html>

