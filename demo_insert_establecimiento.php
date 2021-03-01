<?php
session_start();

header('Content-Type: text/html; charset=UTF-8');

require_once 'conf/conexion_db.php';
require_once 'conf/funciones.php';
require_once 'conf/funciones_db.php';

$pais_establecimiento = 1;

$xlsx = new SimpleXLSX($_FILES['file']['tmp_name']);

$con = connectDB_demos();

$cantidad = 0;

$query = $con->prepare("SELECT ce_establecimiento_rbd FROM ce_establecimiento WHERE ce_establecimiento_rbd = :rbd");



foreach ($xlsx->rows() as $fila) {
    $rbd = $fila[1];

    $query->execute([
        "rbd" => $rbd
    ]);

    $resultado = $query->rowCount();

    if ($resultado >= 1) {
        $cantidad ++;
    }
}

$con = NULL;

if ($cantidad != 0) {
    $datos = array(
        'estado' => '2'
    );
    header('Content-Type: application/json');
    echo json_encode($datos, JSON_FORCE_OBJECT);
} else if ($cantidad == 0) {


    $values = array();
    $contador = 0;

    foreach ($xlsx->rows() as $fila) {

        if ($contador >= 2) {
            $nombre = $fila[0];
            $rbd = filter_var($fila[1], FILTER_SANITIZE_NUMBER_INT);
            $nuevo = guarda_establecimientos($nombre, $rbd, $pais_establecimiento, "");
        }
        $contador ++;
    }
    if ($nuevo == TRUE) {

        $datos = array(
            'estado' => '1'
        );
        header('Content-Type: application/json');
        echo json_encode($datos, JSON_FORCE_OBJECT);
    } else {
        $datos = array(
            'estado' => '0'
        );
        header('Content-Type: application/json');
        echo json_encode($datos, JSON_FORCE_OBJECT);
    }  
}
?>