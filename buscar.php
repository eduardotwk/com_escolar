<!DOCTYPE html>
<html>

<head>
    <script src="https://kit.fontawesome.com/1652fc71a3.js" crossorigin="anonymous"></script>
    <script type='text/javascript' src="//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
    <link href='https://fonts.googleapis.com/css?family=Fira Sans Condensed' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Fira Sans' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Fira Sans Condensed' rel='stylesheet'>
    <script>
        $(document).ready(function() {
            $("#test").CreateMultiCheckBox({
                width: '370px',
                height: '250px',
            });
            $(document).on("click", ".MultiCheckBox", function() {
                var detail = $(this).next();
                detail.show();
                clearResp();
            });

            $(document).on("click", ".MultiCheckBoxDetailHeader input", function(e) {
                e.stopPropagation();
                var hc = $(this).prop("checked");
                $(this).closest(".MultiCheckBoxDetail").find(".MultiCheckBoxDetailBody input").prop("checked", hc);
                $(this).closest(".MultiCheckBoxDetail").next().UpdateSelect();
            });

            $(document).on("click", ".MultiCheckBoxDetailHeader", function(e) {
                var inp = $(this).find("input");
                var chk = inp.prop("checked");
                inp.prop("checked", !chk);
                $(this).closest(".MultiCheckBoxDetail").find(".MultiCheckBoxDetailBody input").prop("checked", !chk);
                $(this).closest(".MultiCheckBoxDetail").next().UpdateSelect();
            });

            $(document).on("click", ".MultiCheckBoxDetail .cont input", function(e) {
                e.stopPropagation();
                $(this).closest(".MultiCheckBoxDetail").next().UpdateSelect();

                var val = ($(".MultiCheckBoxDetailBody input:checked").length == $(".MultiCheckBoxDetailBody input").length)
                $(".MultiCheckBoxDetailHeader input").prop("checked", val);
            });

            $(document).on("click", ".MultiCheckBoxDetail .cont", function(e) {
                var inp = $(this).find("input");
                var chk = inp.prop("checked");
                inp.prop("checked", !chk);

                var multiCheckBoxDetail = $(this).closest(".MultiCheckBoxDetail");
                var multiCheckBoxDetailBody = $(this).closest(".MultiCheckBoxDetailBody");
                multiCheckBoxDetail.next().UpdateSelect();

                var val = ($(".MultiCheckBoxDetailBody input:checked").length == $(".MultiCheckBoxDetailBody input").length)
                $(".MultiCheckBoxDetailHeader input").prop("checked", val);
            });

            $(document).mouseup(function(e) {
                var container = $(".MultiCheckBoxDetail");
                if (!container.is(e.target) && container.has(e.target).length === 0) {
                    container.hide();
                }
            });
        });

        var defaultMultiCheckBoxOption = {
            width: '220px',

            height: '200px'
        };

        jQuery.fn.extend({
            CreateMultiCheckBox: function(options) {

                var localOption = {};
                localOption.width = (options != null && options.width != null && options.width != undefined) ? options.width : defaultMultiCheckBoxOption.width;
                localOption.defaultText = (options != null && options.defaultText != null && options.defaultText != undefined) ? options.defaultText : defaultMultiCheckBoxOption.defaultText;
                localOption.height = (options != null && options.height != null && options.height != undefined) ? options.height : defaultMultiCheckBoxOption.height;

                this.hide();
                this.attr("multiple", "multiple");
                var divSel = $("<div class='MultiCheckBox'>" + localOption.defaultText + "<span class='k-icon k-i-arrow-60-down'><svg aria-hidden='true' focusable='false' data-prefix='fas' data-icon='sort-down' role='img' xmlns='http://www.w3.org/2000/svg' viewBox='0 0 320 512' class='svg-inline--fa fa-sort-down fa-w-10 fa-2x'><path fill='currentColor' d='M41 288h238c21.4 0 32.1 25.9 17 41L177 448c-9.4 9.4-24.6 9.4-33.9 0L24 329c-15.1-15.1-4.4-41 17-41z' class=''></path></svg></span></div>").insertBefore(this);
                divSel.css({
                    "width": localOption.width
                });

                var detail = $("<div class='MultiCheckBoxDetail'><div class='MultiCheckBoxDetailHeader'><div>Seleccionar Todo</div></div><div class='MultiCheckBoxDetailBody'></div></div>").insertAfter(divSel);
                detail.css({
                    "width": parseInt(options.width) + 10,
                    "max-height": localOption.height
                });
                var multiCheckBoxDetailBody = detail.find(".MultiCheckBoxDetailBody");

                this.find("option").each(function() {
                    var val = $(this).attr("value");

                    if (val == undefined)
                        val = '';

                    multiCheckBoxDetailBody.append("<div class='cont'><div><input type='checkbox' class='mulinput' name ='check_lista[] 'value='" + val + "' /></div><div>" + $(this).text() + "</div></div>");
                });

                multiCheckBoxDetailBody.css("max-height", (parseInt($(".MultiCheckBoxDetail").css("max-height")) - 28) + "px");
            },
            UpdateSelect: function() {
                var arr = [];

                this.prev().find(".mulinput:checked").each(function() {
                    arr.push($(this).val());
                });

                this.val(arr);
            },
        });

        function clearResp() {
            document.getElementById("respContent").innerHTML = "";
        }
    </script>

</head>

<body>
    <style>
        th.tittable {
            color: #22a2b0;
            font-family: "Fira Sans Condensed", sans-serif;
            font-size: 14px;
            line-height: 1.4;
            margin-bottom: 20px;
            text-align: justify;
            text-align-last: left;
            text-decoration: underline;

        }

        li.contenido {
            color: #fc455c;
            font-family: "Fira Sans Condensed", sans-serif;
            font-size: 14px;
            position: relative;
            left: 5%;
            text-decoration: underline;
            font-weight: bolder;
        }
        a.contenido2{
             color: #fc455c;
            font-family: "Fira Sans Condensed", sans-serif;
            font-size: 14px;
        }

        table.fichas {
            position: absolute;
            top: -140px;
            left: 115%;
            border-radius: 4px;
            width: 220%;
            background-color: white;
            border-color: #da9600
        }

        p.criterios {
            color: #666666;
            font-weight: normal;
            font-family: "Open Sans", sans-serif;
            font-size: 18px;
            position: relative;
            top: 80px;
            right: 86%;
            width: 380px;
        }

        form {
            position: absolute;
            top: 210px;
        }

        p.resultado {
            position: relative;
            top: -180px;
            left: 170%
        }

        hr.subtitulo {
            height: 2px;
            background-color: #22a2b0;
            margin-left: -30%;
            position: absolute;
            top: 112px;
            right: -9%;
            width: 490px;
        }

        li.criterios {
            color: #666666;
            font-weight: normal;
            font-family: "Fira Sans Condensed", sans-serif;
            font-size: 18px;
            position: relative;
            top: 150px;
            right: 65%;

        }

        p.seleccion {
            color: #666666;
            font-weight: normal;
            font-family: "Open Sans", sans-serif;
            font-size: 18px;
            position: absolute;
            top: 300px;
            right: 69%;

        }

        p.tit {
            color: #22a2b0;
            font-family: "Fira Sans Condensed", sans-serif;
            font-size: 18px;
            font-weight: 800;
            line-height: 1.2;
            margin-bottom: 20px;
            text-align: left;
            position: absolute;
            top: 80px;
            right: 87%;
            width: 250px;
        }

        button.btn {
            border-color: #da9600;
            border-width: 1px;
            border-style: solid;
            background-color: #ffffff;
            border-radius: 5px 5px 5px 5px;
            padding: 6px 17px;
            position: absolute;
            right: -10% !important;
            color: #666666;
            top: 50px !important;
        }

        /* inicio select checkbox */
        .MultiCheckBox {

            padding: 5px;
            border-radius: 4px;
            cursor: pointer;
            position: absolute;
            right: 36.5% !important;
            border-color: #da9600;
            border-width: 1px;
            border-style: solid;
            background-color: #ffffff;
            color: white;
            top: 50px
        }

        .MultiCheckBox .k-icon {
            font-size: 15px;
            float: right;
            font-weight: bolder;
            margin-top: -7px;
            height: 10px;
            width: 14px;
            color: #787878;
        }

        .MultiCheckBoxDetail {
            display: none;
            position: absolute;
            overflow-y: hidden;
            position: absolute;
            right: 36.5% !important;
            border-color: #da9600;
            border-width: 1px;
            border-radius: 4px;
            border-style: solid;
            color: white;
            font-family: "Open Sans", sans-serif;
            font-size: 16px;
            line-height: 1.4;
            margin-bottom: 20px;
            text-align: justify;
            text-align-last: left;
            top: 50px !important;
        }

        .MultiCheckBoxDetailBody {
            background-color: #22a2b0;
            border-radius: 4px;
        }

        .MultiCheckBoxDetail .cont {
            clear: both;
            overflow: hidden;
            padding: 2px;
        }

        .MultiCheckBoxDetail .cont:hover {
            background-color: white;
            color: black;
        }

        .MultiCheckBoxDetailBody>div>div {
            float: left;
        }

        .MultiCheckBoxDetail>div>div:nth-child(1) {}

        .MultiCheckBoxDetailHeader {
            overflow: hidden;
            position: relative;
            height: 28px;
            background-color: white;
        }

        .MultiCheckBoxDetailHeader>input {
            position: absolute;
            top: 4px;
            left: 3px;
        }

        .MultiCheckBoxDetailHeader>div {
            position: absolute;
            top: 5px;
            left: 24px;
            color: black;
        }

        /*fin select*/

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
            background: #25496b;
            color: white;
            height: 100px;
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
            background-color: #cccccc;
            border-radius: 12px;
            border: 1px solid #f27611;
            width: 750px;
            height: 250px;
            margin: 10px 50px;
            padding: 250px;
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
            top: 920px;
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
            top: 915px;
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
            width: 143%;
            position: relative;
            top: -210px;

        }
    </style>
    <header id="main-header">
    <img class="logo" src="img/logo home.png">
        <img class="lapiz" src="img/Header/compromiso.png">

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
        <h1>Buscador <h1 class="color">de estrategias</h1>
        </h1>
        <hr>
        </hr>
        <p class=texto>Seleccione uno o más criterios de la lista desplegable en la <br />
            caja de búsqueda. Una vez seleccionados pinche en "Buscar". <br /><br />
            Cuando aparezcan los resultados, seleccione la estrategia de <br />
            su interés y pínchela para que se despliegue su descripción.</p>


        <!-- Contenido -->

        <form action="buscar.php" method="post" id="buscar">
            <div style="width: 254px;">

                <select id="test" onfocus="borra();">
                    <option name="check_lista[]" value="co_co">Compromiso Cognitivo</option>
                    <option name="check_lista[]" value="co_af">Compromiso Afectivo</option>
                    <option name="check_lista[]" value="co_con">Compromiso Conductual</option>
                    <option name="check_lista[]" value="fcf">Factor contextual- Familia</option>
                    <option name="check_lista[]" value="fcpa">Factor Contextual - Pares</option>
                    <option name="check_lista[]" value="fcpr">Factor Contextual - Profesorado</option>
                </select>

                <button type="submit" class="btn" name="enviar"><i class="fas fa-search"></i>&nbsp;Buscar...</button>
                <!----- Including PHP Script ----->
                <?php include 'databaseconnect.php'; ?>
                <?php include 'procesa_check.php'; ?>
            </div>
        </form>
        <!-- Fin Contenido -->

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
                        <a href="#">
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