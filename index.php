<?php
session_start();
$_SESSION['usuario'] = $_POST['usuario'];
$_SESSION['contrasena'] = $_POST['contrasena'];
echo $_SESSION['id_usuario'];
?>



<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title>Inicio</title>

<link rel="stylesheet" type="text/css" href="estilos.css"> 



</head>

<body background="img/cyan45.jpg" class="html">

<table class="centrada" align="center" width=500 height=200 cellpadding="0" cellspacing="12" border="0"  bgcolor="#FFFFFF">

<tr><td><h1>DISEÑO DE SITIOS WEB</h1></td></tr>

<tr>
	<td align="center">
    	<?php
			include("sesion.php");

		?>
    	
	</td>
</tr>
</table>	

</body>
</html>
