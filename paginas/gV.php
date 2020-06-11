<?php
	//conexion a BD
	$conexion = mysqli_connect("localhost","root","","librerias");
	//$id_autor = $_POST['id_autor'];
	$id_venta = $_POST['id_venta'];
	$fecha = $_POST['fecha'];
	$id_libreria = $_POST['id_libreria'];
	//sentencia
	mysqli_query($conexion,"INSERT INTO ventas VALUES (NULL,'$fecha','$id_libreria')");
	mysqli_close($conexion);
	header('Location:index.php');
?>