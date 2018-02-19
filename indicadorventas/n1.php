<html>

<script type="text/javascript">
var d = document.form1;
function mostrar(){
	document.getElementById('uno').style.display='block';
}
function ocultar(){
    document.getElementById('uno').style.display='none';
}
</script>


<div id="uno" style="display:none;" >Capa uno</div>

<input name="mostrar" type="button" value="mostrar" onClick="mostrar();">
<input name="ocultar" type="button" value="ocultar" onClick="ocultar();">



</html>

