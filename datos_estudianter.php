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

<tr><td><h1>MENU ESTUDIANTE</h1></td></tr>
<tr>
	<td align="center">
    	<?php
		if($vali==1)
		{
			$tipo_doc_estudiante=$_POST['tipo_doc_estudiante'];
			$doc_estudiante=$_POST['doc_estudiante'];
			$nombre_estudiante=$_POST['nombre_estudiante'];
			$tel_estudiante=$_POST['tel_estudiante'];
			$correo_estudiante=$_POST['correo_estudiante'];
			$fechanac_nacimiento=$_POST['fechanac_nacimiento'];
			$ciudad_estudiante=$_POST['ciudad_estudiante'];
			$carrera_estudiante=$_POST['carrera_estudiante'];
			$id_usuario_estudiant=$_SESSION['id_usuario'];	
			
		
			$conexion= pg_connect("host=localhost  dbname=gestiondenotas user=postgres password=123456")  or die("Error en la conexión.");
			
			$sql="insert into estudiantes
					(tipo_doc_estudiante,										
					doc_estudiante,
					nombre_estudiante,
					tel_estudiante,
					correo_estudiante,
					fechanac_nacimiento,
					ciudad_estudiante,
					carrera_estudiante,
					id_usuario_estudiante) 	values(
						'$tipo_doc_estudiante',
						'$doc_estudiante',
						'$nombre_estudiante',
						'$tel_estudiante',
						'$correo_estudiante',
						'$fechanac_nacimiento',
						'$ciudad_estudiante',
						'$carrera_estudiante',
						'$id_usuario_estudiant')";
			

			$sql=str_replace("''","NULL",$sql);
			$resultado=pg_query($conexion,$sql);
			if($resultado)
				echo "<script>alert('Registro realizado con éxito.')
					$('#fo2 :input').prop('disabled', true);
					</script>";
			else
				echo "<script>alert('Error al registrar.')</script>";
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
    <a href="datos_estudiante.php"> 
    Atras
    <img src="img/1492991725_Exit_Arrow_Door_Signout_Out_Close.png" />
    </td>
</tr>
</table>	

</body>
</html>
