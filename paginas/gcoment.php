<?php
	//conexion a BD
	$conexion = mysqli_connect("localhost","root","","librerias");
	//$id_autor = $_POST['id_autor'];
	$id_comentario = $_POST['id_comentario'];
	$observacion = $_POST['observacion'];
	$id_autor = $_POST['id_autor'];
	//sentencia
	mysqli_query($conexion,"INSERT INTO comentarios VALUES (NULL,'$observacion','$id_autor')");
	mysqli_close($conexion);
	header('Location:index.php');
?>