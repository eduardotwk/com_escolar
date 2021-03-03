<?php

if(!empty($_GET['id_ficha'])){
    //DB details
    $dbHost = '167.71.191.60';
    $dbUsername = 'root';
    $dbPassword = '92mbx6#p^wq@hac^';
    $dbName = 'compromiso_escolar_corfo';
    
    //Create connection and select DB
    $db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);
    
    if ($db->connect_error) {
        die("Unable to connect database: " . $db->connect_error);
    }
    
	$consulta="select a.nombre_ficha as nombre, b.documento as contenido from ce_ficha a , ce_documentos b where b.id_ficha = a.id_ficha and a.id_ficha = {$_GET['id_ficha']}";
    //get content from database
    $query = $db->query($consulta);

	
    if($query->num_rows > 0){
        $cmsData = $query->fetch_assoc();
		
        //echo '<h4>'.utf8_encode($cmsData['parrafo1']).'</h4>';
       // echo '<p>'.utf8_encode($cmsData['parrafo2']).'</p>';
		header('Content-type: application/pdf');
		//header("Content-Disposition: attachment; filename='".$cmsData['nombre']."'"); // con esto lo descargas.
		echo $cmsData['contenido']; // con eso lo muestras en pantalla
		

    }else{
        echo 'error';
    }
}else{
    echo 'Content not found....';
}
