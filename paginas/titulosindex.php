<!DOCTYPE html>
<html>
<head>
	<title>Lista de títulos</title>
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
	<br>
	<br>
	<br>
	<center>
		<div><h1 class="animated fadeIn" style="color: white";>Lista de títulos.</h1></div>
	</center>
	<br>
	<section>
		<center>
		<form>
			<div class="animated fadeIn">
				<label for="caja_busquedaT" style="color: black; ">Filtrar: </label>
				<input class="animated fadeIn" type="text" name="caja_busquedaT" id="caja_busquedaT" >
			</div>
		</form>
			<br>
			<div  class="animated fadeIn" id="datosT">

			</div>
		</center>
	</section>
	<script type="text/javascript" src="jquery.js"></script>
	<script type="text/javascript" src="maintitulos.js"></script>
</body>
</html>