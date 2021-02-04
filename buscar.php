<!DOCTYPE html>
<html>

<head>
    <script src="https://kit.fontawesome.com/1652fc71a3.js" crossorigin="anonymous"></script>
</head>

<body>
    <header id="main-header">
        <img class="logo" src="img/Header/Logo plataforma menor.png">
        <img class="lapiz" src="img/Header/compromiso.png">

        <ul id="menu">
            <li>
                <a href="#">Pasos</a>
                <ul id="submenu">
                    <li><a href="paso1.php">Paso 1</a></li>
                    <li><a href="paso2.php">Paso 2</a></li>
                    <li><a href="paso3.php">Paso 3</a></li>
                    <li><a href="paso4.php">Paso 4</a></li>
                </ul>
            </li>
            <li><a href="compromiso_escolar.php">Compromiso Escolar</a></li>
            <li><a href="presentacion.php">Presentación</a></li>
            <li><a href="home.php"><i class="fas fa-home">&nbsp;</i>Inicio</a></li>
        </ul>

    </header><!-- / #main-header -->

    <div class="container">
        <h1>Buscador <h1 class="color">de estrategias</h1>
        </h1>
        <hr>
        </hr>
        <p class=texto>Seleccione uno o más criterios de la lista desplegable en la <br />
            caja de búsqueda. Una vez seleccionados pinche en "Buscar". <br /><br />
            Cuando aparezcan los resultados, seleccione la estrategia de <br />
            su interés y pínchela para que se despliegue su descripción.</p>

            <div class="row">
    <div class="col-8 col-md-8"> 
      <!-- Contenido -->
      
<form action="buscar.php" method="post">
<div class="checkbox">
  <label><input type="checkbox" name="check_lista[]" value="co_co">Compromiso Cognitivo</label>
</div>
<div class="checkbox"> 
  <label><input type="checkbox" name="check_lista[]" value="co_af">Compromiso Afectivo</label>
</div>
<div class="checkbox">
  <label><input type="checkbox" name="check_lista[]" value="co_con">Compromiso Conductual</label>
</div> 
<div class="checkbox">
  <label><input type="checkbox" name="check_lista[]" value="fcf">Factor contextual- Familia</label>
</div> 
<div class="checkbox">
  <label><input type="checkbox" name="check_lista[]" value="fcpa">Factor Contextual - Pares</label>
</div>
<div class="checkbox">
  <label><input type="checkbox" name="check_lista[]" value="fcpr">Factor Contextual - Profesorado</label>
</div> 
<button type="submit" class="btn btn-primary" name="enviar"><i class="fas fa-search"></i>Buscar...</button>
<!----- Including PHP Script ----->
<?php include 'databaseconnect.php';?>
<?php include 'procesa_check.php';?>
</form>
      <!-- Fin Contenido --> 
    </div>
  </div>
  <!-- Fin row --> 

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
                        <a href="busca_estrategia.php">
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
<style>
    p.texto {
        color: #000000;
        font-family: "Open Sans", sans-serif;
        font-size: 18px;
        line-height: 1.4;
        margin-bottom: 20px;
        text-align: justify;
        text-align-last: left;
        position: absolute;
        top: 90px;
        right: 58%;
    }
    

    a {
        color: #000000;
        font-family: "Open Sans", sans-serif;
        font-size: 10px;
        text-decoration: none;
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
        right: 87.5%;
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
        right: 71%;
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
        color: #22a2b0;
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
        top: 35px;
        left: 0;
        z-index: 99999;
        background: #22a2b0;
        border-radius: 2px;
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

    nav ul li a:hover {
        background: #22a2b0;
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
        background: #183e7c;
        color: white;
        height: 100px;
    }

    #main-header a {
        color: #868686;
        font-family: "Open Sans", sans-serif;
        font-size: 18px;
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

    div.container {
        background-color: #CCCCCC;
        width: 750px;
        height: 450px;
        margin: 10px 50px;
        padding: 250px;
        border-radius: 10px;
        border: 1px solid #9E9E9E;
        position: relative;
        top: 20px;
        background-image: url("img/Buscador.png");
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

    hr {
        height: 2px;
        background-color: #fc455c;
        margin-left: -30%;
        width: 138%;
        position: relative;
        top: -210px;

    }
</style>