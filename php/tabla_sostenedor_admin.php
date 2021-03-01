<?php 
session_start();
error_reporting(E_ERROR | E_PARSE);
if(isset($_SESSION["user"])){
    $id_user = $_SESSION["user"];
require_once '../conf/conexion_db.php';
require_once '../conf/funciones_db.php';

vista_sostenedores_admin(); 
}
else {
    header("location:../index2.php");
}
?>
<script>
actualiza_sostenedor_admin()
diseno_tabla_sostenedor()
</script>