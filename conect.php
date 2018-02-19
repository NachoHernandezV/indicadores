<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Pirineos</title>
</head>
<body>
<?php
function Conectarse()
{
	if(!($link=mysqli_connect("localhost", "root", "pirineos", "indicadores")))
	{
		echo "Error en la conexión del Servidor.";
		exit();
	}
		//if(!mysql_select_db("indicadores",$link))
		/*if(!mysql_select_db($link,"indicadores"))
		{
			echo "Error No existe Conexión en la Base de Datos.";
			exit();
		}*/
		return $link;
		Conectarse();
		echo "Conexión con la Base de Datos.";
}
?>
</body>
</html>

