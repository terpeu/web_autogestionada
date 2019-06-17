
<!DOCTYPE html>
<html lang="es">
<head>
	<title>title</title>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/style.css" />
</head>

<body>
<?php 
include 'includes/datos.php';
  include 'includes/functions.php';
?>
    

<div class="container">

<h1>Restaurante el Tomillo</h1>
<div class"" id="pizarra">
<h2>Menú del día</h2>
<h3>Primeros</h3>
<?php
consulta_lista($consulta1);
?>

<h3>Segundos</h3>
<?php
consulta_lista($consulta2);
?>



<h3>Postres</h3>
<?php
consulta_lista($consulta3);
?>




<h3>incluye</h3>
pan, vino o café
<h3>Precio: 20.00€</h3></div>
<address>
Avenida de Reyes Católicos 80, <br> Villarrobledo <br>, España
</address>


</div>

</body>
</html>