<?php
session_start();
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>GRAFICOS</title>
</head>
<?php
	$_SESSION['anioget']=$_POST['year2'];
	$_SESSION['periodoget']=$_POST['period'];
?>
<FRAMESET cols="86%,14%">
<frame name="grafico" src="Graficosuptes.php">
<frame name="reportes" src="reporrte3.php">
</FRAMESET>

</html>