<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href='https://fonts.googleapis.com/css?family=Fira Sans Condensed' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Fira Sans Condensed' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Fira Sans' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Fira Sans Condensed' rel='stylesheet'>
    <link rel="stylesheet" href="./css/base.css">
    <link rel="stylesheet" href="./css/modal.css">
    <link rel="stylesheet" href="./css/search.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script src="https://kit.fontawesome.com/1652fc71a3.js" crossorigin="anonymous"></script>
    <script type='text/javascript' src="//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
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

                var detail = $("<div class='MultiCheckBoxDetail'><div class='MultiCheckBoxDetailHeader'><div></div></div><div class='MultiCheckBoxDetailBody'></div></div>").insertAfter(divSel);
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
                <label id="idFicha" style="display: none;"></label>
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
                        <a href="#">
                            <image class="alineadoTextoImagenAbajo" src="img/menu_flotante/4.-Fichas proceso.png" style="width: 40px;" style="height: 40px;">
                                Fichas<br />SIESE
                        </a>
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
                <table class="table2">
                    <tr>

                        <th><a class="table2" href="https://www.e-mineduc.cl/login/index.php">Capacitación</th>
                    </tr>
                    <tr>
                        <th><a class="table2" href="calendario.php">Calendario de actividades</th>
                    </tr>
                    <tr>
                        <th><a class="table2" href="https://www.compromisoescolar.com/inicia_encuesta.php">Instrumentos de medición</th>
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
                        <th><a href="https://www.compromisoescolar.com/documentos/Manual_de_Usuario_Plataforma_Compromiso_Escolar_2020.pdf">
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

    <button id="btnModal" style="display: none;" type='button' class='btn btn-primary btn-lg' data-toggle='modal' data-target='#myModal'>Abrir modal</button>
    <div class="modal fade" id="myModal" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content" style="border-color:#da9600;
	                    border-width:1px;
	                    border-style:solid;
	                    background-color:#fffefd;
	                    border-radius:3px 3px 3px 3px;
                        width: 675px;">
                <div class="modal-header" style="background-color: #22a2b0;height:30px;">
                    <button style="position: relative;top:-7px;" type="button" class="close" data-dismiss="modal">×</button>
                    <h4 class="modal-tittle" id="titMod"></h4>
                </div>
                <div class="modal-body" style="height: 600px;">
                </div>

                <a href= "#" onclick="descargar();"><img src="img/Fichas/Descargar.png" style="height: 40px;width: 40px;position:absolute;left:90%; top:auto;bottom: 10px;"></a>
            </div>
        </div>
    </div>

</body>

<script type="text/javascript">
    function descargar() {

        var idFicDescarga = document.getElementById("idFicha").innerHTML;
        window.location = "descarga.php?id_ficha=" + idFicDescarga;
    }


    function levantaMod(id) {


        var identificador = "fic" + id;
        var nombre = document.getElementById(identificador).innerHTML;
        document.getElementById("titMod").innerHTML = nombre;
        document.getElementById("idFicha").innerHTML = id;
        document.getElementById("btnModal").click();

    }

    $('#btnModal').on('click', function() {
        var idFic = document.getElementById("idFicha").innerHTML;
        $('.modal-body').load('cargaDetalle.php?id_ficha=' + idFic, function(response) {
            $('#myModal').modal({
                show: true
            });
        });
    })
</script>


</html>