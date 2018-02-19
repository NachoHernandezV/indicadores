<?php
session_start();
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>INGRESAR</title>
</head>
<?php
	$_SESSION['proveedorget']=$_POST["proveedor2"];
	$_SESSION['productoget']=$_POST["producto2"];
	$_SESSION['aniioget']=$_POST["year4"];
	$_SESSION['periodoget']=$_POST["period"];
?>
<FRAMESET cols="86%,14%">
<frame name="grafico" src="graficosupgen.php">
<frame name="reportes" src="reporrte.php">
</FRAMESET>

</html>