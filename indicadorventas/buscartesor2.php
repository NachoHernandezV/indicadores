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
		
			
		
</script>

<body style="background:#FFFFFF">



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

<form name="form1" target="contenido" action="buscartesorcont.php" method="POST">
	<tr></tr><tr></tr>
	<tr></tr><tr></tr>
	<tr>
		<td ALIGN=right>
		<font size=2 face="verdana" style="color:#44822F">&nbsp </font>
		</td>
		<td ALIGN=right>
		<font size=2 face="verdana" style="color:#44822F">Mes</font>
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
	<td ALIGN=right>
		<font size=2 face="verdana" style="color:#44822F">&nbsp </font>
		</td>
		
		<td ALIGN=right>
		<font size=2 face="verdana" style="color:#44822F">Año&nbsp </font>
		</td>
	
		<td>
			<select style="color: #000; background-color: #E6FCDF" id="year1" name="year1" >
			</select>		
		</td>
	</tr>
	<tr>
		<td ALIGN=right>
		<font size=2 face="verdana" style="color:#44822F">&nbsp </font>
		</td>
		<td ALIGN=right>
		<font size=2 face="verdana" style="color:#44822F">&nbsp </font>
		</td>
		<td align="center">
		<input class="botonbuscar" title="Clic para buscar indicador" alt="Buscar"  type="submit" value="Buscar" name="Buscar" id="Buscar" width="85" height="30" />
		</td>
	</tr>
	<tr>
		<td colspan="3" valign="middle" align="right">
			<font size=1 face="Arial Black"> &nbsp </font>
		</td>
	</tr>
	 
</form>
</table>
<?php	
/*<table>

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

<form name="form1" target="contenido" action="buscartesorcont.php" method="POST">
	
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
		<input class="botonbuscar" style="background-color: #A9E6B5" title="Clic para buscar indicador" alt="Buscar"  type="submit" value="Buscar" name="Buscar" id="Buscar" width="85" height="30" />
		</td>
	</tr>
</form>
</table>*/
?>
</body>
</html>

