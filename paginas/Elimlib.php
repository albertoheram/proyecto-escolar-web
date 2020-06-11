<?php
	//conexion a BD
	$conexion = mysqli_connect("localhost","root","","librerias");
	$id_libreria = $_REQUEST['id_libreria'];
	//sentencia
	mysqli_query($conexion,"DELETE FROM librerias WHERE id_libreria = '$id_libreria'");
	mysqli_close($conexion);
	header('Location:index.php');
?>