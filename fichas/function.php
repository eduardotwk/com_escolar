<?php
//Conexion con la base de datos
function db_query($query) {
    $connection = mysqli_connect("localhost","root","","compromiso_escolar_corfo");
    $result = mysqli_query($connection,$query);
    return $result;
}


// Crear La función Insertar
function insertar($tblname,$form_data){
    $fields = array_keys($form_data);
    $sql="INSERT INTO ".$tblname."(".implode(',', $fields).")  VALUES('".implode("','", $form_data)."')";

    return db_query($sql);
}


//Seleccionar los datos de la tabla para mostrarlos.
function select_datos($tblname,$field_name,$field_id){
    $sql = "Select * from ".$tblname." where ".$field_name." = ".$field_id."";
    $db=db_query($sql);
    $GLOBALS['row'] = mysqli_fetch_object($db);
    return $sql;
}
?>