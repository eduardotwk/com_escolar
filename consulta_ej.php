
<!DOCTYPE html>

<html>
<head>
<?php
$incl = include("databaseconnect.php");
?>
  <title>Demo de menú desplegable</title>
  <meta charset="utf-8">
</head>
<body>
  <div>                        
    <p>Seleccione un pais del siguiente menú:</p>
    <p>Paises:
      <select>
        <option value="0">Seleccione:</option>
        <?php
        if($incl){
            $consulta = "SELECT nombre_ficha FROM ficha";
            $resultado = mysqli_query($conn,$consulta);
            while($valores = mysqli_fetch_array($resultado)) {
            echo '<option value="'.$valores['id_ficha'].'">'.$valores['nombre_ficha'].'</option>';
          }
        }
        ?>
      </select>
      <button>Enviar</button>
    </p>
  </div>
</body>

</html>