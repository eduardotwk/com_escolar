<!DOCTYPE html>
<html>

<head>
    <script src="https://kit.fontawesome.com/1652fc71a3.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <link href='https://fonts.googleapis.com/css?family=Fira Sans Condensed' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Fira Sans' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Fira Sans Condensed' rel='stylesheet'>
    <script>
        $(function() {
            $("#accordion").accordion();
        });
        function torta(rueda, trozo) {
            var pie;
            pie = document.getElementById('trozo');
            if (trozo == 'p1') {
                pie.className = 'p1';
                $("#p1").click(function() {
                    window.location.href = "paso1.php";
                    return false; //Just in case if it is a link prevent default behavior
                });
            } else if (trozo == 'p2') {
                pie.className = 'p2';
                $("#p2").click(function() {
                    window.location.href = "paso2.php";
                    return false; //Just in case if it is a link prevent default behavior
                });
            } else if (trozo == 'p3') {
                pie.className = 'p3';
                $("#p3").click(function() {
                    window.location.href = "paso3.php";
                    return false; //Just in case if it is a link prevent default behavior
                });
            } else if (trozo == 'p4') {
                pie.className = 'p4';
                $("#p4").click(function() {
                    window.location.href = "paso4.php";
                    return false; //Just in case if it is a link prevent default behavior
                });
            } else if (trozo == 'p5') {
                pie.className = 'p5';
                $("#p5").click(function() {
                    window.location.href = "paso5.php";
                    return false; //Just in case if it is a link prevent default behavior
                });
            } else if (trozo == 'p6') {
                pie.className = 'p6';
                $("#p6").click(function() {
                    window.location.href = "paso6.php";
                    return false; //Just in case if it is a link prevent default behavior
                });
            }
        }

        function limpiartorta(trozo) {
            var pie = document.getElementById(trozo);

            pie.classList.remove('p1', 'p2', 'p3', 'p4', 'p5', 'p6');
        }
    </script>
</head>

<body>
<style>
    .chart-skills {
            margin: 0 auto;
            padding: 0;
            position: relative;
            width: 100px;
            height: 100px;
            border-radius: 100%;
            z-index: 40;
            top: -33px;
            left: 30%;
        }

        .chart-skills.grande {
            width: 400px;
            height: 400px;
        }

        div.chart-skills [id^="p"] {
            width: 150px;
            height: 150px;
            position: absolute;
            cursor: pointer;
        }

        .chart-skills [class^="p"] {
            border-radius: 100%;
            width: 100%;
            height: 100%;
        }

        #fondo {
            position: absolute;
            top: 0%;
            left: calc(50% - 50px) !important;
            z-index: -5;
        }

        #fondo img {
            max-width: 100%;
        }

        #fondo.grande {
            position: absolute;
            top: 0%;
            left: calc(50% - 200px) !important;
            z-index: -5;
        }

        #p1 {
            top: 0%;
            left: 50%;
            width: 50%;
            height: 50%;
            clip-path: polygon(100% 50%, 0% 100%, 0% 0%, 70% 0%);
        }

        #p2 {
            top: 25%;
            left: 50%;
            width: 50%;
            height: 50%;
            clip-path: polygon(80% 100%, 0% 50%, 80% 0%, 100% 50%);
        }

        #p3 {
            top: 50%;
            left: 50%;
            width: 52%;
            height: 50%;
            clip-path: polygon(0% 100%, 0% 0%, 83% 50%, 60% 100%);
        }

        #p4 {
            top: 50%;
            left: 0%;
            width: 50%;
            height: 50%;
            clip-path: polygon(41% 100%, 13% 50%, 100% 0%, 100% 100%);
        }

        #p5 {
            top: 25%;
            left: -4.65%;
            width: 56%;
            height: 50%;
            clip-path: polygon(20% 100%, 0% 50%, 20% 0%, 100% 50%);
        }

        #p6 {
            top: 0%;
            left: 6.4%;
            width: 45%;
            height: 50%;
            clip-path: polygon(100% 100%, 0% 50%, 33% 0%, 100% 0%);
        }

        .p1 {
            background-image: conic-gradient(#b2222263 16.7%, transparent 16.7% 100%);
        }

        .p2 {
            background-image: conic-gradient(transparent 16.7%, #b2222263 16.7% 33.4%, transparent 33.4% 100%);
        }

        .p3 {
            background-image: conic-gradient(transparent 33.4%, #b2222263 33.4% 50%, transparent 50% 100%);

        }

        .p4 {
            background-image: conic-gradient(transparent 50%, #b2222263 50% 66.7%, transparent 66.7% 100%);
        }

        .p5 {
            background-image: conic-gradient(transparent 66.7%, #b2222263 66.7% 83.4%, transparent 83.4% 100%);
        }

        .p6 {
            background-image: conic-gradient(transparent 83.4%, #b2222263 83.4%);
        }

    /*acordeón1*/
    .ui-accordion {
        width: 62%;
        position: absolute;
        top: 72px;
        right: 36%;
    }


    .ui-accordion-header {
        border-top-color: #999999;
        background-color: rgba(80, 80, 80, 0.9);
        font-weight: bolder;
        color: #cccccc;
    }

    .ui-accordion-header-active {
        border-top-color: #da9600;
        background-color: rgba(220, 104, 9, 0.90);
        font-size: bolder;
        color: #cccccc;
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
        background-color: rgba(255, 255, 255, 0.5);
        color: white;

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
        top: 35px;
    }

    #menu li {
        float: right;
        padding: 0 0 10px 0;
        position: relative;
        right: 10%;
    }

    #menu a {
        font-family: "Open Sans", sans-serif;
        font-size: 15px;
        float: left;
        height: 25px;
        padding: 0 25px;
        text-decoration: none;

    }

    #menu li:hover>a {
        border-bottom: 9px solid #07ACAA;
           
        }

    *html #menu li a:hover {
        /* IE6 */
        color: black;

    }

    #menu li:hover>ul {
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
            background:#07ACAA;
        }

    *html #menu ul a {
        /* IE6 */
        height: 10px;
        width: 150px;
    }

    *:first-child+html #menu ul a {
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
    *:first-child+html #menu {
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

    ul.cuadro2 {
        position: absolute;
        top: 45px;
        right: -6%;
        width: 80%;
        font-family: "Fira Sans Condensed", sans-serif;
        font-weight: lighter;
        font-size: 14px;
        margin-bottom: 20px;
        text-align-last: left;
        color: white;
    }

    a {
        color: #000000;
        font-family: "Open Sans", sans-serif;
        font-size: 10px;
        text-decoration: none;
    }

    img.cap2 {
        position: absolute;
        top: 70px;
        height: 40px;
        width: 40px;
        right: 83%;
    }

    p.cuadro2 {
        position: absolute;
        top: 63px;
        left: 21%;
        width: 80%;
        font-family: "Open Sans", sans-serif;
        font-weight: lighter;
        font-size: 18px;
        margin-bottom: 20px;
        text-align-last: left;
        color: white;
    }

    hr.cuadro2 {
            height: 1px;
            background-color: white;
            width: 110%;
            top: 10px;
            left: -7%;
        }
    h3 {
        position: absolute;
        top: -2px;
        left: 3%;
        color: white;
        font-family: "Fira Sans Condensed", sans-serif;
        font-size: 20px;
        font-weight: 800;
        line-height: 1.2;
        margin-bottom: 30px;
        margin-top: 20px;
        text-align: left;
    }

    img.cuadro2 {
        position: absolute;
        width: 30px;
        height: 1px;
        left: 85%;
        top: 11px;
    }

    div.cuadro2 {
        position: absolute;
        background-color: #f27611;
        border-radius: 5px;
        left: 63%;
        top: 650px;
        width: 250px;
        height: 100px;
        padding: 25px;
        margin: 25px;
    }

    img.cuadro2 {
        position: absolute;
        width: 30px;
        height: 30px;
        left: 85%;
        top: 11px;
    }

    ul.cuadro1 {
        position: absolute;
        top: 45px;
        right: 12%;
        width: 80%;
        font-family: "Fira Sans Condensed", sans-serif;
        font-weight: lighter;
        font-size: 14px;
        margin-bottom: 20px;
        text-align-last: left;
        color: white;
        text-align: justify;
    }

    hr.cuadro1 {
            height: 1px;
            background-color: white;
            width: 110%;
            top: 10px;
            left: -7%;
        }

    h3 {
        position: absolute;
        top: -2px;
        left: 3%;
        color: white;
        font-family: "Fira Sans ExtraBold", sans-serif;
        font-size: 20px;
        font-weight: 800;
        line-height: 1.2;
        margin-bottom: 30px;
        margin-top: 20px;
        text-align: left;
    }

    img.cuadro1 {
        position: absolute;
        width: 30px;
        height: 30px;
        left: 85%;
        top: 11px;
    }

    div.cuadro1 {
        position: absolute;
        background-color: #22a2b0;
        border-radius: 5px;
        left: 63%;
        top: 310px;
        width: 250px;
        height: 270px;
        padding: 25px;
        margin: 25px;
    }

    button.accordion2:after {
        content: '\25BC';
        color: #bbbbbb;
        font-weight: bold;
        float: right;
        margin-left: 5px;
        position: absolute;
        right: 5px;
        top: 10px;
        bottom: 0;

    }

    button.accordion2.active2:after {
        content: "\25B2";
        color: white;

    }

    ul {
        color: black;
        font-family: "Fira Sans Condensed", sans-serif;
        font-size: 16px;
        margin-bottom: 20px;
        text-align-last: left;
        font-weight: normal;
    }

    p.acordion2 {
        color: black;
        font-family: "Fira Sans Condensed", sans-serif;
        font-size: 16px;
        line-height: 1.152;
        margin-bottom: 16px;
        text-align: justify;
        margin-block-end: 0;
    }

    img.navegador {
        position: absolute;
        top: 8px;
        left: 77%;
        width: 100px;
        height: 100px;
    }

    hr {
            height: 2px;
            background-color: #fc455c;
            margin-left: 0.5%;
            width: 80%;
            position: relative;
            top: 18px;

        }

    h1 {
        position: absolute;
        top: 1px;
        right: 90%;
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

    h1.color {
        position: absolute;
        top: 1px;
        right: 50.8%;
        -epub-hyphens: none;
        font-style: normal;
        font-variant: normal;
        color: #22a2b0;
        font-family: "Fira Sans Condensed ExtraBold", sans-serif;
        font-size: 25px;
        font-weight: 800;
        line-height: 1.2;
        margin-bottom: 38px;
        text-align: left;
        border-bottom-width: thin;
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

        div.imagen {
            position: relative;
            right: 12%;
            top: 25px;
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
        display: block;
        padding: 0 10px;
        text-decoration: none;
    }

    #main-content {
        background: white;
        width: 100%;
        max-width: 800px;
        margin: 0px;
        box-shadow: 0 0 10px rgba(0, 0, 0, .1);
    }

    img.logo {
            position: absolute;
            top: 30px;
            max-width: 145px;
            max-height: 42.11px;
            left: 5%;
        }

        img.lapiz {
            position: absolute;
            top: 8px;
            width: 199.05px;
            max-height: 80px;
            left: 20%;
        }

   
</style>
    <header id="main-header">
    <img class="logo" src="img/logo home.png">
        <img class="lapiz" src="img/Header/compromiso.png">

        <ul id="menu" style="font-weight: normal;">
            <li>
                <a href="#">Pasos</a>
                <ul id="submenu" class=menu style="font-weight: normal;">
                    <li><a href="paso1.php">Paso 1</a></li>
                    <li><a href="paso2.php">Paso 2</a></li>
                    <li><a href="paso3.php">Paso 3</a></li>
                    <li><a href="paso4.php">Paso 4</a></li>
                    <li><a href="paso5.php">Paso 5</a></li>
                    <li><a href="paso6.php">Paso 6</a></li>
                </ul>
            </li>
            <li><a href="compromiso_escolar.php">Compromiso Escolar</a></li>
            <li><a href="presentacion.php">Presentación</a></li>
            <li><a href="home.php"><i class="fas fa-home">&nbsp;</i>Inicio</a></li>
        </ul>

    </header><!-- / #main-header -->

    <div class="container">
        <h1>Paso 3:<h1 class="color">Revisión y análisis de la información</h1>
        </h1>
        <hr>
        </hr>
        <div id="table">
            <table>
                <tr>
                    <th>
                        <a href="https://www.e-mineduc.cl/login/index.php">
                            <image class="alineadoTextoImagenAbajo" src="img/menu_flotante/1.-Capacitacion.png" style="width: 40px;" style="height: 40px;">Capacitación
                    </th>
                </tr>
                <tr>
                    <th>
                        <a href="calendario.php">
                            <image class="alineadoTextoImagenAbajo" src="img/menu_flotante/2.-Calendario.png" style="width: 40px;" style="height: 40px;">
                                Calendario<br />de actividades
                    </th>
                </tr>
                <tr>
                    <th>
                        <a href="https://www.compromisoescolar.com/inicia_encuesta.php">
                            <image class="alineadoTextoImagenAbajo" src="img/menu_flotante/3.-Instrumentos.png" style="width: 40px;" style="height: 40px;">
                                Instrumentos<br />de medición
                    </th>
                </tr>
                <tr>
                    <th>
                        <image class="alineadoTextoImagenAbajo" src="img/menu_flotante/4.-Fichas proceso.png" style="width: 40px;" style="height: 40px;">
                            Fichas<br />SIESE
                    </th>
                </tr>
                <tr>
                    <th>
                        <a href="buscar.php">
                            <image class="alineadoTextoImagenAbajo" src="img/menu_flotante/5.-Buscador de estrategias.png" style="width: 40px;" style="height: 40px;">
                                Buscador de<br />estrategias
                    </th>
                </tr>
                <tr>
                    <th>
                        <a href="https://www.compromisoescolar.com/inicia_reportes.php">
                            <image class="alineadoTextoImagenAbajo" src="img/menu_flotante/6.-Resultados.png" style="width: 40px;" style="height: 40px;">
                                Resultados de<br />medición
                    </th>
                </tr>
            </table>
        </div>
        <div id="accordion">
            <h4>Descripción</h4>
            <div>
                <p class="acordion2">
                    Esta paso implica la descarga y revisión de los reportes de resultados que arroja esta plataforma. El coordinador o la coordinadora tiene el acceso a la plataforma para descargar los reportes. Para poder comprender los resultados con mayor facilidad se sugiere leer el Manual de Usuario de la Plataforma de Compromiso Escolar y revisar el módulo de capacitación. <br /><br />
                    Luego se espera que todos los miembros del Consejo Escolar puedan participar activamente en el análisis e interpretación de los datos, complementando la información cuantitativa que arroja esta plataforma con antecedentes entregados por apoderados y apoderadas, estudiantes y profesorado, que permitan comprender de mejor manera los resultados. Este diagnóstico es de vital importancia como línea base inicial para la toma de decisiones respecto a la selección de las estrategias que se aplicarán. <br /><br />
                    El objetivo es que el Consejo Escolar pueda revisar la información por curso que arroja esta plataforma, identificando necesidades comunes entre las y los estudiantes. En cambio, la información individualizada que arroja por estudiante se espera que sea revisada en otras instancias especializadas que la escuela estime pertinente, mediante la ficha individual. Así se evitan estigmatizaciones involuntarias hacia las y los estudiantes. <br><br />
                    También se sugiere compartir los reportes entregados con otros profesores y profesoras del nivel y/o con apoderados/as o estudiantes de manera de transparentar la información obtenida.
                </p>
            </div>
            <h4>Preguntas guías para el Consejo Escolar</h4>
            <div>
                <ul>
                    <li>¿Quién descargará los reportes de la plataforma al Consejo Escolar?</li> <br />
                    <li>¿Qué otros indicadores se pueden analizar para complementar la información (por ejemplo, rendimiento, comportamiento, asistencia)?</li><br />
                    <li>¿Qué información entrega la plataforma de compromiso escolar?</li><br />
                    <li>¿Qué necesidades se desprenden del análisis de los resultados?</li><br />
                    <li>¿Qué prácticas del colegio o de la sala de clases se pueden vincular a los resultados mostrados en la plataforma de compromiso escolar? </li><br />
                </ul>
            </div>
            <h4>Posibles dificultades y sugerencias para enfrentarlas</h4>
            <div>
                <p class="acordion2">
                    En este paso pueden surgir ciertas dificultades para interpretar los datos o analizar los reportes. Por eso es importante llegar a esta fase, habiendo revisado los videos de la capacitación online y sus recursos, de manera tal de poder hacer un mejor uso de los datos.
                </p>
            </div>
        </div>
        <div class="chart-skills">
            <div id="fondo"><img src="img/Navegador-P02.png"></div>
            <div id="trozo" class=""></div>
            <div id="p1" onmouseover="torta('chica', 'p1');" onmouseout="limpiartorta('trozo');"></div>
            <div id="p2" onmouseover="torta('chica', 'p2');" onmouseout="limpiartorta('trozo');"></div>
            <div id="p3" onmouseover="torta('chica', 'p3');" onmouseout="limpiartorta('trozo');"></div>
            <div id="p4" onmouseover="torta('chica', 'p4');" onmouseout="limpiartorta('trozo');"></div>
            <div id="p5" onmouseover="torta('chica', 'p5');" onmouseout="limpiartorta('trozo');"></div>
            <div id="p6" onmouseover="torta('chica', 'p6');" onmouseout="limpiartorta('trozo');"></div>
        </div>
        <div class="cuadro1">
            <h3>Productos esperados</h3>
            <hr class=cuadro1>
            </hr>
            <img class="cuadro1" src="img/Pasos/Icono-Productos-esperados.png">
            <ul class=cuadro1>
                <li> Coordinador(a) descarga los reportes de resultados</li><br />
                <li>4° Reunión del Consejo Escolar para analizar los reportes e identificar causas y necesidades asociadas a los resultados.</li><br>
            </ul>
        </div>
        <div class="cuadro2">
            <h3>Recursos específicos</h3>
            <img class="cuadro2" src="img/Pasos/icono-productos-especificos.png">
            <hr class=cuadro2>
            </hr>
            <a href="https://www.compromisoescolar.com/inicia_reportes.php">
                <image src="img/menu_flotante/6.-Resultados.png" style="width:30px;height: 30px;position:absolute;top:95px;left:5%">
            </a>
            <a href="https://www.compromisoescolar.com/documentos/Manual_de_Usuario_Plataforma_Compromiso_Escolar_2020.pdf">
            <image src="img/menu_flotante/manualUsuario.png" style="width:30px;height: 30px;position:absolute;top:55px;left:5%">
            </a>
            <ul class="cuadro2">
                <li>Manual de Usuario de la Plataforma de Compromiso Escolar</li>
                <li>Resultados de la medición del compromiso escolar</li>
            </ul>
        </div>
    </div>

    <footer id="main-footer">
        <div class="row">
            <div class="imagen" style="margin: 10px;">
                <img src="img/Logos/png/Logo UValpo.png" alt="" class="imh-responsive" style="width: 80px;" style="height: 80px;">
                &nbsp; &nbsp;
                <img src="img/Logos/png/Logo Ufro.png" alt="" class="imh-responsive" style="width: 80px;" style="height: 80px;">
                &nbsp; &nbsp;
                <img src="img/Logos/png/U-autonoma.png" alt="" class="imh-responsive" style="width: 100px;" style="height: 100px;">
                &nbsp; &nbsp;
                <img src="img/Logos/png/fundacion-telefonica.png" alt="" class="imh-responsive" style="width: 140px;" style="height: 140px;">
                &nbsp; &nbsp;
                <img src="img/Logos/png/Logo Mineduc.png" alt="" class="imh-responsive" style="width: 80px;" style="height: 80px;">
                &nbsp; &nbsp;
                <img src="img/Logos/png/fondef.png" alt="" class="imh-responsive" style="width: 180px;" style="height: 180px;">
                &nbsp; &nbsp;
                <img src="img/Logos/png/LogoCorfo.png" alt="" class="imh-responsive" style="width: 150px;" style="height: 150px;">
                <table class="table2">
                <tr>
                    <th>Capacitación</th>
                </tr>
                <tr>
                    <th>Calendario de actividades</th>
                </tr>
                <tr>
                    <th>Instrumentos de medición</th>
                </tr>
                <tr>
                    <th>Fichas SIESE</th>
                </tr>
                <tr>
                    <th>Buscador de estrategias</th>
                </tr>
            </table>
            <table class="table3">
                <tr>
                    <th><img src="img/Botones/Manual_plataforma.png" style="max-width: 140px; margin-top: 10px; float:right;"></th>
                </tr>
                <tr>
                    <th><img src="img/Botones/Admin_usuarios.png"style="max-width: 140px; margin-top: 10px; float:right;"></th>
                </tr>
            </table>
            </div>
        </div>
    </footer> <!-- / #main-footer -->
</body>

</html>
