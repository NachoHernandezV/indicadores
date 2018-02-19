<?php
function conectar()
{
	mysql_connect("localhost", "root", "pirineos");
	mysql_select_db("indicadores");
}

function desconectar()
{
	mysql_close();
}
?>