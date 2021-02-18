<?php
if (!empty($_GET['id_ficha'])) {
    //DB details
    $dbHost = '167.71.191.60';
    $dbUsername = 'root';
    $dbPassword = '92mbx6#p^wq@hac^';
    $dbName = 'compromiso_escolar_corfo';

    //Create connection and select DB
    $db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

    if ($db->connect_error) {
        die("Unable to connect database: " . $db->connect_error);
    }

    //get content from database
    $query = $db->query("SELECT * FROM ce_documentos  WHERE id_ficha = {$_GET['id_ficha']}");

    if ($query->num_rows > 0) {
        $cmsData = $query->fetch_assoc();
        echo "<div>";
        echo '<p class= acordion2>' . utf8_encode($cmsData['parrafo1']) . '</p>';
        echo "</div>";
        echo "<br>";
        echo "<div>";
        echo '<p class= acordion2>' . utf8_encode($cmsData['parrafo2']) . '</p>';
        echo "</div>";
        echo "<br>";
        echo "<div>";
        echo '<p class= acordion2>' . utf8_encode($cmsData['parrafo3']) . '</p>';
        echo "</div>";
        echo "<br>";
        echo "<div>";
        echo '<p class= acordion2>' . utf8_encode($cmsData['parrafo4']) . '</p>';
        echo "</div>";
    } else {
        echo 'Content not found....';
    }
} else {
    echo 'Content not found....';
}
?>