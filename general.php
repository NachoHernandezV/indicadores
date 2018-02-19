<?php
session_start();
include("conect.php");
?>

<?php
if($salir2=="salir2")
{
	$_SESSION['general']="no";
}
if($_SESSION['general'] != "si") // MANDA A VENTANA DE VENTAS
{
	$_SESSION['general']="no";
	echo '<script>window.location="salir.php"</script>';
}
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Pirineos</title>
<style type="text/css">

<style>
  .transpa  {
    background-color: transparent;
    border: 1px solid #000000;
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
	padding:7px 14px;
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
<?php
///BLOQUE PARA CARGAR EL SEMAFORO

	$user="root";
	$pass="pirineos";
	$server="localhost";
	$bd="indicadores";
	//para php version nueva zona horaria
	date_default_timezone_set('America/Monterrey');

	$con=mysqli_connect($server,$user,$pass,$bd);
	///BLOQUE PARA CARGAR EL SEMAFORO

	//Almacen REFACCIONES
	//prumer tabla

	//Generar AÑO CUANDO CAMBIEN LOS AÑOS
		$yearactual=date("Y");
		$yearanterior=date('Y', strtotime('-1 year')) ;

		$sqlani="SELECT count(*) FROM a1_rot WHERE year1='".$yearanterior."'";
		$numanio=mysqli_query($con,$sqlani);
		mysqli_data_seek($numanio,0);
		$esdoce = mysqli_fetch_row($numanio);

		if($esdoce[0]== 12)
			$yearsem=date("Y");
		else
			$yearsem=$yearanterior;
	///

	$sqlmes1="SELECT count(*) as mes FROM a1_rot gt, mes m where gt.idmes=m.idmes and year1='".$yearsem."' ORDER BY gt.idmes DESC";
	$tabla1=mysqli_query($con,$sqlmes1);
	mysqli_data_seek($tabla1,0);
	$idmes1 = mysqli_fetch_row($tabla1);

	$sqlmesnombre="SELECT mes FROM `mes` where idmes=".$idmes1[0];
	$tablanombre1=mysqli_query($con,$sqlmesnombre);
	mysqli_data_seek($tablanombre1,0);
	$nombremes1 = mysqli_fetch_row($tablanombre1);

	$porcentaje1="select TRUNCATE((reals*100)/objetivo,2) as porciento from a1_rot t, mes m where t.idmes=m.idmes and t.year1='".$yearsem."' and t.idmes=".$idmes1[0];
	$tablapor5=mysqli_query($con,$porcentaje1);
	mysqli_data_seek($tablapor5,0);
	$porcentajefull1 = mysqli_fetch_row($tablapor5);



	if($porcentajefull1[0] >= 100){
	$_SESSION['nombresemaforo1']="SemVerde1.gif";
	$_SESSION['nombremes1']=$nombremes1[0];
	}

	if($porcentajefull1[0] >= 75 and $porcentajefull1[0] <= 99)
	{
	$_SESSION['nombresemaforo1']="SemAmarillo1.gif";
	$_SESSION['nombremes1']=$nombremes1[0];
	}

	if($porcentajefull1[0] <= 74 ){
	$_SESSION['nombresemaforo1']="SemRojo1.gif";
	$_SESSION['nombremes1']=$nombremes1[0];
	}

	//segunda tabla


	//Generar AÑO CUANDO CAMBIEN LOS AÑOS
		$yearactual=date("Y");
		$yearanterior=date('Y', strtotime('-1 year')) ;

		$sqlani="SELECT count(*) FROM a2_tiem WHERE year1='".$yearanterior."'";
		$numanio=mysqli_query($con,$sqlani);
		mysqli_data_seek($numanio,0);
		$esdoce = mysqli_fetch_row($numanio);

		if($esdoce[0]== 12)
			$yearsem=date("Y");
		else
			$yearsem=$yearanterior;
	///

	$sqlmes1="SELECT count(*) as mes FROM a2_tiem gt, mes m where gt.idmes=m.idmes and year1='".$yearsem."' ORDER BY gt.idmes DESC";
	$tabla1=mysqli_query($con,$sqlmes1);
	mysqli_data_seek($tabla1,0);
	$idmes1 = mysqli_fetch_row($tabla1);

	$sqlmesnombre="SELECT mes FROM `mes` where idmes=".$idmes1[0];
	$tablanombre1=mysqli_query($con,$sqlmesnombre);
	mysqli_data_seek($tablanombre1,0);
	$nombremes2 = mysqli_fetch_row($tablanombre1);

	$porcentaje1="select TRUNCATE((objetivo*100)/reals,2) as porciento from a2_tiem t, mes m where t.idmes=m.idmes and t.year1='".$yearsem."' and t.idmes=".$idmes1[0];
	$tablapor5=mysqli_query($con,$porcentaje1);
	mysqli_data_seek($tablapor5,0);
	$porcentajefull1 = mysqli_fetch_row($tablapor5);

	if($porcentajefull1[0] >= 100)
	{
	$_SESSION['nombresemaforo2']="SemVerde1.gif";
	$_SESSION['nombremes2']=$nombremes2[0];
	}


	if($porcentajefull1[0] >= 75 and $porcentajefull1[0] <= 99)
	{
	$_SESSION['nombresemaforo2']="SemAmarillo1.gif";
	$_SESSION['nombremes2']=$nombremes2[0];
	}


	if($porcentajefull1[0] <= 74 )
	{
	$_SESSION['nombresemaforo2']="SemRojo1.gif";
	$_SESSION['nombremes2']=$nombremes2[0];
	}





	//CUENTAS POR COBRAR
	//prumer tabla

		//Generar AÑO CUANDO CAMBIEN LOS AÑOS
		$yearactual=date("Y");
		$yearanterior=date('Y', strtotime('-1 year')) ;

		$sqlani="SELECT count(*) FROM cpc1_ind WHERE year1='".$yearanterior."'";
		$numanio=mysqli_query($con,$sqlani);
		mysqli_data_seek($numanio,0);
		$esdoce = mysqli_fetch_row($numanio);

		if($esdoce[0]== 12)
			$yearsem=date("Y");
		else
			$yearsem=$yearanterior;
	///

	$sqlmes1="SELECT count(*) as mes FROM cpc1_ind gt, mes m where gt.idmes=m.idmes and year1='".$yearsem."' ORDER BY gt.idmes DESC";
	$tabla1=mysqli_query($con,$sqlmes1);
	mysqli_data_seek($tabla1,0);
	$idmes1 = mysqli_fetch_row($tabla1);

	$sqlmesnombre="SELECT mes FROM `mes` where idmes=".$idmes1[0];
	$tablanombre1=mysqli_query($con,$sqlmesnombre);
	mysqli_data_seek($tablanombre1,0);
	$nombremes3 = mysqli_fetch_row($tablanombre1);

	$porcentaje1="select TRUNCATE((reals*100)/objetivo,2) as porciento from cpc1_ind t, mes m where t.idmes=m.idmes and t.year1='".$yearsem."' and t.idmes=".$idmes1[0];
	$tablapor5=mysqli_query($con,$porcentaje1);
	mysqli_data_seek($tablapor5,0);
	$porcentajefull1 = mysqli_fetch_row($tablapor5);


	if($porcentajefull1[0] >= 100){
	$_SESSION['nombresemaforo3']="SemVerde1.gif";
	$_SESSION['nombremes3']=$nombremes3[0];
	}

	if($porcentajefull1[0] >= 75 and $porcentajefull1[0] <= 99)
	{
	$_SESSION['nombresemaforo3']="SemAmarillo1.gif";
	$_SESSION['nombremes3']=$nombremes3[0];
	}

	if($porcentajefull1[0] <= 74 )
	{
	$_SESSION['nombresemaforo3']="SemRojo1.gif";
	$_SESSION['nombremes3']=$nombremes3[0];
	}

	//segunda tabla

	//Generar AÑO CUANDO CAMBIEN LOS AÑOS
		$yearactual=date("Y");
		$yearanterior=date('Y', strtotime('-1 year')) ;

		$sqlani="SELECT count(*) FROM cpc2_plaz WHERE year1='".$yearanterior."'";
		$numanio=mysqli_query($con,$sqlani);
		mysqli_data_seek($numanio,0);
		$esdoce = mysqli_fetch_row($numanio);

		if($esdoce[0]== 12)
			$yearsem=date("Y");
		else
			$yearsem=$yearanterior;
	///

	$sqlmes1="SELECT count(*) as mes FROM cpc2_plaz gt, mes m where gt.idmes=m.idmes and year1='".$yearsem."' ORDER BY gt.idmes DESC";
	$tabla1=mysqli_query($con,$sqlmes1);
	mysqli_data_seek($tabla1,0);
	$idmes1 = mysqli_fetch_row($tabla1);

	$sqlmesnombre="SELECT mes FROM `mes` where idmes=".$idmes1[0];
	$tablanombre1=mysqli_query($con,$sqlmesnombre);
	mysqli_data_seek($tablanombre1,0);
	$nombremes4 = mysqli_fetch_row($tablanombre1);

	$porcentaje1="select TRUNCATE((objetivo*100)/reals,2) as porciento from cpc2_plaz t, mes m where t.idmes=m.idmes and t.year1='".$yearsem."' and t.idmes=".$idmes1[0];
	$tablapor5=mysqli_query($con,$porcentaje1);
	mysqli_data_seek($tablapor5,0);
	$porcentajefull1 = mysqli_fetch_row($tablapor5);


	if($porcentajefull1[0] >= 100)
	{
	$_SESSION['nombresemaforo4']="SemVerde1.gif";
	$_SESSION['nombremes4']=$nombremes4[0];
	}

	if($porcentajefull1[0] >= 75 and $porcentajefull1[0] <= 99)
	{
	$_SESSION['nombresemaforo4']="SemAmarillo1.gif";
	$_SESSION['nombremes4']=$nombremes4[0];
	}

	if($porcentajefull1[0] <= 74 )
	{
	$_SESSION['nombresemaforo4']="SemRojo1.gif";
	$_SESSION['nombremes4']=$nombremes4[0];
	}


	//tercera tabla

		//Generar AÑO CUANDO CAMBIEN LOS AÑOS
		$yearactual=date("Y");
		$yearanterior=date('Y', strtotime('-1 year')) ;

		$sqlani="SELECT count(*) FROM cpc3_cart WHERE year1='".$yearanterior."'";
		$numanio=mysqli_query($con,$sqlani);
		mysqli_data_seek($numanio,0);
		$esdoce = mysqli_fetch_row($numanio);

		if($esdoce[0]== 12)
			$yearsem=date("Y");
		else
			$yearsem=$yearanterior;
	///
	$sqlmes1="SELECT count(*) as mes FROM cpc3_cart gt, mes m where gt.idmes=m.idmes and year1='".$yearsem."' ORDER BY gt.idmes DESC";
	$tabla1=mysqli_query($con,$sqlmes1);
	mysqli_data_seek($tabla1,0);
	$idmes1 = mysqli_fetch_row($tabla1);

	$sqlmesnombre="SELECT mes FROM `mes` where idmes=".$idmes1[0];
	$tablanombre1=mysqli_query($con,$sqlmesnombre);
	mysqli_data_seek($tablanombre1,0);
	$nombremes5 = mysqli_fetch_row($tablanombre1);

	$porcentaje1="select TRUNCATE((objetivo*100)/reals,2) as porciento from cpc3_cart t, mes m where t.idmes=m.idmes and t.year1='".$yearsem."' and t.idmes=".$idmes1[0];
	$tablapor5=mysqli_query($con,$porcentaje1);
	mysqli_data_seek($tablapor5,0);
	$porcentajefull1 = mysqli_fetch_row($tablapor5);

	if($porcentajefull1[0] >= 100)
	{
	$_SESSION['nombresemaforo5']="SemVerde1.gif";
	$_SESSION['nombremes5']=$nombremes5[0];
	}

	if($porcentajefull1[0] >= 75 and $porcentajefull1[0] <= 99)
	{
	$_SESSION['nombresemaforo5']="SemAmarillo1.gif";
	$_SESSION['nombremes5']=$nombremes5[0];
	}

	if($porcentajefull1[0] <= 74 )
	{
	$_SESSION['nombresemaforo5']="SemRojo1.gif";
	$_SESSION['nombremes5']=$nombremes5[0];
	}




	//CUENTAS POR PAGAR
	//prumer tabla

			//Generar AÑO CUANDO CAMBIEN LOS AÑOS
		$yearactual=date("Y");
		$yearanterior=date('Y', strtotime('-1 year')) ;

		$sqlani="SELECT count(*) FROM cpp1_plaz WHERE year1='".$yearanterior."'";
		$numanio=mysqli_query($con,$sqlani);
		mysqli_data_seek($numanio,0);
		$esdoce = mysqli_fetch_row($numanio);

		if($esdoce[0]== 12)
			$yearsem=date("Y");
		else
			$yearsem=$yearanterior;
	///

	$sqlmes1="SELECT count(*) as mes FROM cpp1_plaz gt, mes m where gt.idmes=m.idmes and year1='".$yearsem."' ORDER BY gt.idmes DESC";
	$tabla1=mysqli_query($con,$sqlmes1);
	mysqli_data_seek($tabla1,0);
	$idmes1 = mysqli_fetch_row($tabla1);

	$sqlmesnombre="SELECT mes FROM `mes` where idmes=".$idmes1[0];
	$tablanombre1=mysqli_query($con,$sqlmesnombre);
	mysqli_data_seek($tablanombre1,0);
	$nombremes6 = mysqli_fetch_row($tablanombre1);

	$porcentaje1="select TRUNCATE((reals*100)/objetivo,2) as porciento from cpp1_plaz t, mes m where t.idmes=m.idmes and t.year1='".$yearsem."' and t.idmes=".$idmes1[0];
	$tablapor5=mysqli_query($con,$porcentaje1);
	mysqli_data_seek($tablapor5,0);
	$porcentajefull1 = mysqli_fetch_row($tablapor5);


	if($porcentajefull1[0] >= 100)
	{
	$_SESSION['nombresemaforo6']="SemVerde1.gif";
	$_SESSION['nombremes6']=$nombremes6[0];
	}


	if($porcentajefull1[0] >= 75 and $porcentajefull1[0] <= 99)
	{
	$_SESSION['nombresemaforo6']="SemAmarillo1.gif";
	$_SESSION['nombremes6']=$nombremes6[0];
	}


	if($porcentajefull1[0] <= 74 )
	{
	$_SESSION['nombresemaforo6']="SemRojo1.gif";
	$_SESSION['nombremes6']=$nombremes6[0];
	}


	//segunda tabla

				//Generar AÑO CUANDO CAMBIEN LOS AÑOS
		$yearactual=date("Y");
		$yearanterior=date('Y', strtotime('-1 year')) ;

		$sqlani="SELECT count(*) FROM cpp2_ind WHERE year1='".$yearanterior."'";
		$numanio=mysqli_query($con,$sqlani);
		mysqli_data_seek($numanio,0);
		$esdoce = mysqli_fetch_row($numanio);

		if($esdoce[0]== 12)
			$yearsem=date("Y");
		else
			$yearsem=$yearanterior;
	///

	$sqlmes1="SELECT count(*) as mes FROM cpp2_ind gt, mes m where gt.idmes=m.idmes and year1='".$yearsem."' ORDER BY gt.idmes DESC";
	$tabla1=mysqli_query($con,$sqlmes1);
	mysqli_data_seek($tabla1,0);
	$idmes1 = mysqli_fetch_row($tabla1);

	$sqlmesnombre="SELECT mes FROM `mes` where idmes=".$idmes1[0];
	$tablanombre1=mysqli_query($con,$sqlmesnombre);
	mysqli_data_seek($tablanombre1,0);
	$nombremes7 = mysqli_fetch_row($tablanombre1);

	$porcentaje1="select TRUNCATE((objetivo*100)/reals,2) as porciento from cpp2_ind t, mes m where t.idmes=m.idmes and t.year1='".$yearsem."' and t.idmes=".$idmes1[0];
	$tablapor5=mysqli_query($con,$porcentaje1);
	mysqli_data_seek($tablapor5,0);
	$porcentajefull1 = mysqli_fetch_row($tablapor5);


	if($porcentajefull1[0] >= 100)
	{
	$_SESSION['nombresemaforo7']="SemVerde1.gif";
	$_SESSION['nombremes7']=$nombremes7[0];
	}


	if($porcentajefull1[0] >= 75 and $porcentajefull1[0] <= 99)
	{
	$_SESSION['nombresemaforo7']="SemAmarillo1.gif";
	$_SESSION['nombremes7']=$nombremes7[0];
	}

	if($porcentajefull1[0] <= 74 )
	{
	$_SESSION['nombresemaforo7']="SemRojo1.gif";
	$_SESSION['nombremes7']=$nombremes7[0];
	}


	//CEDII
	//primer tabla

	//Generar AÑO CUANDO CAMBIEN LOS AÑOS
		$yearactual=date("Y");
		$yearanterior=date('Y', strtotime('-1 year')) ;

		$sqlani="SELECT count(*) FROM ced1_rot WHERE year1='".$yearanterior."'";
		$numanio=mysqli_query($con,$sqlani);
		mysqli_data_seek($numanio,0);
		$esdoce = mysqli_fetch_row($numanio);

		if($esdoce[0]== 12)
			$yearsem=date("Y");
		else
			$yearsem=$yearanterior;
	///

	$sqlmes1="SELECT count(*) as mes FROM ced1_rot gt, mes m where gt.idmes=m.idmes and year1='".$yearsem."' ORDER BY gt.idmes DESC";
	$tabla1=mysqli_query($con,$sqlmes1);
	mysqli_data_seek($tabla1,0);
	$idmes1 = mysqli_fetch_row($tabla1);

	$sqlmesnombre="SELECT mes FROM `mes` where idmes=".$idmes1[0];
	$tablanombre1=mysqli_query($con,$sqlmesnombre);
	mysqli_data_seek($tablanombre1,0);
	$nombremes8 = mysqli_fetch_row($tablanombre1);

	$porcentaje1="select TRUNCATE((reals*100)/objetivo,2) as porciento from ced1_rot t, mes m where t.idmes=m.idmes and t.year1='".$yearsem."' and t.idmes=".$idmes1[0];
	$tablapor5=mysqli_query($con,$porcentaje1);
	mysqli_data_seek($tablapor5,0);
	$porcentajefull1 = mysqli_fetch_row($tablapor5);



	if($porcentajefull1[0] >= 100)
	{
	$_SESSION['nombresemaforo8']="SemVerde1.gif";
	$_SESSION['nombremes8']=$nombremes8[0];

	}

	if($porcentajefull1[0] >= 75 and $porcentajefull1[0] <= 99)
	{
	$_SESSION['nombresemaforo8']="SemAmarillo1.gif";
	$_SESSION['nombremes8']=$nombremes8[0];

	}


	if($porcentajefull1[0] <= 74 )
	{
	$_SESSION['nombresemaforo8']="SemRojo1.gif";
	$_SESSION['nombremes8']=$nombremes8[0];

	}


	//segunda tabla

		//Generar AÑO CUANDO CAMBIEN LOS AÑOS
		$yearactual=date("Y");
		$yearanterior=date('Y', strtotime('-1 year')) ;

		$sqlani="SELECT count(*) FROM ced2_tiem WHERE year1='".$yearanterior."'";
		$numanio=mysqli_query($con,$sqlani);
		mysqli_data_seek($numanio,0);
		$esdoce = mysqli_fetch_row($numanio);

		if($esdoce[0]== 12)
			$yearsem=date("Y");
		else
			$yearsem=$yearanterior;
	///
	$sqlmes1="SELECT count(*) as mes FROM ced2_tiem gt, mes m where gt.idmes=m.idmes and year1='".$yearsem."' ORDER BY gt.idmes DESC";
	$tabla1=mysqli_query($con,$sqlmes1);
	mysqli_data_seek($tabla1,0);
	$idmes1 = mysqli_fetch_row($tabla1);


	$sqlmesnombre="SELECT mes FROM `mes` where idmes=".$idmes1[0];
	$tablanombre1=mysqli_query($con,$sqlmesnombre);
	mysqli_data_seek($tablanombre1,0);
	$nombremes9 = mysqli_fetch_row($tablanombre1);

	$porcentaje1="select TRUNCATE((objetivo*100)/reals,2) as porciento from ced2_tiem t, mes m where t.idmes=m.idmes and t.year1='".$yearsem."' and t.idmes=".$idmes1[0];
	$tablapor5=mysqli_query($con,$porcentaje1);
	mysqli_data_seek($tablapor5,0);
	$porcentajefull1 = mysqli_fetch_row($tablapor5);


	if($porcentajefull1[0] >= 100)
	{
	$_SESSION['nombresemaforo9']="SemVerde1.gif";
	$_SESSION['nombremes9']=$nombremes9[0];
	}


	if($porcentajefull1[0] >= 75 and $porcentajefull1[0] <= 99)
	{
	$_SESSION['nombresemaforo9']="SemAmarillo1.gif";
	$_SESSION['nombremes9']=$nombremes9[0];
	}

	if($porcentajefull1[0] <= 74 )
	{
	$_SESSION['nombresemaforo9']="SemRojo1.gif";
	$_SESSION['nombremes9']=$nombremes9[0];
	}


	//tercera tabla

		//Generar AÑO CUANDO CAMBIEN LOS AÑOS
		$yearactual=date("Y");
		$yearanterior=date('Y', strtotime('-1 year')) ;

		$sqlani="SELECT count(*) FROM ced3_cicl WHERE year1='".$yearanterior."'";
		$numanio=mysqli_query($con,$sqlani);
		mysqli_data_seek($numanio,0);
		$esdoce = mysqli_fetch_row($numanio);

		if($esdoce[0]== 12)
			$yearsem=date("Y");
		else
			$yearsem=$yearanterior;
	///

	$sqlmes1="SELECT count(*) as mes FROM ced3_cicl gt, mes m where gt.idmes=m.idmes and year1='".$yearsem."' ORDER BY gt.idmes DESC";
	$tabla1=mysqli_query($con,$sqlmes1);
	mysqli_data_seek($tabla1,0);
	$idmes1 = mysqli_fetch_row($tabla1);

	$sqlmesnombre="SELECT mes FROM `mes` where idmes=".$idmes1[0];
	$tablanombre1=mysqli_query($con,$sqlmesnombre);
	mysqli_data_seek($tablanombre1,0);
	$nombremes10 = mysqli_fetch_row($tablanombre1);

	$porcentaje1="select TRUNCATE((objetivo*100)/reals,2) as porciento from ced3_cicl t, mes m where t.idmes=m.idmes and t.year1='".$yearsem."' and t.idmes=".$idmes1[0];
	$tablapor5=mysqli_query($con,$porcentaje1);
	mysqli_data_seek($tablapor5,0);
	$porcentajefull1 = mysqli_fetch_row($tablapor5);


	if($porcentajefull1[0] >= 100)
	{
	$_SESSION['nombresemaforo10']="SemVerde1.gif";
	$_SESSION['nombremes10']=$nombremes10[0];
	}

	if($porcentajefull1[0] >= 75 and $porcentajefull1[0] <= 99)
	{
	$_SESSION['nombresemaforo10']="SemAmarillo1.gif";
	$_SESSION['nombremes10']=$nombremes10[0];
	}

	if($porcentajefull1[0] <= 74 )
	{
	$_SESSION['nombresemaforo10']="SemRojo1.gif";
	$_SESSION['nombremes10']=$nombremes10[0];
	}



	//COMPRAS
	//primer tabla

		//Generar AÑO CUANDO CAMBIEN LOS AÑOS
		$yearactual=date("Y");
		$yearanterior=date('Y', strtotime('-1 year')) ;

		$sqlani="SELECT count(*) FROM com1_efic WHERE year1='".$yearanterior."'";
		$numanio=mysqli_query($con,$sqlani);
		mysqli_data_seek($numanio,0);
		$esdoce = mysqli_fetch_row($numanio);

		if($esdoce[0]== 12)
			$yearsem=date("Y");
		else
			$yearsem=$yearanterior;
	///

	$sqlmes1="SELECT count(*) as mes FROM com1_efic gt, mes m where gt.idmes=m.idmes and year1='".$yearsem."' ORDER BY gt.idmes DESC";
	$tabla1=mysqli_query($con,$sqlmes1);
	mysqli_data_seek($tabla1,0);
	$idmes1 = mysqli_fetch_row($tabla1);

	$sqlmesnombre="SELECT mes FROM `mes` where idmes=".$idmes1[0];
	$tablanombre1=mysqli_query($con,$sqlmesnombre);
	mysqli_data_seek($tablanombre1,0);
	$nombremes11 = mysqli_fetch_row($tablanombre1);

	$porcentaje1="select TRUNCATE((reals*100)/objetivo,2) as porciento from com1_efic t, mes m where t.idmes=m.idmes and t.year1='".$yearsem."' and t.idmes=".$idmes1[0];
	$tablapor5=mysqli_query($con,$porcentaje1);
	mysqli_data_seek($tablapor5,0);
	$porcentajefull1 = mysqli_fetch_row($tablapor5);


	if($porcentajefull1[0] >= 100)
	{
	$_SESSION['nombresemaforo11']="SemVerde1.gif";
	$_SESSION['nombremes11']=$nombremes11[0];
	}

	if($porcentajefull1[0] >= 75 and $porcentajefull1[0] <= 99)
	{
	$_SESSION['nombresemaforo11']="SemAmarillo1.gif";
	$_SESSION['nombremes11']=$nombremes11[0];
	}


	if($porcentajefull1[0] <= 74 )
	{
	$_SESSION['nombresemaforo11']="SemRojo1.gif";
	$_SESSION['nombremes11']=$nombremes11[0];
	}




	//ADMINISTRACION
	//prImer tabla

			//Generar AÑO CUANDO CAMBIEN LOS AÑOS
		$yearactual=date("Y");
		$yearanterior=date('Y', strtotime('-1 year')) ;

		$sqlani="SELECT count(*) FROM adm1_end WHERE year1='".$yearanterior."'";
		$numanio=mysqli_query($con,$sqlani);
		mysqli_data_seek($numanio,0);
		$esdoce = mysqli_fetch_row($numanio);

		if($esdoce[0]== 12)
			$yearsem=date("Y");
		else
			$yearsem=$yearanterior;
	///

	$sqlmes1="SELECT count(*) as mes FROM adm1_end gt, mes m where gt.idmes=m.idmes and year1='".$yearsem."' ORDER BY gt.idmes DESC";
	$tabla1=mysqli_query($con,$sqlmes1);
	mysqli_data_seek($tabla1,0);
	$idmes1 = mysqli_fetch_row($tabla1);

	$sqlmesnombre="SELECT mes FROM `mes` where idmes=".$idmes1[0];
	$tablanombre1=mysqli_query($con,$sqlmesnombre);
	mysqli_data_seek($tablanombre1,0);
	$nombremes12 = mysqli_fetch_row($tablanombre1);

	$porcentaje1="select TRUNCATE((objetivo*100)/reals,2) as porciento from adm1_end t, mes m where t.idmes=m.idmes and t.year1='".$yearsem."' and t.idmes=".$idmes1[0];
	$tablapor5=mysqli_query($con,$porcentaje1);
	mysqli_data_seek($tablapor5,0);
	$porcentajefull1 = mysqli_fetch_row($tablapor5);

	if($porcentajefull1[0] >= 100)
	{
	$_SESSION['nombresemaforo12']="SemVerde1.gif";
	$_SESSION['nombremes12']=$nombremes12[0];
	}

	if($porcentajefull1[0] >= 75 and $porcentajefull1[0] <= 99)
	{
	$_SESSION['nombresemaforo12']="SemAmarillo1.gif";
	$_SESSION['nombremes12']=$nombremes12[0];
	}

	if($porcentajefull1[0] <= 74 )
	{
	$_SESSION['nombresemaforo12']="SemRojo1.gif";
	$_SESSION['nombremes12']=$nombremes12[0];
	}

	//Segunda tabla

			//Generar AÑO CUANDO CAMBIEN LOS AÑOS
		$yearactual=date("Y");
		$yearanterior=date('Y', strtotime('-1 year')) ;

		$sqlani="SELECT count(*) FROM adm2_liq WHERE year1='".$yearanterior."'";
		$numanio=mysqli_query($con,$sqlani);
		mysqli_data_seek($numanio,0);
		$esdoce = mysqli_fetch_row($numanio);

		if($esdoce[0]== 12)
			$yearsem=date("Y");
		else
			$yearsem=$yearanterior;
	///
	$sqlmes2="SELECT count(*) as mes FROM adm2_liq gt, mes m where gt.idmes=m.idmes and year1='".$yearsem."' ORDER BY gt.idmes DESC";
	$tabla2=mysqli_query($con,$sqlmes2);
	mysqli_data_seek($tabla2,0);
	$idmes2 = mysqli_fetch_row($tabla2);

	$sqlmesnombre="SELECT mes FROM `mes` where idmes=".$idmes2[0];
	$tablanombre1=mysqli_query($con,$sqlmesnombre);
	mysqli_data_seek($tablanombre1,0);
	$nombremes13 = mysqli_fetch_row($tablanombre1);

	$porcentaje2="select TRUNCATE((objetivo*100)/reals,2) as porciento from adm2_liq t, mes m where t.idmes=m.idmes and t.year1='".$yearsem."' and t.idmes=".$idmes2[0];
	$tablapor5=mysqli_query($con,$porcentaje2);
	mysqli_data_seek($tablapor5,0);
	$porcentajefull2 = mysqli_fetch_row($tablapor5);

	if($porcentajefull2[0] >= 100)
	{
		$_SESSION['nombresemaforo13']="SemVerde1.gif";
		$_SESSION['nombremes13']=$nombremes13[0];
	}

	if($porcentajefull2[0] >= 75 and $porcentajefull2[0] <= 99)
	{
		$_SESSION['nombresemaforo13']="SemAmarillo1.gif";
		$_SESSION['nombremes13']=$nombremes13[0];
	}

	if($porcentajefull2[0] <= 74 )
	{
		$_SESSION['nombresemaforo13']="SemRojo1.gif";
		$_SESSION['nombremes13']=$nombremes13[0];
	}


	//TERCERA tabla

			//Generar AÑO CUANDO CAMBIEN LOS AÑOS
		$yearactual=date("Y");
		$yearanterior=date('Y', strtotime('-1 year')) ;

		$sqlani="SELECT count(*) FROM adm3_rent WHERE year1='".$yearanterior."'";
		$numanio=mysqli_query($con,$sqlani);
		mysqli_data_seek($numanio,0);
		$esdoce = mysqli_fetch_row($numanio);

		if($esdoce[0]== 12)
			$yearsem=date("Y");
		else
			$yearsem=$yearanterior;
		//

	$sqlmes3="SELECT count(*) as mes FROM adm3_rent gt, mes m where gt.idmes=m.idmes and year1='".$yearsem."' ORDER BY gt.idmes DESC";
	$tabla3=mysqli_query($con,$sqlmes3);
	mysqli_data_seek($tabla3,0);
	$idmes3 = mysqli_fetch_row($tabla3);

	$sqlmesnombre="SELECT mes FROM `mes` where idmes=".$idmes3[0];
	$tablanombre1=mysqli_query($con,$sqlmesnombre);
	mysqli_data_seek($tablanombre1,0);
	$nombremes14 = mysqli_fetch_row($tablanombre1);
	$_SESSION['nombremes14']=$nombremes14[0];

	$porcentaje3="select TRUNCATE((objetivo*100)/reals,2) as porciento from adm3_rent t, mes m where t.idmes=m.idmes and t.year1='".$yearsem."' and t.idmes=".$idmes3[0];
	$tablapor3=mysqli_query($con,$porcentaje3);
	mysqli_data_seek($tablapor3,0);
	$porcentajefull3 = mysqli_fetch_row($tablapor3);

	if($porcentajefull3[0] >= 100)
		$_SESSION['nombresemaforo14']="SemVerde1.gif";

	if($porcentajefull3[0] >= 75 and $porcentajefull3[0] <= 99)
		$_SESSION['nombresemaforo14']="SemAmarillo1.gif";


	if($porcentajefull3[0] <= 74 )
		$_SESSION['nombresemaforo14']="SemRojo1.gif";


	//Cuarta tabla

		//Generar AÑO CUANDO CAMBIEN LOS AÑOS
		$yearactual=date("Y");
		$yearanterior=date('Y', strtotime('-1 year')) ;

		$sqlani="SELECT count(*) FROM adm4_cap WHERE year1='".$yearanterior."'";
		$numanio=mysqli_query($con,$sqlani);
		mysqli_data_seek($numanio,0);
		$esdoce = mysqli_fetch_row($numanio);

		if($esdoce[0]== 12)
			$yearsem=date("Y");
		else
			$yearsem=$yearanterior;
		//

	$sqlmes4="SELECT count(*) as mes FROM adm4_cap gt, mes m where gt.idmes=m.idmes and year1='".$yearsem."' ORDER BY gt.idmes DESC";
	$tabla4=mysqli_query($con,$sqlmes4);
	mysqli_data_seek($tabla4,0);
	$idmes4 = mysqli_fetch_row($tabla4);

	$sqlmesnombre="SELECT mes FROM `mes` where idmes=".$idmes4[0];
	$tablanombre1=mysqli_query($con,$sqlmesnombre);
	mysqli_data_seek($tablanombre1,0);
	$nombremes15 = mysqli_fetch_row($tablanombre1);
	$_SESSION['nombremes15']=$nombremes15[0];

	$porcentaje4="select TRUNCATE((objetivo*100)/reals,2) as porciento from adm4_cap t, mes m where t.idmes=m.idmes and t.year1='".$yearsem."' and t.idmes=".$idmes4[0];
	$tablapor4=mysqli_query($con,$porcentaje4);
	mysqli_data_seek($tablapor4,0);
	$porcentajefull4 = mysqli_fetch_row($tablapor4);

	if($porcentajefull4[0] >= 100)
		$_SESSION['nombresemaforo15']="SemVerde1.gif";


	if($porcentajefull4[0] >= 75 and $porcentajefull4[0] <= 99)
		$_SESSION['nombresemaforo15']="SemAmarillo1.gif";

	if($porcentajefull4[0] <= 74 )
		$_SESSION['nombresemaforo15']="SemRojo1.gif";





	//Gestion de Personal
	//prumer tabla

		//Generar AÑO CUANDO CAMBIEN LOS AÑOS
		$yearactual=date("Y");
		$yearanterior=date('Y', strtotime('-1 year')) ;

		$sqlani="SELECT count(*) FROM gest1_tiem WHERE year1='".$yearanterior."'";
		$numanio=mysqli_query($con,$sqlani);
		mysqli_data_seek($numanio,0);
		$esdoce = mysqli_fetch_row($numanio);

		if($esdoce[0]== 12)
			$yearsem=date("Y");
		else
			$yearsem=$yearanterior;
		//

	$sqlmes1="SELECT count(*) as mes FROM gest1_tiem gt, mes m where gt.idmes=m.idmes and year1='".$yearsem."' ORDER BY gt.idmes DESC";
	$tabla1=mysqli_query($con,$sqlmes1);
	mysqli_data_seek($tabla1,0);
	$idmes1 = mysqli_fetch_row($tabla1);

	$sqlmesnombre="SELECT mes FROM `mes` where idmes=".$idmes1[0];
	$tablanombre1=mysqli_query($con,$sqlmesnombre);
	mysqli_data_seek($tablanombre1,0);
	$nombremes16 = mysqli_fetch_row($tablanombre1);
	$_SESSION['nombremes16']=$nombremes16[0];

	$porcentaje1="select TRUNCATE((objetivo*100)/(reals+ 0.01),2) as porciento from gest1_tiem t, mes m where t.idmes=m.idmes and t.year1='".$yearsem."' and t.idmes=".$idmes1[0];
	$tablapor5=mysqli_query($con,$porcentaje1);
	mysqli_data_seek($tablapor5,0);
	$porcentajefull1 = mysqli_fetch_row($tablapor5);

	if($porcentajefull1[0] >= 100)
	$_SESSION['nombresemaforo16']="SemVerde1.gif";

	if($porcentajefull1[0] >= 75 and $porcentajefull1[0] <= 99)
	$_SESSION['nombresemaforo16']="SemAmarillo1.gif";


	if($porcentajefull1[0] <= 74 )
	$_SESSION['nombresemaforo16']="SemRojo1.gif";


	//Segunda tabla

		//Generar AÑO CUANDO CAMBIEN LOS AÑOS
		$yearactual=date("Y");
		$yearanterior=date('Y', strtotime('-1 year')) ;

		$sqlani="SELECT count(*) FROM gest2_aus WHERE year1='".$yearanterior."'";
		$numanio=mysqli_query($con,$sqlani);
		mysqli_data_seek($numanio,0);
		$esdoce = mysqli_fetch_row($numanio);

		if($esdoce[0]== 12)
			$yearsem=date("Y");
		else
			$yearsem=$yearanterior;
		//

	$sqlmes2="SELECT count(*) as mes FROM gest2_aus gt, mes m where gt.idmes=m.idmes and year1='".$yearsem."' ORDER BY gt.idmes DESC";
	$tabla2=mysqli_query($con,$sqlmes2);
	mysqli_data_seek($tabla2,0);
	$idmes2 = mysqli_fetch_row($tabla2);

	$sqlmesnombre="SELECT mes FROM `mes` where idmes=".$idmes2[0];
	$tablanombre1=mysqli_query($con,$sqlmesnombre);
	mysqli_data_seek($tablanombre1,0);
	$nombremes17 = mysqli_fetch_row($tablanombre1);
	$_SESSION['nombremes17']=$nombremes17[0];

	$porcentaje2="select TRUNCATE((objetivo*100)/reals,2) as porciento from gest2_aus t, mes m where t.idmes=m.idmes and t.year1='".$yearsem."' and t.idmes=".$idmes2[0];
	$tablapor5=mysqli_query($con,$porcentaje2);
	mysqli_data_seek($tablapor5,0);
	$porcentajefull2 = mysqli_fetch_row($tablapor5);

	if($porcentajefull2[0] >= 100)
		$_SESSION['nombresemaforo17']="SemVerde1.gif";

	if($porcentajefull2[0] >= 75 and $porcentajefull2[0] <= 99)
		$_SESSION['nombresemaforo17']="SemAmarillo1.gif";

	if($porcentajefull2[0] <= 74 )
		$_SESSION['nombresemaforo17']="SemRojo1.gif";


	//TERCERA tabla

			//Generar AÑO CUANDO CAMBIEN LOS AÑOS
		$yearactual=date("Y");
		$yearanterior=date('Y', strtotime('-1 year')) ;

		$sqlani="SELECT count(*) FROM gest3_rot WHERE year1='".$yearanterior."'";
		$numanio=mysqli_query($con,$sqlani);
		mysqli_data_seek($numanio,0);
		$esdoce = mysqli_fetch_row($numanio);

		if($esdoce[0]== 12)
			$yearsem=date("Y");
		else
			$yearsem=$yearanterior;
		//

	$sqlmes3="SELECT count(*) as mes FROM gest3_rot gt, mes m where gt.idmes=m.idmes and year1='".$yearsem."' ORDER BY gt.idmes DESC";
	$tabla3=mysqli_query($con,$sqlmes3);
	mysqli_data_seek($tabla3,0);
	$idmes3 = mysqli_fetch_row($tabla3);

	$sqlmesnombre="SELECT mes FROM `mes` where idmes=".$idmes3[0];
	$tablanombre1=mysqli_query($con,$sqlmesnombre);
	mysqli_data_seek($tablanombre1,0);
	$nombremes18 = mysqli_fetch_row($tablanombre1);
	$_SESSION['nombremes18']=$nombremes18[0];

	$porcentaje3="select TRUNCATE((objetivo*100)/reals,2) as porciento from gest3_rot t, mes m where t.idmes=m.idmes and t.year1='".$yearsem."' and t.idmes=".$idmes3[0];
	$tablapor3=mysqli_query($con,$porcentaje3);
	mysqli_data_seek($tablapor3,0);
	$porcentajefull3 = mysqli_fetch_row($tablapor3);

	if($porcentajefull3[0] >= 100)
		$_SESSION['nombresemaforo18']="SemVerde1.gif";

	if($porcentajefull3[0] >= 75 and $porcentajefull3[0] <= 99)
		$_SESSION['nombresemaforo18']="SemAmarillo1.gif";


	if($porcentajefull3[0] <= 74 )
		$_SESSION['nombresemaforo18']="SemRojo1.gif";


	//Cuarta tabla

			//Generar AÑO CUANDO CAMBIEN LOS AÑOS
		$yearactual=date("Y");
		$yearanterior=date('Y', strtotime('-1 year')) ;

		$sqlani="SELECT count(*) FROM gest4_hor WHERE year1='".$yearanterior."'";
		$numanio=mysqli_query($con,$sqlani);
		mysqli_data_seek($numanio,0);
		$esdoce = mysqli_fetch_row($numanio);

		if($esdoce[0]== 12)
			$yearsem=date("Y");
		else
			$yearsem=$yearanterior;
		//

	$sqlmes4="SELECT count(*) as mes FROM gest4_hor gt, mes m where gt.idmes=m.idmes and year1='".$yearsem."' ORDER BY gt.idmes DESC";
	$tabla4=mysqli_query($con,$sqlmes4);
	mysqli_data_seek($tabla4,0);
	$idmes4 = mysqli_fetch_row($tabla4);

	$sqlmesnombre="SELECT mes FROM `mes` where idmes=".$idmes4[0];
	$tablanombre1=mysqli_query($con,$sqlmesnombre);
	mysqli_data_seek($tablanombre1,0);
	$nombremes19 = mysqli_fetch_row($tablanombre1);
	$_SESSION['nombremes19']=$nombremes19[0];

	$porcentaje4="select TRUNCATE((reals*100)/objetivo,2) as porciento from gest4_hor t, mes m where t.idmes=m.idmes and t.year1='".$yearsem."' and t.idmes=".$idmes4[0];
	$tablapor4=mysqli_query($con,$porcentaje4);
	mysqli_data_seek($tablapor4,0);
	$porcentajefull4 = mysqli_fetch_row($tablapor4);

	if($porcentajefull4[0] >= 100)
		$_SESSION['nombresemaforo19']="SemVerde1.gif";


	if($porcentajefull4[0] >= 75 and $porcentajefull4[0] <= 99)
		$_SESSION['nombresemaforo19']="SemAmarillo1.gif";

	if($porcentajefull4[0] <= 74 )
		$_SESSION['nombresemaforo19']="SemRojo1.gif";

	//Quinta tabla

			//Generar AÑO CUANDO CAMBIEN LOS AÑOS
		$yearactual=date("Y");
		$yearanterior=date('Y', strtotime('-1 year')) ;

		$sqlani="SELECT count(*) FROM gest5_gas WHERE year1='".$yearanterior."'";
		$numanio=mysqli_query($con,$sqlani);
		mysqli_data_seek($numanio,0);
		$esdoce = mysqli_fetch_row($numanio);

		if($esdoce[0]== 12)
			$yearsem=date("Y");
		else
			$yearsem=$yearanterior;
		//

	$sqlmes5="SELECT count(*) as mes FROM gest5_gas gt, mes m where gt.idmes=m.idmes and year1='".$yearsem."' ORDER BY gt.idmes DESC";
	$tabla5=mysqli_query($con,$sqlmes5);
	mysqli_data_seek($tabla5,0);
	$idmes5 = mysqli_fetch_row($tabla5);

	$sqlmesnombre="SELECT mes FROM `mes` where idmes=".$idmes5[0];
	$tablanombre1=mysqli_query($con,$sqlmesnombre);
	mysqli_data_seek($tablanombre1,0);
	$nombremes20 = mysqli_fetch_row($tablanombre1);
	$_SESSION['nombremes20']=$nombremes20[0];

	$porcentaje5="select TRUNCATE((reals*100)/objetivo,2) as porciento from gest5_gas t, mes m where t.idmes=m.idmes and t.year1='".$yearsem."' and t.idmes=".$idmes5[0];
	$tablapor5=mysqli_query($con,$porcentaje5);
	mysqli_data_seek($tablapor5,0);
	$porcentajefull5 = mysqli_fetch_row($tablapor5);


	if($porcentajefull5[0] >= 100)
		$_SESSION['nombresemaforo20']="SemVerde1.gif";

	if($porcentajefull5[0] >= 75 and $porcentajefull5[0] <= 99)
		$_SESSION['nombresemaforo20']="SemAmarillo1.gif";

	if($porcentajefull5[0] <= 74 )
		$_SESSION['nombresemaforo20']="SemRojo1.gif";




	//SEGURIDAD INDUSTRIAL
	//prumer tabla

			//Generar AÑO CUANDO CAMBIEN LOS AÑOS
		$yearactual=date("Y");
		$yearanterior=date('Y', strtotime('-1 year')) ;

		$sqlani="SELECT count(*) FROM seg1_ries WHERE year1='".$yearanterior."'";
		$numanio=mysqli_query($con,$sqlani);
		mysqli_data_seek($numanio,0);
		$esdoce = mysqli_fetch_row($numanio);

		if($esdoce[0]== 12)
			$yearsem=date("Y");
		else
			$yearsem=$yearanterior;
		//

	$sqlmes1="SELECT count(*) as mes FROM seg1_ries gt, mes m where gt.idmes=m.idmes and year1='".$yearsem."' ORDER BY gt.idmes DESC";
	$tabla1=mysqli_query($con,$sqlmes1);
	mysqli_data_seek($tabla1,0);
	$idmes1 = mysqli_fetch_row($tabla1);

	$sqlmesnombre="SELECT mes FROM `mes` where idmes=".$idmes1[0];
	$tablanombre1=mysqli_query($con,$sqlmesnombre);
	mysqli_data_seek($tablanombre1,0);
	$nombremes21 = mysqli_fetch_row($tablanombre1);
	$_SESSION['nombremes21']=$nombremes21[0];

	$porcentaje1="select TRUNCATE((objetivo*100)/reals,2) as porciento from seg1_ries  t, mes m where t.idmes=m.idmes and t.year1='".$yearsem."' and t.idmes=".$idmes1[0];
	$tablapor5=mysqli_query($con,$porcentaje1);
	mysqli_data_seek($tablapor5,0);
	$porcentajefull1 = mysqli_fetch_row($tablapor5);

	if($porcentajefull1[0] >= 100)
	$_SESSION['nombresemaforo21']="SemVerde1.gif";

	if($porcentajefull1[0] >= 75 and $porcentajefull1[0] <= 99)
	$_SESSION['nombresemaforo21']="SemAmarillo1.gif";


	if($porcentajefull1[0] <= 74 )
	$_SESSION['nombresemaforo21']="SemRojo1.gif";


	//Segunda tabla

			//Generar AÑO CUANDO CAMBIEN LOS AÑOS
		$yearactual=date("Y");
		$yearanterior=date('Y', strtotime('-1 year')) ;

		$sqlani="SELECT count(*) FROM seg2_acci WHERE year1='".$yearanterior."'";
		$numanio=mysqli_query($con,$sqlani);
		mysqli_data_seek($numanio,0);
		$esdoce = mysqli_fetch_row($numanio);

		if($esdoce[0]== 12)
			$yearsem=date("Y");
		else
			$yearsem=$yearanterior;
		//

	$sqlmes2="SELECT count(*) as mes FROM seg2_acci gt, mes m where gt.idmes=m.idmes and year1='".$yearsem."' ORDER BY gt.idmes DESC";
	$tabla2=mysqli_query($con,$sqlmes2);
	mysqli_data_seek($tabla2,0);
	$idmes2 = mysqli_fetch_row($tabla2);

	$sqlmesnombre="SELECT mes FROM `mes` where idmes=".$idmes2[0];
	$tablanombre1=mysqli_query($con,$sqlmesnombre);
	mysqli_data_seek($tablanombre1,0);
	$nombremes22 = mysqli_fetch_row($tablanombre1);
	$_SESSION['nombremes22']=$nombremes22[0];

	$porcentaje2="select TRUNCATE((objetivo*100)/reals,2) as porciento from seg2_acci t, mes m where t.idmes=m.idmes and t.year1='".$yearsem."' and t.idmes=".$idmes2[0];
	$tablapor5=mysqli_query($con,$porcentaje2);
	mysqli_data_seek($tablapor5,0);
	$porcentajefull2 = mysqli_fetch_row($tablapor5);

	if($porcentajefull2[0] >= 100)
		$_SESSION['nombresemaforo22']="SemVerde1.gif";

	if($porcentajefull2[0] >= 75 and $porcentajefull2[0] <= 99)
		$_SESSION['nombresemaforo22']="SemAmarillo1.gif";

	if($porcentajefull2[0] <= 74 )
		$_SESSION['nombresemaforo22']="SemRojo1.gif";


	//TERCERA tabla
				//Generar AÑO CUANDO CAMBIEN LOS AÑOS
		$yearactual=date("Y");
		$yearanterior=date('Y', strtotime('-1 year')) ;

		$sqlani="SELECT count(*) FROM seg3_prim WHERE year1='".$yearanterior."'";
		$numanio=mysqli_query($con,$sqlani);
		mysqli_data_seek($numanio,0);
		$esdoce = mysqli_fetch_row($numanio);

		if($esdoce[0]== 12)
			$yearsem=date("Y");
		else
			$yearsem=$yearanterior;
		//

	$sqlmes3="SELECT count(*) as mes FROM seg3_prim gt, mes m where gt.idmes=m.idmes and year1='".$yearsem."' ORDER BY gt.idmes DESC";
	$tabla3=mysqli_query($con,$sqlmes3);
	mysqli_data_seek($tabla3,0);
	$idmes3 = mysqli_fetch_row($tabla3);

	$sqlmesnombre="SELECT mes FROM `mes` where idmes=".$idmes3[0];
	$tablanombre1=mysqli_query($con,$sqlmesnombre);
	mysqli_data_seek($tablanombre1,0);
	$nombremes23 = mysqli_fetch_row($tablanombre1);
	$_SESSION['nombremes23']=$nombremes23[0];

	$porcentaje3="select TRUNCATE((objetivo*100)/reals,2) as porciento from seg3_prim t, mes m where t.idmes=m.idmes and t.year1='".$yearsem."' and t.idmes=".$idmes3[0];
	$tablapor3=mysqli_query($con,$porcentaje3);
	mysqli_data_seek($tablapor3,0);
	$porcentajefull3 = mysqli_fetch_row($tablapor3);

	if($porcentajefull3[0] >= 100)
		$_SESSION['nombresemaforo23']="SemVerde1.gif";

	if($porcentajefull3[0] >= 75 and $porcentajefull3[0] <= 99)
		$_SESSION['nombresemaforo23']="SemAmarillo1.gif";


	if($porcentajefull3[0] <= 74 )
		$_SESSION['nombresemaforo23']="SemRojo1.gif";



	//SISTEMAS
	//prumer tabla

	//Generar AÑO CUANDO CAMBIEN LOS AÑOS
		$yearactual=date("Y");
		$yearanterior=date('Y', strtotime('-1 year')) ;

		$sqlani="SELECT count(*) FROM sis1_efic WHERE year1='".$yearanterior."'";
		$numanio=mysqli_query($con,$sqlani);
		mysqli_data_seek($numanio,0);
		$esdoce = mysqli_fetch_row($numanio);

		if($esdoce[0]== 12)
			$yearsem=date("Y");
		else
			$yearsem=$yearanterior;
		//

	$sqlmes1="SELECT count(*) as mes FROM sis1_efic gt, mes m where gt.idmes=m.idmes and year1='".$yearsem."' ORDER BY gt.idmes DESC";
	$tabla1=mysqli_query($con,$sqlmes1);
	mysqli_data_seek($tabla1,0);
	$idmes1 = mysqli_fetch_row($tabla1);

	$sqlmesnombre="SELECT mes FROM `mes` where idmes=".$idmes1[0];
	$tablanombre1=mysqli_query($con,$sqlmesnombre);
	mysqli_data_seek($tablanombre1,0);
	$nombremes24 = mysqli_fetch_row($tablanombre1);
	$_SESSION['nombremes24']=$nombremes24[0];

	$porcentaje1="select TRUNCATE((reals*100)/objetivo,2) as porciento from sis1_efic t, mes m where t.idmes=m.idmes and t.year1='".$yearsem."' and t.idmes=".$idmes1[0];
	$tablapor5=mysqli_query($con,$porcentaje1);
	mysqli_data_seek($tablapor5,0);
	$porcentajefull1 = mysqli_fetch_row($tablapor5);

	if($porcentajefull1[0] >= 100)
	$_SESSION['nombresemaforo24']="SemVerde1.gif";

	if($porcentajefull1[0] >= 75 and $porcentajefull1[0] <= 99)
	$_SESSION['nombresemaforo24']="SemAmarillo1.gif";


	if($porcentajefull1[0] <= 74 )
	$_SESSION['nombresemaforo24']="SemRojo1.gif";


	//Segunda tabla

	//Generar AÑO CUANDO CAMBIEN LOS AÑOS
		$yearactual=date("Y");
		$yearanterior=date('Y', strtotime('-1 year')) ;

		$sqlani="SELECT count(*) FROM sis2_numserv WHERE year1='".$yearanterior."'";
		$numanio=mysqli_query($con,$sqlani);
		mysqli_data_seek($numanio,0);
		$esdoce = mysqli_fetch_row($numanio);

		if($esdoce[0]== 12)
			$yearsem=date("Y");
		else
			$yearsem=$yearanterior;
		//

	$sqlmes1="SELECT count(*) as mes FROM sis2_numserv gt, mes m where gt.idmes=m.idmes and year1='".$yearsem."' ORDER BY gt.idmes DESC";
	$tabla1=mysqli_query($con,$sqlmes1);
	mysqli_data_seek($tabla1,0);
	$idmes1 = mysqli_fetch_row($tabla1);

	$sqlmesnombre="SELECT mes FROM `mes` where idmes=".$idmes1[0];
	$tablanombre1=mysqli_query($con,$sqlmesnombre);
	mysqli_data_seek($tablanombre1,0);
	$nombremes25 = mysqli_fetch_row($tablanombre1);
	$_SESSION['nombremes25']=$nombremes25[0];

	$porcentaje1="select TRUNCATE((reals*100)/objetivo,2) as porciento from sis2_numserv t, mes m where t.idmes=m.idmes and t.year1='".$yearsem."' and t.idmes=".$idmes1[0];
	$tablapor5=mysqli_query($con,$porcentaje1);
	mysqli_data_seek($tablapor5,0);
	$porcentajefull1 = mysqli_fetch_row($tablapor5);

	if($porcentajefull1[0] >= 100)
	$_SESSION['nombresemaforo25']="SemVerde1.gif";

	if($porcentajefull1[0] >= 75 and $porcentajefull1[0] <= 99)
	$_SESSION['nombresemaforo25']="SemAmarillo1.gif";


	if($porcentajefull1[0] <= 74 )
	$_SESSION['nombresemaforo25']="SemRojo1.gif";


	//Tercera Tabla
	//Generar AÑO CUANDO CAMBIEN LOS AÑOS
		$yearactual=date("Y");
		$yearanterior=date('Y', strtotime('-1 year')) ;

		$sqlani="SELECT count(*) FROM sis3_horaslost WHERE year1='".$yearanterior."'";
		$numanio=mysqli_query($con,$sqlani);
		mysqli_data_seek($numanio,0);
		$esdoce = mysqli_fetch_row($numanio);

		if($esdoce[0]== 12)
			$yearsem=date("Y");
		else
			$yearsem=$yearanterior;
		//

	$sqlmes1="SELECT count(*) as mes FROM sis3_horaslost gt, mes m where gt.idmes=m.idmes and year1='".$yearsem."' ORDER BY gt.idmes DESC";
	$tabla1=mysqli_query($con,$sqlmes1);
	mysqli_data_seek($tabla1,0);
	$idmes1 = mysqli_fetch_row($tabla1);

	$sqlmesnombre="SELECT mes FROM `mes` where idmes=".$idmes1[0];
	$tablanombre1=mysqli_query($con,$sqlmesnombre);
	mysqli_data_seek($tablanombre1,0);
	$nombremes26 = mysqli_fetch_row($tablanombre1);
	$_SESSION['nombremes26']=$nombremes26[0];

	$porcentaje1="select TRUNCATE((objetivo*100)/reals,2) as porciento from sis3_horaslost t, mes m where t.idmes=m.idmes and t.year1='".$yearsem."' and t.idmes=".$idmes1[0];
	$tablapor5=mysqli_query($con,$porcentaje1);
	mysqli_data_seek($tablapor5,0);
	$porcentajefull1 = mysqli_fetch_row($tablapor5);

	if($porcentajefull1[0] >= 100)
	$_SESSION['nombresemaforo26']="SemVerde1.gif";

	if($porcentajefull1[0] >= 75 and $porcentajefull1[0] <= 99)
	$_SESSION['nombresemaforo26']="SemAmarillo1.gif";


	if($porcentajefull1[0] <= 74 )
	$_SESSION['nombresemaforo26']="SemRojo1.gif";

	///FIN DEL SEMAFORO
?>
<script src="jquery/jquerymin.js"></script>
	<script type="text/javascript">

	function mostrar()
		{
			//Objetivo menor a REAL
			var objetivo=parseFloat(document.getElementById('objetiv').value);
			var real= parseFloat(document.getElementById('pass').value);

			//dEPARTAMENTO ...inicio para calcular BANDERA
			var departament=parseInt(document.getElementById('proveedor').value);
			//var indicator=parseInt(document.getElementById('producto').value);
			var indicator=parseInt(document.getElementById('producto').value);
			var banderaobj=0;

					//Almacen de Refacciones
					if(departament== 1)
					{
							if(indicator== 1)
							{
								banderaobj=0;
							}
							if(indicator== 2)
							{
								banderaobj=1;
							}
					}

					//Cuentas Por Pagar
					if(departament==2)
					{
							if(indicator==5)
							{
								banderaobj=0;
							}

							if(indicator==6)
							{
								banderaobj=1;
							}
							if(indicator==7)
							{
								banderaobj=1;
							}
					}



					//Cuentas Por Pagar
					if(departament== 3 )
					{
							if(indicator==8)
							{
								banderaobj=0;
							}
							if(indicator==9)
							{
								banderaobj=1;
							}
					}

					//CEDI
					if(departament== 4 )
					{
							if(indicator==10)
							{
								banderaobj=0;
							}
							if(indicator==11)
							{
								banderaobj=1;
							}
							if(indicator==12)
							{
								banderaobj=1;
							}
					}

					//Gestion de personal
					if(departament == 6 )
					{
							if(indicator == 14)
							{
								banderaobj = 1;
							}
							if(indicator==15)
							{
								banderaobj=1;
							}
							if(indicator==16)
							{
								banderaobj=1;
							}
							if(indicator==17)
							{
								banderaobj=0;
							}
							if(indicator==18)
							{
								banderaobj=0;
							}
					}


					//Seguridad Industrial
					if(departament == 9)
					{
							if(indicator == 24)
							{
								banderaobj=1;
							}
							if(indicator == 25)
							{
								banderaobj=1;
							}
							if(indicator == 26)
							{
								banderaobj=1;
							}

					}

					//Compras
						if(departament==5)
					{
						if(indicator==13)
						{
							banderaobj=0;
						}
					}

					//Sistemas
						if(departament==10)
					{
						if(indicator==27)
							{
								banderaobj=0;
							}
						if(indicator==29)
							{
								banderaobj=0;
							}
						if(indicator==30)
							{
								banderaobj=1;
							}
					}



					//Administracion
					if(departament==7)
					{
						if(indicator==19)
						{
							banderaobj=1;
						}
						if(indicator==20)
						{
							banderaobj=0;
						}
						if(indicator==21)
						{
							banderaobj=0;
						}
						if(indicator==22)
						{
							banderaobj=0;
						}
					}



			//FIN DE LA BANDERA

			if( ( objetivo >= real && banderaobj == 1 ) || ( objetivo <= real && banderaobj == 0 )) //todo bien
			{
			document.getElementById('Registrar').disabled= false;
			document.getElementById('uno').style.display='none';
			document.getElementById('etiqueta').style.display='none';

			//document.getElementById('Registrar').style.background="#CEF6CE";
			document.getElementById('Registrar').className="botonverde";
			}
			////Objetivo MAYOR a REAL
			else//if(objetivo > real)
			{
				if(document.getElementById("caja").value.length == 0)
				{
					document.getElementById('Registrar').disabled= true;
					document.getElementById('Registrar').className="botongris";
					//document.getElementById('Registrar').style.background="#F2F2F2";
					document.getElementById('uno').style.display='block';
					document.getElementById('etiqueta').style.display='block';
				}
				else
				{
					document.getElementById('Registrar').disabled= false;
					//document.getElementById('Registrar').style.background="#CEF6CE";
					document.getElementById('Registrar').className="botonverde";
				}

			}

		}

	   //
		$("document").ready(function(){
			$("#proveedor").load("departamentogeneral.php");
		})

		$("document").ready(function(){
			$("#year2").load("mesescalcu3.php");
		})

		$("document").ready(function()
		{
			$("#year5").load("mesescalcu3.php");
		})

		$("document").ready(function(){
			$("#year1").load("arranqueyeargene.php");
		})

		$("document").ready(function(){
			$("#mes").load("arranqueindicador.php");
		})

		$("document").ready(function(){
			$("#objetiv").load("arranqueobjetivo.php");

		})



		$("document").ready(function()
		{
			//ESTA LINEA SE EJECUTA SOLO LA PRIMERA VEZ
				$("#producto").load("indicadorgeneral.php");


			//ESTA LINEA SE EJECUTA CUANDO SE SELECCIONA EL SELECT
				$("#producto").change(function()
				{
					//OBTENEMOS LA VARIABLE QUE VAMOS A MANDAR EN ESTE CASO SERIA
					//IDINDICADOR
					var id= $("#producto").val();

					//CAMBIAMOS EL MES CUANDO CAMBIEMOS EL INDICADOR
					$.get("prueba.php",{param2_id:id})
					.done(function(data)
					{
						$("#mes").html(data);

					})
					//CAMBIAMOS EL OBJETIVO CUANDO CAMBIE EL INDICADOR
					$.get("objetivo.php",{param2_id:id})
					.done(function(data)
					{
						$("#objetiv").html(data);
					})

					//CAMBIAMOS EL AÑO CUANDO CAMBIE EL INDICADOR
					$.get("aniocalcular.php",{param2_id:id})
					.done(function(data)
					{
						$("#year1").html(data);
					})

				})
			//
			var indk=1;

		})

		//FUNCION PARA EL SEMAFORO
		function cambia(src)
			{
					var indicator=parseInt(document.getElementById('producto').value);

					//PASAR
					var variable1="<?php echo $_SESSION['nombresemaforo1']; ?>";
					var variable2="<?php echo $_SESSION['nombresemaforo2']; ?>";
					var variable3="<?php echo $_SESSION['nombresemaforo3']; ?>";
					var variable4="<?php echo $_SESSION['nombresemaforo4']; ?>";
					var variable5="<?php echo $_SESSION['nombresemaforo5']; ?>";
					var variable6="<?php echo $_SESSION['nombresemaforo6']; ?>";
					var variable7="<?php echo $_SESSION['nombresemaforo7']; ?>";
					var variable8="<?php echo $_SESSION['nombresemaforo8']; ?>";
					var variable9="<?php echo $_SESSION['nombresemaforo9']; ?>";
					var variable10="<?php echo $_SESSION['nombresemaforo10']; ?>";
					var variable11="<?php echo $_SESSION['nombresemaforo11']; ?>";


					var variable12="<?php echo $_SESSION['nombresemaforo12']; ?>";
					var variable13="<?php echo $_SESSION['nombresemaforo13']; ?>";
					var variable14="<?php echo $_SESSION['nombresemaforo14']; ?>";
					var variable15="<?php echo $_SESSION['nombresemaforo15']; ?>";

					var variable16="<?php echo $_SESSION['nombresemaforo16']; ?>";
					var variable17="<?php echo $_SESSION['nombresemaforo17']; ?>";
					var variable18="<?php echo $_SESSION['nombresemaforo18']; ?>";
					var variable19="<?php echo $_SESSION['nombresemaforo19']; ?>";
					var variable20="<?php echo $_SESSION['nombresemaforo20']; ?>";

					var variable21="<?php echo $_SESSION['nombresemaforo21']; ?>";
					var variable22="<?php echo $_SESSION['nombresemaforo22']; ?>";
					var variable23="<?php echo $_SESSION['nombresemaforo23']; ?>";

					var variable24="<?php echo $_SESSION['nombresemaforo24']; ?>";
					var variable25="<?php echo $_SESSION['nombresemaforo25']; ?>";
					var variable26="<?php echo $_SESSION['nombresemaforo26']; ?>";

					//
					//VARIABLES DE MES
					var MES1="<?php echo $_SESSION['nombremes1']; ?>";
					var MES2="<?php echo $_SESSION['nombremes2']; ?>";

					var MES3="<?php echo $_SESSION['nombremes3']; ?>";
					var MES4="<?php echo $_SESSION['nombremes4']; ?>";
					var MES5="<?php echo $_SESSION['nombremes5']; ?>";

					var MES6="<?php echo $_SESSION['nombremes6']; ?>";
					var MES7="<?php echo $_SESSION['nombremes7']; ?>";

					var MES8="<?php echo $_SESSION['nombremes8']; ?>";
					var MES9="<?php echo $_SESSION['nombremes9']; ?>";
					var MES10="<?php echo $_SESSION['nombremes10']; ?>";

					var MES11="<?php echo $_SESSION['nombremes11']; ?>";
					var MES12="<?php echo $_SESSION['nombremes12']; ?>";
					var MES13="<?php echo $_SESSION['nombremes13']; ?>";

					var MES14="<?php echo $_SESSION['nombremes14']; ?>";
					var MES15="<?php echo $_SESSION['nombremes15']; ?>";
					var MES16="<?php echo $_SESSION['nombremes16']; ?>";

					var MES17="<?php echo $_SESSION['nombremes17']; ?>";
					var MES18="<?php echo $_SESSION['nombremes18']; ?>";
					var MES19="<?php echo $_SESSION['nombremes19']; ?>";

					var MES20="<?php echo $_SESSION['nombremes20']; ?>";
					var MES21="<?php echo $_SESSION['nombremes21']; ?>";
					var MES22="<?php echo $_SESSION['nombremes22']; ?>";

					var MES23="<?php echo $_SESSION['nombremes23']; ?>";

					var MES24="<?php echo $_SESSION['nombremes24']; ?>";
					var MES25="<?php echo $_SESSION['nombremes25']; ?>";
					var MES26="<?php echo $_SESSION['nombremes26']; ?>";




				//ALMACEN DE REFACCIONES
				if(indicator == 1 )
				{
					document.getElementById("ima").src=variable1;
					document.getElementById('areasemaforo').innerHTML = 'Rotacion de Inventarios';
					document.getElementById('messemaforo').innerHTML = MES1;

				}

				if(indicator == 2 )
				{
					document.getElementById("ima").src=variable2;
					document.getElementById('areasemaforo').innerHTML = 'Tiempo de permanencia de inventarios';
					document.getElementById('messemaforo').innerHTML = MES2;
				}

						//CUENTAS POR PAGAR
				if(indicator == 5 )
				{
				document.getElementById("ima").src=variable3;
					document.getElementById('areasemaforo').innerHTML = 'Indice de Rotacion de Cartera';
					document.getElementById('messemaforo').innerHTML = MES3;

				}

				if(indicator == 6 )
				{
				document.getElementById("ima").src=variable4;
					document.getElementById('areasemaforo').innerHTML = 'Plazo promedio de cobro';
					document.getElementById('messemaforo').innerHTML = MES4;

				}

				if(indicator == 7 )
				{
				document.getElementById("ima").src=variable5;
					document.getElementById('areasemaforo').innerHTML = 'Cartera vencida a mas de 120 dias';
					document.getElementById('messemaforo').innerHTML = MES5;

				}


				//CUENTAS POR COBRAR
				if(indicator == 8 )
				{
				document.getElementById("ima").src=variable6;
					document.getElementById('areasemaforo').innerHTML = 'Plazo promedio de pago sin trigos';
					document.getElementById('messemaforo').innerHTML = MES6;
				}

				if(indicator == 9 )
				{
				document.getElementById("ima").src=variable7;
					document.getElementById('areasemaforo').innerHTML = 'Indice de rotacion de cartera sin trigos';
					document.getElementById('messemaforo').innerHTML = MES7;
				}


				//Cedi
				if(indicator == 10 )
				{
					document.getElementById("ima").src=variable8;
					document.getElementById('areasemaforo').innerHTML = 'Rotacion de inventarios';
					document.getElementById('messemaforo').innerHTML = MES8;
				}

				if(indicator == 11 )
				{
				document.getElementById("ima").src=variable9;
					document.getElementById('areasemaforo').innerHTML = 'Tiempo de permanencia de inventarios';
					document.getElementById('messemaforo').innerHTML = MES9;
				}

				if(indicator == 12 )
				{
				document.getElementById("ima").src=variable10;
					document.getElementById('areasemaforo').innerHTML = 'Ciclo operacional';
					document.getElementById('messemaforo').innerHTML = MES10;
				}


				//Compras
				if(indicator == 13 )
				{
					document.getElementById("ima").src=variable11;
					document.getElementById('areasemaforo').innerHTML = 'Eficiencia de Sistemas';
					document.getElementById('messemaforo').innerHTML = MES11;
				}

				//PARA GESTION DE PERSONAL

				if(indicator == 14 )
				{
					document.getElementById("ima").src=variable16;
					document.getElementById('areasemaforo').innerHTML = 'Tiempo Extra';
					document.getElementById('messemaforo').innerHTML = MES16;
				}

				if(indicator == 15 )
				{
					document.getElementById("ima").src=variable17;
					document.getElementById('areasemaforo').innerHTML = 'Ausentismo';
					document.getElementById('messemaforo').innerHTML = MES17;
				}

				if(indicator == 16 )
				{
					document.getElementById("ima").src=variable18;
					document.getElementById('areasemaforo').innerHTML = 'Rotacion de personal';
					document.getElementById('messemaforo').innerHTML = MES18;
				}

				if(indicator == 17 )
				{
					document.getElementById("ima").src=variable19;
					document.getElementById('areasemaforo').innerHTML = 'Horas de capacitacion';
					document.getElementById('messemaforo').innerHTML = MES19;
				}

				if(indicator == 18 )
				{
					document.getElementById("ima").src=variable20;
					document.getElementById('areasemaforo').innerHTML = 'Gastos de capacitacion';
					document.getElementById('messemaforo').innerHTML = MES20;
				}



				//ADMINISTRACION
				if(indicator == 19 )
				{
					document.getElementById("ima").src=variable12;
					document.getElementById('areasemaforo').innerHTML = 'Endeudamiento';
					document.getElementById('messemaforo').innerHTML = MES12;
				}

				if(indicator == 20 )
				{
					document.getElementById("ima").src=variable13;
					document.getElementById('areasemaforo').innerHTML = 'Liquidez';
					document.getElementById('messemaforo').innerHTML = MES13;
				}

				if(indicator == 21 )
				{
					document.getElementById("ima").src=variable14;
					document.getElementById('areasemaforo').innerHTML = 'Rentabilidad';
					document.getElementById('messemaforo').innerHTML = MES14;
				}

				if(indicator == 22 )
				{
					document.getElementById("ima").src=variable15;
					document.getElementById('areasemaforo').innerHTML = 'Capital de trabajo';
					document.getElementById('messemaforo').innerHTML = MES15;
				}


				//SEGURIDAD INDUSTRIAL
				if(indicator == 24 )
				{
					document.getElementById("ima").src=variable21;
					document.getElementById('areasemaforo').innerHTML = 'Indice de riesgo';
					document.getElementById('messemaforo').innerHTML = MES21;
				}

				if(indicator == 25 )
				{
					document.getElementById("ima").src=variable22;
					document.getElementById('areasemaforo').innerHTML = 'Indice de accidentabilidad';
					document.getElementById('messemaforo').innerHTML = MES22;
				}

				if(indicator == 26 )
				{
					document.getElementById("ima").src=variable23;
					document.getElementById('areasemaforo').innerHTML = 'Prima de riesgo';
					document.getElementById('messemaforo').innerHTML = MES23;
				}


				//Sistemas
				if(indicator == 27 )
				{
					document.getElementById("ima").src=variable24;
					document.getElementById('areasemaforo').innerHTML = 'Eficiencia de sistemas';
					document.getElementById('messemaforo').innerHTML = MES24;
				}

				//Sistemas
				if(indicator == 29 )
				{
					document.getElementById("ima").src=variable25;
					document.getElementById('areasemaforo').innerHTML = 'Numero de Servicios';
					document.getElementById('messemaforo').innerHTML = MES25;
				}

				//Sistemas
				if(indicator == 30 )
				{
					document.getElementById("ima").src=variable26;
					document.getElementById('areasemaforo').innerHTML = 'Horas perdidas de red';
					document.getElementById('messemaforo').innerHTML = MES26;
				}

			}
			//FIN DEL SEMAFORO

	</script>

<script src="jquery/jquerymin.js"></script>
	<script type="text/javascript">
		$("document").ready(function(){
			$("#proveedor2").load("departamentogeneral2.php");
		})

		$("document").ready(function()
		{
			$("#producto2").load("indicadorgeneral2.php");
		})
	</script>

</head>
<body background="background.jpg">


<TABLE BORDER=0 WIDTH=100%>
	<TD align="left" valign="top" WIDTH=60%>
		<input title="actualz" src="log4.png" type="image" name="actualz" width="190" height="130" />
	</TD>
	<?php
	if ($_SESSION['clave'] == 1){
		 $_SESSION['arranquesemaforo']=$_SESSION['nombresemaforo1'];
		 $_SESSION['areasem']= 'Rotacion de Inventarios';
		 $_SESSION['nombremes']=$_SESSION['nombremes1'];
	}


	if ($_SESSION['clave'] == 2)
	{
		 $_SESSION['arranquesemaforo']=$_SESSION['nombresemaforo3'];
			$_SESSION['areasem']= 'Indice de rotacion de cartera';
		 $_SESSION['nombremes']=$_SESSION['nombremes3'];
	}

	if ($_SESSION['clave'] == 3)
	{
		 $_SESSION['arranquesemaforo']=$_SESSION['nombresemaforo6'];
		 $_SESSION['areasem']= 'Plazo promedio de pago sin trigos';
		 $_SESSION['nombremes']=$_SESSION['nombremes6'];

	}

	if ($_SESSION['clave'] == 4)
	{
		 $_SESSION['arranquesemaforo']=$_SESSION['nombresemaforo8'];
		 $_SESSION['areasem']= 'Rotacion de inventarios';
		 $_SESSION['nombremes']=$_SESSION['nombremes8'];
	}

	if ($_SESSION['clave'] == 5)
	{
		 $_SESSION['arranquesemaforo']=$_SESSION['nombresemaforo11'];
		 $_SESSION['areasem']= 'Eficiencia de Compras';
		 $_SESSION['nombremes']=$_SESSION['nombremes11'];
	}

	if ($_SESSION['clave'] == 6)
	{
		 $_SESSION['arranquesemaforo']=$_SESSION['nombresemaforo16'];
		 $_SESSION['areasem']= 'Tiempo Extra';
		 $_SESSION['nombremes']=$_SESSION['nombremes16'];
	}

	 if ($_SESSION['clave'] == 7)
	 {
		 $_SESSION['arranquesemaforo']=$_SESSION['nombresemaforo12'];
		 $_SESSION['areasem']= 'Endeudamiento';
		 $_SESSION['nombremes']=$_SESSION['nombremes12'];
	 }

	if ($_SESSION['clave'] == 9)
	{
		 $_SESSION['arranquesemaforo']=$_SESSION['nombresemaforo21'];
		 $_SESSION['areasem']= 'Indice de Riesgo';
		 $_SESSION['nombremes']=$_SESSION['nombremes21'];
	}

	if ($_SESSION['clave'] == 10)
	{
		 $_SESSION['arranquesemaforo']=$_SESSION['nombresemaforo24'];
		 $_SESSION['areasem']= 'Eficiencia de Sistemas';
		 $_SESSION['nombremes']=$_SESSION['nombremes24'];
	}


	?>
	<TD align="CENTER" valign="top" WIDTH=20%>

		<label id="areasemaforo"><?php echo $_SESSION['areasem'];?></label></BR>
		<img id='ima' src="<?php echo $_SESSION['arranquesemaforo'];?>" width='100' height='60' /></BR>
		<label id="messemaforo"><?php echo $_SESSION['nombremes'];?></label></BR>
	</TD>

	<TD align="right" valign="top" WIDTH=10%>
		<form action=salir.php method=POST name="delet">
		<input type="hidden" name="salir2" value=salir2 >
		<input type="hidden" name="salir" value="no" >
		<input title="actualz" src="<?php echo $_SESSION['foto']?>" type="image" name="actualz" width="90" height="90" />
		<font size=4.5 face="Arial Black" style="color:#000"></font>
		</br>
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
	<td colspan="2" valign="middle" ALIGN=CENTER><font size=4.5 face="Arial Black" style="color:#000">&nbsp&nbsp</font></td>
	</tr>

    <tr>
	<FORM ACTION=general.php METHOD=post name="Actualiz" id="Actualiz">
	<td><input title="actualz" alt=" conton comprar " src="act.png" type="image" name="actualz" width="45" height="40" />
	</FORM></td>


    <td  align=RIGHT><font size=2.5 face="Arial Black">Para buscar algun indicador</font>
	</td>
	<td>
	<input type="submit" value="Buscar" class="botonbuscar" width="70" height="40" onclick="window.open('buscarp.php','nuevaVentana','width=500, height=700')" />
	</td>

	</TR>
</TABLE></div><br>



<?php
//include("conect.php");
//$link=Conectarse();
		$user="root";
		$pass="pirineos";
		$server="localhost";
		$bd="indicadores";
		$link=mysqli_connect($server,$user,$pass,$bd);

$usuario=$user;
$contrasena=$pass;
$departamento=$departamento;

//para php version nueva zona horaria
date_default_timezone_set('America/Monterrey');

if($salir == "salir")
{

echo '<script>window.location="salir.php"</script>';
}


//ADQUIRIR LOS DATOS DEL FOMULARIO PARA INSERTAR
$proveedor=$_POST['proveedor'];
$producto=$_POST['producto'];
$objetiv=$_POST['objetiv'];
$pass=$_POST['pass'];
$mes=$_POST['mes'];

//TEMPORAL 6
$yearid=$_POST['year1'];
//$year1='2016';

//obtener EL NOMBRE DE objetivo
	$query7=mysqli_query($link,"SELECT * FROM anios where idanio='".$yearid."'");
	mysqli_data_seek($query7,0);
    $nombreyear = mysqli_fetch_row($query7);
	$year1=$nombreyear[1];

$caja=$_POST['caja'];
$Registrar=$_POST['Registrar'];
//
if(empty($caja))
$caja=' ';

if($Registrar=="Registrar")
{
	$mesnum=0;
	if($user > $pass and empty($caja))
	{

	}
	else
	{

	$mesnum=$mes;
	//obtener EL NOMBRE DE DEPARTAMENTO Y EL INDICADOR
	$query=mysqli_query($link,"Select * from selectdepartamento where iddepartamento='".$proveedor."'");
	mysqli_data_seek($query,0);
    $nombredepartamento = mysqli_fetch_row($query);

	$query2=mysqli_query($link,"Select * from selectindicador where idindicador='".$producto."'");
	mysqli_data_seek($query2,0);
    $nombreindicador = mysqli_fetch_row($query2);
	///////////////

	//obtener EL NOMBRE DE objetivo
	$query3=mysqli_query($link,"Select * from objetivos where objetivo='".$objetiv."'");
	mysqli_data_seek($query3,0);
    $nombreobjetivo = mysqli_fetch_row($query3);
	$objetivo=$nombreobjetivo[1];


	//Almacen de Refacciones
	if($nombredepartamento[1]=="Almacen de Refacciones")
	{
		//Repetido para ROTACION DE INVENTARIOS
		$consultarep="SELECT COUNT( * ) FROM  a1_rot WHERE idmes ='$mes' AND year1='$year1'";
		$REP=mysqli_query($link,$consultarep);
		mysqli_data_seek($REP,0);
		$repetido = mysqli_fetch_row($REP);

		$consultarep2="SELECT COUNT( * ) FROM  a2_tiem WHERE idmes ='$mes' AND year1='$year1'";
		$REP2=mysqli_query($link,$consultarep2);
		mysqli_data_seek($REP2,0);
		$repetido2 = mysqli_fetch_row($REP2);

		if($repetido[0]==0)
		{
			if($nombreindicador[1]=="Rotacion de inventarios")
			{
				$sqlz="INSERT INTO a1_rot (idmes,objetivo,reals,year1,nota) VALUES ('$mes','$objetivo','$pass','$year1','$caja')";
				mysqli_query($link,$sqlz);
			}

		}

		if($repetido2[0]==0)
		{
			if($nombreindicador[1]=="Tiempo de permanencia de inventarios")
			{
				$sqlz="INSERT INTO a2_tiem (idmes,objetivo,reals,year1,nota) VALUES ('$mes','$objetivo','$pass','$year1','$caja')";
				mysqli_query($link,$sqlz);
			}

		}
	}

	//Cuentas Por Pagar
	if($nombredepartamento[1]=="Cuentas Por Cobrar")
	{
		//Repetido 1 PARA Indice de rotacion de cartera
		$consultarep="SELECT COUNT( * ) FROM  cpc1_ind WHERE idmes ='$mes' AND year1='$year1'";
		$REP=mysqli_query($link,$consultarep);
		mysqli_data_seek($REP,0);
		$repetido = mysqli_fetch_row($REP);

		//Repetido 2
		$consultarep2="SELECT COUNT( * ) FROM  cpc2_plaz WHERE idmes ='$mes' AND year1='$year1'";
		$REP2=mysqli_query($link,$consultarep2);
		mysqli_data_seek($REP2,0);
		$repetido2 = mysqli_fetch_row($REP2);

		//Repetido 3
		$consultarep3="SELECT COUNT( * ) FROM  cpc3_cart WHERE idmes ='$mes' AND year1='$year1'";
		$REP3=mysqli_query($link,$consultarep3);
		mysqli_data_seek($REP3,0);
		$repetido3 = mysqli_fetch_row($REP3);

		if($repetido[0]==0)
		{
			if($nombreindicador[1]=="Indice de rotacion de cartera")
			{
				$sqlz="INSERT INTO cpc1_ind (idmes,objetivo,reals,year1,nota) VALUES ('$mes','$objetivo','$pass','$year1','$caja')";
				mysqli_query($link,$sqlz);
			}
		}
		if($repetido2[0]==0)
		{
			if($nombreindicador[1]=="Plazo promedio de cobro")
			{
				$sqlz="INSERT INTO cpc2_plaz (idmes,objetivo,reals,year1,nota) VALUES ('$mes','$objetivo','$pass','$year1','$caja')";
				mysqli_query($link,$sqlz);
			}
		}
		if($repetido3[0]==0)
		{
			if($nombreindicador[1]=="Cartera vencida a mas de 120 dias")
			{
				$sqlz="INSERT INTO cpc3_cart (idmes,objetivo,reals,year1,nota) VALUES ('$mes','$objetivo','$pass','$year1','$caja')";
				mysqli_query($link,$sqlz);
			}
		}
	}



	//Cuentas Por Pagar
	if($nombredepartamento[1]=="Cuentas Por Pagar")
	{
		//Repetido 1 Plazo promedio de pago sin trigos
		$consultarep="SELECT COUNT( * ) FROM  cpp1_plaz WHERE idmes ='$mes' AND year1='$year1'";
		$REP=mysqli_query($link,$consultarep);
		mysqli_data_seek($REP,0);
		$repetido = mysqli_fetch_row($REP);

		//Repetido 2 Indice de rotacion de cartera sin trigos
		$consultarep2="SELECT COUNT( * ) FROM  cpp2_ind WHERE idmes ='$mes' AND year1='$year1'";
		$REP2=mysqli_query($link,$consultarep2);
		mysqli_data_seek($REP2,0);
		$repetido2 = mysqli_fetch_row($REP2);

		if($repetido[0]==0)
		{
			if($nombreindicador[1]=="Plazo promedio de pago sin trigos")
			{
				$sqlz="INSERT INTO cpp1_plaz (idmes,objetivo,reals,year1,nota) VALUES ('$mes','$objetivo','$pass','$year1','$caja')";
				mysqli_query($link,$sqlz);
			}
		}
		if($repetido2[0]==0)
		{
			if($nombreindicador[1]=="Indice de rotacion de cartera sin trigos")
			{
				$sqlz="INSERT INTO cpp2_ind (idmes,objetivo,reals,year1,nota) VALUES ('$mes','$objetivo','$pass','$year1','$caja')";
				mysqli_query($link,$sqlz);
			}
		}

	}


	//CEDI
	if($nombredepartamento[1]=="Cedi")
	{
		//Repetido 1 Plazo promedio de pago sin trigos
		$consultarep="SELECT COUNT( * ) FROM  ced1_rot WHERE idmes ='$mes' AND year1='$year1'";
		$REP=mysqli_query($link,$consultarep);
		mysqli_data_seek($REP,0);
		$repetido = mysqli_fetch_row($REP);

		//Repetido 1 Plazo promedio de pago sin trigos
		$consultarep2="SELECT COUNT( * ) FROM  ced2_tiem WHERE idmes ='$mes' AND year1='$year1'";
		$REP2=mysqli_query($link,$consultarep2);
		mysqli_data_seek($REP2,0);
		$repetido2 = mysqli_fetch_row($REP2);

		//Repetido 1 Plazo promedio de pago sin trigos
		$consultarep3="SELECT COUNT( * ) FROM  ced3_cicl WHERE idmes ='$mes' AND year1='$year1'";
		$REP3=mysqli_query($link,$consultarep3);
		mysqli_data_seek($REP3,0);
		$repetido3 = mysqli_fetch_row($REP3);

		if($repetido[0]==0)
		{
			if($nombreindicador[1]=="Rotacion de inventarios")
			{
				$sqlz="INSERT INTO ced1_rot (idmes,objetivo,reals,year1,nota) VALUES ('$mes','$objetivo','$pass','$year1','$caja')";
				mysqli_query($link,$sqlz);
			}
		}
		if($repetido2[0]==0)
		{
			if($nombreindicador[1]=="Tiempo de permanencia de inventarios")
			{
				$sqlz="INSERT INTO ced2_tiem (idmes,objetivo,reals,year1,nota) VALUES ('$mes','$objetivo','$pass','$year1','$caja')";
				mysqli_query($link,$sqlz);
			}
		}
		if($repetido3[0]==0)
		{
			if($nombreindicador[1]=="Ciclo operacional")
			{
				$sqlz="INSERT INTO ced3_cicl (idmes,objetivo,reals,year1,nota) VALUES ('$mes','$objetivo','$pass','$year1','$caja')";
				mysqli_query($link,$sqlz);
			}
		}

	}



	//Gestion de personal
	if($nombredepartamento[1]=="Gestion de Personal")
	{
		//Repetido 1 Plazo promedio de pago sin trigos
		$consultarep="SELECT COUNT( * ) FROM  gest1_tiem WHERE idmes ='$mes' AND year1='$year1'";
		$REP=mysqli_query($link,$consultarep);
		mysqli_data_seek($REP,0);
		$repetido = mysqli_fetch_row($REP);

		//Repetido 2 Plazo promedio de pago sin trigos
		$consultarep2="SELECT COUNT( * ) FROM  gest2_aus WHERE idmes ='$mes' AND year1='$year1'";
		$REP2=mysqli_query($link,$consultarep2);
		mysqli_data_seek($REP2,0);
		$repetido2 = mysqli_fetch_row($REP2);

		//Repetido 3 Plazo promedio de pago sin trigos
		$consultarep3="SELECT COUNT( * ) FROM  gest3_rot WHERE idmes ='$mes' AND year1='$year1'";
		$REP3=mysqli_query($link,$consultarep3);
		mysqli_data_seek($REP3,0);
		$repetido3 = mysqli_fetch_row($REP3);

		//Repetido 4 Plazo promedio de pago sin trigos
		$consultarep4="SELECT COUNT( * ) FROM  gest4_hor WHERE idmes ='$mes' AND year1='$year1'";
		$REP4=mysqli_query($link,$consultarep4);
		mysqli_data_seek($REP4,0);
		$repetido4 = mysqli_fetch_row($REP4);

		//Repetido 5 Plazo promedio de pago sin trigos
		$consultarep5="SELECT COUNT( * ) FROM gest5_gas WHERE idmes ='$mes' AND year1='$year1'";
		$REP5=mysqli_query($link,$consultarep5);
		mysqli_data_seek($REP5,0);
		$repetido5 = mysqli_fetch_row($REP5);

		if($repetido[0]==0)
		{
			if($nombreindicador[1]=="Tiempo extra")
			{
				$sqlz="INSERT INTO gest1_tiem (idmes,objetivo,reals,year1,nota) VALUES ('$mes','$objetivo','$pass','$year1','$caja')";
				mysqli_query($link,$sqlz);
			}
		}
		if($repetido2[0]==0)
		{
			if($nombreindicador[1]=="Ausentismo")
			{
				$sqlz="INSERT INTO gest2_aus (idmes,objetivo,reals,year1,nota) VALUES ('$mes','$objetivo','$pass','$year1','$caja')";
				mysqli_query($link,$sqlz);
			}
		}
		if($repetido3[0]==0)
		{
			if($nombreindicador[1]=="Rotacion de personal")
			{
				$sqlz="INSERT INTO gest3_rot (idmes,objetivo,reals,year1,nota) VALUES ('$mes','$objetivo','$pass','$year1','$caja')";
				mysqli_query($link,$sqlz);
			}
		}
		if($repetido4[0]==0)
		{
			if($nombreindicador[1]=="Horas de capacitacion")
			{
				$sqlz="INSERT INTO gest4_hor (idmes,objetivo,reals,year1,nota) VALUES ('$mes','$objetivo','$pass','$year1','$caja')";
				mysqli_query($link,$sqlz);
			}
		}
		if($repetido5[0]==0)
		{
			if($nombreindicador[1]=="Gastos de capacitacion")
			{
				$sqlz="INSERT INTO gest5_gas (idmes,objetivo,reals,year1,nota) VALUES ('$mes','$objetivo','$pass','$year1','$caja')";
				mysqli_query($link,$sqlz);
			}
		}
	}


	//Seguridad Industrial
	if($nombredepartamento[1]=="Seguridad Industrial")
	{
		//Repetido 3 Plazo promedio de pago sin trigos
		$consultarep="SELECT COUNT( * ) FROM  seg1_ries WHERE idmes ='$mes' AND year1='$year1'";
		$REP=mysqli_query($link,$consultarep);
		mysqli_data_seek($REP,0);
		$repetido = mysqli_fetch_row($REP);

		//Repetido 4 Plazo promedio de pago sin trigos
		$consultarep2="SELECT COUNT( * ) FROM  seg2_acci WHERE idmes ='$mes' AND year1='$year1'";
		$REP2=mysqli_query($link,$consultarep2);
		mysqli_data_seek($REP2,0);
		$repetido2 = mysqli_fetch_row($REP2);

		//Repetido 5 Plazo promedio de pago sin trigos
		$consultarep3="SELECT COUNT( * ) FROM seg3_prim WHERE idmes ='$mes' AND year1='$year1'";
		$REP3=mysqli_query($link,$consultarep3);
		mysqli_data_seek($REP3,0);
		$repetido3 = mysqli_fetch_row($REP3);

		if($repetido[0]==0)
		{
			if($nombreindicador[1]=="Indice de riesgo")
			{
				$sqlz="INSERT INTO seg1_ries (idmes,objetivo,reals,year1,nota) VALUES ('$mes','$objetivo','$pass','$year1','$caja')";
				mysqli_query($link,$sqlz);
			}
		}
		if($repetido2[0]==0)
		{
			if($nombreindicador[1]=="Indice de accidentabilidad")
			{
				$sqlz="INSERT INTO seg2_acci (idmes,objetivo,reals,year1,nota) VALUES ('$mes','$objetivo','$pass','$year1','$caja')";
				mysqli_query($link,$sqlz);
			}
		}
		if($repetido3[0]==0)
		{
			if($nombreindicador[1]=="Prima de riesgo")
			{
				$sqlz="INSERT INTO seg3_prim (idmes,objetivo,reals,year1,nota) VALUES ('$mes','$objetivo','$pass','$year1','$caja')";
				mysqli_query($link,$sqlz);
			}
		}

	}

		//Compras
		if($nombredepartamento[1]=="Compras")
	{
		//Repetido 3 Plazo promedio de pago sin trigos
		$consultarep="SELECT COUNT( * ) FROM  com1_efic WHERE idmes ='$mes' AND year1='$year1'";
		$REP=mysqli_query($link,$consultarep);
		mysqli_data_seek($REP,0);
		$repetido = mysqli_fetch_row($REP);

		if($repetido[0]==0 and $nombreindicador[1]=="Eficiencia de Compras")
		{
			$sqlz="INSERT INTO com1_efic (idmes,objetivo,reals,year1,nota) VALUES ('$mes','$objetivo','$pass','$year1','$caja')";
			mysqli_query($link,$sqlz);
		}
	}

	//Sistemas
		if($nombredepartamento[1]=="Sistemas")
	{
		//Repetido
		$consultarep="SELECT COUNT( * ) FROM  sis1_efic WHERE idmes ='$mes' AND year1='$year1'";
		$REP=mysqli_query($link,$consultarep);
		mysqli_data_seek($REP,0);
		$repetido = mysqli_fetch_row($REP);

		//Repetido2
		$consultarep2="SELECT COUNT( * ) FROM  sis2_numserv WHERE idmes ='$mes' AND year1='$year1'";
		$REP2=mysqli_query($link,$consultarep2);
		mysqli_data_seek($REP2,0);
		$repetido2 = mysqli_fetch_row($REP2);

		//Repetido3
		$consultarep3="SELECT COUNT( * ) FROM  sis3_horaslost WHERE idmes ='$mes' AND year1='$year1'";
		$REP3=mysqli_query($link,$consultarep3);
		mysqli_data_seek($REP3,0);
		$repetido3 = mysqli_fetch_row($REP3);

		//Repetido4
		$consultarep4="SELECT COUNT( * ) FROM  sis4_desarrollo WHERE idmes ='$mes' AND year1='$year1'";
		$REP4=mysqli_query($link,$consultarep4);
		mysqli_data_seek($REP4,0);
		$repetido4 = mysqli_fetch_row($REP4);

		if($repetido[0]==0 and $nombreindicador[1]=="Eficiencia de Sistemas" )
		{
			$sqlz="INSERT INTO sis1_efic (idmes,objetivo,reals,year1,nota) VALUES ('$mes','$objetivo','$pass','$year1','$caja')";
			mysqli_query($link,$sqlz);
		}

		if($repetido2[0]==0 and $nombreindicador[1]=="Numero de Servicios" )
		{
			$sqlz2="INSERT INTO sis2_numserv (idmes,objetivo,reals,year1,nota) VALUES ('$mes','$objetivo','$pass','$year1','$caja')";
			mysqli_query($link,$sqlz2);
		}

		if($repetido3[0]==0 and $nombreindicador[1]=="Horas perdidas de red" )
		{
			$sqlz3="INSERT INTO sis3_horaslost (idmes,objetivo,reals,year1,nota) VALUES ('$mes','$objetivo','$pass','$year1','$caja')";
			mysqli_query($link,$sqlz3);
		}

		if($repetido4[0]==0 and $nombreindicador[1]=="Desarrollo de software" )
		{
			$sqlz4="INSERT INTO sis4_desarrollo (idmes,objetivo,reals,year1,nota) VALUES ('$mes','$objetivo','$pass','$year1','$caja')";
			mysqli_query($link,$sqlz4);
		}
	}


	//Administracion
	if($nombredepartamento[1]=="Administracion")
	{
		//Repetido
		$consultarep="SELECT COUNT( * ) FROM  adm1_end WHERE idmes ='$mes' AND year1='$year1'";
		$REP=mysqli_query($link,$consultarep);
		mysqli_data_seek($REP,0);
		$repetido = mysqli_fetch_row($REP);

		//Repetido
		$consultarep2="SELECT COUNT( * ) FROM  adm2_liq WHERE idmes ='$mes' AND year1='$year1'";
		$REP2=mysqli_query($link,$consultarep2);
		mysqli_data_seek($REP2,0);
		$repetido2 = mysqli_fetch_row($REP2);

		//Repetido
		$consultarep3="SELECT COUNT( * ) FROM  adm3_rent WHERE idmes ='$mes' AND year1='$year1'";
		$REP3=mysqli_query($link,$consultarep3);
		mysqli_data_seek($REP3,0);
		$repetido3 = mysqli_fetch_row($REP3);

		//Repetido
		$consultarep4="SELECT COUNT( * ) FROM  adm4_cap WHERE idmes ='$mes' AND year1='$year1'";
		$REP4=mysqli_query($link,$consultarep4);
		mysqli_data_seek($REP4,0);
		$repetido4 = mysqli_fetch_row($REP4);

		if($repetido[0]==0 and $nombreindicador[1]=="Endeudamiento")
		{
			$sqlz="INSERT INTO adm1_end (idmes,objetivo,reals,year1,nota) VALUES ('$mes','$objetivo','$pass','$year1','$caja')";
			mysqli_query($link,$sqlz);
		}
		if($repetido2[0]==0 and $nombreindicador[1]=="Liquidez")
		{
			$sqlz="INSERT INTO adm2_liq (idmes,objetivo,reals,year1,nota) VALUES ('$mes','$objetivo','$pass','$year1','$caja')";
			mysqli_query($link,$sqlz);
		}
		if($repetido3[0]==0 and $nombreindicador[1]=="Rentabilidad")
		{
			$sqlz="INSERT INTO adm3_rent (idmes,objetivo,reals,year1,nota) VALUES ('$mes','$objetivo','$pass','$year1','$caja')";
			mysqli_query($link,$sqlz);
		}
		if($repetido4[0]==0 and $nombreindicador[1]=="Capital de trabajo")
		{
			$sqlz="INSERT INTO adm4_cap (idmes,objetivo,reals,year1,nota) VALUES ('$mes','$objetivo','$pass','$year1','$caja')";
			mysqli_query($link,$sqlz);
		}

	}
 }//else
}//registrar

?>


<div align="center">

<table>


<tr>
<td colspan="2" valign="middle" ALIGN=CENTER><font size=3.5 face="Arial Black" style="color:#CC7A00">Capture sus indicadores&nbsp&nbsp&nbsp&nbsp</font></td>
</tr>



	<form name="form1" action="general.php" method="POST">


	<tr>
	<td ALIGN=right><font size=2 face="verdana" style="color:#44822F">Departamento&nbsp&nbsp&nbsp </font></td>
	<td>
		<select style="color: #000; background-color: #FFDBA5" id="proveedor" name="proveedor">
		</select>
	</td>

</tr>
<tr>
	<td ALIGN=right><font size=2 face="verdana" style="color:#44822F">Indicador&nbsp&nbsp&nbsp&nbsp</font></td>
	<td>
		<select style="color: #000; background-color: #FFDBA5" id="producto" name="producto" onchange="cambia(this.options[this.selectedIndex].value)">>
		</select>
	</td>

</tr>
<tr>
	<td ALIGN=right><font size=2 face="verdana" style="color:#44822F">Objetivo&nbsp&nbsp&nbsp&nbsp</font></td>
	<td>
		<select style="color: #000; background-color: #FFDBA5" id="objetiv" name="objetiv">
		</select>
	</td>

</tr>


<tr>
	<td ALIGN=right><font size=2 face="verdana" style="color:#44822F">Real&nbsp&nbsp&nbsp&nbsp&nbsp </font></td>
	<td><input  style="color: #000; background-color: #FFDBA5" type="text" size="13" id="pass" name="pass" ></td>
</tr>

<tr>
<td ALIGN=right><font size=2 face="verdana" style="color:#44822F">Mes&nbsp&nbsp&nbsp&nbsp&nbsp</font></td>
	<td>
		<select style="color: #000; background-color: #FFDBA5" id="mes" name="mes">
		</select>
	</td>
</tr>

<tr>
	<td ALIGN=right><font size=2 face="verdana" style="color:#44822F">Año&nbsp&nbsp&nbsp&nbsp&nbsp </font></td>
	<td>
		<select style="color: #000; background-color: #FFDBA5" id="year1" name="year1">
		</select>
	</td>

</tr>
<tr>
	<td ALIGN=right>
	<div id="etiqueta" style="display:none;">
	<font size=2 face="verdana" style="color:#44822F">Ingrese la razon por la cual</br> no cumplio con el objetivo </font>
	</div>

	</td>
	<td>
	<div id="uno" style="display:none;">
	<textarea style="color:#000; background-color:#FFDBA5; WIDTH:228px; HEIGHT:98px" id="caja" name="caja" rows="15" cols="40"></textarea>
	</div>
	</td>
</tr>
<tr>
	 <td><font size=2 face="verdana" style="color:#44822F">&nbsp </font></td>
	 <td><font size=2 face="verdana" style="color:#44822F">&nbsp </font></td>
	<td>

		<input title="Clic para guardar cambios" alt="Registrar" type="submit" class="botongris" value="Registrar" name="Registrar" id="Registrar" disabled>

</form>
<input style=" background-color:#CEF6CE; " title="Clic para guardar cambios" class="botonverde" type="submit" value="Verificar" name="verific" id="verific" onClick="mostrar();">
	</td>
</tr>


<form action="general.php" method="POST">
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
<font size=3.5 face="Arial Black" style="color:#44822F">Para hacer reportes o ver graficas llene los 4 campos de abajo</font>
</td>

</form>


<form action=ReportesGraficos.php target="_blank"  method="POST" >
<tr>
	<td ALIGN=CENTER><font size=2 face="verdana" style="color:#44822F">Departamento</font></td>
		<td>
			<select style="color: #000; background-color: #90EE90" id="proveedor2" name="proveedor2">
			</select>
		</td>
</tr>
<tr>
	<td ALIGN=CENTER><font size=2 face="verdana" style="color:#44822F">Indicador</font></td>
	<td>
		<select style="color: #000; background-color: #90EE90" id="producto2" name="producto2">
		</select>
	</td>

</tr>

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
	 <td colspan="2" ALIGN=CENTER><font size=2 face="verdana" style="color:#44822F"></font>
	 </td>
		<td>
		<input title="Ver Grafico" alt="genreporte" src="barra.png" type="image" value="genreporte" name="genreporte" id="genreporte" width="45" height="40" />
		<font size=1 face="verdana" style="color:#44822F">Ver Grafico</font>
		</td>
		</FORM>

<tr>


	<FORM ACTION=excelreportgen2.php METHOD=post name="gragen" id="gragen">


	<tr>
		<td ALIGN=left>
		<font size=3.5 face="Arial Black" style="color:#44822F">Seleccione el año: </font>

			<select style="color: #000; background-color: #90EE90"  id="year5" name="year5">

			</select>
		</td>
	</tr>
	<tr>
		<td>

			<input title="vergraficagen" alt="vergraficagen" src="ReporteGen.png" type="image" value="vergraficagen" name="vergraficagen" id="vergraficagen" width="45" height="40" />
				<br><font size=1.5 face="Arial" style="color:#44822F">Plan tactico</font>
		</td>

	</tr>




	</form>
</tr>
</table>

</div>
</body>
</html>
