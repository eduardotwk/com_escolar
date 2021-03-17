<!DOCTYPE html>
<html>

<head>
    <title>Compromiso Escolar</title>
    <script src="https://kit.fontawesome.com/1652fc71a3.js" crossorigin="anonymous"></script>
    <link href='https://fonts.googleapis.com/css?family=Fira Sans Condensed' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Fira Sans' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Fira Sans Condensed' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
          integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/base.css">
    <style>
        a.table2 {
            font-size: 12px;
            color: #fc455c;
            font-family: "Fira Sans Condensed", sans-serif;
        }

        #submenu ul li a {
            color: white;
        }

        #menu {
            width: 100%;
            margin: 0;
            padding: 10px 0 0 0;
            list-style: none;
            background: transparent;
            background: transparent;
            background: transparent;
            background: transparent;
            background: transparent;
            background: transparent;
            background: transparent;
            position: absolute;
            top: 20px;
            left: -5%;
        }

        #menu li {
            float: right;
            padding: 0 0 10px 0;
            position: relative;
            right: 10%;
        }

        #menu > li::after {
            content: "";
            width: 1px;
            height: 20px;
            border-right: 2px solid #666;
            float: right;
            margin-left: 0px;
        }

        #menu a {
            font-family: "Open Sans", sans-serif;
            font-size: 15px;
            float: left;
            height: 25px;
            padding: 0 25px;
            text-decoration: none;

        }

        #menu li:hover > a {
            border-bottom: 9px solid #07ACAA;

        }

        * html #menu li a:hover {
            /* IE6 */
            color: black;

        }

        #menu li:hover > ul {
            display: block;
        }

        /* Sub-menu */

        #menu ul {
            list-style: none;
            margin: 0;
            padding: 0;
            display: none;
            position: absolute;
            top: 42px;
            left: 26%;
            z-index: 99999;
            background: #07ACAA;
            border-radius: 2px;
            text-transform: none;
        }

        #menu ul li {
            float: none;
            margin: 0;
            padding: 0;
            display: block;
            background-color: #22a2b0;
        }

        #menu ul li:last-child {
            -moz-box-shadow: none;
            -webkit-box-shadow: none;
            box-shadow: none;
        }

        #menu ul a {
            padding: 10px;
            height: auto;
            line-height: 1;
            display: block;
            white-space: nowrap;
            float: none;
            text-transform: none;
            color: white;
            background: #07ACAA;
        }

        * html #menu ul a {
            /* IE6 */
            height: 10px;
            width: 150px;
        }

        *:first-child + html #menu ul a {
            /* IE7 */
            height: 10px;
            width: 150px;
        }

        #menu ul a:hover {
            background: white;
            color: black;
        }

        #menu ul li:first-child a {
            -moz-border-radius: 5px 5px 0 0;
            -webkit-border-radius: 5px 5px 0 0;
            border-radius: 5px 5px 0 0;
        }

        #menu ul li:first-child a:after {
            content: '';
            position: absolute;
            left: 30px;
            top: -8px;
            width: 0;
            height: 0;
            border-left: 5px solid transparent;
            border-right: 5px solid transparent;
            border-bottom: 8px solid #444;
        }

        #menu ul li:first-child a:hover:after {
            border-bottom-color: white;
        }

        #menu ul li:last-child a {
            -moz-border-radius: 0 0 5px 5px;
            -webkit-border-radius: 0 0 5px 5px;
            border-radius: 0 0 5px 5px;
        }

        /* Clear floated elements */
        #menu:after {
            visibility: hidden;
            display: block;
            font-size: 0;
            content: " ";
            clear: both;
            height: 0;
        }

        * html #menu {
            zoom: 1;
        }

        /* IE6 */
        *:first-child + html #menu {
            zoom: 1;
        }

        /* IE7 */

        #menu ul li:first-child a:after {
            content: '';
            position: absolute;
            left: 30px;
            top: -8px;
            width: 0;
            height: 0;
            border-left: 5px solid transparent;
            border-right: 5px solid transparent;
            border-bottom: 8px solid #444;
        }

        #menu ul li:first-child a:hover:after {
            border-bottom-color: #04acec;
        }

        nav ul li a:hover {
            background: #22a2b0;
        }

        a {
            color: #000000;
            font-family: "Open Sans", sans-serif;
            font-size: 10px;
            text-decoration: none;
        }

        div.imagen {
            position: relative;
            right: 12%;
            top: 25px;
        }

        img.logo {
            position: absolute;
            top: 23px;
            max-width: 145px;
            max-height: 42.11px;
            left: 5%;
        }

        img.lapiz {
            position: absolute;
            top: 0px;
            width: 199.05px;
            max-height: 80px;
            left: 20%;
        }

        img.btnSalir {
            position: absolute;
            top: 23px;
            max-width: 145px;
            max-height: 42.11px;
            left: 88%;
        }

        p.p1 {
            color: #000000;
            font-family: "Open Sans", sans-serif;
            font-size: 18px;
            line-height: 1.4;
            margin-bottom: 20px;
            text-align: justify;
            text-align-last: left;
            position: relative;
            right: -8.5%;
            top: 340px;
            width: 30%;
        }

        p.p2 {
            color: #000000;
            font-family: "Open Sans", sans-serif;
            font-size: 18px;
            line-height: 1.4;
            margin-bottom: 20px;
            text-align: justify;
            text-align-last: left;
            position: absolute;
            left: 60%;
            top: 70px;
            margin-left: -70px;
            width: 30%;
        }

        p.p3 {
            color: #000000;
            font-family: "Open Sans", sans-serif;
            font-size: 10px;
            line-height: 1.4;
            margin-bottom: 20px;
            text-align: justify;
            text-align-last: left;
            position: relative;
            top: 445px;
            margin-left: 10px;
            width: 60%;
            left: 54.2%;
        }

        img.presentacion {
            width: 360px;
            height: 300px;
            position: absolute;
            top: 60px;
            right: 62%;
        }

        h3.h3 {
            color: #e9485e;
            font-family: "Fira Sans ExtraBold", sans-serif;
            font-size: 20px;
            font-weight: 800;
            line-height: 1.2;
            margin-bottom: 30px;
            margin-top: 20px;
            text-align: left;
            position: absolute;
            top: 350px;
            right: 80%;
        }

        h3.h4 {
            color: #22a2b0;
            font-family: "Fira Sans ExtraBold", sans-serif;
            font-size: 20px;
            font-weight: 800;
            line-height: 1.2;
            margin-bottom: 30px;
            margin-top: 20px;
            text-align: left;
            position: absolute;
            top: 350px;
            right: 68%;
        }

        table {
            position: absolute;
            top: 15px;
            left: 93%;
            border-spacing: 8px;
            color: #000000;
            font-family: "Open Sans", sans-serif;
            font-size: 10px;
        }

        hr.linea2 {
            height: 2px;
            background-color: #fc455c;
            margin-left: 8.4%;
            position: relative;
            top: 353px;
            width: 29.8%;
        }

        hr {
            height: 2px;
            background-color: #fc455c;
            margin-left: 0.5%;
            width: 85%;
            position: relative;
            top: 18px;

        }

        h1 {
            position: absolute;
            top: 1px;
            right: 83.8%;
            -epub-hyphens: none;
            font-style: normal;
            font-variant: normal;
            color: #fc455c;
            font-family: "Fira Sans Condensed ExtraBold", sans-serif;
            font-size: 25px;
            font-weight: 800;
            line-height: 1.2;
            margin-bottom: 38px;
            text-align: left;
            border-bottom-width: thin;
        }


        #main-footer {
            background: #CCCCCC;
            color: white;
            text-align: center;
            padding: 20px;
            margin-top: 40px;
            flex: 0 0 auto;
            height: 150px;
            overflow: hidden;
            margin-bottom: 0px;
        }

        table.table2 {
            position: absolute;
            left: 88%;
            top: -10px;
            font-size: 12px;
            color: #fc455c;
            font-family: "Fira Sans Condensed", sans-serif;
            font-style: normal;
            font-weight: bold;
            text-decoration: underline;
            text-align: left;
            background-color: #CCCCCC;
            border-spacing: 2px;
        }

        table.table3 {
            position: absolute;
            left: 99%;
            top: -40px;
            border-spacing: 2px;
        }

        div.container {
            background-color: #cccccc;
            border-radius: 12px;
            border: 1px solid #f27611;
            width: 100%;
            height: 870px;
            margin: 0 auto;
            max-width: 1240px;
            margin-bottom: 50px;
            padding: 20px;
            position: relative;
            top: 20px;
            background-image: url("img/presentacion.png");
            background-position: center center;
            background-size: 40%;
            background-repeat: no-repeat;
            overflow: hidden;
            flex: 1 0 auto;
        }

        #main-header {
            background: #25496b;
            color: white;
            width: 100%;
            height: 80px;
            flex: 0 0 auto;
            margin-bottom: 50px;
            overflow: hidden;
        }

        #main-header a {
            color: #999;
            font-family: "Fira Sans";
            font-size: 16px;
        }

        /*
     * Navegación
     */
        nav {
            float: right;
        }

        nav ul {
            margin: 0;
            padding: 0;
            list-style: none;
            padding-right: 20px;
            position: absolute;
            left: 50%;
        }

        nav ul li {
            display: inline-block;
            line-height: 80px;
        }

        nav ul li a {
            display: inline;
            padding: 0 10px;
            text-decoration: none;
        }

        #main-content {
            background: white;
            width: 90%;
            max-width: 800px;
            margin: 20px auto;
            box-shadow: 0 0 10px rgba(0, 0, 0, .1);
        }

        #main-content header,
        #main-content .content {
            padding: 40px;
        }
    </style>
</head>

<body>
<?php include "partials/main-header.php" ?>

<div class="container">
    <h1>Presentación</h1>
    <hr>
    </hr>
    <img class="presentacion" src="img/foto-presentacion.jpeg">
    <h3 class=h3>Bienvenidas<h3 class="h4">y bienvenidos</h3>
    </h3>
    <hr class=linea2>
    </hr>
    <p class="p1">Promover trayectorias educativas positivas ha sido un gran desafío para las escuelas. Para apoyar
        dicho desafío, un equipo de investigación liderado por la <strong>Dra. Mahia Saracostti</strong> ha diseñado el
        <strong>Sistema Integrado de Evaluación, Seguimiento y Estrategias de Promoción de Compromiso Escolar y Factores
            Contextuales (SIESE)</strong> inspirado en la evidencia sobre formas de promover el Compromiso Escolar en el
        estudiantado. Específicamente, se consideró la evidencia que este mismo equipo ha desarrollado en medición del
        Compromiso Escolar y los factores contextuales asociados</p>
    <p class="p2">al mismo, así como el modelo del National High School Center at American Institutes for Research (1)
        implementado en EE.UU para prevenir la desescolarización.
        El SIESE está compuesto de seis pasos que pueden ser implementados tanto en modalidad de educación presencial
        como a distancia o virtual, el que les invitamos a poner en práctica desde el inicio del año escolar, <strong>con
            estudiantes de quinto básico a cuarto medio</strong> e incorporarlo como parte de los procedimientos y
        estrategias de acompañamiento para sus estudiantes. Para lo anterior hemos puesto a disposición de las escuelas
        esta plataforma para acceder a todos los recursos y sugerencias para la implementación del
        <strong>SIESE</strong>. Si bien hay ciertos procesos estandarizados, hay espacio para integrar la singularidad
        de cada comunidad educativa.
        Esperamos que el <strong>SIESE</strong> sea una gran herramienta para apoyar a las escuelas a identificar las
        necesidades por cada curso y las mejores estrategias para promover el Compromiso Escolar.</p>
    <p class="p3"><strong>(1) Más información en:<br/>
            https://www.air.org/resource/early-warning-systems-education</strong></p>

   <?php include "partials/menu-lateral.php" ?>
</div>

<?php include "partials/main-footer.php" ?>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js"
        integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF"
        crossorigin="anonymous"></script>
<script src="https://www.google.com/recaptcha/api.js?render=6LfUWnMaAAAAAEtxf2GKWntxz2CrQMWEohkfZHNk"></script>

<?php include "partials/login-form.php" ?>
</body>
</html>
