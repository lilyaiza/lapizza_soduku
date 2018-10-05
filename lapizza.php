<!DOCTYPE html>
<html>
<head>
	<title>lapizza</title>
</head>
<body style="background-color:powderblue;">
	<h1>Bienvenidos a Yaizipizza</h1>
<form method=post>
	<p>Nombre: <input type="text" name="nombre"></p>
	<p>Direccion: <input type="text" name="direccion"></p>

	<h3>Escoge tus ingredientes: </h3>

 
		<label>Masa: <input type="checkbox" name="Masa"></label><br>
		<label>Oregano: <input type="checkbox" name="Oregano"></label><br>
		<label>Queso: <input type="checkbox" name="Queso"></label><br>
		<label>Carne: <input type="checkbox" name="Carne"></label><br>
		<label>Bacon: <input type="checkbox" name="Bacon"></label><br>
		<label>Pepperoni: <input type="checkbox" name="Pepperoni"></label><br>
		<label>Salsa Barbacoa: <input type="checkbox" name="BBQ"></label><br>
		<label>Salsa nata: <input type="checkbox" name="Nata"></label><br>
		

		<input type="submit" name="submit" value="Submit"/>

	</form>
<br>
</body>
</html>

<?php
	include_once "lapizza2.php";

	?>

</body>
</html>