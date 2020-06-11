<?php
	$usuario = $_POST ['usuario'];
	$clave = $_POST ['clave'];

	$conexion = mysqli_connect("localhost","root","","librerias");
	$consulta = "SELECT * FROM login WHERE usuario = '$usuario' and clave = '$clave'";
	$resultado = mysqli_query($conexion,$consulta);
	$filas = mysqli_num_rows($resultado);

	if ($filas>0)
	{
		header("location: ../paginas/index.php");
	}
	else
	{
		echo "error";
	}
	mysqli_free_result($resultado);
	mysqli_close($conexion);
?>