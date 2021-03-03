<!doctype html>
<html lang="es">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="">
<meta name="author" content="">
<title>Obtener valores de multiples CheckBox seleccionadas con PHP | BaulCode</title>


<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>




</head>

<body>
<header> 

</header>

<!-- Begin page content -->

<div class="container">
  <h3 class="mt-5">Obtener valores de multiples CheckBox</h3>
  <hr>
  <div class="row">
    <div class="col-8 col-md-8"> 
      <!-- Contenido -->
      
<form action="consulta.php" method="post">

<label class="heading">Seleccione su lenguaje favorito:</label>
<div class="checkbox">
  <label><input type="checkbox" name="check_lista[]" value="co_co">Compromiso Cognitivo</label>
</div>
<div class="checkbox"> 
  <label><input type="checkbox" name="check_lista[]" value="co_af">Compromiso Afectivo</label>
</div>
<div class="checkbox">
  <label><input type="checkbox" name="check_lista[]" value="co_con">Compromiso Conductual</label>
</div> 
<div class="checkbox">
  <label><input type="checkbox" name="check_lista[]" value="fcf">Factor contextual- Familia</label>
</div> 
<div class="checkbox">
  <label><input type="checkbox" name="check_lista[]" value="fcpa">Factor Contextual - Pares</label>
</div>
<div class="checkbox">
  <label><input type="checkbox" name="check_lista[]" value="fcpr">Factor Contextual - Profesorado</label>
</div> 
<button type="submit" class="btn btn-primary" name="enviar">Enviar Información</button>
<!----- Including PHP Script ----->
<?php include 'databaseconnect.php';?>
<?php include 'procesa_check.php';?>
</form>
      <!-- Fin Contenido --> 
    </div>
  </div>
  <!-- Fin row --> 
  
</div>
<!-- Fin container -->

</body>
</html>