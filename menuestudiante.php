<?php
session_start();

include("id.php");

include("contador.php");

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
			<td>Información</td>
			<td>Temáticas</td>
		</tr>
		<tr>
			<td><a href='datos_informacion.php'><img src='img/1492999020_browser.png' /></a>
			</td>
			<td><a href='datos_estudiante.php'><img src='img/1492999041_compose.png' /></a>
			</td>
			
		</tr>
		<tr>
			<td>Unidades</td>
			<td>Twitter UNAD</td>
		</tr>
		<tr>
			<td><a href='datos_estudiante.php'><img src='img/1492990611_Checklist.png' /></a></td>				
			<td><a href='https://twitter.com/UniversidadUNAD'><img src='img/1493196217_twitter.png' /></a></td>
			
		</tr>
		<tr>
			<td><br></td>				
			<td><br>
				<table border='0'>
					<tr>
					<td>
						<img src='img/1493274864_38_Target_Audience.png' />
					</td>
					<td>
						<label style='width: 150px;'>Contador de visitas: ".contador()."</label>
					</td>
					</tr>
				</table>
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