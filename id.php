<?php
session_start();
				
	$conexion= pg_connect("host=localhost dbname=gestiondenotas user=postgres password=123456")  or die("Error en la conexión.");
	
	$consultar=pg_query($conexion,"select login_usuario, pass_usuario, tipo_usuario FROM usuario");

	while($row=pg_fetch_array($consultar))
		{
		if($row['login_usuario']==$_SESSION['usuario'] and $row['pass_usuario']==$_SESSION['contrasena'])
			{
			$tipo_usuario=$row['tipo_usuario'];				
			$vali=1;
			}
		}	

?>