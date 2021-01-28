<!DOCTYPE html>
<html>
  <head>
  <script src="https://kit.fontawesome.com/1652fc71a3.js" crossorigin="anonymous"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <title>Buscador de PDFs</title>
    
  </head>

  <body>
  <h1>Buscador de Estrategias</h1>
    <form action="<?= $_SERVER['PHP_SELF'] ?>" method="post">
      <input type="text" name="buscar" placeholder="Documento a buscar"
             value="<?= isset($_POST['buscar'])?htmlspecialchars($_POST['buscar']):'' ?>" />
      <button type="submit" value="Buscar" > <i class="fas fa-search"></i> Buscar</button>
    </form>
    <img src="img/ejemplojpeg.jpeg">
<?php
if (isset($_POST['buscar'])) {
  include 'vendor/autoload.php';
  /* Configurar 'es_ES.UTF8' o cualquier local UTF-8 disponible para quitar
    el que viene por defecto, POSIX, que no funciona correctamente. Ojo con la
    local 'C.UTF-8': no convierte signos de puntuación como exclamaciones. */
  setlocale(LC_CTYPE, 'es_ES.UTF-8', 'es.UTF-8', 'C.UTF-8');
  $post = strtolower(iconv(mb_detect_encoding($_POST['buscar'], 'utf-8,iso-8859-15'), 'ASCII//TRANSLIT', $_POST['buscar']));
  echo "<div class=b><p class=parrafo2><strong><u> Resultados para el criterio seleccionado</u></strong>'", htmlspecialchars($post), "'</p></div>\n";
  /* Subdirectorio "pdf" dentro de la ruta actual */
  $directorio = opendir(__DIR__ . '/docs');
  /* Vamos obteniendo los archivos uno a otro */
  while ($archivo = readdir($directorio)) {
    /* Si el archivo no tiene extensión '.pdf' pasamos al siguiente */
    if (!preg_match('/\.pdf$/i', $archivo)) {
      continue;
    }
    /* Obtenemos el contenido del archivo PDF */
    $parser = new Smalot\PdfParser\Parser();
    $pdf = $parser->parseFile(__DIR__ . '/docs/' . $archivo);
    $texto = $pdf->getText();
    /* Normalizamos el contenido del documento PDF igual que hicimos con la consulta */
    $posicion_coincidencia = strpos($texto, $post);
    if ($posicion_coincidencia !== false) {
      echo ' <a href="docs/', urlencode($archivo), '">',
        htmlspecialchars($archivo), '</a><br><br> </p>';
    } 
  }
}
?>
  </body>
  <head>
  <style>
  input[type=text], select {
  width: 20%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  position: absolute;
  right : 69%;
  top: 190px;
}

button[type=submit] {
  width: 8%;
  background-color: #C0C0C0;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  position: absolute;
  right: 59%;
  top: 190px;
}

button[type=submit]:hover {
  background-color: #C0C0C0;
}
div.b {
  position: absolute;
  top: 240px;
} 
body { background-color:#DCDCDC; 
}
img{
  position: absolute;
  left: 65%;
  top: 150px;
}
a{
  font-family: sans-serif;
  position: relative;
  top: 250px;
  color:	#00b3b3;
}
p.parrafo{
  font-family: sans-serif;
  position: relative;
  top: 250px;
  color:	#00b3b3;
}
p.parrafo2{
  font-family: sans-serif;
  color: #00b3b3;
}
h1{
  font-family: sans-serif;
  color:#00b3b3;
}
  </style>
  </head>
</html>