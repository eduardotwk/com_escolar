<!DOCTYPE html>
<html>

<head>
    <title>Compromiso Escolar</title>
    <script src="https://kit.fontawesome.com/1652fc71a3.js" crossorigin="anonymous"></script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link href='https://fonts.googleapis.com/css?family=Fira Sans Condensed' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Fira Sans' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Fira Sans Condensed' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
          integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/base.css">
    <style>
        #menu > li::after {
            content: "";
            width: 1px;
            height: 20px;
            border-right: 2px solid #666;
            float: right;
            margin-left: 0px;
        }

        .ui-state-default,
        .ui-widget-content .ui-state-default,
        .ui-widget-header .ui-state-default,
        .ui-button,
        html .ui-button.ui-state-disabled:hover,
        html .ui-button.ui-state-disabled:active {
            border: none;
            background: rgba(220, 104, 9, 0.90);
            font-weight: normal;

        }

        .ui-state-default,
        .ui-widget-content .ui-state-default,
        .ui-widget-header .ui-state-default,
        .ui-button,
        html .ui-button.ui-state-disabled:hover,
        html .ui-button.ui-state-disabled:active {
            border: none;
            background: rgba(220, 104, 9, 0.90);
            font-weight: normal;

        }

        .ui-state-default,
        .ui-widget-content .ui-state-default,
        .ui-widget-header .ui-state-default,
        .ui-button,
        html .ui-button.ui-state-disabled:hover,
        html .ui-button.ui-state-disabled:active {
            border: none;
            background: rgba(220, 104, 9, 0.90);
            font-weight: normal;
        }

        #menu {
            width: 100%;
            margin: 0;
            padding: 10px 0 0 0;
            list-style: none;
            background: transparent;
            position: absolute;
            top: 20px;
            left: -5%;
        }

        img.btnSalir {
            position: absolute;
            top: 23px;
            max-width: 145px;
            max-height: 42.11px;
            left: 88%;
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

        #menu li:hover > a {
            padding-bottom: 20px;
            border-bottom: 9px solid #07ACAA;
        }

        #submenu li:hover > a {
            padding-bottom: 9px !important;
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

        /*.accordion {*/
        /*    position: relative;*/
        /*    top: -900;*/
        /*    right: -25%;*/
        /*    border-top-color: #999999;*/
        /*    cursor: pointer;*/
        /*    text-align: left;*/
        /*    font-size: 15px;*/
        /*    font-family: "Fira Sans Condensed", sans-serif;*/
        /*    background-color: rgba(255, 255, 255, 0.5);*/
        /*    font-weight: bold;*/
        /*}*/

        hr.subtitulo2 {
            height: 2px;
            background-color: #22a2b0;
        }

        h1.acordion2 {
            -epub-hyphens: none;
            font-style: normal;
            font-variant: normal;
            color: #22a2b0;
            font-family: "Fira Sans Condensed ExtraBold", sans-serif;
            font-size: 16px;
            font-weight: 800;
            line-height: 1.2;
            text-align: left;
            border-bottom-width: thin;
        }

        p.p1 {
            color: #000000;
            font-family: "Open Sans", sans-serif;
            font-size: 18px;
            line-height: 1.4;
            text-align: justify;
            text-align-last: left;
        }


        h1 {
            -epub-hyphens: none;
            font-style: normal;
            font-variant: normal;
            color: #fc455c;
            font-family: "Fira Sans Condensed ExtraBold", sans-serif;
            font-size: 25px;
            font-weight: 800;
            line-height: 1.2;
            text-align: left;
            border-bottom-width: thin;
        }

        h1.color {
            -epub-hyphens: none;
            font-style: normal;
            font-variant: normal;
            color: #22a2b0;
            font-family: "Fira Sans Condensed ExtraBold", sans-serif;
            font-size: 25px;
            font-weight: 800;
            line-height: 1.2;
            text-align: left;
            border-bottom-width: thin;
        }

        h1.acordion {
            -epub-hyphens: none;
            font-style: normal;
            font-variant: normal;
            color: #22a2b0;
            font-family: "Fira Sans ExtraBold", sans-serif;
            font-size: 16px;
            font-weight: 800;
            line-height: 1.2;
            text-align: left;
            border-bottom-width: thin;
        }

        hr {
            height: 2px;
            background-color: #fc455c;
        }

        hr.subtitulo {
            height: 2px;
            background-color: #22a2b0;
        }

        div.imagen {
            position: relative;
            right: 12%;
            top: 25px;
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
            width: 100%;
            max-width: 800px;
            margin: 0px;
            box-shadow: 0 0 10px rgba(0, 0, 0, .1);
        }

        #main-content header,
        #main-content .content {
            padding: 40px;
        }

        .wrapper {
            background-color: #cccccc;
            border-radius: 12px;
            border: 1px solid #f27611;
            background-image: url("img/presentacion.png");
            background-position: center center;
            background-size: 40%;
            background-repeat: no-repeat;
        }

        /*acordeón1*/

        .ui-accordion {
            width: 50.3%;
            position: absolute;
            top: 108px;
            height: 24px;
            left: 34.7%;
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
            color: #cccccc;
        }

        .ui-accordion-content-active {
            border-style: 1px solid;
            border-color: #da9600;
            background-color: rgba(255, 255, 255, 0.5);
            color: #cccccc;

        }

        /*acordeón 2*/

        .ui-accordion2 {
            width: 50.3%;
            position: absolute;
            top: 390px;
            left: 34.7%
        }

        .ui-accordion2-header {
            border-top-color: #999999;
            background-color: rgba(80, 80, 80, 0.9);
            font-weight: bolder;
            color: #cccccc;
        }

        .ui-accordion2-header-active {
            border-style: 1px solid;
            border-color: #da9600;
            background-color: rgba(255, 255, 255, 0.5);
            color: white;
        }

        .ui-accordion2-content-active {
            border-style: 1px solid;
            border-color: #da9600;
            background-color: rgba(255, 255, 255, 0.5);
            color: white;

        }

        .accordion .card-header {
            background: rgba(220, 104, 9, 0.90);
            color: #cccccc;
            font-family: "Fira Sans Condensed", sans-serif;
            font-size: 18px;
            line-height: 1.152;
            margin-bottom: 16px;
            text-align: justify;
            margin-block-end: 0;
        }

        .accordion .card-header .arrow-down {
            display: block;
        }

        .accordion .card-header .arrow-up {
            display: none;
        }

        .accordion .card-header.collapsed {
            background-color: rgba(80, 80, 80, 0.9);
            font-weight: bolder;
            color: #cccccc;
        }

        .accordion .card-header.collapsed .arrow-down {
            display: none;
        }

        .accordion .card-header.collapsed .arrow-up {
            display: block;
        }

        .accordion .card {
            background-color: rgba(255, 255, 255, 0.5);
        }

        .accordion .card-body {
            color: #666666;
            font-size: 18px;
            font-family: "Fira Sans Condensed", sans-serif;
            background-color: rgba(255, 255, 255, 0.5);
            font-weight: bold;
        }
    </style>
</head>

<body>
<?php include "partials/main-header.php" ?>

<div class="container wrapper p-3">
    <div class="row">
        <div class="col-12">
            <h1 class="color m-0 p-0">
                <span style="color: #fc455c">Compromiso</span>
                Escolar
            </h1>
        </div>
    </div>

    <div class="row mb-2">
        <div class="col-12">
            <hr class="m-0">
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <div class="row">
                <div class="col-4">
                    <p class="p1">
                        Uno de los elementos centrales del SIESE es la medición del <strong
                                style="font-style: oblique;">Compromiso
                            Escolar</strong>, variable clave para prevenir la desescolarización, debido a que la
                        decisión de abandonar
                        la escuela es la etapa final de un proceso de pérdida paulatina del interés por los estudios.
                        El Compromiso Escolar es conceptualizado como la participación activa de la o el estudiante en
                        las actividades
                        académicas, curriculares o extracurriculares. A modo general, se entiende que las y los
                        estudiantes
                        comprometidos creen que el aprendizaje es significativo, y están motivados y empeñados en este
                        proceso y en el
                        futuro. El <strong>Compromiso Escolar</strong> impulsa al estudiante hacia el aprendizaje,
                        pudiendo ser
                        alcanzado por todas y todos.
                        Su importancia radica en que es un <strong>predictor temprano</strong> de las variables que
                        intervienen en el
                        éxito o fracaso de trayectorias educativas, en particular el rendimiento académico y la
                        asistencia. Se comprende
                        además que el Compromiso Escolar es una variable altamente influenciada por factores
                        contextuales y
                        relacionales, como son la familia, el profesorado y el grupo de pares.
                        Es por esto que se desarrolló un instrumento de evaluación del Compromiso Escolar en sus
                        <strong>tres subtipos
                            (cognitivo, conductual y afectivo) y los tres factores relacionados (apoyo familiar, apoyo
                            de pares, apoyo
                            de profesorado)</strong> que esperamos sea una herramienta para ayudar a las escuelas a
                        buscar alternativas
                        y promover mejores trayectorias educativas para todos y todas las estudiantes.

                    </p>
                </div>
                <div class="col-6">
                    <h1 class="acordion2 m-0 p-0">Dimensiones del Compromiso Escolar</h1>
                    <hr class="subtitulo m-0">

                    <div id="accordionExample1" class="accordion mb-3 mt-2">
                        <div class="card">
                            <div class="card-header  h2"
                                 id="headingOne" data-toggle="collapse"
                                 data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                <div class="d-flex justify-content-between">
                                    <div>Compromiso afectivo</div>
                                    <div>
                                        <div class="arrow-down">
                                            <span class="fas fa-arrow-down"></span>
                                        </div>
                                        <div class="arrow-up">
                                            <span class="fas fa-arrow-up"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                                 data-parent="#accordionExample1">
                                <div class="card-body">
                                    Se define como el nivel de respuesta emocional del/la estudiante hacia el
                                    establecimiento educativo y su
                                    proceso de aprendizaje, caracterizado por un sentimiento de involucramiento con el
                                    colegio y una
                                    consideración de éste como un lugar que vale la pena formar parte. El compromiso
                                    afectivo brinda el
                                    incentivo para participar y perseverar. Estudiantes que están comprometidos/as
                                    afectivamente, se sienten
                                    parte de una comunidad escolar, y que el colegio es significativo en sus vidas, al
                                    tiempo que reconocen
                                    que la escuela proporciona herramientas para obtener logros fuera de ella. Abarca
                                    conductas hacia el
                                    profesorado, compañeros/as y la escuela, creando un vínculo con la comunidad
                                    educativa y
                                    una buena
                                    disposición hacia el trabajo estudiantil.
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-header  h2 collapsed"
                                 id="headingTwo" data-toggle="collapse"
                                 data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                                <div class="d-flex justify-content-between">
                                    <div>Compromiso conductual</div>
                                    <div>
                                        <div class="arrow-down">
                                            <span class="fas fa-arrow-down"></span>
                                        </div>
                                        <div class="arrow-up">
                                            <span class="fas fa-arrow-up"></span>
                                        </div>
                                    </div>
                                </div>

                            </div>


                            <div id="collapseTwo" class="collapse " aria-labelledby="headingTwo"
                                 data-parent="#accordionExample1">
                                <div class="card-body">
                                    El compromiso conductual se basa en la idea de participación en el ámbito académico
                                    y
                                    actividades
                                    sociales o extracurriculares. El componente conductual del Compromiso Escolar
                                    incluye
                                    las interacciones
                                    y respuestas del estudiante, dentro de la sala de clases, del colegio y en ambientes
                                    extracurriculares.
                                    Este aspecto del Compromiso Escolar va desde un continuo, es decir, desde un
                                    involucramiento esperado de
                                    manera universal (asistencia diaria) a un involucramiento más intenso (Ej.
                                    Participación
                                    en el centro de
                                    alumnos).
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-header h2 collapsed"
                                 id="heading3" data-toggle="collapse"
                                 data-target="#collapse3" aria-expanded="true" aria-controls="collapse3">
                                <div class="d-flex justify-content-between">
                                    <div>Compromiso cognitivo</div>
                                    <div>
                                        <div class="arrow-down">
                                            <span class="fas fa-arrow-down"></span>
                                        </div>
                                        <div class="arrow-up">
                                            <span class="fas fa-arrow-up"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div id="collapse3" class="collapse " aria-labelledby="heading3"
                                 data-parent="#accordionExample1">
                                <div class="card-body">
                                    El compromiso cognitivo es el proceso mediante el cual se incorpora la conciencia y
                                    voluntad de ejercer
                                    el esfuerzo necesario para comprender ideas complejas y desarrollar habilidades
                                    difíciles. Es la
                                    inversión consciente de energía para construir aprendizajes complejos que van más
                                    allá
                                    de los
                                    requerimientos mínimos. Refleja la disposición del estudiante para utilizar y
                                    desarrollar sus destrezas
                                    cognitivas en el proceso de aprendizaje y dominio de nuevas habilidades de gran
                                    complejidad. Implica
                                    actuar de manera reflexiva y estar dispuesto a realizar el esfuerzo necesario para
                                    la
                                    comprensión de
                                    ideas complejas y desarrollar habilidades para el aprendizaje
                                </div>
                            </div>
                        </div>
                    </div>

                    <h1 class="acordion2 m-0 p-0">Factores contextuales</h1>
                    <hr class="subtitulo2 m-0">

                    <div id="accordion-2" class="accordion">
                        <div class="card">
                            <div class="card-header  h2"
                                 id="heading4" data-toggle="collapse"
                                 data-target="#collapse4" aria-expanded="true" aria-controls="collapse4">
                                <div class="d-flex justify-content-between">
                                    <div>Apoyo de la familia</div>
                                    <div>
                                        <div class="arrow-down">
                                            <span class="fas fa-arrow-down"></span>
                                        </div>
                                        <div class="arrow-up">
                                            <span class="fas fa-arrow-up"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div id="collapse4" class="collapse show" aria-labelledby="heading4"
                                 data-parent="#accordion-2">
                                <div class="card-body">
                                    Se refiere a que los/las estudiantes perciben ser apoyados por sus
                                    familias. La familia
                                    del/la estudiante suele apoyar a su hijo/a en el proceso de aprendizaje y cuando
                                    tiene
                                    problemas,
                                    ayudándolo con las tareas, conversando lo que sucede en la escuela, animándolo y
                                    motivándolo a trabajar
                                    bien.
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-header h2 collapsed"
                                 id="heading5" data-toggle="collapse"
                                 data-target="#collapse5" aria-expanded="true" aria-controls="collapse5">
                                <div class="d-flex justify-content-between">
                                    <div>Apoyo del profesorado</div>
                                    <div>
                                        <div class="arrow-down">
                                            <span class="fas fa-arrow-down"></span>
                                        </div>
                                        <div class="arrow-up">
                                            <span class="fas fa-arrow-up"></span>
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <div id="collapse5" class="collapse " aria-labelledby="heading5"
                                 data-parent="#accordion-2">
                                <div class="card-body">
                                    Se refiere a que los y las estudiantes perciben ser apoyados por sus
                                    profesores y
                                    profesoras. Se siente motivado/a por sus docentes para aprender, pues le ayudan
                                    cuando
                                    tiene algún
                                    problema. El o la estudiante mantiene en general buenas relaciones con ellos/as.
                                    Existe
                                    la impresión de
                                    que el profesorado mantiene un interés por el/la estudiante como persona y como
                                    estudiante,
                                    ayudándolo/la en caso de dificultades. El o la estudiante considera que sus docentes
                                    lo
                                    tratan con
                                    respeto y lo alientan a realizar nuevamente una tarea si se ha equivocado, junto con
                                    sentir que en el
                                    colegio se valora la participación de todos y todas.
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-header h2 collapsed"
                                 id="heading6" data-toggle="collapse"
                                 data-target="#collapse6" aria-expanded="true" aria-controls="collapse6">
                                <div class="d-flex justify-content-between">
                                    <div>Apoyo de pares</div>
                                    <div>
                                        <div class="arrow-down">
                                            <span class="fas fa-arrow-down"></span>
                                        </div>
                                        <div class="arrow-up">
                                            <span class="fas fa-arrow-up"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div id="collapse6" class="collapse " aria-labelledby="heading6"
                                 data-parent="#accordion-2">
                                <div class="card-body">
                                    Se define como la percepción que tienen los y las estudiantes acerca de
                                    las relaciones
                                    interpersonales entre compañeros/as, la preocupación, la confianza y el apoyo que se
                                    da
                                    entre pares,
                                    siendo importantes para la integración escolar, frente a los desafíos escolares y/o
                                    cuando tiene una
                                    dificultad académica.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-2">
                    <div class="d-flex justify-content-end">
                        <?php include "partials/menu-lateral.php" ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
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
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script>
    $(function () {
        $("#accordion").accordion();
    });
    $(function () {
        $("#accordion2").accordion();
    });
</script>
<?php include "partials/login-form.php" ?>
</body>
</html>