<?php
require ("vista/cabecera.php")
?>
<?php
if($_POST) {
$number1 = $_POST['number1'];
$number2 = $_POST['number2'];
$suma = $number1 + $number2;
//echo $suma;
}
?>
<h1>Ejercicio 1. Calcular la Suma</h1>
<form action="" method="post">
   <div class="mb-3 row">
    <label for="number1" class="col-sm-4 col-form-label">Primer Número</label>
    <div class="col-sm-4">
      <input type="number" class="form-control" id="number1" name="number1">
    </div>
  </div>
  <div class="mb-3 row">
    <label for="number2" class="col-sm-4 col-form-label">Segundo Número</label>
    <div class="col-sm-4">
      <input type="number" class="form-control" id="number2" name="number2">
    </div>
  </div>
     <div>
      <button type="submit" class="btn btn-primary mb-3">Sumar</button>
      </div>
    </form>

  <div class="col-sm-6">
      <input type="text" class="form-control" id="" value="<?php echo $suma;?>">
    </div>
<?php
require ("vista/pie.php")
?>
