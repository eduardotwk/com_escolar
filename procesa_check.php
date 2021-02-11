<?php
include 'databaseconnect.php';
$consulta = "select * from ce_ficha";
$flag = false;
$where = " where ";

if (isset($_POST['enviar'])) {
	if (!empty($_POST['check_lista'])) {
		// primero cuentas los checkbox
		$checked_contador = count($_POST['check_lista']);

		/* Recorres el arreglo con las opciones seleccionadas y vas completando el where*/
		echo "<div id='respContent'>";
		echo "<p class=tit>Criterios Seleccionados:</p>";
		echo "<hr class=subtitulo>";
		foreach ($_POST['check_lista'] as $seleccion) {
			switch ($seleccion) {
				case "co_co":
					echo "<li class=criterios>Compromiso Cognitivo</li>";
					$where .= " compromiso_cognitivo=1 ";
					$flag = true;
					break;
				case "co_af":
					echo "<li class=criterios>Compromiso Afectivo</li>";
					if ($flag) {
						$where .= " or compromiso_afectivo=1 ";
					} else {
						$where .= " compromiso_afectivo=1 ";
						$flag = true;
					}
					break;
				case "co_con":
					echo "<li class=criterios>Compromiso Conductual</li>";
					if ($flag) {
						$where .= " or compromiso_conductual =1 ";
					} else {
						$where .= " compromiso_conductual=1 ";
						$flag = true;
					}
					break;
				case "fcf":
					echo "<li class=criterios>Factor contextual- Familia</li>";
					if ($flag) {
						$where .= " or factor_apoyo_familia =1 ";
					} else {
						$where .= " factor_apoyo_familia=1 ";
						$flag = true;
					}
					break;
				case "fcpa":
					echo "<li class=criterios>Factor contextual- Pares</li>";
					if ($flag) {
						$where .= " or factor_apoyo_pares =1 ";
					} else {
						$where .= " factor_apoyo_pares=1 ";
						$flag = true;
					}
					break;
				case "fcpr":
					echo "<li class=criterios>Factor contextual- Profesorado</li>";
					if ($flag) {
						$where .= " or factor_apoyo_profesorado =1 ";
					} else {
						$where .= " factor_apoyo_profesorado=1 ";
						$flag = true;
					}
					break;
			}
		}
		$consulta .= $where;
		//echo "<br/><br/><br/><br/><br/><br//><br/><br/><br/><br/><br/><br/><b>Nota :</b> <span>La query que salio " . $consulta . "</span>";
		//echo "<br/><b>Nota :</b> <span>Ahora ya tienes el acceso a la query.</span>";
		echo "</div>";
		$result = $conn->query($consulta);
		echo	"<table id=fichas class=fichas>";
		echo " <thead><tr><th class= tittable>Estrategias obtenidas para los criterios seleccionados: </th></tr></thead>";
		while($row =  $result->fetch_array()) {
		
		echo "  <tbody><tr><td><li class = contenido>".utf8_encode($row["nombre_ficha"])."</li></td></tr> </tbody>";
		}
	echo	"</table>";
	} else {
		echo "<div id='respContent'><p class=criterios><b>Por favor seleccione al menos un criterio</b></p></div>";
	}
}
