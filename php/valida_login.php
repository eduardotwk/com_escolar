<?php
error_reporting(E_ERROR | E_PARSE);
session_start();
include_once '../conf/funciones_db.php';
include_once '../conf/conexion_db.php';

$usuario = $_POST["usuario"];
$contrasena = $_POST["contrasena"];
$tipo_usuario = $_POST["tipo_usuario"];

$privilegios = $_POST["privilegios"];

# Verify captcha
$post_data = http_build_query([
    'secret' => '6Le4kagZAAAAAMrvl2we09WAZFiCHtLNKr9aKMMk',
    'response' => $_POST['token'],
    'remoteip' => $_SERVER['REMOTE_ADDR']
]);

$opts = [
    'http' => [
        'method' => 'POST',
        'header' => 'Content-type: application/x-www-form-urlencoded',
        'content' => $post_data
    ]
];

$context = stream_context_create($opts);
$response = file_get_contents('https://www.google.com/recaptcha/api/siteverify', false, $context);
$result = json_decode($response);

$resultado = select_user($usuario, $contrasena, $tipo_usuario);

if ($result->success && $result->score > 0.5) {
    if ($resultado["usuario"] == $usuario && $resultado["contrasena"] == $contrasena && $resultado["tipo"] == $tipo_usuario) {
        $_SESSION['pais'] = $resultado["pais"];
        $_SESSION['user'] = $usuario;

        $_SESSION['tipo_usuario'] = $tipo_usuario;

        $_SESSION["tipo_nombre"] = $resultado["rol"];

        $_SESSION["display_nombre"] = $resultado["display_nombre_rol"];

        $_SESSION["identificador_estable"] = $resultado["id_estable"];

        $_SESSION['privilegios'] = $privilegios;

        echo 1;
    } else {
        echo 0;
    }
} else {
    echo json_encode($result);
}
