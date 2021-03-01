<?php
session_start();
error_reporting(E_ERROR | E_PARSE);
if(isset($_SESSION["user"])){

require_once '../conf/conexion_db.php';
require_once '../conf/funciones_db.php';

$valor = filter_var($_POST["term"], FILTER_SANITIZE_STRING);

$con = connectDB_demos();
        $query = $con->prepare("SELECT id_ce_establecimiento AS id, ce_establecimiento_nombre AS text FROM ce_establecimiento ce WHERE ce.ce_establecimiento_nombre like ?");
        $query->execute(["%$valor%"]);

        $json = [];
        while ($row = $query->fetch(PDO::FETCH_ASSOC)) {
            $json[] = ['id'=>$row['id'], 'text'=>$row['text']];
        }

echo json_encode($json);  

}

?>