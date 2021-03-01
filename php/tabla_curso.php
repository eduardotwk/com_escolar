<?php 
session_start();
error_reporting(E_ERROR | E_PARSE);
if(isset($_SESSION["user"])){
    $id_establecimiento = $_SESSION["identificador_estable"];
require_once '../conf/conexion_db.php';
require_once '../conf/funciones_db.php';
?>

<?php
vista_curso($id_establecimiento);

}else {
    header("location:../index2.php");
}
?>
<script>

diseno_tabla_curso();
</script>
