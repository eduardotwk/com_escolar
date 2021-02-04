<?php
include 'databaseconnect.php';
$consulta = "select * from ficha";
$flag=false;
$where=" where ";

if(isset($_POST['enviar'])){
	if(!empty($_POST['check_lista'])) {
		// primero cuentas los checkbox
		$checked_contador = count($_POST['check_lista']);
		
		/* Recorres el arreglo con las opciones seleccionadas y vas completando el where*/
		echo "<p><b>Criterios Seleccionados:</b></p>";
		foreach($_POST['check_lista'] as $seleccion) {
			switch($seleccion){
				case "co_co":
					echo "<li>Compromiso Cognitivo</li>";
					$where .= " compromiso_cognitivo=1 ";
					$flag=true;
					break;
				case "co_af":
					echo "<li>Compromiso Afectivo</li>";
					if($flag){
						$where .=" or compromiso_afectivo=1 ";
					}else {
						$where .=" compromiso_afectivo=1 ";
						$flag=true;
					}	
					break;
				case "co_con":
					echo "<li>Compromiso Conductual</li>";
					if($flag){
						$where .=" or compromiso_conductual =1 ";
					}else {
						$where .=" compromiso_conductual=1 ";
						$flag=true;
					}	
					break;
				case "fcf":
					echo "<li>Factor contextual- Familia</li>";
					if($flag){
						$where .=" or factor_apoyo_familia =1 ";
					}else {
						$where .=" factor_apoyo_familia=1 ";
						$flag=true;
					}	
					break;
				case "fcpa":
					echo "<li>Factor contextual- Pares</li>";
					if($flag){
						$where .=" or factor_apoyo_pares =1 ";
					}else {
						$where .=" factor_apoyo_pares=1 ";
						$flag=true;
					}
					break;
				case "fcpr":
					echo "<li>Factor contextual- Profesorado</li>";
					if($flag){
						$where .=" or factor_apoyo_profesorado =1 ";
					}else {
						$where .=" factor_apoyo_profesorado=1 ";
						$flag=true;
					}
					break;
			}
		}
		$consulta .= $where;
		echo "<br/><b>Nota :</b> <span>La query que salio ".$consulta."</span>";
		//echo "<br/><b>Nota :</b> <span>Ahora ya tienes el acceso a la query.</span>";
	}
	else{
		echo "<p><b>Por favor seleccione al menos una opción.</b></p>";
	}
}
?>
<style>
	li{
        color: #000000;
        font-family: "Open Sans", sans-serif;
        font-size: 18px;
       
    }
	p{
        color: #000000;
        font-family: "Open Sans", sans-serif;
        font-size: 18px;
       
    }
</style>
