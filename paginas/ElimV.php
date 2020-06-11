<?php
	//conexion a BD
	$conexion = mysqli_connect("localhost","root","","librerias");
	$id_venta = $_REQUEST['id_venta'];
	//sentencia
	mysqli_query($conexion,"DELETE FROM ventas WHERE id_venta = '$id_venta'");
	mysqli_close($conexion);
	header('Location:index.php');
?>