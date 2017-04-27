<?php
session_start();

include("id.php");
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

<table class="centrada" align="center" width=500 height=300 cellpadding="0" cellspacing="12" border="0"  bgcolor="#FFFFFF">

<tr><td><h1>UNIDADES</h1></td></tr>
<tr>
	<td align="center">
    	<?php
		if($vali==1)
		{
		echo" 
		<form class='contact_form' action='datos_estudianter.php' method='post' autocomplete='off' id='fo1' name='fo1'>
    	<ul>
       <li>
            <h1>Unidad  1. Introducción al Diseño de Sitios Web</h1>
			
			<h2>
			
			1.	Referentes del Diseño Web<br>
			2.	Sistemas de Control de versiones <br><br>
			3.	Editores de código para la web <br>
			</h2>
				<br><h3>COMPETENCIA: El estudiante 
reconoce los Principios y fundamentos de los sistemas de control de versiones GIT y GITHUB para la gestión de un proyecto de  Diseño Web.</h3>

				
       </li>
	  
        
    	</ul>
		</form>		";
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
    <a href="menuestudiante.php"> 
    Atras
    <img src="img/1492991725_Exit_Arrow_Door_Signout_Out_Close.png" />
    </td>
</tr>
</table>	

</body>
</html>
