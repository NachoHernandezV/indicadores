<?php
session_start();
include("conect.php");
$_SESSION['general']="no";
$_SESSION['impuestos']='no';
$_SESSION['supervision']='no';
$_SESSION['tesoreria']='no';
?>

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Salir</title>

	

</head>
<body style="background:#FFFFFF">

<div align="center">

<table>
	<tr>
	<IMG SRC="close.png" WIDTH=178 HEIGHT=180 ALIGN=center  ALT="salida">
	</tr>
	<tr>
	<td ALIGN=center><font size=5 face="verdana" style="color:#44822F">Sesión cerrada exitosamente</font></td>
	<td></td>
	</tr>
	<tr></tr><tr></tr><tr></tr><tr></tr><tr></tr>
	<tr></tr><tr></tr><tr></tr><tr></tr><tr></tr>
	<tr></tr><tr></tr><tr></tr><tr></tr><tr></tr>
	<tr></tr><tr></tr><tr></tr><tr></tr><tr></tr>
	<tr></tr><tr></tr><tr></tr><tr></tr><tr></tr>
	<tr></tr><tr></tr><tr></tr><tr></tr><tr></tr>
	<tr></tr><tr></tr><tr></tr><tr></tr><tr></tr>
</div>
	<div align="center">
	<form action=principal.php method=POST name="delet">
	<tr>
	<td ALIGN=center><a href="principal.php" target="_top"><font size=2 face="Arial Black" color="red">Volver a la pagina principal</font></a>
	</td>
	</tr>
	</form>
	</div>
</table>
	



</body>
</html>