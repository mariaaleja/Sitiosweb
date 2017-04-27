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
            <h1>Información del curso</h1>
			
			<h2>
			
			CODIGO DEL CURSO: 301122<br>
NOMBRE DEL CURSO: Diseños de Sitios Web <br>
TUTOR: Pendiente por asignar<br>

			</h2>
				<br><h3>METODOLOGIA: 
La universidad ofrece sus diferentes programas a través de la formación a distancia. Esta metodología emplea medios y mediaciones tecnológicas para que el estudiante pueda adelantar sus estudios a cualquier edad, en cualquier momento y desde el sitio en donde se encuentre.
</h3>

				
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
