<?php
	//conexion a BD
	$conexion = mysqli_connect("localhost","root","","librerias");
	//$id_autor = $_POST['id_autor'];
	$Nombre_autor = $_POST['Nombre_autor'];
	$ap_autor = $_POST['ap_autor'];
	$tel_autor = $_POST['tel_autor'];
	$calle_autor = $_POST['calle_autor'];
	$ciudad_autor = $_POST['ciudad_autor'];
	$estado_autor = $_POST['estado_autor'];
	$pais_autor = $_POST['pais_autor'];
	//sentencia
	mysqli_query($conexion,"INSERT INTO autor VALUES (NULL,'$Nombre_autor','$ap_autor','$tel_autor',
		'$calle_autor','$ciudad_autor','$estado_autor','$pais_autor')");
	mysqli_close($conexion);
	header('Location:index.php');
?>