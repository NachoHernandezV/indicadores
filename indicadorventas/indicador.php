<?php
session_register('contador');
session_register('key');
session_register('keyue');
session_register('Rkey');
session_register('insertvar');
include("conect.php");
?>
<?php
//if($ventas != "si")
//echo '<script>window.location="principal.php"</script>';
/*if($insertvar=="1")
	echo '<script type="text/javascript"></script>'*/
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
   "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="es" xml:lang="es">
<head>


<script type="text/javascript">

function activarz2(este)
{
if (document.formulario.capturarhentrada.checked){
   
	today=new Date(); 
	he=today.getHours(); 
	me=today.getMinutes(); 
	se=today.getSeconds(); 
	
	if(he<10)
	he="0"+he; 

	if(me<10)
	me="0"+me; 
	if(se<10)
	document.formulario.HoraEntrada.value=he+":"+me+":0"+se; 
	else
	document.formulario.HoraEntrada.value=he+":"+me+":"+se; 
	}
    else{
	document.formulario.HoraEntrada.value=he+":"+me+":"+se; 
	//document.formulario.HoraEntrada.value='00:00:00';ANTERIOR
	}
}


</script>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>...Ventas...</title>

<link   type="text/css"rel="stylesheet" href="http://jquery-ui.googlecode.com/svn/tags/1.7/themes/redmond/jquery-ui.css" />   
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.7.2/jquery-ui.min.js"></script>
<script type="text/javascript">
      $(document).ready(function() {
          $('#ReporteFecha').datepicker();
      });
jQuery(function($){
	$.datepicker.regional['es'] = {
		closeText: 'Cerrar',
		prevText: '&#x3c;Ant',
		nextText: 'Sig&#x3e;',
		currentText: 'Hoy',
		monthNames: ['Enero','Febrero','Marzo','Abril','Mayo','Junio',
		'Julio','Agosto','Septiembre','Octubre','Noviembre','Diciembre'],
		monthNamesShort: ['Ene','Feb','Mar','Abr','May','Jun',
		'Jul','Ago','Sep','Oct','Nov','Dic'],
		dayNames: ['Domingo','Lunes','Martes','Mi&eacute;rcoles','Jueves','Viernes','S&aacute;bado'],
		dayNamesShort: ['Dom','Lun','Mar','Mi&eacute;','Juv','Vie','S&aacute;b'],
		dayNamesMin: ['Do','Lu','Ma','Mi','Ju','Vi','S&aacute;'],
		weekHeader: 'Sm',
		dateFormat: 'yy-mm-dd',
		//dateFormat: 'dd/mm/yy',
		firstDay: 1,
		isRTL: false,
		showMonthAfterYear: false,
		yearSuffix: ''};
	$.datepicker.setDefaults($.datepicker.regional['es']);
});    
$(document).ready(function() {
   $("#datepicker").datepicker();
 });
 
 function cerrar() { 
window.close(); 
} 
</script>



</head>
<body>


<?php
If (isset($contador)==0)
{
	$contador=0;
}
$contador++;
//echo " $contador veces";
?>
<div align="right">
	
	<form action=principal.php method=POST name="delet">
	<input type="hidden" name="salir2" value=salir2 > </td>
	<input type="hidden" name="salir" value="no" > </td>
	<a href="principal.php" target="_top"><font size=2 face="Arial Black" color="red">Cerrar sesión</font></a>
	</form>
	
</div>	
	
	
<div align="center">

<TABLE width="52%">
    <tr>
	<FORM ACTION=insertar.php METHOD=post name="Actualiz" id="Actualiz">
	<td><input title="actualz" alt=" conton comprar " src="act.png" type="image" name="actualz" width="45" height="40" />
	</FORM></td>

	<FORM ACTION=insertar.php METHOD=post name="busqueda"  id="busqueda">
    <td  align=RIGHT><font size=3 face="Arial Black">Ingrese la orden de venta </font>
	<INPUT TYPE=text style="color: #000; background-color: #e8b61e" NAME=CLAVE size="10" ></td>
	<td><input title="BUSCAR" alt="BUSCAR" src="bus.png" type="image" name="BUSCAR" value="BUSCAR" width="70" height="40" />
	</td>
	
	</FORM>
	<br>
	</TR>
</TABLE>



<?php
//PROCESO DE CONEXION CON LA BASE DE DATOS

//$link=mysql_connect ("localhost", "root", "n") or die ('problema conectando porque :' . mysql_error());
//mysql_select_db ("ventasharinera",$link);
$link=Conectarse();

//BOTON EDITAR GuardarEdicion/////////////////////////////////////////////////////////////
if ($Modificar == "Modificar") 
{
/////////////////
	if($OrdenVenta == "" or $UE == "" or $numeroBultos == "") //detectar $OrdenVenta vacia $UE
{
	echo "No se pudieron EDITAR los datos!, Campo vacio en OrdenVenta,UE o numeroBultos";
}
elseif(!preg_match("/^[0-9]+$/", $OrdenVenta) or !preg_match("/^[0-9]+$/", $UE)  or !preg_match("/^[0-9]+$/", $numeroBultos))
{
	echo "No se pudieron EDITAR los datos!, Ingrese solo numeros en los Campos en OrdenVenta,UE o numeroBultos";
}
else
{
$consultaduplicad2="SELECT COUNT(*) FROM orden WHERE OrdenVenta =".$OrdenVenta;
$resu2=mysql_query($consultaduplicad2,$link) or die ("problema con query duplicados") ;
mysql_data_seek($resu2,0);
$duplicacionOrden= mysql_fetch_array($resu2);
	
$consultaduplicad1="SELECT COUNT(*) FROM producto WHERE UE =".$UE;
$resu1=mysql_query($consultaduplicad1,$link) or die ("problema con query duplicados") ;
mysql_data_seek($resu1,0);
$duplicacionUE= mysql_fetch_array($resu1);
	
if($duplicacionOrden[0]==0){ //se va acambiar a una orden nueva no existente,, se permite
	$sql="UPDATE orden  SET OrdenVenta ='$OrdenVenta',Lugar='$Lugar',HoraEntrada='$HoraEntrada',Fecha='$Fecha',Chofer='$Chofer' 
	where OrdenVenta=".$key;
$sql3part1="UPDATE ordenproducto SET OrdenVenta='$OrdenVenta',";
}
else{ //se quiere cambiar a una orden ya existente, o a la misma no se permite
$sql="UPDATE orden  SET Lugar='$Lugar',HoraEntrada='$HoraEntrada',Fecha='$Fecha',Chofer='$Chofer' 
where OrdenVenta=".$key;
$sql3part1="UPDATE ordenproducto SET ";
}


if($duplicacionUE[0]==0){  //si no hay ninun UE igual se permite el cambio,,
$sql2="UPDATE producto SET UE='$UE',nombre='$nombre' where UE=".$keyue;
$sql3part2=$sql3part1." UE='$UE', numeroBultos='$numeroBultos', Observaciones='$Observaciones' where UE='".$keyue ."' AND  OrdenVenta=".$key;
}
else{ //si hay un UE igual no se permite realizar el cambio
$sql2="UPDATE producto SET nombre='$nombre' where UE=".$keyue;
$sql3part2=$sql3part1." numeroBultos='$numeroBultos',Observaciones='$Observaciones' where UE='".$keyue ."' AND  OrdenVenta=".$key;
}

mysql_query($sql,$link) or die (" problema con query actualizar orden") ;
mysql_query($sql2,$link) or die (" problema con query actualizar Producto") ;
mysql_query($sql3part2,$link) or die (" problema con query actualizar ordenproducto") ;
}
}//termino boton EDITAR


//BOTON ELIMINAR/////////////////////////////////////////////////////////////
if ($Eliminar == "Eliminar") 
{
	
if($OrdenVenta == "" or $UE == "" ) //detectar $OrdenVenta vacia $UE
{
	echo "No se Borro Informacion";
}
else
{
//reistros duplicados
$consultaduplicado3="SELECT COUNT(*) FROM ordenproducto WHERE OrdenVenta =".$key;
$resul1=mysql_query($consultaduplicado3,$link) or die ("problema con query duplicados") ;

mysql_data_seek($resul1,0);
$Ordenfinal= mysql_fetch_array($resul1);

if($Ordenfinal[0]==1)
{
$sql2="DELETE FROM ordenproducto WHERE OrdenVenta='".$key."' and UE='".$keyue."'";
$sql="DELETE FROM orden WHERE OrdenVenta=".$key;
mysql_query($sql2,$link) or die ("problema con query ELIMINAR") ;
mysql_query($sql,$link) or die ("problema con query ELIMINAR") ;
}
else
{
$sql2="DELETE FROM ordenproducto WHERE OrdenVenta='".$key."' and UE='".$keyue."'";
mysql_query($sql2,$link) or die ("problema con query ELIMINAR") ;
}

}

}

//BOTON BUSCAR/////////////////////////////////////////////////////////////
if ($BUSCAR == "BUSCAR") 
{
$buscar1="SELECT COUNT(*) FROM orden WHERE OrdenVenta =".$CLAVE;;
$resutadobus=mysql_query($buscar1,$link) or die ("La Orden de venta Ingresada no existe!!") ;
mysql_data_seek($resutadobus,0);
$buscarvalido= mysql_fetch_array($resutadobus);

$key=$CLAVE;

if($buscarvalido[0]!=0)
{
$q = "SELECT o.OrdenVenta, o.Lugar, o.HoraCarga, o.HoraEntrada, o.HoraSalida, o.Chofer, o.HoraDiferencia, op.Observaciones,p.UE, p.nombre,op.numeroBultos,o.Fecha
FROM orden o, ordenproducto op, producto p
WHERE o.OrdenVenta = op.OrdenVenta AND op.UE = p.UE and o.OrdenVenta= ".$CLAVE;// ejecutando el query select regresa un rowset
$tabla1 = mysql_query($q, $link) or die ("problema con query") ;
// regresando renglon con registro
$extraido = mysql_fetch_row($tabla1);
$keyue=$extraido[8];

}
else
{
	echo "La Orden de venta Ingresada no existe!!";
	 $extraido[0] ="";
	 $extraido[1] ="";
	 $extraido[2] =date('G:i:s', time());
	 $extraido[3] =date('G:i:s', time());
	 $extraido[4] =date('G:i:s', time());
	 $extraido[5] ="";
	 $extraido[6] =date('G:i:s', time());
	 $extraido[7] ="";
	 $extraido[8] ="";
	 $extraido[9] ="";
	 $extraido[10] ="";
	 $extraido[11] =date('Y-m-d', time());
	 $CLAVE="-";
	 $i=0;
}

}

//BOTON SIGUIENTE/ NEXT////////////////////////////////////////////////////////////
if($Siguiente=="Siguiente")
{
//$tildes = $link->query("SET NAMES 'utf8'"); //Para que se muestren las tildes
$q="SELECT o.OrdenVenta, o.Lugar, o.HoraCarga, o.HoraEntrada, o.HoraSalida, o.Chofer, o.HoraDiferencia, op.Observaciones,p.UE, p.nombre,op.numeroBultos,o.Fecha
FROM orden o, ordenproducto op, producto p
WHERE o.OrdenVenta = op.OrdenVenta AND op.UE = p.UE and o.OrdenVenta=".$key;

$result = mysql_query($q,$link) or die ("problema con query");

$número_filas = mysql_num_rows($result);

if($número_filas<=$contador)
{
$contador=0;
}
	mysql_data_seek ($result,$contador);

	$extraido= mysql_fetch_array($result);
	if ($extraido !=NULL) 
	{
	$keyue=$extraido[8];
	mysql_free_result($result);
	mysql_close($link);
	}	
}


?>

<?php
//BOTON INSERTAR/////////////////////////////////////////////////////////////

if($Insertar=="Insertar")
{
	
	
if($OrdenVenta == "" or $UE == "" or  $numeroBultos == "" ) //detectar $OrdenVenta vacia $UE
{
	echo "No se pudieron Insertar los datos!, Campo VACIO en OrdenVenta,UE o numeroBultos";
}
elseif(!preg_match("/^[0-9]+$/", $OrdenVenta) or !preg_match("/^[0-9]+$/", $UE) or !preg_match("/^[0-9]+$/", $numeroBultos))
{
	echo "No se pudieron Insertar los datos!, Ingrese solo NUMEROS en los Campos en OrdenVenta,UE o numeroBultos";
}
else
{
//PROCESO DE CONEXION CON LA BASE DE DATOS

$link=Conectarse();
//$link=mysql_connect ("localhost", "root", "n") or die ('problema conectando porque :' . mysql_error());
//mysql_select_db ("ventasharinera",$link);

	//registros duplicados
$co1="SELECT count(*) FROM orden WHERE OrdenVenta ='".$OrdenVenta."'";
$co2="SELECT count(*) FROM producto WHERE UE ='".$UE."'";
$co3="SELECT count(*) FROM ordenproducto WHERE UE ='".$UE."' and OrdenVenta ='".$OrdenVenta."'";

$r1=mysql_query($co1,$link) or die ("problema con query duplicados1") ;
$r2=mysql_query($co2,$link) or die ("problema con query duplicados2") ;
$r3=mysql_query($co3,$link) or die ("problema con query duplicados2") ;

// regresando renglon con registro
mysql_data_seek($r1,0);
$bueno = mysql_fetch_row($r1);

mysql_data_seek($r2,0);
$bueno2 = mysql_fetch_row($r2);

mysql_data_seek($r3,0);
$bueno3 = mysql_fetch_row($r3);

if($bueno[0]==0)
{
$sqlz="INSERT INTO orden (OrdenVenta,Lugar,HoraCarga,Fecha,HoraEntrada,HoraSalida,Chofer,HoraDiferencia)
VALUES ('$OrdenVenta','$Lugar','00:00:00','$Fecha','$HoraEntrada','00:00:00','$Chofer','00:00:00')";
mysql_query($sqlz,$link) or die ("problema con query insertar orden".mysql_error()) ;
}

if($bueno2[0]==0)
{
$sql3="INSERT INTO producto (UE,nombre) VALUES ('$UE','$nombre')";
mysql_query($sql3,$link) or die ("problema con query insertar producto".mysql_error()) ;
}

if($bueno3[0]==0){
$sql2="INSERT INTO ordenproducto (OrdenVenta,UE,numeroBultos,Observaciones) VALUES ('$OrdenVenta','$UE','$numeroBultos','$Observaciones')";
mysql_query($sql2,$link) or die ("problema con query ordenproducto".mysql_error()) ;
}

}//llave de vacio


}
?>








<?php
//NEXT
if($BUSCAR != "BUSCAR" AND $Siguiente != "Siguiente") 
{
 $extraido[0]="";
 $extraido[1] ="";
 $extraido[2] =date('G:i:s', time());
 $extraido[3] =date('G:i:s', time());
 $extraido[4] =date('G:i:s', time());
 $extraido[5] ="";
 $extraido[6] =date('G:i:s', time());
 $extraido[7] ="";
 $extraido[8] ="";
 $extraido[9] ="";
 $extraido[10] ="";
 $extraido[11] =date('Y-m-d', time());
 $CLAVE="-";
 $i=0;
 $horaantes=date('G:i:s', time());
}

?>

 

 
<form action="insertar.php"  name="formulario" id="formulario">
<table width="50%" >
<BR>
<tr>
<th width="5%" ROWSPAN=3 >
<input title="Insertar" alt="Insertar" src="d1.png" type="image" name="Insertar" id="Insertar" value="Insertar"  width="85" height="40" /></th>
<td width="4%" ALIGN=RIGHT><font size="1.9" face="Arial Black">Orden de Venta</font></td>
<td width="2%" ALIGN=CENTER><input style="color: #000; background-color: #fadb5f" name="OrdenVenta" type="text" id="OrdenVenta" size="22"  maxlength="40" value=<?php echo $extraido[0]?> ></td>

</tr>

<tr>
<td width="4%" ALIGN=RIGHT><font size=1.7 face="Arial Black">Lugar de Destino</font></td>
<td width="2%" ALIGN=CENTER><input style="color: #000; background-color: #fadb5f" name="Lugar" id="Lugar" type="text" size="22" maxlength="50" value="<?php echo $extraido[1]?>"  ></td>
<td width="7%"><font size=2 face="verdana"></font></td>
</tr>


<tr>
<td width="4%" ALIGN=RIGHT><font size=1.7 face="Arial Black">Hora de Entrada</font></td>
<td width="2%" ALIGN=CENTER><input style="color: #000; background-color: #fadb5f" name="HoraEntrada" id="HoraEntrada" type="text" size="22"  maxlength="30" readonly="readonly" value=<?php echo $extraido[3]?> >
<td width="2%" ALIGN=LEFT><input type="checkbox" name="capturarhentrada" id="capturarhentrada" value="capturarhentrada" size = "10" onclick="activarz2(this)" /><font size=1.5 face="Arial Black">Capturar</font></td>
</tr>

<tr>
<th width="5%" ROWSPAN=3 >
<input title="Modificar" alt="Modificar" src="d.png" type="image" NAME="Modificar" VALUE="Modificar" ID="Modificar"  width="82" height="37" /></th>
<td width="4%" ALIGN=RIGHT><font size=1.7 face="Arial Black">Chofer</font></td>
<td width="2%" ALIGN=CENTER><input style="color: #000; background-color: #fadb5f" name="Chofer" id="Chofer" type="text" size="22"  maxlength="30" value="<?php echo $extraido[5]?>" ></td>
</tr>


<tr>
<td width="4%" ALIGN=RIGHT><font size=1.7 face="Arial Black">UE</font></td>
<td width="2%" ALIGN=CENTER><input style="color: #000; background-color: #fadb5f" name="UE" id="UE" type="text" size="22" maxlength="30" value=<?php $keyue=$extraido[8]; echo $extraido[8]?>  ></td>
</tr>

<tr>
<td width="4%" ALIGN=RIGHT><font size=1.7 face="Arial Black">Producto</font></td>
<td width="2%" ALIGN=CENTER><input style="color: #000; background-color: #fadb5f" name="nombre" id="nombre" type="text" size="22" maxlength="60" value="<?php echo $extraido[9]?>" ></td>
</tr>

<tr>
<th width="5%" ROWSPAN=3 >
<input title="Eliminar" alt="Eliminar" src="d3.png" type="image" NAME="Eliminar" VALUE="Eliminar" ID="Eliminar"  width="82" height="37" /></th>
<td width="4%" ALIGN=RIGHT><font size=1.7 face="Arial Black">Numero de bultos</font></td>
<td width="2%" ALIGN=CENTER><input style="color: #000; background-color: #fadb5f" name="numeroBultos" id="numeroBultos" type="text" size="22" maxlength="30" value=<?php echo $extraido[10]?> ></td>
</tr>

<tr>
<td width="4%" ALIGN=RIGHT><font size=1.7 face="Arial Black">Observaciones</font></td>
<td width="2%" ALIGN=CENTER><input style="color: #000; background-color: #fadb5f" name="Observaciones" id="Observaciones" type="text" size="22" maxlength="30"  value="<?php echo $extraido[7]?>" ></td>
</tr>


<tr>
<td width="4%" ALIGN=RIGHT><font size=1,7 face="Arial Black">Fecha</font></td>
<td width="2%" ALIGN=CENTER><input style="color: #000; background-color: #fadb5f" type="text" name="Fecha" id="datepicker" size="22" readonly="readonly" value=<?php echo $extraido[11]?>  maxlength="30" /></td>
</tr>

<tr>
<th width="5%" COLSPAN=2 >
<td ALIGN=CENTER><input title="Siguiente" alt="Siguiente" src="fech.jpg" type="image" NAME=Siguiente VALUE="Siguiente" ID="Siguiente"  width="122" height="35" /></th>
</tr>
</table>
</form>

<br><br><br>
<td>Generar Reporte por:</td>

<table>
<tr>
	<form action="reporteexcelpdf.php"  name="pdf" id="pdf" method="POST">
	<td><font size=2  face="verdana" >Orden</font></td>
	<td  ALIGN=CENTER><input style="color: #000; background-color: #abf299" name="Rorden" id="Rorden" type="text" size="8"   maxlength="30" /></td>
	<td><input title="PDF" alt="PDF" src="pdf.png" type="image" name="PDF" value="PDF" id="PDF" width="37" height="32" />
	<input title="XLS" alt="XLS" src="excel.jpg" type="image" name="XLS" value="XLS" id="XLS" width="32" height="32" />
	<input type="hidden" name="indicador" value=0 > </td>
	</form>
</tr>

<tr>
	<form action="reporteexcelpdf.php"  name="pdf2" id="pdf2" method="POST">
		<td><font size=2  face="verdana">Fecha</font></td>
		<td><input style="color: #000; background-color: #abf299" type="text" name="ReporteFecha" id="ReporteFecha"  value=<?php echo $extraido[11]?> readonly="readonly" size="8"    maxlength="30" /></td>
		<td>
		<input title="PDF" alt="PDF" src="pdf.png" type="image" name="PDF" value="PDF" id="FPDF" width="37" height="32" />
		<input title="XLS" alt="XLS" src="excel.jpg" type="image" name="XLS" value="XLS" id="FXLS" width="32" height="32" />
		<input type="hidden" name="indicador" value=1 >
		</td>
	</form> 

</tr>

 </table>
<br>
<td>Reporte del dia :</td>
 
<?php

//include("conect.php");
$link=Conectarse();

if($BUSCAR != "BUSCAR") 
{
$consultasql="SELECT o.OrdenVenta, o.Lugar,p.UE, p.nombre, op.numeroBultos, o.HoraCarga, o.HoraEntrada, o.HoraSalida, o.HoraDiferencia, o.Fecha,o.Chofer, op.Observaciones
FROM orden o, ordenproducto op, producto p
WHERE o.OrdenVenta = op.OrdenVenta AND op.UE = p.UE and o.Fecha= '".date('Y-m-d', time())."' ORDER BY o.HoraEntrada DESC";
}
else{
	$consultasql="SELECT o.OrdenVenta, o.Lugar,p.UE, p.nombre, op.numeroBultos, o.HoraCarga, o.HoraEntrada, o.HoraSalida, o.HoraDiferencia, o.Fecha,o.Chofer, op.Observaciones
	FROM orden o, ordenproducto op, producto p
	WHERE o.OrdenVenta = op.OrdenVenta AND op.UE = p.UE and o.OrdenVenta= '".$CLAVE."'";
}
$result=mysql_query($consultasql,$link);
?>
<table border=1 cellspacing=1 cellpadding=1>
<tr>

<td>&nbsp;<font size=1.5  face="verdana">OrdendeVenta</td></font>
<td>&nbsp;<font size=1.5  face="verdana">lugarDestino&nbsp;</td></font>
<td>&nbsp;<font size=1.5  face="verdana">UE&nbsp;</td></font>
<td>&nbsp;<font size=1.5  face="verdana">Producto</td></font>
<td>&nbsp;<font size=1.5  face="verdana">Numero de Bultos&nbsp;</td></font>
<td>&nbsp;<font size=1.5  face="verdana">Hora de Carga&nbsp;</td></font>
<td>&nbsp;<font size=1.5  face="verdana">Hora de Entrada&nbsp;</td></font>
<td>&nbsp;<font size=1.5  face="verdana">Hora de Salida&nbsp;</td></font>
<td>&nbsp;<font size=1.5  face="verdana">Hora Diferencia&nbsp;</td></font>
<td>&nbsp;<font size=1.5  face="verdana">Fecha&nbsp;</td></font>
<td>&nbsp;<font size=1.5  face="verdana">Chofer&nbsp;</td></font>
<td>&nbsp;<font size=1.5  face="verdana">Observaciones&nbsp;</td></font>

</tr>

<?php

while($row=mysql_fetch_array($result)){
	printf("<tr><td>&nbsp;<font size=1.5>%s</td></font><td>&nbsp;<font size=1.5>%s&nbsp;</td></font><td>&nbsp;<font size=1.5>%s&nbsp;</t 
	d></font><td>&nbsp;<font size=1.5>%s&nbsp;</font></td><td>&nbsp;<font size=1.5>%s&nbsp;</font></td><td>&nbsp;<font size=1.5>%s&nbsp;</font></td><td>&nbsp;<font size=1.5>%s&nbsp;</td></font><td>&nbsp;<font size=1.5>%s&nbsp;</td></font><td>&nbsp;<font size=1.5>%s</td></font><td>&nbsp;<font size=1.5>%s&nbsp;</td></font><td>&nbsp;<font size=1.5>%s</td></font><td>&nbsp;<font size=1.5>%s</td></font>",$row["OrdenVenta"],$row["Lugar"],$row["UE"],$row["nombre"],$row["numeroBultos"],$row["HoraCarga"],$row["HoraEntrada"],$row["HoraSalida"],$row["HoraDiferencia"],$row["Fecha"],$row["Chofer"],$row["Observaciones"]);
	}
	mysql_free_result($result);
?>
</table>
</body>
</html>
