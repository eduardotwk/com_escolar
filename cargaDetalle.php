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

        if ($cmsData["parrafo1"] != "") {
            echo "<div style='border-radius: 3px 3px 3px 3px;
            border-color: #da9600;
            border-style: solid;
            border-width: 1px;'>";
            echo "<div class= accordionMenu>";
            echo "<input type=radio name=trg1 id=acc1 checked=checked>";
            echo "<label for=acc1>Primera Sección</label>";
            echo "<div class=content>";
            echo " <div class=inner>";
            echo '<p class= acordion2>' . utf8_encode($cmsData['parrafo1']) . '</p>';
            echo "</div>";
            echo "</div> ";
        }


        if ($cmsData["parrafo2"] != "") {
            echo "<input type=radio name=trg1 id=acc2 checked=checked>";
            echo "<label  for=acc2>Segunda Sección</label>";
            echo "<div class=content>";
            echo " <div class=inner>";
            echo '<p class= acordion2>' . utf8_encode($cmsData['parrafo2']) . '</p>';
            echo "</div>";
            echo "</div> ";
        }


        if ($cmsData["parrafo3"] != "") {
            echo "<input type=radio name=trg1 id=acc3 checked=checked>";
            echo "<label for=acc3>Tercera Sección</label>";
            echo "<div class=content>";
            echo " <div class=inner>";
            echo '<p class= acordion2>' . utf8_encode($cmsData['parrafo3']) . '</p>';
            echo "</div>";
            echo "</div> ";
        }


        if ($cmsData["parrafo4"] != "") {

            echo "<input type=radio name=trg1 id=acc4 checked=checked>";
            echo "<label for=acc4>Cuarta Sección</label>";
            echo "<div class=content>";
            echo " <div class=inner>";
            echo '<p class= acordion2>' . utf8_encode($cmsData['parrafo4']) . '</p>';
            echo "</div>";
            echo "</div> ";
        }
        if ($cmsData["parrafo5"] != "") {
            echo "<input type=radio name=trg1 id=acc5 checked=checked>";
            echo "<label for=acc5>Quinta Sección</label>";
            echo "<div class=content>";
            echo " <div class=inner>";
            echo '<p class= acordion2>' . utf8_encode($cmsData['parrafo5']) . '</p>';
            echo "</div>";
            echo "</div> ";

            echo "</div>";
            echo "</div>";
        }
    } else {
        echo 'Content not found....';
    }
} else {
    echo 'Content not found....';
}
