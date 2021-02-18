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
            top: -265px;
            left: 55%;
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
            top: 95px;
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
            right: -2%;
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
            left: 23.5%;
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
        }

        hr.cuadro1 {
            height: 1px;
            background-color: white;
            width: 110%;
            top: 10px;
            left: 23.5%;
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
            margin-left: -30%;
            width: 138%;
            position: relative;
            top: -180px;

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
            right: 33.8%;
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
            width: 750px;
            height: 450px;
            margin: 10px 50px;
            padding: 250px;
            position: relative;
            top: 20px;
            background-image: url("img/presentacion.png");
            background-size: 400px;
            background-repeat: no-repeat;
            background-position: center;
        }

        table.table2 {
            position: absolute;
            left: 77%;
            top: 1130px;
            font-size: 11px;
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
            left: 88%;
            top: 1120px;
            border-spacing: 2px;
        }

        div.imagen {
            position: relative;
            right: 12%;
        }

        #main-footer {
            background: #CCCCCC;
            color: white;
            text-align: center;
            padding: 20px;
            margin-top: 40px;
            border: 1px solid #9E9E9E;


        }

        #main-header {
            background: #25496b;
            color: white;
            height: 100px;
              /* Enable flex mode. */
        display: flex; 
        
        /* Spread out the elements inside the header. */
        justify-content: space-between;

        /* Align items vertically in the center. */
        align-items: center;

        }
        @media (max-width: 1240px){
        #main-header{
                /* Reverse the axis of the header, making it vertical. */
                flex-direction: column;
                
                /* Align items to the begining (the left) of the header. */
                align-items: flex-start;
        }
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
            top: 40px;
            width: 150px;
            height: 50px;
            left: 5%;
        }

        img.lapiz {
            position: absolute;
            top: 8px;
            width: 230px;
            height: 100px;
            left: 20%;
        }

        #main-content header,
        #main-content .content {
            padding: 40px;
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
        <h1>Paso 5:<h1 class="color">Seguimiento de estudiantes y de las estrategias de<br /> promoción de compromiso escolar</h1>
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
                    En este paso el foco es que el Consejo Escolar haga un seguimiento recurrente de las estrategias ejecutadas, revisando la necesidad de realizar ajustes. Para ello puede complementar el análisis que hagan con las opiniones de otros actores que estén ejecutando la estrategia y mediante una revisión de otros indicadores, tales como rendimiento y asistencia. <br /><br />
                    De forma paralela, en cada reunión se sugiere completar la Ficha de Seguimiento y Monitoreo, herramienta utilizada para evaluar la necesidad de hacer algún ajuste y registrar qué cambios se observan en el aula, incluyendo cambios en rendimiento, asistencia o comportamiento. <br /><br />
                    Para hacer un análisis de las estrategias se recomienda monitorear a los y las estudiantes que participan en las intervenciones y la efectividad de la implementación, identificar las necesidades que no se están cubriendo así como revisar si se deben realizar nuevas intervenciones para satisfacer las necesidades de los y las estudiantes.<br><br />
                    Se sugiere al menos una reunión mensual del Consejo Escolar para ir monitoreando la o las estrategias de intervención, y hacer los ajustes determinados. El monitoreo de cada una de ellas va a depender de la metodología propuesta por cada escuela para su implementación.
                </p>
            </div>

            <h4>Preguntas guías para el Consejo Escolar</h4>
            <div>
                <ul>
                    <li>¿Cómo se está implementando la o las estrategias?</li> <br />
                    <li>¿Qué ajustes son necesarios?</li><br />
                    <li>¿Cómo realizar los ajustes?</li><br />
                    <li>¿Qué debiera hacer cada integrante del Consejo Escolar para velar que la o las estrategias se estén implementando?</li><br />
                </ul>
            </div>
            <h4>Posibles dificultades y sugerencias para enfrentarlas</h4>
            <div>
                <p class="acordion2">
                    Que la estrategia seleccionada no se esté implementando: es necesario revisar las causas de lo anterior, y realizar los ajustes necesarios; puede que la estrategia seleccionada no sea la más pertinente para la realidad del establecimiento y se deba modificar la planificación inicial ajustándola a las necesidades y posibilidades reales de la escuela.
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
    </div>

    <div class="cuadro1">
        <h3>Productos esperados</h3>
        <hr class=cuadro1>
        </hr>
        <img class="cuadro1" src="img/Pasos/Icono-Productos-esperados.png">
        <ul class=cuadro1>
            <li> 5°, 6°, 7°, 8° y 9° Reunión del Consejo Escolar para revisar el avance en la implementación de la estrategia seleccionada y/o revisar otras alternativas de acción</li>
            <li>Completar Ficha de Seguimiento y Monitoreo</li>
        </ul>
    </div>
    <div class="cuadro2">
        <h3>Recursos específicos</h3>
        <img class="cuadro2" src="img/Pasos/icono-productos-especificos.png">
        <hr class=cuadro2>
        </hr>
        <a href="#">
            <image src="img/menu_flotante/4.-Fichas proceso.png" style="width:30px;height: 30px;position:absolute;top:95px;left:5%">
        </a>
        <a href="buscar.php">
            <image src="img/menu_flotante/5.-Buscador de estrategias.png" style="width:30px;height: 30px;position:absolute;top:55px;left:5%">
        </a>
        <ul class="cuadro2">
            <li>Buscador de estrategias</li><br>
            <li>Fichas SIESE (Ficha de Seguimiento y Monitoreo)</li>
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
            </div>

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
                    <th><img src="img/Botones/Manual_plataforma.png" style="width: 100px;" style="height: 100px;"></th>
                </tr>
                <tr>
                    <th><img src="img/Botones/Admin_usuarios.png" style="width: 100px;" style="height: 100px;"></th>
                </tr>
            </table>
        </div>
    </footer> <!-- / #main-footer -->
</body>

</html>