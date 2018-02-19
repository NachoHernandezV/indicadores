<?php
session_start();
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>INGRESAR</title>
</head>
<style type="text/css">
.boton2 {
	-moz-box-shadow:inset 0px 1px 0px 0px #9acc85;
	-webkit-box-shadow:inset 0px 1px 0px 0px #9acc85;
	box-shadow:inset 0px 1px 0px 0px #9acc85;
	background:-webkit-gradient(linear, left top, left bottom, color-stop(0.05, #7bb876), color-stop(1, #68a54b));
	background:-moz-linear-gradient(top, #7bb876 5%, #68a54b 100%);
	background:-webkit-linear-gradient(top, #7bb876 5%, #68a54b 100%);
	background:-o-linear-gradient(top, #7bb876 5%, #68a54b 100%);
	background:-ms-linear-gradient(top, #7bb876 5%, #68a54b 100%);
	background:linear-gradient(to bottom, #7bb876 5%, #68a54b 100%);
	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#7bb876', endColorstr='#68a54b',GradientType=0);
	background-color:#7bb876;
	border:1px solid #86bd6a;
	display:inline-block;
	cursor:pointer;
	color:#ffffff;
	font-family:Arial;
	font-size:11px;
	font-weight:bold;
	padding:3px 11px;
	text-decoration:none;
}
.myButton:hover {
	background:-webkit-gradient(linear, left top, left bottom, color-stop(0.05, #68a54b), color-stop(1, #7bb876));
	background:-moz-linear-gradient(top, #68a54b 5%, #7bb876 100%);
	background:-webkit-linear-gradient(top, #68a54b 5%, #7bb876 100%);
	background:-o-linear-gradient(top, #68a54b 5%, #7bb876 100%);
	background:-ms-linear-gradient(top, #68a54b 5%, #7bb876 100%);
	background:linear-gradient(to bottom, #68a54b 5%, #7bb876 100%);
	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#68a54b', endColorstr='#7bb876',GradientType=0);
	background-color:#68a54b;
}
.myButton:active {
	position:relative;
	top:1px;
}

  .boton{
        font-size:10px;
        font-family:Verdana,Helvetica;
        font-weight:bold;
        color:white;
        background:#0B3B17;
        border:0px;
        width:70px; 
        height:19px;
       }
</style>
<body style="background:#FFFFFF">
<div align="center">
<img src="logo1.png" alt="Este es el ejemplo de un texto alternativo" width="350" height="320">
<br>
<br>
<table>
	<form action="principal.php" method="POST">
		<tr>
			<td ALIGN=CENTER><font size=2 face="verdana" style="color:#44822F">Usuario</font></td>
			<td><input  style="color: #000; background-color: #E6FCDF" type="text" size="13" name="usuario" id="usuario"></td>
		</tr>
		<tr>
			<td ALIGN=CENTER><font size=2 face="verdana" style="color:#44822F">Contraseña</font></td>
			<td><input  style="color: #000; background-color: #E6FCDF" type="password" size="13" name="pass" id="pass"></td>
		</tr>
		<tr>
			<td ALIGN=CENTER></td>
			<td ALIGN=RIGHT>
				<input type="submit" value="Ingresar" name="Ingresar" id="Ingresar" class="boton2"> 
			</td>
		</tr>
	</form>
</table>	
</div>
<?php
//<input style="color: #449035; background-color: #FDC35E" src="ingresar.jpg" type="image" width="80" height="25" value="Ingresar" name="Ingresar" id="Ingresar">


$_SESSION['general']=$salir;
$_SESSION['tesoreria']=$salir;
$_SESSION['impuestos']=$salir;


//recibir los datos
$Ingresar = $_POST["Ingresar"];
$usuario = $_POST["usuario"];
$pass = $_POST["pass"];



if($Ingresar == "Ingresar")
{

//coneccion con la base
$link = new mysqli("localhost", "root", "pirineos", "indicadores");
/* comprobar la conexión */
if ($link->connect_errno)
{
    printf("Conexión fallida: %s\n", $mysqli->connect_error);
    exit();
}
//


//Almacen de Refacciones
$sqla="Select * from usuarios where usuario='".$usuario."' and password='".$pass."' and departamento='Almacen de Refacciones'";
$querya=mysqli_query($link,$sqla);

//Cuentas Por Cobrar
$sqlb="Select * from usuarios where usuario='".$usuario."' and password='".$pass."' and departamento='Cuentas Por Cobrar'";
$queryb=mysqli_query($link,$sqlb);

//Cuentas Por Pagar
$sqlc="Select * from usuarios where usuario='".$usuario."' and password='".$pass."' and departamento='Cuentas Por Pagar'";
$queryc=mysqli_query($link,$sqlc);

//Cedi
$sqld="Select * from usuarios where usuario='".$usuario."' and password='".$pass."' and departamento='Cedi'";
$queryd=mysqli_query($link,$sqld);

//Compras
$sqle="Select * from usuarios where usuario='".$usuario."' and password='".$pass."' and departamento='Compras'";
$querye=mysqli_query($link,$sqle);

//Gestion de Personal
$sqlf="Select * from usuarios where usuario='".$usuario."' and password='".$pass."' and departamento='Gestion de Personal'";
$queryf=mysqli_query($link,$sqlf);

//Administracion
$sqlg="Select * from usuarios where usuario='".$usuario."' and password='".$pass."' and departamento='Administracion'";
$queryg=mysqli_query($link,$sqlg);

//Seguridad Industrial
$sqlh="Select * from usuarios where usuario='".$usuario."' and password='".$pass."' and departamento='Seguridad Industrial'";
$queryh=mysqli_query($link,$sqlh);

//Sistemas
$sqli="Select * from usuarios where usuario='".$usuario."' and password='".$pass."' and departamento='Sistemas'";
$queryi=mysqli_query($link,$sqli);

//Tesoreria
$sql2="Select * from usuarios where usuario='".$usuario."' and password='".$pass."' and departamento='tesoreria'";
$query2=mysqli_query($link,$sql2);

//Impuestos
$sql3="Select * from usuarios where usuario='".$usuario."' and password='".$pass."' and departamento='impuestos'";
$query3=mysqli_query($link,$sql3);

//Supervisión
$sql4="Select * from usuarios where usuario='".$usuario."' and password='".$pass."' and departamento='supervision'";
$query4=mysqli_query($link,$sql4);

//Ventas1
$sqlj="Select * from usuarios where usuario='".$usuario."' and password='".$pass."' and departamento='Ventas1'";
$queryj=mysqli_query($link,$sqlj);

//Ventas2
$sqlk="Select * from usuarios where usuario='".$usuario."' and password='".$pass."' and departamento='Ventas2'";
$queryk=mysqli_query($link,$sqlk);

//Ventas3
$sqll="Select * from usuarios where usuario='".$usuario."' and password='".$pass."' and departamento='Ventas3'";
$queryl=mysqli_query($link,$sqll);

//Ventas4
$sqlm="Select * from usuarios where usuario='".$usuario."' and password='".$pass."' and departamento='Ventas4'";
$querym=mysqli_query($link,$sqlm);

//Ventas5
$sqln="Select * from usuarios where usuario='".$usuario."' and password='".$pass."' and departamento='Ventas5'";
$queryn=mysqli_query($link,$sqln);


//Ventas6
$sqlo="Select * from usuarios where usuario='".$usuario."' and password='".$pass."' and departamento='Ventas6'";
$queryo=mysqli_query($link,$sqlo);

//Ventas7
$sqlp="Select * from usuarios where usuario='".$usuario."' and password='".$pass."' and departamento='Ventas7'";
$queryp=mysqli_query($link,$sqlp);

//Ventas8
$sqlq="Select * from usuarios where usuario='".$usuario."' and password='".$pass."' and departamento='Ventas8'";
$queryq=mysqli_query($link,$sqlq);

//Ventas9
$sqlr="Select * from usuarios where usuario='".$usuario."' and password='".$pass."' and departamento='Ventas9'";
$queryr=mysqli_query($link,$sqlr);

//Ventas10
$sqls="Select * from usuarios where usuario='".$usuario."' and password='".$pass."' and departamento='Ventas10'";
$querys=mysqli_query($link,$sqls);

if($existe = mysqli_fetch_object($querya)) // MANDA ALMACEN DE REFACCIONES
{
	$_SESSION['foto']='Fotos/almacen.jpg';
	$_SESSION['one']=1;
	$_SESSION['general']='si';
	$_SESSION['clave']='1';
	$_SESSION['depart']='ALMACEN DE REFACCIONES';
	echo '<script>window.location="general.php"</script>';
}
elseif($existe = mysqli_fetch_object($queryb)) // MANDA ALMACEN DE REFACCIONES
{
	$_SESSION['foto']='Fotos/cuentasporcobrar.jpg';
	$_SESSION['cuentascobrar']='si';
	$_SESSION['general']='si';
	$_SESSION['clave']='2';
	$_SESSION['depart']='CUENTAS POR COBRAR';
	echo '<script>window.location="general.php"</script>';
}

elseif($existe = mysqli_fetch_object($queryc)) // MANDA ALMACEN DE REFACCIONES
{
	$_SESSION['foto']='Fotos/cuentaspagar.jpg';
	$_SESSION['cuentaspagar']='si';
	$_SESSION['general']='si';
	$_SESSION['clave']='3';
	$_SESSION['depart']='CUENTAS POR PAGAR';
	echo '<script>window.location="general.php"</script>';
}
elseif($existe = mysqli_fetch_object($queryd)) // MANDA ALMACEN DE REFACCIONES
{
	$_SESSION['foto']='Fotos/cedi.jpg';
	$_SESSION['cedi']='si';
	$_SESSION['general']='si';
	$_SESSION['clave']='4';
	$_SESSION['depart']='CEDI';
	echo '<script>window.location="general.php"</script>';
}
elseif($existe = mysqli_fetch_object($querye)) // MANDA ALMACEN DE REFACCIONES
{
	$_SESSION['foto']='Fotos/compras.jpg';
	$_SESSION['compras']='si';
	$_SESSION['general']='si';
	$_SESSION['clave']='5';
		$_SESSION['depart']='COMPRAS';
	echo '<script>window.location="general.php"</script>';
}
elseif($existe = mysqli_fetch_object($queryf)) // MANDA ALMACEN DE REFACCIONES
{
	$_SESSION['foto']='Fotos/gestion.jpg';
	$_SESSION['gestion']='si';
	$_SESSION['clave']='6';
	$_SESSION['general']='si';
	$_SESSION['depart']='GESTION DE PERSONAL';
	echo '<script>window.location="general.php"</script>';
}
elseif($existe = mysqli_fetch_object($queryg)) // MANDA ALMACEN DE REFACCIONES
{
	$_SESSION['foto']='Fotos/administracion.jpg';
	$_SESSION['administracion']='si';
	$_SESSION['clave']='7';
	$_SESSION['general']='si';
	$_SESSION['depart']='ADMINISTRACION';
	echo '<script>window.location="general.php"</script>';
}
elseif($existe = mysqli_fetch_object($queryh)) // MANDA ALMACEN DE REFACCIONES
{
	$_SESSION['foto']='Fotos/seguridad.jpg';
	$_SESSION['seguridad']='si';
	$_SESSION['clave']='9';
	$_SESSION['general']='si';
	$_SESSION['depart']='SEGURIDAD INDUSTRIAL';
	echo '<script>window.location="general.php"</script>';
}
elseif($existe = mysqli_fetch_object($queryi)) // MANDA ALMACEN DE REFACCIONES
{
	$_SESSION['foto']='Fotos/sistemas.jpg';
	$_SESSION['seguridad']='si';
	$_SESSION['clave']='10';
	$_SESSION['general']='si';
	$_SESSION['depart']='SISTEMAS';
	echo '<script>window.location="general.php"</script>';
}
elseif($existe = mysqli_fetch_object($queryj)) // MANDA ventas
{
	$_SESSION['foto']='Fotos/Ventas.jpg';
	$_SESSION['seguridad']='si';
	$_SESSION['clave']='11';
	$_SESSION['general']='si';
	$_SESSION['depart']='VENTAS';
	echo '<script>window.location="indicadorventas/general.php"</script>';
}
elseif($existe = mysqli_fetch_object($queryk)) // MANDA ventas
{
	$_SESSION['foto']='Fotos/Ventas.jpg';
	$_SESSION['seguridad']='si';
	$_SESSION['clave']='12';
	$_SESSION['general']='si';
	$_SESSION['depart']='VENTAS';
	echo '<script>window.location="indicadorventas/general.php"</script>';
}
elseif($existe = mysqli_fetch_object($queryl)) // MANDA ventas
{
	$_SESSION['foto']='Fotos/Ventas.jpg';
	$_SESSION['seguridad']='si';
	$_SESSION['clave']='13';
	$_SESSION['general']='si';
	$_SESSION['depart']='VENTAS';
	echo '<script>window.location="indicadorventas/general.php"</script>';
}
elseif($existe = mysqli_fetch_object($querym)) // MANDA ventas
{
	$_SESSION['foto']='Fotos/Ventas.jpg';
	$_SESSION['seguridad']='si';
	$_SESSION['clave']='14';
	$_SESSION['general']='si';
	$_SESSION['depart']='VENTAS';
	echo '<script>window.location="indicadorventas/general.php"</script>';
}
elseif($existe = mysqli_fetch_object($queryn)) // MANDA ventas
{
	$_SESSION['foto']='Fotos/Ventas.jpg';
	$_SESSION['seguridad']='si';
	$_SESSION['clave']='15';
	$_SESSION['general']='si';
	$_SESSION['depart']='VENTAS';
	echo '<script>window.location="indicadorventas/general.php"</script>';
}
elseif($existe = mysqli_fetch_object($queryo)) // MANDA ventas
{
	$_SESSION['foto']='Fotos/Ventas.jpg';
	$_SESSION['seguridad']='si';
	$_SESSION['clave']='16';
	$_SESSION['general']='si';
	$_SESSION['depart']='VENTAS';
	echo '<script>window.location="indicadorventas/general.php"</script>';
}
elseif($existe = mysqli_fetch_object($queryp)) // MANDA ventas
{
	$_SESSION['foto']='Fotos/Ventas.jpg';
	$_SESSION['seguridad']='si';
	$_SESSION['clave']='17';
	$_SESSION['general']='si';
	$_SESSION['depart']='VENTAS';
	echo '<script>window.location="indicadorventas/general.php"</script>';
}
elseif($existe = mysqli_fetch_object($queryq)) // MANDA ventas
{
	$_SESSION['foto']='Fotos/Ventas.jpg';
	$_SESSION['seguridad']='si';
	$_SESSION['clave']='18';
	$_SESSION['general']='si';
	$_SESSION['depart']='VENTAS';
	echo '<script>window.location="indicadorventas/general.php"</script>';
}
elseif($existe = mysqli_fetch_object($queryr)) // MANDA ventas
{
	$_SESSION['foto']='Fotos/Ventas.jpg';
	$_SESSION['seguridad']='si';
	$_SESSION['clave']='19';
	$_SESSION['general']='si';
	$_SESSION['depart']='VENTAS';
	echo '<script>window.location="indicadorventas/general.php"</script>';
}
elseif($existe = mysqli_fetch_object($querys)) // MANDA ventas
{
	$_SESSION['foto']='Fotos/Ventas.jpg';
	$_SESSION['seguridad']='si';
	$_SESSION['clave']='20';
	$_SESSION['general']='si';
	$_SESSION['depart']='VENTAS';
	echo '<script>window.location="indicadorventas/general.php"</script>';
}
elseif($existe2 = mysqli_fetch_object($query2))  //MANDA A VENTANA DE EMBARQUES
{
	$_SESSION['foto']='Fotos/tesoreria.jpg';
	$_SESSION['tesoreria']='si';
	$_SESSION['depart']='TESORERIA';
	echo '<script>window.location="tesoreria.php"</script>';
}

elseif($existe3 = mysqli_fetch_object($query3)) //MANDA A VENTANA DE SISTEMAS
{
	$_SESSION['foto']='Fotos/impuestos.jpg';
	$_SESSION['impuestos']='si';
	$_SESSION['depart']='IMPUESTOS';
	echo '<script>window.location="impuestos.php"</script>';
}

elseif($existe4 = mysqli_fetch_object($query4)) //MANDA A VENTANA DE SISTEMAS
{
	$_SESSION['foto']='Fotos/lety.png';
	$_SESSION['supervision']='si';
	$_SESSION['clave']="20";
	$_SESSION['depart']='DIRECCION ADMINISTRATIVA';
	echo '<script>window.location="supervision.php"</script>';
}
elseif($usuario == "" or $pass == "" ) //detectar VACIO
{
	echo "No se puede ingresar usuario o contraseña vacio";
}
else
{
	echo "usuario incorrecto o no registrado";
}


	

}//fin del if de ingresar



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


	///FIN DEL SEMAFORO


?>

</body>
</html>
