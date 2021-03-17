<?php
$servername = "167.71.191.60";
$database = "compromiso_escolar_corfo";
$username = "root";
$password = "92mbx6#p^wq@hac^";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>