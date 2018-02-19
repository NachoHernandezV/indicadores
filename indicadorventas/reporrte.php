<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>INGRESAR</title>
</head>

<body bgcolor="F5FBF7">
<div align ="center">
	<table>
	
		<tr>
			<td ALIGN=CENTER>
			<font size=5 face="Times New Roman" style="color:#44822F">REPORTES</font>
			</td>
		</tr>
		<tr>
			<td ALIGN=CENTER>
			<font size=5 face="verdana" style="color:#44822F">&nbsp&nbsp&nbsp&nbsp&nbsp </font>
			</td>
		</tr>
		<tr>
			<td>
			<FORM ACTION=excelreport.php METHOD=post name="gra" id="gra">
			<input title="vergrafica" alt="vergrafica" src="excel.png" type="image" value="vergrafica" name="vergrafica" id="vergrafica" width="60" height="55" />
			<font size=3 face="verdana" style="color:#44822F">Excel</font>
			</form>
			</td>
		</tr>
		
		<tr>
			<td>
			<form action=pdfreport.php method="POST" target="ventanit" onsubmit="ventanit=window.open('','ventanit','width=900,height=600′)">
			<input title="vergraficapdf" alt="vergraficapdf" src="pdf4.png" type="image" value="vergraficapdf" name="vergraficapdf" id="vergraficapdf" width="60" height="55" />
			<font size=3 face="verdana" style="color:#44822F">Pdf</font>
			</form>
			</td>
		</tr>
	</table>
	
	</div>
</body>
</html>