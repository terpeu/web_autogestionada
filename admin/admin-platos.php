<?php include 'header.php' ?>
<?php include 'nav-admin.php' ?>
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
    

<div class="container">

<h1>Administrar platos</h1>
<a href="nuevo-plato.php"  class= "btn  btn-primary mb-2">Añadir plato</a>

<table class ="table table-striped table-dark">
 <tr>
   
   <th>ID</th>
    <th>Nombre Plato</th>
	 <th>Orden Plato</th>
	  <th>Precio</th>
	   <th>Activo</th>
	    <th>Modificar</th>
		 <th>Borrar</th>
	   
   
 </tr>
 <?php

while ($fila = mysqli_fetch_array($consulta)) {
	echo '<tr>';
	echo '<td>'. $fila['id'].'</td>';
	echo '<td>'. $fila['nombre_plato'].'</td>';
	echo '<td>'. $fila['precio_ud'].'€</td>';
	echo '<td>'. $fila['orden_plato'].'</td>';
	if($fila['menu_activo']){
		echo '<td class=".bg-success"> activo </td>';
	}else{
		echo '<td> class=""> Inactivo </td>';
	}
	//echo '<td>'. $fila['menuactivo'].'</td>';
	
	echo "<td><a href='modificar-plato.php?id=".$fila['id'].
	" ' class='btn btn-warning'>Modificar</a></td>";
	echo "<td><a href='borrar-plato.php?id=".$fila['id'].
	" ' class='btn btn-danger'>Borrar</a></td>";
	echo '<tr>';
	// Type your code here
}
mysqli_close($conex);

?>
</table>

</div>

<?php include 'footer.php' ?>