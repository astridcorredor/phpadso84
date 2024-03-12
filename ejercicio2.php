<?php
require ("vista/cabecera.php")
?>
<?php
if($_POST) {
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido']; 
//echo $nombre;
}
?>
<?php
//require (vista/cabecera.php)
?>
   <h1>Ejercicio 2. Datos Personales</h1> 
   <form action="" method="post">
   <div class="mb-3 row">
    <label for="nombre" class="col-sm-2 col-form-label">Nombre</label>
    <div class="col-sm-6">
      <input type="text" class="form-control" id="nombre" name="nombre">
    </div>
  </div>
  <div class="mb-3 row">
    <label for="apellido" class="col-sm-2 col-form-label">Apellido</label>
    <div class="col-sm-6">
      <input type="text" class="form-control" id="apellido" name="apellido">
    </div>
  </div>
     <div>
      <button type="submit" class="btn btn-primary mb-3">Mostrar</button>
      </div>
    </form>

  <div class="col-sm-6">
      <input type="text" class="form-control" id="" value="<?php echo $nombre," ", $apellido;?>">
    </div>
<?php
require ("vista/pie.php")
?>
