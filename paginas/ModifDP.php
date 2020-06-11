<?php
	//conexion a BD
	$conexion = mysqli_connect("localhost","root","","librerias");
	$id_descuento = $_REQUEST['id_descuento'];
	$rinicial = $_POST['rinicial'];
	$rfinal = $_POST['rfinal'];
	$descuento = $_POST['descuento'];
	$id_libreria = $_POST['id_libreria'];
	//sentencia
	mysqli_query($conexion,"UPDATE descuentos SET id_descuento = '$id_descuento', rinicial = '$rinicial', rfinal = '$rfinal',
		descuento = '$descuento', id_libreria = '$id_libreria' WHERE id_descuento = '$id_descuento'");
	mysqli_close($conexion);
	header('Location:index.php');
?>