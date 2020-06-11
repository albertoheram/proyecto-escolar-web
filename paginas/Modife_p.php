<?php
	//conexion a BD
	$conexion = mysqli_connect("localhost","root","","librerias");
	$id_editorial = $_REQUEST['id_editorial'];
	$editorial = $_POST['editorial'];
	$ciudad = $_POST['ciudad'];
	$estado = $_POST['estado'];
	//sentencia
	mysqli_query($conexion,"UPDATE editoriales SET id_editorial = '$id_editorial', editorial = '$editorial', ciudad = '$ciudad',
		estado = '$estado' WHERE id_editorial = '$id_editorial'");
	mysqli_close($conexion);
	header('Location:index.php');
?>