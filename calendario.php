<!DOCTYPE html>
<html>

<head>
    <title>Compromiso Escolar</title>
    <script src="https://kit.fontawesome.com/1652fc71a3.js" crossorigin="anonymous"></script>
    <link href='https://fonts.googleapis.com/css?family=Fira Sans Condensed' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Fira Sans' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Fira Sans Condensed' rel='stylesheet'>
    <link rel="stylesheet" href="./css/base.css">
</head>

<body>
    <style>
        img.btnSalir {
            position: absolute;
            top: 23px;
            max-width: 145px;
            max-height: 42.11px;
            left: 88%;
        }

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
            left: -15%;
        }

        #menu li {
            float: right;
            padding: 0 0 10px 0;
            position: relative;
            right: 0%;
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
            background: #07ACAA;
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

        img.descarga {
            position: absolute;
            width: 40px;
            height: 40px;
            top: 880px;
            left: 95%;
        }

        img.imprimir {
            position: absolute;
            width: 40px;
            height: 40px;
            top: 880px;
            left: 91%
        }

        img.cuadro1 {
            position: absolute;
            left: 68%;
            top: 5px;
        }

        hr.mes {
            height: 1px;
            background-color: white;
            margin-left: -30%;
            width: 88%;
            position: relative;
            top: 10px;
            left: 33%;
        }

        h1.mes {
            position: absolute;
            top: -11px;
            right: 55%;
            -epub-hyphens: none;
            font-style: bold;
            font-variant: normal;
            color: white;
            font-family: "Fira Sans Condensed", sans-serif;
            font-size: 15px;
            font-weight: 800;
            line-height: 1.2;
            margin-bottom: 38px;
            text-align: left;
            border-bottom-width: thin;
        }

        p.obj {
            color: #000000;
            font-family: "Fira Sans Condensed", sans-serif;
            font-size: 12px;
            line-height: 1.4;
            margin-bottom: 20px;
            text-align: justify;
            text-align-last: left;
            position: relative;
            right: 13%;
            position: absolute;
            top: 30px;
            width: 85%;

        }

        hr.subt {
            height: 1px;
            background-color: #22a2b0;
            margin-left: -30%;
            width: 64%;
            position: relative;
            top: 20px;
            left: 33%;
        }

        h1.cuadro {
            position: absolute;
            top: 1px;
            right: 55%;
            -epub-hyphens: none;
            font-style: normal;
            font-variant: normal;
            color: #22a2b0;
            font-family: "Fira Sans Condensed", sans-serif;
            font-size: 15px;
            font-weight: 800;
            line-height: 1.2;
            margin-bottom: 38px;
            text-align: left;
            border-bottom-width: thin;
        }

        ul {
            color: #000000;
            font-family: "Fira Sans Condensed", sans-serif;
            font-size: 12px;
            margin-bottom: 20px;
            text-align-last: left;
            font-weight: normal;
            position: absolute;
            right: 10%;
            top: 50px;
            width: 80%;
        }

        div.cuadro1 {
            position: absolute;
            top: 176px;
            right: 81.9%;
            background-color: rgba(255, 255, 255, 0.5);
            height: 400px;
            width: 200px;
            border-radius: 3px;
            border: 1px solid #9E9E9E;

        }

        div.mes {
            position: absolute;
            top: 150px;
            right: 88.3%;
            background: #22a2b0;
            height: 25px;
            width: 120px;
            border-radius: 3px;
            border: 1px solid #9E9E9E;
        }

        div.cuadro6 {
            position: absolute;
            top: 620px;
            right: 81.9%;
            background-color: rgba(255, 255, 255, 0.5);
            height: 300px;
            width: 200px;
            border-radius: 3px;
            border: 1px solid #9E9E9E;

        }

        div.mes6 {
            position: absolute;
            top: 594px;
            right: 88.3%;
            background: #22a2b0;
            height: 25px;
            width: 120px;
            border-radius: 3px;
            border: 1px solid #9E9E9E;
        }

        div.cuadro2 {
            position: absolute;
            top: 176px;
            left: 19%;
            background-color: rgba(255, 255, 255, 0.5);
            height: 400px;
            width: 200px;
            border-radius: 3px;
            border: 1px solid #9E9E9E;

        }

        div.mes2 {
            position: absolute;
            top: 150px;
            left: 19%;
            background: #22a2b0;
            height: 25px;
            width: 120px;
            border-radius: 3px;
            border: 1px solid #9E9E9E;
        }

        div.cuadro7 {
            position: absolute;
            top: 620px;
            left: 19%;
            background-color: rgba(255, 255, 255, 0.5);
            height: 300px;
            width: 200px;
            border-radius: 3px;
            border: 1px solid #9E9E9E;

        }

        div.mes7 {
            position: absolute;
            top: 594px;
            left: 19%;
            background: #22a2b0;
            height: 25px;
            width: 120px;
            border-radius: 3px;
            border: 1px solid #9E9E9E;
        }

        div.cuadro3 {
            position: absolute;
            top: 176px;
            left: 36.2%;
            background-color: rgba(255, 255, 255, 0.5);
            height: 400px;
            width: 200px;
            border-radius: 3px;
            border: 1px solid #9E9E9E;

        }

        div.mes3 {
            position: absolute;
            top: 150px;
            left: 36.2%;
            background: #22a2b0;
            height: 25px;
            width: 120px;
            border-radius: 3px;
            border: 1px solid #9E9E9E;
        }

        div.cuadro8 {
            position: absolute;
            top: 620px;
            left: 36.2%;
            background-color: rgba(255, 255, 255, 0.5);
            height: 300px;
            width: 200px;
            border-radius: 3px;
            border: 1px solid #9E9E9E;

        }

        div.mes8 {
            position: absolute;
            top: 594px;
            left: 36.2%;
            background: #22a2b0;
            height: 25px;
            width: 120px;
            border-radius: 3px;
            border: 1px solid #9E9E9E;
        }

        div.cuadro4 {
            position: absolute;
            top: 176px;
            left: 53.5%;
            background-color: rgba(255, 255, 255, 0.5);
            height: 400px;
            width: 200px;
            border-radius: 3px;
            border: 1px solid #9E9E9E;

        }

        div.mes4 {
            position: absolute;
            top: 150px;
            left: 53.5%;
            background: #22a2b0;
            height: 25px;
            width: 120px;
            border-radius: 3px;
            border: 1px solid #9E9E9E;
        }

        div.cuadro9 {
            position: absolute;
            top: 620px;
            left: 53.5%;
            background-color: rgba(255, 255, 255, 0.5);
            height: 300px;
            width: 200px;
            border-radius: 3px;
            border: 1px solid #9E9E9E;

        }

        div.mes9 {
            position: absolute;
            top: 594px;
            left: 53.5%;
            background: #22a2b0;
            height: 25px;
            width: 120px;
            border-radius: 3px;
            border: 1px solid #9E9E9E;
        }

        div.cuadro5 {
            position: absolute;
            top: 176px;
            left: 71%;
            background-color: rgba(255, 255, 255, 0.5);
            height: 400px;
            width: 200px;
            border-radius: 3px;
            border: 1px solid #9E9E9E;

        }

        div.mes5 {
            position: absolute;
            top: 150px;
            left: 71%;
            background: #22a2b0;
            height: 25px;
            width: 120px;
            border-radius: 3px;
            border: 1px solid #9E9E9E;
        }

        div.cuadro10 {
            position: absolute;
            top: 620px;
            left: 71%;
            background-color: rgba(255, 255, 255, 0.5);
            height: 300px;
            width: 200px;
            border-radius: 3px;
            border: 1px solid #9E9E9E;

        }

        div.mes10 {
            position: absolute;
            top: 594px;
            left: 71%;
            background: #22a2b0;
            height: 25px;
            width: 120px;
            border-radius: 3px;
            border: 1px solid #9E9E9E;
        }

        p {
            color: #000000;
            font-family: "Open Sans", sans-serif;
            font-size: 18px;
            line-height: 1.4;
            margin-bottom: 20px;
            text-align: justify;
            text-align-last: left;
            position: relative;
            right: 13%;
            position: absolute;
            top: 50px;
            width: 85%;
            ;
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
            top: 11px;
        }

        nav ul li {
            display: inline-block;
            line-height: 80px;
        }

        nav ul li a {
            display: inline;
            padding: 0 8px;
            text-decoration: none;
        }

        nav ul li a:hover {
            background: #22a2b0;
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




        div.container {
            background-color: #cccccc;
            border-radius: 12px;
            border: 1px solid #f27611;
            width: 100%;
            height: 910px;
            margin: 0 auto;
            max-width: 1240px;
            margin-bottom: 50px;
            padding: 20px;
            position: relative;
            top: 20px;
            background-image: url("img/Calendario.png");
            background-position: center center;
            background-size: 40%;
            background-repeat: no-repeat;
            overflow: hidden;
            flex: 1 0 auto;
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

        hr {
            height: 2px;
            background-color: #fc455c;
            margin-left: 0.5%;
            width: 87.2%;
            position: relative;
            top: 18px;

        }

        h1 {
            position: absolute;
            top: 1px;
            right: 70.9%;
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
            right: 49%;
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

        a {
            color: #000000;
            font-family: "Open Sans", sans-serif;
            font-size: 10px;
            text-decoration: none;
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

        #menu>li::after {
            content: "";
            width: 1px;
            height: 20px;
            border-right: 2px solid #666;
            float: right;
            margin-left: 0px;
        }
    </style>
    <header id="main-header">
        <img class="logo" src="img/logo home.png">
        <img class="lapiz" src="img/Header/compromiso.png">
        <img class="btnSalir" src="img/Btn-salir-inactivo.png">
        <ul id="menu">
            <li>
                <a href="#">Pasos</a>
                <ul id="submenu">
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
        <h1>Propuesta de actividades <h1 class="color">del Consejo Escolar</h1>
        </h1>
        <hr>
        </hr>
        <p>El SIESE está compuesto de seis pasos que le invitamos a implementar desde el inicio del año escolar. A continuación te sugerimos un cronograma de implementación de los seis pasos del SIESE que tienen a la base la conformación de un Consejo Escolar responsable de su implementación.</p>
        <div class="cuadro1">
            <h1 class="cuadro" style="right: 62%;">1° Reunión</h1>
            <img class="cuadro1" src="img/pasoscalendario/P1.png">
            <p class="obj"><strong>Objetivos:</strong></p>
            <hr class="subt">
            <ul>
                <li>Conformación del Consejo Escolar</li><br>
                <li>Selección del coordinador(a) del Consejo Escolar</li><br>
                <li>Capacitación del Consejo Escolar en Compromiso Escolar</li><br>
            </ul>
        </div>
        <div class="mes">
            <h1 class="mes" style="right: 64%;">Marzo</h1>
            <hr class="mes">
        </div>
        <div class="cuadro2">
            <h1 class="cuadro" style="right: 62%;">2° Reunión</h1>
            <img class="cuadro1" src="img/pasoscalendario/P2.png">
            <p class="obj"><strong>Objetivos:</strong></p>
            <hr class="subt">
            <ul>
                <li>Diseñar una estrategia para socializar el sentido y objetivo de la medición del Compromiso Escolar y de los factores contextuales</li><br>
                <li>Medición del Compromiso Escolar</li><br>
            </ul>
            <h1 class="cuadro" style="right: 62%;top:190px;">3° Reunión</h1>
            <img class="cuadro1" src="img/pasoscalendario/P2.png">
            <p class="obj"><strong>Objetivos:</strong></p>
            <hr class="subt" style="top:200px;width: 85%;">
            <ul style="top:230px;">
                <li>Revisión del porcentaje de respuesta a los instrumentos de medición</li><br>
                <li>Coordinar estrategias adicionales para velar que aquellos(as) estudiantes que no hayan respondido el instrumento de medición lo puedan hacer</li><br>
            </ul>
        </div>
        <div class="mes2">
            <h1 class="mes" style="right: 69%;">Abril</h1>
            <hr class="mes">
        </div>
        <div class="cuadro3">
            <h1 class="cuadro" style="right: 62%;">4° Reunión</h1>
            <img class="cuadro1" src="img/pasoscalendario/P3y4.png">
            <p class="obj"><strong>Objetivos:</strong></p>
            <hr class="subt">
            <ul>
                <li>Descargar los reportes de resultados.</li><br>
                <li>Análisis de los reportes para identificar las necesidades de apoyo</li><br>
                <li>Completar la Ficha del Plan de Acción y planificar la gestión de la(s) estrategia(s) a implementar. Para ello se espera que el Consejo pueda revisar las estrategias disponibles en la plataforma y seleccionar la o las más pertinentes al contexto escolar</li><br>
                <li>Asignar responsabilidades dentro de los integrantes del Consejo para velar por la implementación de las estrategias</li><br>
            </ul>
        </div>
        <div class="mes3">
            <h1 class="mes" style="right: 68%;">Mayo</h1>
            <hr class="mes">
        </div>
        <div class="cuadro4">
            <h1 class="cuadro" style="right: 62%;">5° Reunión</h1>
            <img class="cuadro1" src="img/pasoscalendario/P5.png">
            <p class="obj"><strong>Objetivos:</strong></p>
            <hr class="subt">
            <ul>
                <li>Revisión del avance en la implementación de la estrategia seleccionada y/o revisar otras alternativas de acción</li><br>
                <li>Completar Ficha de Seguimiento y Monitoreo</li><br>
            </ul>
        </div>
        <div class="mes4">
            <h1 class="mes" style="right: 69%;">Junio</h1>
            <hr class="mes">
        </div>
        <div class="cuadro5">
            <h1 class="cuadro" style="right: 33%;top:170px;">Vacaciones</h1>
            <h1 class="cuadro" style="right: 33%;top:200px;">de invierno</h1>
            <hr class="subt" style="width: 90%;top:195px">
        </div>
        <div class="mes5">
            <h1 class="mes" style="right: 69%;">Julio</h1>
            <hr class="mes">
        </div>
        <div class="cuadro6">
            <h1 class="cuadro" style="right: 62%;">6° Reunión</h1>
            <img class="cuadro1" src="img/pasoscalendario/P5.png">
            <p class="obj"><strong>Objetivos:</strong></p>
            <hr class="subt">
            <ul>
                <li>Revisión del avance en la implementación de la estrategia seleccionada y/o revisar otras alternativas de acción.</li><br>
                <li>Completar Ficha de Seguimiento y Monitoreo</li><br>
            </ul>
        </div>
        <div class="mes6">
            <h1 class="mes" style="right: 58%;">Agosto</h1>
            <hr class="mes">
        </div>
        <div class="cuadro7">
            <h1 class="cuadro" style="right: 62%;">7° Reunión</h1>
            <img class="cuadro1" src="img/pasoscalendario/P5.png">
            <p class="obj"><strong>Objetivos:</strong></p>
            <hr class="subt">
            <ul>
                <li>Revisión del avance en la implementación de la estrategia seleccionada y/o revisar otras alternativas de acción.</li><br>
                <li>Revisar indicadores de asistencia, rendimiento y/o otros registros cualitativos entregados por profesores(as), apoderados(as) y/o estudiantes.</li><br>
                <li>Completar Ficha de Seguimiento y Monitoreo</li>
            </ul>
        </div>
        <div class="mes7">
            <h1 class="mes" style="right: 34%;">Septiembre</h1>
            <hr class="mes">
        </div>
        <div class="cuadro8">
            <h1 class="cuadro" style="right: 61%;">8° Reunión</h1>
            <img class="cuadro1" src="img/pasoscalendario/P5.png">
            <p class="obj"><strong>Objetivos:</strong></p>
            <hr class="subt">
            <ul>
                <li>Revisión del avance en la implementación de la estrategia seleccionada y/o revisar otras alternativas de acción</li><br>
                <li>Revisar indicadores de asistencia, rendimiento y/o otros registros cualitativos entregados por profesores(as), apoderados(as) y/o estudiantes.</li><br>
                <li>Completar Ficha de Seguimiento y Monitoreo</li><br>
            </ul>
        </div>
        <div class="mes8">
            <h1 class="mes" style="right: 53%;">Octubre</h1>
            <hr class="mes">
        </div>
        <div class="cuadro9">
            <h1 class="cuadro" style="right: 60%;">9° Reunión</h1>
            <img class="cuadro1" src="img/pasoscalendario/P5.png">
            <p class="obj"><strong>Objetivos:</strong></p>
            <hr class="subt">
            <ul>
                <li>Revisión del avance en la implementación de la estrategia seleccionada y/o revisar otras alternativas de acción.</li><br>
                <li>Revisar indicadores de asistencia, rendimiento y/o otros registros cualitativos entregados por profesores(as), apoderados(as) y/o estudiantes.</li><br>
                <li>Completar Ficha de Seguimiento y Monitoreo</li>
            </ul>
        </div>
        <div class="mes9">
            <h1 class="mes" style="right: 40%;">Noviembre</h1>
            <hr class="mes">
        </div>
        <div class="cuadro10">
            <h1 class="cuadro" style="right: 59%;">10° Reunión</h1>
            <img class="cuadro1" src="img/pasoscalendario/P6.png">
            <p class="obj"><strong>Objetivos:</strong></p>
            <hr class="subt">
            <ul>
                <li>Análisis del proceso</li><br>
                <li>Completar Ficha de Cierre</li><br>
            </ul>
        </div>
        <div class="mes10">
            <h1 class="mes" style="right: 42%;">Diciembre</h1>
            <hr class="mes">
        </div>
        <a href="descargaCalendario.php"><img class="descarga" src="img/Fichas/Descargar.png"></a>
        <a href="printCalendario.php"><img class="imprimir" src="img/Fichas/imprimir.png">
            <div id="table">
        </a>
        <table>
            <tr>
                <th>
                    <a href="https://www.e-mineduc.cl/login/index.php" target="_blank">
                        <image class="alineadoTextoImagenAbajo" src="img/menu_flotante/1.-Capacitacion.png" style="width: 40px;" style="height: 40px;">Capacitación
                </th>
            </tr>
            <tr>
                <th>
                    <a href="#">
                        <image class="alineadoTextoImagenAbajo" src="img/menu_flotante/2.-Calendario.png" style="width: 40px;" style="height: 40px;">
                            Calendario<br />de actividades
                </th>
            </tr>
            <tr>
                <th>
                    <a href="/inicia_encuesta.php" target="_blank">
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
                    <a href="buscar.php" target="_blank">
                        <image class="alineadoTextoImagenAbajo" src="img/menu_flotante/5.-Buscador de estrategias.png" style="width: 40px;" style="height: 40px;">
                            Buscador de<br />estrategias
                </th>
            </tr>
            <tr>
                <th>
                    <a href="/inicia_reportes.php" target="_blank">
                        <image class="alineadoTextoImagenAbajo" src="img/menu_flotante/6.-Resultados.png" style="width: 40px;" style="height: 40px;">
                            Resultados de<br />medición
                </th>
            </tr>
        </table>
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

                        <th><a class="table2" href="https://www.e-mineduc.cl/login/index.php" target="_blank">Capacitación</th>
                    </tr>
                    <tr>
                        <th><a class="table2" href="calendario.php" target="_blank">Calendario de actividades</th>
                    </tr>
                    <tr>
                        <th><a class="table2" href="/inicia_encuesta.php" target="_blank">Instrumentos de medición</th>
                    </tr>
                    <tr>
                        <th><a class="table2" href="#">Fichas SIESE</th>
                    </tr>
                    <tr>
                        <th><a class="table2" href="buscar.php" target="_blank">Buscador de estrategias</th>
                    </tr>
                </table>
                <table class="table3">
                    <tr>
                        <th><a href="/documentos/Manual_de_Usuario_Plataforma_Compromiso_Escolar_2020.pdf" target="_blank">
                                <image src="img/Botones/Manual_plataforma.png" style="max-width: 140px; margin-top: 10px; float:right;">
                            </a></th>
                    </tr>
                    <tr>
                        <th><img src="img/Botones/Admin_usuarios.png" style="max-width: 140px; margin-top: 10px; float:right;"></th>
                    </tr>
                </table>
            </div>
        </div>
    </footer> <!-- / #main-footer -->
</body>

</html>