<?php
session_start();
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>INGRESAR</title>
</head>
<?php
	$_SESSION['anioget']=$_POST["year3"];
	$_SESSION['periodoget']=$_POST["period"];
?>
<FRAMESET cols="86%,14%">
<frame name="grafico" src="Graficosupimp.php">
<frame name="reportes" src="reporrte2.php">
</FRAMESET>

</html>