<?php
	//conexion a BD
	$conexion = mysqli_connect("localhost","root","","librerias");
	$id_descuento = $_REQUEST['id_descuento'];
	//sentencia
	mysqli_query($conexion,"DELETE FROM descuentos WHERE id_descuento = '$id_descuento'");
	mysqli_close($conexion);
	header('Location:index.php');
?>