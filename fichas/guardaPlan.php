<?php
include("conexion.php");
$p1 = $_POST['p1'];
$p2 = $_POST['p2'];
$p3 = $_POST['p3'];
$p4 = $_POST['p4'];
$p5 = $_POST['p5'];

if (isset($_POST['publicar'])) {
    $insertPlan = "insert into ce_plan (pregunta1,pregunta2,pregunta3,pregunta4,pregunta5,fecha) values ('$p1','$p2','$p3','$p4','$p5',now())";
    mysqli_query($conn, $insertPlan);
}else{
    if (isset($_POST['guardar'])){

        $insertPlan = "insert into ce_plan (pregunta1,pregunta2,pregunta3,pregunta4,pregunta5,fecha) values ('$p1','$p2','$p3','$p4','$p5',now())";
        mysqli_query($conn, $insertPlan);
    }
}

?>