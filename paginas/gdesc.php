<?php
	//conexion a BD
	$conexion = mysqli_connect("localhost","root","","librerias");
	//$id_autor = $_POST['id_autor'];
	$id_descuento = $_POST['id_descuento'];
	$rinicial = $_POST['rinicial'];
	$rfinal = $_POST['rfinal'];
	$descuento = $_POST['descuento'];
	$id_libreria = $_POST['id_libreria'];
	//sentencia
	mysqli_query($conexion,"INSERT INTO descuentos VALUES (NULL,'$rinicial','$rfinal','$descuento', '$id_libreria')");
	mysqli_close($conexion);
	header('Location:index.php');
?>