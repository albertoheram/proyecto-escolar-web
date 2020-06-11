<?php
	//conexion a BD
	$conexion = mysqli_connect("localhost","root","","librerias");
	//$id_autor = $_POST['id_autor'];
	$id_editorial = $_POST['id_editorial'];
	$editorial = $_POST['editorial'];
	$ciudad = $_POST['ciudad'];
	$estado = $_POST['estado'];
	//sentencia
	mysqli_query($conexion,"INSERT INTO editoriales VALUES (NULL,'$editorial','$ciudad','$estado')");
	mysqli_close($conexion);
	header('Location:index.php');
?>