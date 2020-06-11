<?php
	//conexion a BD
	$conexion = mysqli_connect("localhost","root","","librerias");
	$id_regalia = $_REQUEST['id_regalia'];
	//sentencia
	mysqli_query($conexion,"DELETE FROM regalias WHERE id_regalia = '$id_regalia'");
	mysqli_close($conexion);
	header('Location:index.php');
?>