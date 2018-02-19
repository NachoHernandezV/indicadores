<?php
session_start();
?>
<?php
		
		//CONEXION CON LA BASE DE DATOS
		$user="root";
		$pass="pirineos";
		$server="localhost";
		$bd="indicadores";

		$conexion=mysqli_connect($server,$user,$pass,$bd);
		
		//$conexion = mysql_connect ("localhost", "root", "pirineos");
		//mysql_select_db ("indicadores", $conexion); 
		 
		 //recolectar Los datos ENVIADOS DESDE EL QUE GENERA LA GRAFICA
		 $Departamento=$_SESSION['DepartamentoSend'];
		 $Indicador=$_SESSION['IndicadorSend'];
		 
		 $aniio=$_POST['year5'];
		echo "zz".$_POST['year5'];
	$periodo="and c.year1='2016' and m.idmes<13";
	
		$query=mysqli_query($link,"Select year1s from anios where idanio='".$_POST['year5']."'");
		mysqli_data_seek($query,0);
		$aniio = mysqli_fetch_row($query);
	
	echo $aniio[0]." zzz";
		
	$periodo="and c.year1='".$aniio[0]."' and m.idmes<13";

?>
		
		 