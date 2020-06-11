<?php
	//conexion a BD
	$conexion = mysqli_connect("localhost","root","","librerias");
	//$id_autor = $_POST['id_autor'];
	$id_libreria = $_POST['id_libreria'];
	$nombre_lib = $_POST['nombre_lib'];
	$calle_lib = $_POST['calle_lib'];
	$ciudad_lib = $_POST['ciudad_lib'];
	$pais_lib = $_POST['pais_lib'];
	$cp_lib = $_POST['cp_lib'];
	//sentencia
	mysqli_query($conexion,"INSERT INTO librerias VALUES (NULL,'$nombre_lib','$calle_lib','$ciudad_lib', '$pais_lib', '$cp_lib')");
	mysqli_close($conexion);
	header('Location:index.php');
?>