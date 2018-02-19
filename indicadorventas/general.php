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
	   
		$("document").ready(function(){
			$("#proveedor").load("departamentogeneral.php");
		})
		$("document").ready(function(){
			$("#year2").load("mesescalcu3.php"); //carga el año de buscar
		})
			
		$("document").ready(function(){
			$("#year1").load("arranqueyear.php");//carga el año de insertar
		})
		
		$("document").ready(function(){
			$("#mes").load("arranqueindicador.php");
		})
		
		$("document").ready(function(){
			$("#objetiv").load("arranqueobjetivo.php");
			
		})
		
		
		
		
		$("document").ready(function()
		{
			$("#producto").load("indicadorgeneral.php");
			
			$("#producto").change(function()
			{
				var id= $("#producto").val();
				$.get("prueba.php",{param2_id:id})
				.done(function(data)
				{
					$("#mes").html(data);
				})
				//min 30.15
				$.get("objetivo.php",{param2_id:id})
				.done(function(data)
				{
					$("#objetiv").html(data);
				})
				
				//CAMBIAMOS EL AÑO CUANDO CAMBIE EL INDICADOR
					$.get("anioselect.php",{param2_id:id})
					.done(function(data)
					{
						$("#year1").html(data);
					})
			})
			var indk=1;
			
		})
		
		
		
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
<body background="background2.jpg">


<TABLE BORDER=0 WIDTH=100%>
	<TD align="left" valign="top">
		<input title="actualz" src="log4.png" type="image" name="actualz" width="190" height="130" />
	</TD>

	<TD align="right" valign="top">

	</TD>

	<TD align="right" valign="top">
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
		$bd="indicadores2";
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
//$year1=$_POST['year1'];
$caja=$_POST['caja'];
$Registrar=$_POST['Registrar'];
//

//TEMPORAL 6
$yearid=$_POST['year1'];
//$year1='2016';

//obtener EL NOMBRE DE objetivo
	$query7=mysqli_query($link,"SELECT * FROM anios where idanio='".$yearid."'");
	mysqli_data_seek($query7,0);
    $nombreyear = mysqli_fetch_row($query7);
	$year1=$nombreyear[1];


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
	
	
		//Ventas1
		if($nombredepartamento[1]=="Ventas1") 
	{	
		//Repetido 
		$consultarep="SELECT COUNT( * ) FROM  ventas1_prog WHERE idmes ='$mes' AND year1='$year1'";
		$REP=mysqli_query($link,$consultarep);
		mysqli_data_seek($REP,0);
		$repetido = mysqli_fetch_row($REP);
		
		if($repetido[0]==0 and $nombreindicador[1]=="Programa de Carga Diaria (a tiempo)" )
		{
			$sqlz="INSERT INTO ventas1_prog (idmes,objetivo,reals,year1,nota) VALUES ('$mes','$objetivo','$pass','$year1','$caja')";
			mysqli_query($link,$sqlz);
		}
	}
	
	//Ventas2
		if($nombredepartamento[1]=="Ventas2") 
	{	
		//Repetido 
		$consultarep="SELECT COUNT( * ) FROM  ventas2_marketi WHERE idmes ='$mes' AND year1='$year1'";
		$REP=mysqli_query($link,$consultarep);
		mysqli_data_seek($REP,0);
		$repetido = mysqli_fetch_row($REP);
		
		if($repetido[0]==0 and $nombreindicador[1]=="Avance de proyectos tecnicos de marketing")
		{
			$sqlz="INSERT INTO ventas2_marketi (idmes,objetivo,reals,year1,nota) VALUES ('$mes','$objetivo','$pass','$year1','$caja')";
			mysqli_query($link,$sqlz);
		}
	}
	
		
	//ventas3
	if($nombredepartamento[1]=="Ventas3") 
	{	
		//Repetido 
		$consultarep="SELECT COUNT( * ) FROM  ventas3_bult44 WHERE idmes ='$mes' AND year1='$year1'";
		$REP=mysqli_query($link,$consultarep);
		mysqli_data_seek($REP,0);
		$repetido = mysqli_fetch_row($REP);
		
		//Repetido 
		$consultarep2="SELECT COUNT( * ) FROM  ventas3_bult20 WHERE idmes ='$mes' AND year1='$year1'";
		$REP2=mysqli_query($link,$consultarep2);
		mysqli_data_seek($REP2,0);
		$repetido2 = mysqli_fetch_row($REP2);
		
		//Repetido 
		$consultarep3="SELECT COUNT( * ) FROM  ventas3_cajas WHERE idmes ='$mes' AND year1='$year1'";
		$REP3=mysqli_query($link,$consultarep3);
		mysqli_data_seek($REP3,0);
		$repetido3 = mysqli_fetch_row($REP3);
		
		//Repetido 
		$consultarep4="SELECT COUNT( * ) FROM  ventas3_clientes WHERE idmes ='$mes' AND year1='$year1'";
		$REP4=mysqli_query($link,$consultarep4);
		mysqli_data_seek($REP4,0);
		$repetido4 = mysqli_fetch_row($REP4);
		
		//Repetido 
		$consultarep5="SELECT COUNT( * ) FROM  ventas3_numero WHERE idmes ='$mes' AND year1='$year1'";
		$REP5=mysqli_query($link,$consultarep5);
		mysqli_data_seek($REP5,0);
		$repetido5 = mysqli_fetch_row($REP5);
		
		//Repetido 
		$consultarep6="SELECT COUNT( * ) FROM  ventas3_demos WHERE idmes ='$mes' AND year1='$year1'";
		$REP6=mysqli_query($link,$consultarep6);
		mysqli_data_seek($REP6,0);
		$repetido6 = mysqli_fetch_row($REP6);
		
			//Repetido 
		$consultarep7="SELECT COUNT( * ) FROM  ventas3_visit WHERE idmes ='$mes' AND year1='$year1'";
		$REP7=mysqli_query($link,$consultarep7);
		mysqli_data_seek($REP7,0);
		$repetido7 = mysqli_fetch_row($REP7);
		

		
		if($repetido[0]==0 and $nombreindicador[1]=="Bultos de Harina 44")
		{
			$sqlz="INSERT INTO ventas3_bult44 (idmes,objetivo,reals,year1,nota) VALUES ('$mes','$objetivo','$pass','$year1','$caja')";
			mysqli_query($link,$sqlz);
		}
		if($repetido2[0]==0 and $nombreindicador[1]=="Bultos de Harina preparada 20kg")
		{
			$sqlz="INSERT INTO ventas3_bult20 (idmes,objetivo,reals,year1,nota) VALUES ('$mes','$objetivo','$pass','$year1','$caja')";
			mysqli_query($link,$sqlz);
		}
		if($repetido3[0]==0 and $nombreindicador[1]=="Cajas de Mejorante 8.8 kg")
		{
			$sqlz="INSERT INTO ventas3_cajas (idmes,objetivo,reals,year1,nota) VALUES ('$mes','$objetivo','$pass','$year1','$caja')";
			mysqli_query($link,$sqlz);
		}
		if($repetido4[0]==0 and $nombreindicador[1]=="Clientes nuevos (Numero)")
		{
			$sqlz="INSERT INTO ventas3_clientes (idmes,objetivo,reals,year1,nota) VALUES ('$mes','$objetivo','$pass','$year1','$caja')";
			mysqli_query($link,$sqlz);
		}
		if($repetido5[0]==0 and $nombreindicador[1]=="Numero de Clientes Perdidos")
		{
			$sqlz="INSERT INTO ventas3_numero (idmes,objetivo,reals,year1,nota) VALUES ('$mes','$objetivo','$pass','$year1','$caja')";
			mysqli_query($link,$sqlz);
		}
		if($repetido6[0]==0 and $nombreindicador[1]=="Demostraciones a Clientes Nuevos")
		{
			$sqlz="INSERT INTO ventas3_demos (idmes,objetivo,reals,year1,nota) VALUES ('$mes','$objetivo','$pass','$year1','$caja')";
			mysqli_query($link,$sqlz);
		}
		if($repetido7[0]==0 and $nombreindicador[1]=="Visita a Clientes por Direccion de Ventas")
		{
			$sqlz="INSERT INTO ventas3_visit (idmes,objetivo,reals,year1,nota) VALUES ('$mes','$objetivo','$pass','$year1','$caja')";
			mysqli_query($link,$sqlz);
		}
	}
	
	//Ventas4
		if($nombredepartamento[1]=="Ventas4") 
	{	
		//Repetido 
		$consultarep="SELECT COUNT( * ) FROM  ventas4_esta WHERE idmes ='$mes' AND year1='$year1'";
		$REP=mysqli_query($link,$consultarep);
		mysqli_data_seek($REP,0);
		$repetido = mysqli_fetch_row($REP);
		
			//Repetido 
		$consultarep2="SELECT COUNT( * ) FROM  ventas4_retro WHERE idmes ='$mes' AND year1='$year1'";
		$REP2=mysqli_query($link,$consultarep2);
		mysqli_data_seek($REP2,0);
		$repetido2 = mysqli_fetch_row($REP2);
		
		if($repetido[0]==0 and $nombreindicador[1]=="Estadisticas de Venta Contra el Mes Anterior (Bultos)")
		{
			$sqlz="INSERT INTO ventas4_esta (idmes,objetivo,reals,year1,nota) VALUES ('$mes','$objetivo','$pass','$year1','$caja')";
			mysqli_query($link,$sqlz);
		}
		
			if($repetido2[0]==0 and $nombreindicador[1]=="Retroalimentacion Estadistica")
		{
			$sqlz="INSERT INTO ventas4_retro (idmes,objetivo,reals,year1,nota) VALUES ('$mes','$objetivo','$pass','$year1','$caja')";
			mysqli_query($link,$sqlz);
		}
	
	}
		
		//Ventas5
		if($nombredepartamento[1]=="Ventas5") 
	{	
		//Repetido 
		$consultarep="SELECT COUNT( * ) FROM  ventas5_avanc WHERE idmes ='$mes' AND year1='$year1'";
		$REP=mysqli_query($link,$consultarep);
		mysqli_data_seek($REP,0);
		$repetido = mysqli_fetch_row($REP);
		
		
		if($repetido[0]==0 and $nombreindicador[1]=="Avance de proyectos tecnicos Inv. y Des. Harinas Blancas")
		{
			$sqlz="INSERT INTO ventas5_avanc (idmes,objetivo,reals,year1,nota) VALUES ('$mes','$objetivo','$pass','$year1','$caja')";
			mysqli_query($link,$sqlz);
		}
	
	}
	
	//Ventas6
		if($nombredepartamento[1]=="Ventas6") 
	{	
		//Repetido 
		$consultarep="SELECT COUNT( * ) FROM  ventas6_palm WHERE idmes ='$mes' AND year1='$year1'";
		$REP=mysqli_query($link,$consultarep);
		mysqli_data_seek($REP,0);
		$repetido = mysqli_fetch_row($REP);
		
		
		if($repetido[0]==0 and $nombreindicador[1]=="Nivel de Surtimiento Palm (Paqueteria)")
		{
			$sqlz="INSERT INTO ventas6_palm (idmes,objetivo,reals,year1,nota) VALUES ('$mes','$objetivo','$pass','$year1','$caja')";
			mysqli_query($link,$sqlz);
		}
	
	}
	
	//Ventas7
		if($nombredepartamento[1]=="Ventas7") 
	{	
		//Repetido 
		$consultarep="SELECT COUNT( * ) FROM  ventas7_bimbo WHERE idmes ='$mes' AND year1='$year1'";
		$REP=mysqli_query($link,$consultarep);
		mysqli_data_seek($REP,0);
		$repetido = mysqli_fetch_row($REP);
		
		//Repetido 
		$consultarep2="SELECT COUNT( * ) FROM  ventas7_pellets WHERE idmes ='$mes' AND year1='$year1'";
		$REP2=mysqli_query($link,$consultarep2);
		mysqli_data_seek($REP2,0);
		$repetido2 = mysqli_fetch_row($REP2);
		
		
		if($repetido2[0]==0 and $nombreindicador[1]=="Nivel Surtimiento Pellets")
		{
			$sqlz="INSERT INTO ventas7_pellets (idmes,objetivo,reals,year1,nota) VALUES ('$mes','$objetivo','$pass','$year1','$caja')";
			mysqli_query($link,$sqlz);
		}
		
		
		if($repetido[0]==0 and $nombreindicador[1]=="Nivel de Surtimiento Bimbo")
		{
			$sqlz="INSERT INTO ventas7_bimbo (idmes,objetivo,reals,year1,nota) VALUES ('$mes','$objetivo','$pass','$year1','$caja')";
			mysqli_query($link,$sqlz);
		}
	
	}
	
	//Ventas8
		if($nombredepartamento[1]=="Ventas8") 
	{	
		//Repetido 
		$consultarep="SELECT COUNT( * ) FROM  ventas8_kellog WHERE idmes ='$mes' AND year1='$year1'";
		$REP=mysqli_query($link,$consultarep);
		mysqli_data_seek($REP,0);
		$repetido = mysqli_fetch_row($REP);
		
		//Repetido 
		$consultarep2="SELECT COUNT( * ) FROM  ventas8_nestle WHERE idmes ='$mes' AND year1='$year1'";
		$REP2=mysqli_query($link,$consultarep2);
		mysqli_data_seek($REP2,0);
		$repetido2 = mysqli_fetch_row($REP2);
		
		
		//Repetido 
		$consultarep3="SELECT COUNT( * ) FROM  ventas8_purina WHERE idmes ='$mes' AND year1='$year1'";
		$REP3=mysqli_query($link,$consultarep3);
		mysqli_data_seek($REP3,0);
		$repetido3 = mysqli_fetch_row($REP3);
		
		//Repetido 
		$consultarep4="SELECT COUNT( * ) FROM  ventas8_walmart WHERE idmes ='$mes' AND year1='$year1'";
		$REP4=mysqli_query($link,$consultarep4);
		mysqli_data_seek($REP4,0);
		$repetido4 = mysqli_fetch_row($REP4);
		
		 
		
		if($repetido[0]==0 and $nombreindicador[1]=="Nivel de Surtimiento Kellogg")
		{
			$sqlz="INSERT INTO ventas8_kellog (idmes,objetivo,reals,year1,nota) VALUES ('$mes','$objetivo','$pass','$year1','$caja')";
			mysqli_query($link,$sqlz);
		}
		
		
		if($repetido2[0]==0 and $nombreindicador[1]=="Nivel de Surtimiento Nestle Gerber")
		{
			$sqlz="INSERT INTO ventas8_nestle (idmes,objetivo,reals,year1,nota) VALUES ('$mes','$objetivo','$pass','$year1','$caja')";
			mysqli_query($link,$sqlz);
		}
	
		if($repetido3[0]==0 and $nombreindicador[1]=="Nivel de Surtimiento a Purina")
		{
			$sqlz="INSERT INTO ventas8_purina (idmes,objetivo,reals,year1,nota) VALUES ('$mes','$objetivo','$pass','$year1','$caja')";
			mysqli_query($link,$sqlz);
		}
		
		
		if($repetido4[0]==0 and $nombreindicador[1]=="Nivel de Surtimiento Wal-Mart")
		{
			$sqlz="INSERT INTO ventas8_walmart (idmes,objetivo,reals,year1,nota) VALUES ('$mes','$objetivo','$pass','$year1','$caja')";
			mysqli_query($link,$sqlz);
		}
	}
	
	//Ventas9
		if($nombredepartamento[1]=="Ventas9") 
	{	
		//Repetido 
		$consultarep="SELECT COUNT( * ) FROM  ventas9_harinas WHERE idmes ='$mes' AND year1='$year1'";
		$REP=mysqli_query($link,$consultarep);
		mysqli_data_seek($REP,0);
		$repetido = mysqli_fetch_row($REP);
		
		//Repetido 
		$consultarep2="SELECT COUNT( * ) FROM  ventas9_global WHERE idmes ='$mes' AND year1='$year1'";
		$REP2=mysqli_query($link,$consultarep2);
		mysqli_data_seek($REP2,0);
		$repetido2 = mysqli_fetch_row($REP2);
		
		
		//Repetido 
		$consultarep3="SELECT COUNT( * ) FROM  ventas9_ferrero WHERE idmes ='$mes' AND year1='$year1'";
		$REP3=mysqli_query($link,$consultarep3);
		mysqli_data_seek($REP3,0);
		$repetido3 = mysqli_fetch_row($REP3);
	
		
		
		if($repetido[0]==0 and $nombreindicador[1]=="Nivel de Surtimiento Harinas Galletas")
		{
			$sqlz="INSERT INTO ventas9_harinas (idmes,objetivo,reals,year1,nota) VALUES ('$mes','$objetivo','$pass','$year1','$caja')";
			mysqli_query($link,$sqlz);
		}
		
		
		if($repetido2[0]==0 and $nombreindicador[1]=="Nivel de Surtimiento Harinas Global")
		{
			$sqlz="INSERT INTO ventas9_global (idmes,objetivo,reals,year1,nota) VALUES ('$mes','$objetivo','$pass','$year1','$caja')";
			mysqli_query($link,$sqlz);
		}
	
		if($repetido3[0]==0 and $nombreindicador[1]=="Nivel de Surtimiento Ferrero")
		{
			$sqlz="INSERT INTO ventas9_ferrero (idmes,objetivo,reals,year1,nota) VALUES ('$mes','$objetivo','$pass','$year1','$caja')";
			mysqli_query($link,$sqlz);
		}
	}
	
	//Ventas10
		if($nombredepartamento[1]=="Ventas10") 
	{	
		//Repetido 
		$consultarep="SELECT COUNT( * ) FROM  ventas10_creci WHERE idmes ='$mes' AND year1='$year1'";
		$REP=mysqli_query($link,$consultarep);
		mysqli_data_seek($REP,0);
		$repetido = mysqli_fetch_row($REP);
		
		if($repetido[0]==0 and $nombreindicador[1]=="Crecimiento Guadalajara (con respecto al mes anterior)")
		{
			$sqlz="INSERT INTO ventas10_creci (idmes,objetivo,reals,year1,nota) VALUES ('$mes','$objetivo','$pass','$year1','$caja')";
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
		<select style="color: #000; background-color: #FFDBA5" id="producto" name="producto">
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


<form action=ReportesGraficos.php target="grafico"  method="POST" target="ventanita" onsubmit="ventanita=window.open('','ventanita','width=900,height=600′)">
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
	<td ALIGN=right>
	<font size=3.5 face="Arial Black" style="color:#44822F">Plan Táctico </font>
	</td>
	<td>
	<FORM ACTION=excelreportgen2.php METHOD=post name="gragen" id="gragen">
	<input title="vergraficagen" alt="vergraficagen" src="ReporteGen.png" type="image" value="vergraficagen" name="vergraficagen" id="vergraficagen" width="45" height="40" />
	</td>
	</form>
</tr>
</table>



</div>
</body>
</html>