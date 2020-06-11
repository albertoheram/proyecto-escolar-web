<!DOCTYPE html>
<html>
<head>
	<title>Librerías</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="Titulos.css">
	<style>
* {
    box-sizing: border-box;
  }
  
   
   #header1 {
    margin:auto;
    width:100%;
    font-family:Helvetica;
   }
   
   ul, ol {
    list-style:none;
   }
   
   .nav > li {
    float:left;
   }
   
   .nav li a {
    background-color:black;
    color:#fff;
    text-decoration:none;
    padding:10px 12px;
    display:block;
   }
   
   .nav li a:hover {
    background-color:#434343;
   }
   
   .nav li ul {
    display:none;
    position:absolute;
    min-width:140px;
   }
   
   .nav li:hover > ul {
    display:block;
   }
   
   .nav li ul li {
    position:relative;
   }
   
   .nav li ul li ul {
    right:-140px;
    top:0px;
    }
body {
    font-family: Arial, Helvetica, sans-serif;
}

/* Style the header */
#header {
    background-color: black;
    padding: 30px;
    text-align: center;
    font-size: 35px;
    color: white;
}

/* Create two columns/boxes that floats next to each other */
.nav1 {
    float: left;
    width: 30%;
    height: 300px; /* only for demonstration, should be removed */
    background: #ccc;
    padding: 20px;
}

/* Style the list inside the menu */
.nav1 ul {
    list-style-type: none;
    padding: 0;
}


/* Responsive layout - makes the two columns/boxes stack on top of each other instead of next to each other, on small screens */
@media (max-width: 600px) {
    nav, article {
        width: 100%;
        height: auto;
    }
}
</style>
</head>
<body id="fondo">
	<br>
	<?php
		$id_titulo = $_REQUEST['id_titulo'];
		$conexion = mysqli_connect("localhost","root","","librerias");
		$resultado = mysqli_query($conexion,"SELECT * FROM titulos WHERE id_titulo = $id_titulo");
		$numreg = mysqli_num_rows($resultado);
		$numreg=mysqli_fetch_assoc($resultado);		
	?>
	<header id="header">
  <font color="white"><h2 class="animated fadeIn">Librerías</h2></font>
</header>
<br>
<br>
<br>
<br>
<br>
	<form action="Modificartitulo_proceso.php?id_titulo=<?php echo $numreg['id_titulo']?>" method="POST" class="form">									
		<center><img src="../Diseño/imagenes/book.png" style=" width: 80px;height: 80px;border: 0;"></center>
		<center><h1 id="t3">Títulos</h1></center>
		<center>
			<br><br>
      <label class="et">Título</label> <br>
      <input class="intext" type="text" name="titulo" value="<?php echo $numreg['titulo']; ?>" required pattern="[A-Za-z]{1,30}" required title="Completa este campo utilizando solo letras" /> <br> <br>
      <label class="et">Tipo</label> <br>
      <input class="intext" type="text" name="tipo" value="<?php echo $numreg['tipo']; ?>" required pattern="{1,30}" required title="Completa este campo utilizando solo letras" /> <br> <br>
      <label class="et">Precio</label> <br>
      <input class="intext" type="number" name="precio" step="any" min="1" value="<?php echo $numreg['precio']; ?>" required title="Completa este campo utilizando solo números" /> <br> <br>
      <label class="et">Adelanto</label> <br>
      <input class="intext" type="number" name="adelanto" step="any" min="1" value="<?php echo $numreg['adelanto']; ?>" required title="Completa este campo utilizando solo números" /> <br> <br>
      <label class="et">Ventas totales</label> <br>
      <input class="intext" type="text" name="ventast" value="<?php echo $numreg['ventas_totales']; ?>" required pattern="{1,30}" required title="Completa este campo utilizando solo letras" /> <br> <br>
      <label class="et">Fecha de publicación</label> <br>
      <input class="intext" type="text" name="fechap" value="<?php echo $numreg['fecha_pub']; ?>" required title="Completa este campo" /> <br> <br>
      <label class="et">Nota</label> <br>
      <input class="intext" type="text" name="nota" value="<?php echo $numreg['nota']; ?>" required pattern="{1,50}" required title="Completa este campo utilizando solo letras" /> <br> <br>
      <select name="id_editorial" id="id_editorial" value="<?php echo $numreg['id_editorial']; ?>" required>
      <option>Seleccione ID</option>
        <?php
          $conexion = mysqli_connect("localhost","root","","librerias");
          //$sql = "SELECT * FROM editoriales";
          //$res = mysqli_query($conexion,$sql);
          $sql = $conexion->query("SELECT * FROM editoriales");
          //$numreg = mysqli_num_rows($res);
          //if ($numreg>0)
          //{
            while ($fila = $sql->fetch_array()) 
            {
              echo "<option value'".$fila['id_editorial']."'>".$fila['id_editorial']."</option>";
            }
          //}
        ?>  
      </select>
      <br>
      <br>
      <input type="submit" class="btn btn1" value="Enviar"> 
		</center>
	</form>
</body>
</html>