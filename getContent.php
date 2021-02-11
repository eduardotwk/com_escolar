
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script>
        $(function() {
            $("#accordion").accordion();
        });
    </script>

<style>
    .ui-accordion {
        width: 62%;
        position: absolute;
        top: 72px;
        right: 36%;
    }

    .ui-accordion-header {
        border-top-color: #999999;
        background-color: #666666;
        font-weight: bolder;
        color: #999999;
    }

    .ui-accordion-header-active {
        border-top-color: #da9600;
        background-color: #f27611;
        font-size: bolder;
        color: white;
    }

    .ui-icon {
        display: inline-block;
        vertical-align: middle;
        margin-top: -.25em;
        position: relative;
        text-indent: -99999px;
        overflow: hidden;
        background-repeat: no-repeat;
        left: 95%;
    }

    .ui-accordion-content-active {
        border-style: 1px solid;
        border-color: #da9600;
        background-color: transparent;
        color: white;

    }

    p.acordion {
        color: #000000;
        font-family: "Open Sans", sans-serif;
        font-size: 14px;
        line-height: 1.4;
        margin-bottom: 20px;
        text-align: justify;
        text-align-last: left;
        font-weight: normal;
    }

    .accordion {
        position: absolute;
        top: 200px;
        right: -25%;
        border-top-color: #999999;
        background-color: #666666;
        cursor: pointer;
        padding: 18px;
        width: 83%;
        height: 0%;
        border: none;
        text-align: left;
        outline: none;
        font-size: 15px;
        transition: 0.4s;
        color: #bbbbbb;
        font-weight: bolder;
    }
</style>
<?php
if (!empty($_GET['id_ficha'])) {
    //DB details
    $dbHost = 'localhost';
    $dbUsername = 'root';
    $dbPassword = '';
    $dbName = 'compromisoescolar';

    //Create connection and select DB
    $db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

    if ($db->connect_error) {
        die("Unable to connect database: " . $db->connect_error);
    }

    //get content from database
    $query = $db->query("SELECT * FROM documentos INNER JOIN ficha ON documentos.id_ficha
 = ficha.id_ficha where documentos.id_ficha = {$_GET['id_ficha']}");

    if ($query->num_rows > 0) {
        $cmsData = $query->fetch_assoc();
        echo '<div = id="accordion">';
        echo ' <h3>Parrafo 1</h3>';
        echo '<div>';
        echo '<p class=acordion>' . utf8_encode($cmsData['parrafo1']) . '</p>';
        echo '</div>';
        echo ' <h3>Parrafo 2</h3>';
        echo '<div>';
        echo '<p class=acordion>' . utf8_encode($cmsData['parrafo2']) . '</p>';
        echo '</div>';
        echo ' <h3>Parrafo 3</h3>';
        echo '<div>';
        echo '<p class=acordion display:none>' . utf8_encode($cmsData['parrafo3']) . '</p>';
        echo '</div>';

        echo '</div>';
    } else {
        echo 'Content not found....';
    }
} else {
    echo 'Content not found....';
}
?>