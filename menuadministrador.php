<?php
session_start();

include("id.php");
?>



<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title>Inicio</title>

<link rel="stylesheet" type="text/css" href="estilos.css"> 



</head>

<body background="img/cyan45.jpg" class="html">

<table class="centrada" align="center" width=500 height=300 cellpadding="0" cellspacing="12" border="0"  bgcolor="#FFFFFF">

<tr><td><h1>DISEÑO DE SITIOS WEB</h1></td></tr>
<tr>
	<td align="center">
    	<?php
		if($vali==1)
		{
		echo" 
		<table class='mini' cellpadding='0' cellspacing='12' border='0' >
		<tr>
			<td>Información del curso</td>
			<td>Temática</td>
		</tr>
		<tr>
			<td><img src='img/1492999020_browser.png' /></td>
			<td><img src='img/1492999041_compose.png' /></td>
		</tr>
		<tr>
			<td>Unidades</td>
			<td>Videos y tutoriales</td>
		</tr>
		<tr>
			<td><img src='img/1492990611_Checklist.png' /></td>
			<td><img src='img/1493192165_tutorials.png' /></td>	
		</tr>
		</table>
		";
		}
		else
		{
		include('index.php');
		}
		?>
		    	
	</td>
</tr>
<tr>
	<td>
    <a href="desconectado.php"> 
    Salir
    <img src="img/1492991725_Exit_Arrow_Door_Signout_Out_Close.png" />
    </td>
</tr>
</table>	

</body>
</html>
