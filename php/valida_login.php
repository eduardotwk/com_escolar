<?php

session_start();

error_reporting(E_ERROR | E_PARSE);

include_once '../conf/funciones_db.php';
include_once '../conf/conexion_db.php';

$usuario = $_POST["usuario"];
$contrasena = $_POST["contrasena"];
$tipo_usuario = $_POST["tipo_usuario"];
$privilegios = $_POST["privilegios"];
$token = $_POST["token"];

//$ch = curl_init();
//curl_setopt($ch, CURLOPT_URL,"https://www.google.com/recaptcha/api/siteverify");
//curl_setopt($ch, CURLOPT_POST, 1);
//curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query(array('secret' => '6Le4kagZAAAAAMrvl2we09WAZFiCHtLNKr9aKMMk', 'response' => $token)));
//curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
//$response = curl_exec($ch);
//curl_close($ch);
//$arrResponse = json_decode($response, true);

$resultado = select_user($usuario, $contrasena, $tipo_usuario);

$_SESSION['pais'] = $resultado["pais"];

if ($resultado["usuario"] == $usuario && $resultado["contrasena"] == $contrasena && $resultado["tipo"] == $tipo_usuario) {
    $_SESSION['user'] = $usuario;
    $_SESSION['tipo_usuario'] = $tipo_usuario;
    $_SESSION["tipo_nombre"] = $resultado["rol"];
    $_SESSION["display_nombre"] = $resultado["display_nombre_rol"];
    $_SESSION["identificador_estable"] = $resultado["id_estable"];
    $_SESSION['privilegios'] = $privilegios;

    header('location: ../modulos.php');
    exit();
} else {
    header('location: ../inicia_reportes.php');
    exit();
}