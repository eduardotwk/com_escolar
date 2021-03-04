<!DOCTYPE html>
<html>

<head>
    <title>Compromiso Escolar</title>
    <script src="https://kit.fontawesome.com/1652fc71a3.js" crossorigin="anonymous"></script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <link href='https://fonts.googleapis.com/css?family=Fira Sans Condensed' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Fira Sans' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Fira Sans Condensed' rel='stylesheet'>
    <link rel="stylesheet" href="./css/base.css">
    <script>
        $(function() {
            $("#accordion").accordion();
        });
        $(function() {
            $("#accordion2").accordion();
        });
    </script>
</head>

<body>

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
        <h1>Compromiso <h1 class="color">escolar</h1>
        </h1>
        <hr>
        </hr>
        <div id="table">
            <table>
                <tr>
                    <th>
                        <a href="https://www.e-mineduc.cl/login/index.php" target="_blank">
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
                        <a href="/inicia_encuesta.php">
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
                        <a href="/inicia_reportes.php">
                            <image class="alineadoTextoImagenAbajo" src="img/menu_flotante/6.-Resultados.png" style="width: 40px;" style="height: 40px;">
                                Resultados de<br />medición
                    </th>
                </tr>
            </table>
        </div>
        <p class="p1">
            Uno de los elementos centrales del SIESE es la medición del <strong style="font-style: oblique;">Compromiso Escolar</strong>, variable clave para prevenir la desescolarización, debido a que la decisión de abandonar la escuela es la etapa final de un proceso de pérdida paulatina del interés por los estudios.
            El Compromiso Escolar es conceptualizado como la participación activa de la o el estudiante en las actividades académicas, curriculares o extracurriculares. A modo general, se entiende que las y los estudiantes comprometidos creen que el aprendizaje es significativo, y están motivados y empeñados en este proceso y en el futuro. El <strong>Compromiso Escolar</strong> impulsa al estudiante hacia el aprendizaje, pudiendo ser alcanzado por todas y todos.
            Su importancia radica en que es un <strong>predictor temprano</strong> de las variables que intervienen en el éxito o fracaso de trayectorias educativas, en particular el rendimiento académico y la asistencia. Se comprende además que el Compromiso Escolar es una variable altamente influenciada por factores contextuales y relacionales, como son la familia, el profesorado y el grupo de pares.
            Es por esto que se desarrolló un instrumento de evaluación del Compromiso Escolar en sus <strong>tres subtipos (cognitivo, conductual y afectivo) y los tres factores relacionados (apoyo familiar, apoyo de pares, apoyo de profesorado)</strong> que esperamos sea una herramienta para ayudar a las escuelas a buscar alternativas y promover mejores trayectorias educativas para todos y todas las estudiantes.

        </p>
        <h1 class="acordion">Dimensiones del Compromiso Escolar</h1>
        <hr class="subtitulo">
        </hr>
        <div id="accordion">
            <h3>Compromiso afectivo</h3>
            <div>
                <p class="acordion">
                    Se define como el nivel de respuesta emocional del/la estudiante hacia el establecimiento educativo y su proceso de aprendizaje, caracterizado por un sentimiento de involucramiento con el colegio y una consideración de éste como un lugar que vale la pena formar parte. El compromiso afectivo brinda el incentivo para participar y perseverar. Estudiantes que están comprometidos/as afectivamente, se sienten parte de una comunidad escolar, y que el colegio es significativo en sus vidas, al tiempo que reconocen que la escuela proporciona herramientas para obtener logros fuera de ella. Abarca conductas hacia el profesorado, compañeros/as y la escuela, creando un vínculo con la comunidad educativa y una buena disposición hacia el trabajo estudiantil.
                </p>
            </div>
            <h3>Compromiso conductual</h3>
            <div>
                <p class="acordion">
                    El compromiso conductual se basa en la idea de participación en el ámbito académico y actividades sociales o extracurriculares. El componente conductual del Compromiso Escolar incluye las interacciones y respuestas del estudiante, dentro de la sala de clases, del colegio y en ambientes extracurriculares. Este aspecto del Compromiso Escolar va desde un continuo, es decir, desde un involucramiento esperado de manera universal (asistencia diaria) a un involucramiento más intenso (Ej. Participación en el centro de alumnos).
                </p>
            </div>
            <h3>Compromiso cognitivo</h3>
            <div>
                <p class="acordion">
                    El compromiso cognitivo es el proceso mediante el cual se incorpora la conciencia y voluntad de ejercer el esfuerzo necesario para comprender ideas complejas y desarrollar habilidades difíciles. Es la inversión consciente de energía para construir aprendizajes complejos que van más allá de los requerimientos mínimos. Refleja la disposición del estudiante para utilizar y desarrollar sus destrezas cognitivas en el proceso de aprendizaje y dominio de nuevas habilidades de gran complejidad. Implica actuar de manera reflexiva y estar dispuesto a realizar el esfuerzo necesario para la comprensión de ideas complejas y desarrollar habilidades para el aprendizaje
                </p>
            </div>
        </div>

        <h1 class="acordion2" style="top:525px;">Factores contextuales</h1>
        <hr class="subtitulo2">
        </hr>
        <div id="accordion2" style="top: 567px;">
            <h3>Apoyo de la familia</h3>
            <div id="" style="height: 180px;">
                <p class="acordion">Se refiere a que los/las estudiantes perciben ser apoyados por sus familias. La familia del/la estudiante suele apoyar a su hijo/a en el proceso de aprendizaje y cuando tiene problemas, ayudándolo con las tareas, conversando lo que sucede en la escuela, animándolo y motivándolo a trabajar bien.
                </p>
            </div>
            <h3>Apoyo del profesorado</h3>
            <div style="height: 200px;">
                <p class="acordion">Se refiere a que los y las estudiantes perciben ser apoyados por sus profesores y profesoras. Se siente motivado/a por sus docentes para aprender, pues le ayudan cuando tiene algún problema. El o la estudiante mantiene en general buenas relaciones con ellos/as. Existe la impresión de que el profesorado mantiene un interés por el/la estudiante como persona y como estudiante, ayudándolo/la en caso de dificultades. El o la estudiante considera que sus docentes lo tratan con respeto y lo alientan a realizar nuevamente una tarea si se ha equivocado, junto con sentir que en el colegio se valora la participación de todos y todas.</p>
            </div>
            <h3>Apoyo de pares</h3>
            <div style="height: 200px;">
                <p class="acordion">Se define como la percepción que tienen los y las estudiantes acerca de las relaciones interpersonales entre compañeros/as, la preocupación, la confianza y el apoyo que se da entre pares, siendo importantes para la integración escolar, frente a los desafíos escolares y/o cuando tiene una dificultad académica.</p>
            </div>
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
                        <th><a class="table2" href="calendario.php">Calendario de actividades</th>
                    </tr>
                    <tr>
                        <th><a class="table2" href="/inicia_encuesta.php">Instrumentos de medición</th>
                    </tr>
                    <tr>
                        <th><a class="table2" href="#">Fichas SIESE</th>
                    </tr>
                    <tr>
                        <th><a class="table2" href="buscar.php">Buscador de estrategias</th>
                    </tr>
                </table>
                <table class="table3">
                    <tr>
                        <th><a href="/documentos/Manual_de_Usuario_Plataforma_Compromiso_Escolar_2020.pdf" target="_blank">
                                <image src="img/Botones/Manual_plataforma.png" style="max-width: 140px; margin-top: 10px; float:right;">
                            </a>
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
<style>
    #menu>li::after {
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

    nav ul li a:hover {
        background: #22a2b0;
    }

    a {
        color: #000000;
        font-family: "Open Sans", sans-serif;
        font-size: 10px;
        text-decoration: none;
    }


    p.acordion {
        color: #666666;
        font-family: "Fira Sans Condensed", sans-serif;
        font-size: 18px;
        line-height: 1.152;
        margin-bottom: 16px;
        text-align: justify;
        margin-block-end: 0;
    }

    .accordion {
        position: relative;
        top: -900;
        right: -25%;
        border-top-color: #999999;
        cursor: pointer;
        padding: 18px;
        width: 83%;
        height: 0%;
        border: none;
        text-align: left;
        outline: none;
        font-size: 15px;
        transition: 0.4s;
        font-family: "Fira Sans Condensed", sans-serif;
        background-color: rgba(255, 255, 255, 0.5);
        font-weight: bold;
    }

    hr.subtitulo2 {
        height: 2px;
        background-color: #22a2b0;
        margin-left: -30%;
        width: 51.4%;
        position: relative;
        top: 38px;
        left: 64.4%;
    }

    h1.acordion2 {
        position: absolute;
        top: -900px;
        right: 49.9%;
        -epub-hyphens: none;
        font-style: normal;
        font-variant: normal;
        color: #22a2b0;
        font-family: "Fira Sans Condensed ExtraBold", sans-serif;
        font-size: 16px;
        font-weight: 800;
        line-height: 1.2;
        margin-bottom: 38px;
        text-align: left;
        border-bottom-width: thin;
    }

    p.p1 {
        color: #000000;
        font-family: "Open Sans", sans-serif;
        font-size: 18px;
        line-height: 1.4;
        margin-bottom: 20px;
        text-align: justify;
        text-align-last: left;
        position: absolute;
        right: 68%;
        top: 50px;
        width: 30%;
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

    h1 {
        position: absolute;
        top: 1px;
        right: 84.7%;
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
        right: 76.2%;
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

    h1.acordion {
        position: absolute;
        top: 60px;
        right: 39.5%;
        -epub-hyphens: none;
        font-style: normal;
        font-variant: normal;
        color: #22a2b0;
        font-family: "Fira Sans ExtraBold", sans-serif;
        font-size: 16px;
        font-weight: 800;
        line-height: 1.2;
        margin-bottom: 38px;
        text-align: left;
        border-bottom-width: thin;
    }

    hr {
        height: 2px;
        background-color: #fc455c;
        margin-left: 0.5%;
        width: 85.2%;
        position: relative;
        top: 18px;

    }

    hr.subtitulo {
        height: 2px;
        background-color: #22a2b0;
        margin-left: -30%;
        width: 51.4%;
        position: relative;
        top: 514px;
        left: 64.4%;
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

    #main-content header,
    #main-content .content {
        padding: 40px;
    }

    div.container {
        background-color: #cccccc;
        border-radius: 12px;
        border: 1px solid #f27611;
        width: 100%;
        height: 905px;
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

    a.table2 {
        font-size: 12px;
        color: #fc455c;
        font-family: "Fira Sans Condensed", sans-serif;
    }
</style>