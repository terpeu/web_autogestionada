<?php
include 'header.php';
include 'nav-admin.php';
?>
    

<div class="container">

<h1>Añadir plato</h1>
<form  class ='text-center' method='post' action='agregar-plato.php'>
 <div class="form-group">
   <label for="nombreplato">Nombre del Plato</label>
   <input name= 'nombre_plato' type="text" class="form-control" id="nombreplato" required placeholder="Nombre del Plato">
 </div>
 <div class="form-group">
   <label for="precio_plato">Precio Plato</label>
   <input name= 'precio_ud'type="text" class="form-control" required  value = 1.00 id="precio_plato" placeholder="Precio Plato">
   <small>Poner precio sin palabra euros y con decimales con punto</small>
 </div>

<fieldset class="border border-secondary p-2 " > 
 <legend>Elige que orden tendrán en el menú</legend>
<div class="form-check form-check-inline">
 <input class="form-check-input"required type="radio" name="orden_plato" id="primero" value="primero">
 <label class="form-check-label" for="Primero">Primero</label>
</div>
<div class="form-check form-check-inline">
 <input class="form-check-input" type="radio" name="orden_plato" id="segundo" value="segundo">
 <label class="form-check-label" for="segundo">segundo</label>
</div>
<div class="form-check form-check-inline">
 <input class="form-check-input" type="radio" name="orden_plato" id="postre" value="postre">
 <label class="form-check-label" for="postre">postre</label>
</div>
</fieldset>
<div class="form-check mt-2">
 <input name='menu_activo'class="form-check-input" type="checkbox"  id="menu_activo" value=1 checked >
 <label class="form-check-label" for="menu_activo">
   Activar dentro del menú
 </label>
</div>
<button type="submit" class=" mt-2 btn btn-primary mb-2">Agregar nuevo plato</button>
</form>


</div>

<?php
include 'footer.php';
?>