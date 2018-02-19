<?php
function conectar()
{
	mysql_connect("localhost", "root", "pirineos");
	mysql_select_db("indicadores2");
}

function desconectar()
{
	mysql_close();
}
?>