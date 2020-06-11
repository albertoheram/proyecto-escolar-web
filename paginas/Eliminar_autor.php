<?php
	//conexion a BD
	$conexion = mysqli_connect("localhost","root","","librerias");
	$id_autor = $_REQUEST['id_autor'];
	//sentencia
	mysqli_query($conexion,"DELETE FROM autor WHERE id_autor = '$id_autor'");
	mysqli_close($conexion);
	header('Location:index.php');
?>