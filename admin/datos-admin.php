<?php
// función par conectarnos con la base de datos
$host='localhost';
$usuario='root';
$clave = '';
$base ='webautogestionada';
//
$conex = mysqli_connect($host,$usuario,$clave, $base) or die('No se ha podido conectar con la base de datos');
// Change character set to utf8
mysqli_set_charset($conex,"utf8");
//preparamos los ordenes 
$sql= "SELECT * FROM platos ORDER BY orden_plato ";

// ejecutamos las consultas
$consulta = mysqli_query($conex, $sql);

?>
