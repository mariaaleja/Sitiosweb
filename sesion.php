<?php
session_start();
	


	
			
	$conexion= pg_connect("host=localhost  dbname=gestiondenotas user=postgres password=123456")  or die("Error en la conexión.");
	
	

	$consultar=pg_query($conexion,"select id_usuario, login_usuario, pass_usuario, tipo_usuario FROM usuario");

	while($row=pg_fetch_array($consultar))
		{
		if($row['login_usuario']==$_SESSION['usuario'] and $row['pass_usuario']==$_SESSION['contrasena'])
			{			
			$tipo_usuario=$row['tipo_usuario'];
			$_SESSION['id_usuario'] = $row['id_usuario'];	
			$vali=1;
			}
		if($row['login_usuario']==$usuario and $row['pass_usuario']==$contrasena and $vali==0)
			{
			session_start();	
			$_SESSION['usuario'] = $row['login_usuario'];			
			$_SESSION['contrasena'] = $row['pass_usuario'];
			$_SESSION['id_usuario'] = $row['id_usuario'];
			$tipo_usuario=$row['tipo_usuario'];
			$vali=1;
			}	
			
		}
		if(!empty($_SESSION['usuario']) and !empty($_SESSION['contrasena']) and $vali==0)
			{
			echo "<script>			
					alert('CLAVE INVALIDA');
					</script>";
			session_destroy();	
			}

if ($vali==0) {
echo "<form action='index.php' method='post' name='formuLogin'  autocomplete='off'>
                        USUARIO:</td></tr>
					<tr>                        
      					<td><input name='usuario' type='text' size='18' ></td></tr>
    				<tr>
                    	<td>CLAVE:</span></td></tr>
				    <tr>
                    	<td><input name='contrasena' type='password' size='18'></td></tr>
				    <tr>
      					<td><input class='boton' type='submit' value='Ingresar' name='BtnSiguiente'> </form>";
}

else  {

if($vali==1)
{

echo"BIENVENID@ AL CURSO$asd</td></tr>";
switch ($tipo_usuario)
	{

	case 0:
		echo "<tr><td><a href='menuadministrador.php'>CONTINUAR</a>";
		break;
	case 1:
		echo "<tr><td><a href='menuprofesor.php'>CONTINUAR</a>";
		break;
	case 2:
		echo "<tr><td><a href='menuestudiante.php'>CONTINUAR</a>";
		break;
	}

}//fin if
else {
echo "<script>			
		alert('CLAVE INVALIDA');
		</script>";	

session_destroy();
} //fin else

}//fin else principal	
?>