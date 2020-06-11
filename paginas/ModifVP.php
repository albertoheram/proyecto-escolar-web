<?php
	//conexion a BD
	$conexion = mysqli_connect("localhost","root","","librerias");
	$id_venta = $_REQUEST['id_venta'];
	$fecha = $_POST['fecha'];
	$id_libreria = $_POST['id_libreria'];
	//sentencia
	mysqli_query($conexion,"UPDATE ventas SET id_venta = '$id_venta', fecha = '$fecha', id_libreria = '$id_libreria' 
		WHERE id_venta = '$id_venta'");
	mysqli_close($conexion);
	header('Location:index.php');
?>