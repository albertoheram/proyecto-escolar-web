<!DOCTYPE html>
<html>
<head>
	<title>Lista de autores</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="Tabla1.css">
	<link rel="stylesheet" type="text/css" href="animate.css">
	<style type="text/css">
	*{
 		font-family: helvetica;

	}
	table 
	{
		

	}
	th,td 
	{
		padding: 15px;
		border:0;
	}
	thead
	{
		background-color: #ff003e;
		color: white;
	}
	input,textarea
	{
		outline: none;
		border: solid 1px #939292;
		padding: 3px;
		border-radius: 3px;
		width: 200px;
		height: 20px;
	}
	label
	{
		font-family: helvetica;
		font-size: 20px;
	}
	form
	{
		margin: 0 auto;
		width: 300px;
		background-color: white;
		padding: 10px;
		border-radius: 3px;
	}
	</style>
</head>
<body id="fondo">
<center>
<br>
<br>
<br>
<br>
	<div class="titulo">
		<div id = "t1"><h1 id="t2">Lista de Ventas.</h1></div>
	</div></center>
	<br>
	<section>
		<center>
		<form>
			<div >
				<label for="caja_busquedaV" style="color: black; ">Filtrar: </label>
				<input  type="text" name="caja_busquedaV" id="caja_busquedaV" >
			</div>
		</form>
			<br>
			<div id="datosV">

			</div>
		</center>
	</section>
	<script type="text/javascript" src="jquery.js"></script>
	<script type="text/javascript" src="mainV.js"></script>
</body>
</html>