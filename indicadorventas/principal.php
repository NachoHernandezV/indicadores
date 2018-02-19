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
$link = new mysqli("localhost", "root", "pirineos", "indicadores2");
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
	echo '<script>window.location="general.php"</script>';
}
elseif($existe = mysqli_fetch_object($queryk)) // MANDA ventas
{
	$_SESSION['foto']='Fotos/Ventas.jpg';
	$_SESSION['seguridad']='si';
	$_SESSION['clave']='12';
	$_SESSION['general']='si';
	$_SESSION['depart']='VENTAS';
	echo '<script>window.location="general.php"</script>';
}
elseif($existe = mysqli_fetch_object($queryl)) // MANDA ventas
{
	$_SESSION['foto']='Fotos/Ventas.jpg';
	$_SESSION['seguridad']='si';
	$_SESSION['clave']='13';
	$_SESSION['general']='si';
	$_SESSION['depart']='VENTAS';
	echo '<script>window.location="general.php"</script>';
}
elseif($existe = mysqli_fetch_object($querym)) // MANDA ventas
{
	$_SESSION['foto']='Fotos/Ventas.jpg';
	$_SESSION['seguridad']='si';
	$_SESSION['clave']='14';
	$_SESSION['general']='si';
	$_SESSION['depart']='VENTAS';
	echo '<script>window.location="general.php"</script>';
}
elseif($existe = mysqli_fetch_object($queryn)) // MANDA ventas
{
	$_SESSION['foto']='Fotos/Ventas.jpg';
	$_SESSION['seguridad']='si';
	$_SESSION['clave']='15';
	$_SESSION['general']='si';
	$_SESSION['depart']='VENTAS';
	echo '<script>window.location="general.php"</script>';
}
elseif($existe = mysqli_fetch_object($queryo)) // MANDA ventas
{
	$_SESSION['foto']='Fotos/Ventas.jpg';
	$_SESSION['seguridad']='si';
	$_SESSION['clave']='16';
	$_SESSION['general']='si';
	$_SESSION['depart']='VENTAS';
	echo '<script>window.location="general.php"</script>';
}
elseif($existe = mysqli_fetch_object($queryp)) // MANDA ventas
{
	$_SESSION['foto']='Fotos/Ventas.jpg';
	$_SESSION['seguridad']='si';
	$_SESSION['clave']='17';
	$_SESSION['general']='si';
	$_SESSION['depart']='VENTAS';
	echo '<script>window.location="general.php"</script>';
}
elseif($existe = mysqli_fetch_object($queryq)) // MANDA ventas
{
	$_SESSION['foto']='Fotos/Ventas.jpg';
	$_SESSION['seguridad']='si';
	$_SESSION['clave']='18';
	$_SESSION['general']='si';
	$_SESSION['depart']='VENTAS';
	echo '<script>window.location="general.php"</script>';
}
elseif($existe = mysqli_fetch_object($queryr)) // MANDA ventas
{
	$_SESSION['foto']='Fotos/Ventas.jpg';
	$_SESSION['seguridad']='si';
	$_SESSION['clave']='19';
	$_SESSION['general']='si';
	$_SESSION['depart']='VENTAS';
	echo '<script>window.location="general.php"</script>';
}
elseif($existe = mysqli_fetch_object($querys)) // MANDA ventas
{
	$_SESSION['foto']='Fotos/Ventas.jpg';
	$_SESSION['seguridad']='si';
	$_SESSION['clave']='20';
	$_SESSION['general']='si';
	$_SESSION['depart']='VENTAS';
	echo '<script>window.location="general.php"</script>';
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

?>

</body>
</html>
