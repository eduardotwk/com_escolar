<?php
session_start();

error_reporting(E_ERROR | E_PARSE);
require 'conf/conf_requiere.php';

echo "<div class='row'>";
selec_cursos_admin_establecimiento($_SESSION['user']);

echo "</div>";
?>