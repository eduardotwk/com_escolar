<!DOCTYPE html>
<html>
	<head>
	<script src="https://kit.fontawesome.com/1652fc71a3.js" crossorigin="anonymous"></script>
  </head>
  <script>
    function mostrar() {
            div = document.getElementById('table');
            div.style.display = '';
        }
    function buscar(){

    }    
  </script>
<body>
<div class="container" >
  <div id = "table" style="display: none;">
    <table >
    <td>Estrategias obtenidas para los criterios seleccionados:</td>
     <tr>
       <th>Asesoría parental</th>
     </tr>
     <tr>
       <th>Promoviendo una mentalidad de crecimiento</th>
     </tr>
     <tr>
       <th>Establecimiento de metas en conjunto</th>
     </tr>
     <tr>
       <th>Aprendiendo en base a proyectos</th>
     </tr>
     <tr>
       <th>Conectándonos con el futuro laboral</th>
     </tr>
     <tr>
       <th>contexto colaborativo</th>
     </tr>
     <tr>
       <th>Conectar el aprendizaje con la vida real</th>
     </tr>
   </table>
</div>

	<h1>Buscador</h1><h2>de estrategias</h2>
  <p>Seleccione uno o más criterios de la lista desplegable en la <br />
    caja de búsqueda. Una vez seleccionados pinche en "Buscar". <br /><br/>
    Cuando aparezcan los resultados, seleccione la estrategia de <br /> 
	su interés y pínchela para que se despliegue su descripción.</p>

	<div id="list1" class="dropdown-check-list" tabindex="100">
	<form method='post' name="formBusqueda" action='#'> 
  <span class="anchor">Seleccione Criterios</span>
  <ul class="items">
    <li><input type="checkbox" value="Compromiso Cognitivo" name="criterios[]" />Compromiso Cognitivo </li>
    <li><input type="checkbox" value="Compromiso Afectivo" name="criterios[]" />Compromiso Afectivo</li>
    <li><input type="checkbox" value="Compromiso Conductual" name="criterios[]"/>Compromiso Conductual </li>
    <li><input type="checkbox" value="Factor contextual- Familia" name="criterios[]"/>Factor contextual- Familia </li>
    <li><input type="checkbox" value="Factor Contextual - Pares" name="criterios[]"/>Factor Contextual - Pares </li>
    <li><input type="checkbox" value="Factor Contextual - Profesorado" name="criterios[]"/>Factor Contextual - Profesorado </li>
  </ul>
  
	<?php
if (isset($_POST['buscar'])) {
    if (is_array($_POST['criterios'])) {
        $selected = '';
        $num_criterios = count($_POST['criterios']);
        $current = 0;
        foreach ($_POST['criterios'] as $key => $value) {
            if ($current != $num_criterios-1)
      '<li>'.$selected .= $value.'</li> ';
            
            else
                $selected .= $value;
            $current++;
        }
       echo"<script languaje='javascript'>
       mostrar();
       </script>";
    }
    else {
        $selected = 'Debes seleccionar un criterio';
    }

	echo '<div class="msg">Criterios seleccionados:</div> <br>
  <div class="resultado">'.$selected.'</div>';
  }    
  
  ?>
</div>

</div>
<button type="submit" name= "buscar" value="buscar"> <i class="fas fa-search"></i> Buscar...</button>

</body>
</form>
<script>
	var checkList = document.getElementById('list1');
checkList.getElementsByClassName('anchor')[0].onclick = function(evt) {
  if (checkList.classList.contains('visible'))
    checkList.classList.remove('visible');
  else
  checkList.classList.add('visible');
}
</script>
</html>
<style>

div.msg{
	color:#22a2b0;
	font-family:"Fira Sans ExtraBold", sans-serif;
	font-size:20px;
	font-weight:800;
	line-height:1.2;
	margin-bottom:30px;
	margin-top:20px;
	text-align:left;
	position:absolute;
	top:40px;
  left:1%;
  width: 300px;
}
div.resultado{
	font-family:"Fira Sans Condensed", sans-serif;
	font-size: 18px;
	line-height: 2.091;
	list-style-position:outside;
	list-style-type:disc;
	margin-bottom:15px;
	margin-left:20px;
	text-align:left;
	color:#666666;
	font-weight:bolder;
	position:absolute;
	top:100px;
	right:15%;
  width: 300px;
}

button[type=submit] {
  width: auto;
  height: 40px;
  background-color: white;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border-radius: 4px;
  border: 2px solid #da9600;
  cursor: pointer;
  position: absolute;
  left: 33%;
  top: 350px;
  color:#CCCCCC;
}
button[type=submit]:hover {
  background-color: white;
  border: 2px solid #da9600;
}
 p {
	color:#000000;
	font-family:"Open Sans", sans-serif;
	font-size: 18px;
	line-height:1.4;
	margin-bottom:20px;
	text-align:justify;
	text-align-last:left;
	position:absolute;
	top: 90px;
	right: 60%;
}
div.container{
    background-color:#CCCCCC;
    width:750px;
    margin:10px 50px;
    padding:250px;
    border-radius: 10px;
	border: 1px solid #9E9E9E;
	position: relative;
	top: 100px;
	background-image: url("img/Buscador.png");
	background-size: contain;
	background-repeat: no-repeat;
	background-position: center;	
}
a{
  position: absolute;
  left: 90%;
  top: 100px;
}
h1 {
	-epub-hyphens:none;
	font-style:normal;
	font-variant:normal;
	color:#e9485e;
	font-family:"Fira Sans Condensed ExtraBold", sans-serif;
	font-size: 36px;
	font-weight:800;
	line-height:1.2;
	margin-bottom:38px;
	text-align:left;
	position:absolute;
	right: 85%;
	top: 10px;
}
h2 {
	color:#22a2b0;
	font-family:"Fira Sans ExtraBold", sans-serif;
	font-size: 36px;
	font-weight:800;
	line-height:1.2;
	margin-bottom:20px;
	text-align:left;
	position:absolute;
	right: 61%;
	top: 5px;
}
.dropdown-check-list {
  display: inline-block;
  position: absolute;
  right: 70%;
  background-color: white;
 
}
.dropdown-check-list .anchor {
  position: relative;
  cursor: pointer;
  display: inline-block;
  padding: 5px 50px 5px 10px;
  border: 2px solid #da9600;
  font-family: sans-serif;
  width: 300px;
}
.dropdown-check-list .anchor:after {
  position: absolute;
  content: "";
  border-left: 2px solid black;
  border-top: 2px solid black;
  padding: 5px;
  right: 10px;
  top: 20%;
  -moz-transform: rotate(-135deg);
  -ms-transform: rotate(-135deg);
  -o-transform: rotate(-135deg);
  -webkit-transform: rotate(-135deg);
  transform: rotate(-135deg);
}
.dropdown-check-list .anchor:active:after {
  right: 8px;
  top: 21%;
}
.dropdown-check-list ul.items {
  padding: 2px;
  display: none;
  margin: 0;
  border: 1px solid #ccc;
  border-top: none;
  font-family: sans-serif;
  color: white;
}
.dropdown-check-list ul.items li {
  list-style: none;
  font-family: sans-serif;
  background-color:  #22a2b0;
  
}
.dropdown-check-list.visible .anchor {
  color: #0094ff;
}
.dropdown-check-list.visible .items {
  display: block;
}
table{
position:absolute;
left:50%;
top: 70px;
color:#fc455c;
font-family:"Fira Sans Condensed", sans-serif;
font-style:normal;
font-weight:bold;
text-decoration:underline;
font-weight:inherit;
text-align:left;
border-spacing: 7px;
border: 2px solid #da9600;
border-radius:5px;
background-color:#ffffff;
}
td{
  color:#22a2b0;
  font-family:"Fira Sans ExtraBold", sans-serif;
  font-weight:bold;
text-decoration:underline;
}
</style>



