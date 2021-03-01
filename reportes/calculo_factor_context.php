<?php
require_once "dist/conf/require_conf.php";

$token_estudiante =  $_POST['token_estudiante'];
$id_docente = $_POST['id_docente'];
$id_anio = isset($_POST['anio']) ? $_POST['anio'] : $_GET['anio'];

if($token_estudiante == "0"){
    echo '<div style="margin-top: 20px;" class="alert alert-danger" role="alert">

    <div class="text-center">No se encontraron estudiantes con respuestas asociados a este Curso</div>

  </div>';
} else {
    echo factores_contextuales_estudiante($token_estudiante, $id_docente, $id_anio);
}
