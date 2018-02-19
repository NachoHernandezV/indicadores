<?php
session_start();
include("conect.php");
?>
<?php
$link=Conectarse();
$user="root";
$pass="pirineos";
$server="localhost";
$bd="indicadores";

$con=mysqli_connect($server,$user,$pass,$bd);
$sql3="SELECT * FROM selectdepartamento where iddepartamento='".$_SESSION['clave']."' group by nombredep asc";
$result=mysqli_query($con,$sql3);
//$result=mysql_query($sql3);


///BLOQUE PARA CARGAR EL SEMAFORO
$user="root";
$pass="pirineos";
$server="localhost";
$bd="indicadores";

$con=mysqli_connect($server,$user,$pass,$bd);
///BLOQUE PARA CARGAR EL SEMAFORO

//Almacen REFACCIONES
//prumer tabla
$sqlmes1="SELECT count(*) as mes FROM a1_rot gt, mes m where gt.idmes=m.idmes and year1=2016 ORDER BY gt.idmes DESC";
$tabla1=mysqli_query($con,$sqlmes1);
mysqli_data_seek($tabla1,0);
$idmes1 = mysqli_fetch_row($tabla1);

$sqlmesnombre="SELECT mes FROM `mes` where idmes=".$idmes1[0];
$tablanombre1=mysqli_query($con,$sqlmesnombre);
mysqli_data_seek($tablanombre1,0);
$nombremes1 = mysqli_fetch_row($tablanombre1);

$porcentaje1="select TRUNCATE((reals*100)/objetivo,2) as porciento from a1_rot t, mes m where t.idmes=m.idmes and t.year1=2016 and t.idmes=".$idmes1[0];
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

//prumer tabla
$sqlmes1="SELECT count(*) as mes FROM a2_tiem gt, mes m where gt.idmes=m.idmes and year1=2016 ORDER BY gt.idmes DESC";
$tabla1=mysqli_query($con,$sqlmes1);
mysqli_data_seek($tabla1,0);
$idmes1 = mysqli_fetch_row($tabla1);

$sqlmesnombre="SELECT mes FROM `mes` where idmes=".$idmes1[0];
$tablanombre1=mysqli_query($con,$sqlmesnombre);
mysqli_data_seek($tablanombre1,0);
$nombremes2 = mysqli_fetch_row($tablanombre1);

$porcentaje1="select TRUNCATE((objetivo*100)/reals,2) as porciento from a2_tiem t, mes m where t.idmes=m.idmes and t.year1=2016 and t.idmes=".$idmes1[0];
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
$sqlmes1="SELECT count(*) as mes FROM cpc1_ind gt, mes m where gt.idmes=m.idmes and year1=2016 ORDER BY gt.idmes DESC";
$tabla1=mysqli_query($con,$sqlmes1);
mysqli_data_seek($tabla1,0);
$idmes1 = mysqli_fetch_row($tabla1);

$sqlmesnombre="SELECT mes FROM `mes` where idmes=".$idmes1[0];
$tablanombre1=mysqli_query($con,$sqlmesnombre);
mysqli_data_seek($tablanombre1,0);
$nombremes3 = mysqli_fetch_row($tablanombre1);

$porcentaje1="select TRUNCATE((reals*100)/objetivo,2) as porciento from cpc1_ind t, mes m where t.idmes=m.idmes and t.year1=2016 and t.idmes=".$idmes1[0];
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
$sqlmes1="SELECT count(*) as mes FROM cpc2_plaz gt, mes m where gt.idmes=m.idmes and year1=2016 ORDER BY gt.idmes DESC";
$tabla1=mysqli_query($con,$sqlmes1);
mysqli_data_seek($tabla1,0);
$idmes1 = mysqli_fetch_row($tabla1);

$sqlmesnombre="SELECT mes FROM `mes` where idmes=".$idmes1[0];
$tablanombre1=mysqli_query($con,$sqlmesnombre);
mysqli_data_seek($tablanombre1,0);
$nombremes4 = mysqli_fetch_row($tablanombre1);

$porcentaje1="select TRUNCATE((objetivo*100)/reals,2) as porciento from cpc2_plaz t, mes m where t.idmes=m.idmes and t.year1=2016 and t.idmes=".$idmes1[0];
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
$sqlmes1="SELECT count(*) as mes FROM cpc3_cart gt, mes m where gt.idmes=m.idmes and year1=2016 ORDER BY gt.idmes DESC";
$tabla1=mysqli_query($con,$sqlmes1);
mysqli_data_seek($tabla1,0);
$idmes1 = mysqli_fetch_row($tabla1);

$sqlmesnombre="SELECT mes FROM `mes` where idmes=".$idmes1[0];
$tablanombre1=mysqli_query($con,$sqlmesnombre);
mysqli_data_seek($tablanombre1,0);
$nombremes5 = mysqli_fetch_row($tablanombre1);

$porcentaje1="select TRUNCATE((objetivo*100)/reals,2) as porciento from cpc3_cart t, mes m where t.idmes=m.idmes and t.year1=2016 and t.idmes=".$idmes1[0];
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
$sqlmes1="SELECT count(*) as mes FROM cpp1_plaz gt, mes m where gt.idmes=m.idmes and year1=2016 ORDER BY gt.idmes DESC";
$tabla1=mysqli_query($con,$sqlmes1);
mysqli_data_seek($tabla1,0);
$idmes1 = mysqli_fetch_row($tabla1);

$sqlmesnombre="SELECT mes FROM `mes` where idmes=".$idmes1[0];
$tablanombre1=mysqli_query($con,$sqlmesnombre);
mysqli_data_seek($tablanombre1,0);
$nombremes6 = mysqli_fetch_row($tablanombre1);

$porcentaje1="select TRUNCATE((reals*100)/objetivo,2) as porciento from cpp1_plaz t, mes m where t.idmes=m.idmes and t.year1=2016 and t.idmes=".$idmes1[0];
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
$sqlmes1="SELECT count(*) as mes FROM cpp2_ind gt, mes m where gt.idmes=m.idmes and year1=2016 ORDER BY gt.idmes DESC";
$tabla1=mysqli_query($con,$sqlmes1);
mysqli_data_seek($tabla1,0);
$idmes1 = mysqli_fetch_row($tabla1);

$sqlmesnombre="SELECT mes FROM `mes` where idmes=".$idmes1[0];
$tablanombre1=mysqli_query($con,$sqlmesnombre);
mysqli_data_seek($tablanombre1,0);
$nombremes7 = mysqli_fetch_row($tablanombre1);

$porcentaje1="select TRUNCATE((objetivo*100)/reals,2) as porciento from cpp2_ind t, mes m where t.idmes=m.idmes and t.year1=2016 and t.idmes=".$idmes1[0];
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
$sqlmes1="SELECT count(*) as mes FROM ced1_rot gt, mes m where gt.idmes=m.idmes and year1=2016 ORDER BY gt.idmes DESC";
$tabla1=mysqli_query($con,$sqlmes1);
mysqli_data_seek($tabla1,0);
$idmes1 = mysqli_fetch_row($tabla1);

$sqlmesnombre="SELECT mes FROM `mes` where idmes=".$idmes1[0];
$tablanombre1=mysqli_query($con,$sqlmesnombre);
mysqli_data_seek($tablanombre1,0);
$nombremes8 = mysqli_fetch_row($tablanombre1);

$porcentaje1="select TRUNCATE((reals*100)/objetivo,2) as porciento from ced1_rot t, mes m where t.idmes=m.idmes and t.year1=2016 and t.idmes=".$idmes1[0];
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
$sqlmes1="SELECT count(*) as mes FROM ced2_tiem gt, mes m where gt.idmes=m.idmes and year1=2016 ORDER BY gt.idmes DESC";
$tabla1=mysqli_query($con,$sqlmes1);
mysqli_data_seek($tabla1,0);
$idmes1 = mysqli_fetch_row($tabla1);


$sqlmesnombre="SELECT mes FROM `mes` where idmes=".$idmes1[0];
$tablanombre1=mysqli_query($con,$sqlmesnombre);
mysqli_data_seek($tablanombre1,0);
$nombremes9 = mysqli_fetch_row($tablanombre1);

$porcentaje1="select TRUNCATE((objetivo*100)/reals,2) as porciento from ced2_tiem t, mes m where t.idmes=m.idmes and t.year1=2016 and t.idmes=".$idmes1[0];
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
$sqlmes1="SELECT count(*) as mes FROM ced3_cicl gt, mes m where gt.idmes=m.idmes and year1=2016 ORDER BY gt.idmes DESC";
$tabla1=mysqli_query($con,$sqlmes1);
mysqli_data_seek($tabla1,0);
$idmes1 = mysqli_fetch_row($tabla1);

$sqlmesnombre="SELECT mes FROM `mes` where idmes=".$idmes1[0];
$tablanombre1=mysqli_query($con,$sqlmesnombre);
mysqli_data_seek($tablanombre1,0);
$nombremes10 = mysqli_fetch_row($tablanombre1);

$porcentaje1="select TRUNCATE((objetivo*100)/reals,2) as porciento from ced3_cicl t, mes m where t.idmes=m.idmes and t.year1=2016 and t.idmes=".$idmes1[0];
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
$sqlmes1="SELECT count(*) as mes FROM com1_efic gt, mes m where gt.idmes=m.idmes and year1=2016 ORDER BY gt.idmes DESC";
$tabla1=mysqli_query($con,$sqlmes1);
mysqli_data_seek($tabla1,0);
$idmes1 = mysqli_fetch_row($tabla1);

$sqlmesnombre="SELECT mes FROM `mes` where idmes=".$idmes1[0];
$tablanombre1=mysqli_query($con,$sqlmesnombre);
mysqli_data_seek($tablanombre1,0);
$nombremes11 = mysqli_fetch_row($tablanombre1);

$porcentaje1="select TRUNCATE((reals*100)/objetivo,2) as porciento from com1_efic t, mes m where t.idmes=m.idmes and t.year1=2016 and t.idmes=".$idmes1[0];
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
$sqlmes1="SELECT count(*) as mes FROM adm1_end gt, mes m where gt.idmes=m.idmes and year1=2016 ORDER BY gt.idmes DESC";
$tabla1=mysqli_query($con,$sqlmes1);
mysqli_data_seek($tabla1,0);
$idmes1 = mysqli_fetch_row($tabla1);

$sqlmesnombre="SELECT mes FROM `mes` where idmes=".$idmes1[0];
$tablanombre1=mysqli_query($con,$sqlmesnombre);
mysqli_data_seek($tablanombre1,0);
$nombremes12 = mysqli_fetch_row($tablanombre1);

$porcentaje1="select TRUNCATE((objetivo*100)/reals,2) as porciento from adm1_end t, mes m where t.idmes=m.idmes and t.year1=2016 and t.idmes=".$idmes1[0];
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
$sqlmes2="SELECT count(*) as mes FROM adm2_liq gt, mes m where gt.idmes=m.idmes and year1=2016 ORDER BY gt.idmes DESC";
$tabla2=mysqli_query($con,$sqlmes2);
mysqli_data_seek($tabla2,0);
$idmes2 = mysqli_fetch_row($tabla2);

$sqlmesnombre="SELECT mes FROM `mes` where idmes=".$idmes2[0];
$tablanombre1=mysqli_query($con,$sqlmesnombre);
mysqli_data_seek($tablanombre1,0);
$nombremes13 = mysqli_fetch_row($tablanombre1);

$porcentaje2="select TRUNCATE((objetivo*100)/reals,2) as porciento from adm2_liq t, mes m where t.idmes=m.idmes and t.year1=2016 and t.idmes=".$idmes2[0];
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
$sqlmes3="SELECT count(*) as mes FROM adm3_rent gt, mes m where gt.idmes=m.idmes and year1=2016 ORDER BY gt.idmes DESC";
$tabla3=mysqli_query($con,$sqlmes3);
mysqli_data_seek($tabla3,0);
$idmes3 = mysqli_fetch_row($tabla3);

$sqlmesnombre="SELECT mes FROM `mes` where idmes=".$idmes3[0];
$tablanombre1=mysqli_query($con,$sqlmesnombre);
mysqli_data_seek($tablanombre1,0);
$nombremes14 = mysqli_fetch_row($tablanombre1);
$_SESSION['nombremes14']=$nombremes14[0];

$porcentaje3="select TRUNCATE((objetivo*100)/reals,2) as porciento from adm3_rent t, mes m where t.idmes=m.idmes and t.year1=2016 and t.idmes=".$idmes3[0];
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
$sqlmes4="SELECT count(*) as mes FROM adm4_cap gt, mes m where gt.idmes=m.idmes and year1=2016 ORDER BY gt.idmes DESC";
$tabla4=mysqli_query($con,$sqlmes4);
mysqli_data_seek($tabla4,0);
$idmes4 = mysqli_fetch_row($tabla4);

$sqlmesnombre="SELECT mes FROM `mes` where idmes=".$idmes4[0];
$tablanombre1=mysqli_query($con,$sqlmesnombre);
mysqli_data_seek($tablanombre1,0);
$nombremes15 = mysqli_fetch_row($tablanombre1);
$_SESSION['nombremes15']=$nombremes15[0];

$porcentaje4="select TRUNCATE((objetivo*100)/reals,2) as porciento from adm4_cap t, mes m where t.idmes=m.idmes and t.year1=2016 and t.idmes=".$idmes4[0];
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
$sqlmes1="SELECT count(*) as mes FROM gest1_tiem gt, mes m where gt.idmes=m.idmes and year1=2016 ORDER BY gt.idmes DESC";
$tabla1=mysqli_query($con,$sqlmes1);
mysqli_data_seek($tabla1,0);
$idmes1 = mysqli_fetch_row($tabla1);

$sqlmesnombre="SELECT mes FROM `mes` where idmes=".$idmes1[0];
$tablanombre1=mysqli_query($con,$sqlmesnombre);
mysqli_data_seek($tablanombre1,0);
$nombremes16 = mysqli_fetch_row($tablanombre1);
$_SESSION['nombremes16']=$nombremes16[0];

$porcentaje1="select TRUNCATE((objetivo*100)/(reals+ 0.01),2) as porciento from gest1_tiem t, mes m where t.idmes=m.idmes and t.year1=2016 and t.idmes=".$idmes1[0];
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
$sqlmes2="SELECT count(*) as mes FROM gest2_aus gt, mes m where gt.idmes=m.idmes and year1=2016 ORDER BY gt.idmes DESC";
$tabla2=mysqli_query($con,$sqlmes2);
mysqli_data_seek($tabla2,0);
$idmes2 = mysqli_fetch_row($tabla2);

$sqlmesnombre="SELECT mes FROM `mes` where idmes=".$idmes2[0];
$tablanombre1=mysqli_query($con,$sqlmesnombre);
mysqli_data_seek($tablanombre1,0);
$nombremes17 = mysqli_fetch_row($tablanombre1);
$_SESSION['nombremes17']=$nombremes17[0];

$porcentaje2="select TRUNCATE((objetivo*100)/reals,2) as porciento from gest2_aus t, mes m where t.idmes=m.idmes and t.year1=2016 and t.idmes=".$idmes2[0];
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
$sqlmes3="SELECT count(*) as mes FROM gest3_rot gt, mes m where gt.idmes=m.idmes and year1=2016 ORDER BY gt.idmes DESC";
$tabla3=mysqli_query($con,$sqlmes3);
mysqli_data_seek($tabla3,0);
$idmes3 = mysqli_fetch_row($tabla3);

$sqlmesnombre="SELECT mes FROM `mes` where idmes=".$idmes3[0];
$tablanombre1=mysqli_query($con,$sqlmesnombre);
mysqli_data_seek($tablanombre1,0);
$nombremes18 = mysqli_fetch_row($tablanombre1);
$_SESSION['nombremes18']=$nombremes18[0];

$porcentaje3="select TRUNCATE((objetivo*100)/reals,2) as porciento from gest3_rot t, mes m where t.idmes=m.idmes and t.year1=2016 and t.idmes=".$idmes3[0];
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
$sqlmes4="SELECT count(*) as mes FROM gest4_hor gt, mes m where gt.idmes=m.idmes and year1=2016 ORDER BY gt.idmes DESC";
$tabla4=mysqli_query($con,$sqlmes4);
mysqli_data_seek($tabla4,0);
$idmes4 = mysqli_fetch_row($tabla4);

$sqlmesnombre="SELECT mes FROM `mes` where idmes=".$idmes4[0];
$tablanombre1=mysqli_query($con,$sqlmesnombre);
mysqli_data_seek($tablanombre1,0);
$nombremes19 = mysqli_fetch_row($tablanombre1);
$_SESSION['nombremes19']=$nombremes19[0];

$porcentaje4="select TRUNCATE((reals*100)/objetivo,2) as porciento from gest4_hor t, mes m where t.idmes=m.idmes and t.year1=2016 and t.idmes=".$idmes4[0];
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
$sqlmes5="SELECT count(*) as mes FROM gest5_gas gt, mes m where gt.idmes=m.idmes and year1=2016 ORDER BY gt.idmes DESC";
$tabla5=mysqli_query($con,$sqlmes5);
mysqli_data_seek($tabla5,0);
$idmes5 = mysqli_fetch_row($tabla5);

$sqlmesnombre="SELECT mes FROM `mes` where idmes=".$idmes5[0];
$tablanombre1=mysqli_query($con,$sqlmesnombre);
mysqli_data_seek($tablanombre1,0);
$nombremes20 = mysqli_fetch_row($tablanombre1);
$_SESSION['nombremes20']=$nombremes20[0];

$porcentaje5="select TRUNCATE((reals*100)/objetivo,2) as porciento from gest5_gas t, mes m where t.idmes=m.idmes and t.year1=2016 and t.idmes=".$idmes5[0];
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
$sqlmes1="SELECT count(*) as mes FROM seg1_ries gt, mes m where gt.idmes=m.idmes and year1=2016 ORDER BY gt.idmes DESC";
$tabla1=mysqli_query($con,$sqlmes1);
mysqli_data_seek($tabla1,0);
$idmes1 = mysqli_fetch_row($tabla1);

$sqlmesnombre="SELECT mes FROM `mes` where idmes=".$idmes1[0];
$tablanombre1=mysqli_query($con,$sqlmesnombre);
mysqli_data_seek($tablanombre1,0);
$nombremes21 = mysqli_fetch_row($tablanombre1);
$_SESSION['nombremes21']=$nombremes21[0];

$porcentaje1="select TRUNCATE((objetivo*100)/reals,2) as porciento from seg1_ries  t, mes m where t.idmes=m.idmes and t.year1=2016 and t.idmes=".$idmes1[0];
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
$sqlmes2="SELECT count(*) as mes FROM seg2_acci gt, mes m where gt.idmes=m.idmes and year1=2016 ORDER BY gt.idmes DESC";
$tabla2=mysqli_query($con,$sqlmes2);
mysqli_data_seek($tabla2,0);
$idmes2 = mysqli_fetch_row($tabla2);

$sqlmesnombre="SELECT mes FROM `mes` where idmes=".$idmes2[0];
$tablanombre1=mysqli_query($con,$sqlmesnombre);
mysqli_data_seek($tablanombre1,0);
$nombremes22 = mysqli_fetch_row($tablanombre1);
$_SESSION['nombremes22']=$nombremes22[0];

$porcentaje2="select TRUNCATE((objetivo*100)/reals,2) as porciento from seg2_acci t, mes m where t.idmes=m.idmes and t.year1=2016 and t.idmes=".$idmes2[0];
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
$sqlmes3="SELECT count(*) as mes FROM seg3_prim gt, mes m where gt.idmes=m.idmes and year1=2016 ORDER BY gt.idmes DESC";
$tabla3=mysqli_query($con,$sqlmes3);
mysqli_data_seek($tabla3,0);
$idmes3 = mysqli_fetch_row($tabla3);

$sqlmesnombre="SELECT mes FROM `mes` where idmes=".$idmes3[0];
$tablanombre1=mysqli_query($con,$sqlmesnombre);
mysqli_data_seek($tablanombre1,0);
$nombremes23 = mysqli_fetch_row($tablanombre1);
$_SESSION['nombremes23']=$nombremes23[0];

$porcentaje3="select TRUNCATE((objetivo*100)/reals,2) as porciento from seg3_prim t, mes m where t.idmes=m.idmes and t.year1=2016 and t.idmes=".$idmes3[0];
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
$sqlmes1="SELECT count(*) as mes FROM sis1_efic gt, mes m where gt.idmes=m.idmes and year1=2016 ORDER BY gt.idmes DESC";
$tabla1=mysqli_query($con,$sqlmes1);
mysqli_data_seek($tabla1,0);
$idmes1 = mysqli_fetch_row($tabla1);

$sqlmesnombre="SELECT mes FROM `mes` where idmes=".$idmes1[0];
$tablanombre1=mysqli_query($con,$sqlmesnombre);
mysqli_data_seek($tablanombre1,0);
$nombremes24 = mysqli_fetch_row($tablanombre1);
$_SESSION['nombremes24']=$nombremes24[0];

$porcentaje1="select TRUNCATE((objetivo*100)/reals,2) as porciento from sis1_efic t, mes m where t.idmes=m.idmes and t.year1=2016 and t.idmes=".$idmes1[0];
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

while($row = mysqli_fetch_array($result)){
	echo '<option value="'.$row['iddepartamento'].'">'.$row['nombredep'].'</option>';
}
?>