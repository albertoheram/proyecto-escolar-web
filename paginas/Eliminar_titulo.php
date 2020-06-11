<?php
	//conexion a BD
	$conexion = mysqli_connect("localhost","root","","librerias");
	$id_titulo = $_REQUEST['id_titulo'];
	//sentencia
	mysqli_query($conexion,"DELETE FROM titulos WHERE id_titulo = '$id_titulo'");
	mysqli_close($conexion);
	header('Location:index.php');
?>