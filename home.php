<?php
error_reporting(E_ERROR | E_PARSE);
require 'conf/conexion_db.php';
require 'conf/funciones.php';
require 'conf/funciones_db.php';

?>

<!DOCTYPE html>
<html>

<head>
    <title>Compromiso Escolar</title>

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href='https://fonts.googleapis.com/css?family=Fira Sans Condensed' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Fira Sans' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Fira Sans Condensed' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
          integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/base.css">
    <script>
        function torta(rueda, trozo) {
            var pie;
            pie = document.getElementById('trozo');
            if (trozo == 'p1') {
                pie.className = 'p1';
                $("#p1").click(function () {
                    window.location.href = "paso1.php";
                    return false; //Just in case if it is a link prevent default behavior
                });
            } else if (trozo == 'p2') {
                pie.className = 'p2';
                $("#p2").click(function () {
                    window.location.href = "paso2.php";
                    return false; //Just in case if it is a link prevent default behavior
                });
            } else if (trozo == 'p3') {
                pie.className = 'p3';
                $("#p3").click(function () {
                    window.location.href = "paso3.php";
                    return false; //Just in case if it is a link prevent default behavior
                });
            } else if (trozo == 'p4') {
                pie.className = 'p4';
                $("#p4").click(function () {
                    window.location.href = "paso4.php";
                    return false; //Just in case if it is a link prevent default behavior
                });
            } else if (trozo == 'p5') {
                pie.className = 'p5';
                $("#p5").click(function () {
                    window.location.href = "paso5.php";
                    return false; //Just in case if it is a link prevent default behavior
                });
            } else if (trozo == 'p6') {
                pie.className = 'p6';
                $("#p6").click(function () {
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
<img class="logo" src="img/logo home.png"></image>
<body>
<style>
    .chart-skills {
        margin: 0 auto;
        padding: 0;
        position: relative;
        width: 100px;
        height: 100px;
        border-radius: 100%;
    }

    .chart-skills.grande {
        width: 400px;
        height: 400px;
        z-index: 40;
        position: absolute;
        top: 100px;
        left: 50%;
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

    a {
        color: #000000;
        font-family: "Open Sans", sans-serif;
        font-size: 10px;
        text-decoration: none;
    }

    span {
        color: #000000;
        font-family: "Open Sans", sans-serif;
        font-size: 10px;
        text-decoration: none;
    }

    img.alineadoTextoImagenAbajo {
        vertical-align: text-bottom;
    }

    #main-header {
        background-color: #fc455c;
        width: 100%;
        height: 20px;
        flex: 0 0 auto;
        margin-bottom: 50px;
        overflow: hidden;
    }

    #main-content header,
    #main-content .content {
        padding: 40px;
    }


    #main-footer {
        background: #CCCCCC;
        color: white;
        text-align: center;
        padding: 20px;
        margin-top: 40px;
        flex: 0 0 auto;
        margin-bottom: 0px;
        height: 180px
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

    a.table2 {
        font-size: 12px;
        color: #fc455c;
        font-family: "Fira Sans Condensed", sans-serif;
    }


    table.table3 {
        position: absolute;
        left: 99%;
        top: -40px;
        border-spacing: 2px;
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

    html {
        height: 100%;
    }

    body {
        display: flex;
        flex-direction: column;
        height: 100%;
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
        left: 2.5%;
        top: 280px;
    }

    h1 {
        position: absolute;
        top: 100px;
        right: 65%;
        -epub-hyphens: none;
        font-style: normal;
        font-variant: normal;
        color: #e9485e;
        font-family: "Fira Sans Condensed ExtraBold", sans-serif;
        font-size: 25px;
        font-weight: 800;
        line-height: 1.2;
        margin-bottom: 38px;
        text-align: left;
    }

    h2 {
        position: absolute;
        top: 215px;
        right: 63%;
        -epub-hyphens: none;
        font-style: normal;
        font-variant: normal;
        color: #22a2b0;
        font-family: "Fira Sans Condensed ExtraBold", sans-serif;
        font-size: 25px;
        font-weight: 800;
        line-height: 1.2;
        margin-bottom: 38px;

    }

    img.rueda {
        position: absolute;
        width: 400px;
        height: 400px;
        top: 50px;
        left: 45%;
    }

    img.logo {
        position: absolute;
        top: 35px;
        max-width: 255px;
        max-height: 72.11px;
        left: 3%;
    }

    div.container {
        background-color: #cccccc;
        border-radius: 12px;
        border: 1px solid #f27611;
        width: 100%;
        height: 620px;
        margin: 0 auto;
        max-width: 1240px;
        margin-bottom: 50px;
        padding: 20px;
        position: relative;
        top: 45px;
        background-position: center center;
        background-size: 40%;
        background-repeat: no-repeat;
        overflow: hidden;
        flex: 1 0 auto;
    }
</style>
<header id="main-header">
    <img class="logo" src="img/logo home.png"/>
</header><!-- / #main-header -->
<div class="container">

    <h1>Sistema Integrado de <br/>Evaluación, Seguimiento y <br/>Estrategias de Promoción de <br/>
        Compromiso Estudiantil y<br/>Factores Contextuales<h2>(SIESE)</h2>
    </h1>
    <p>El Compromiso Escolar facilita una activa participación <br/>del estudiante con su escuela y su proceso de <br/>aprendizaje.
        Con el objetivo de promover la retención <br/>escolar y trayectorias educativas positivas de todas y<br/> todos
        los estudiantes en los establecimientos escolares,<br/> les invitamos a conocer e implementar los seis <br/>
        pasos del SIESE.</p>

    <div class="chart-skills grande">
        <div id="fondo" class="grande"><img src="img/rueda-pasos.png"></div>
        <div id="trozo" class=""></div>
        <div id="p1" onmouseover="torta('chica', 'p1');" onmouseout="limpiartorta('trozo');"></div>
        <div id="p2" onmouseover="torta('chica', 'p2');" onmouseout="limpiartorta('trozo');"></div>
        <div id="p3" onmouseover="torta('chica', 'p3');" onmouseout="limpiartorta('trozo');"></div>
        <div id="p4" onmouseover="torta('chica', 'p4');" onmouseout="limpiartorta('trozo');"></div>
        <div id="p5" onmouseover="torta('chica', 'p5');" onmouseout="limpiartorta('trozo');"></div>
        <div id="p6" onmouseover="torta('chica', 'p6');" onmouseout="limpiartorta('trozo');"></div>
    </div>
    <div id="table">
        <table>
            <tr class="mb-2">
                <th>
                    <a href="https://www.e-mineduc.cl/login/index.php" target="_blank"
                       class="d-flex flex-column align-items-center">
                        <img class="alineadoTextoImagenAbajo" src="img/menu_flotante/1.-Capacitacion.png"
                             style="width: 40px;" style="height: 40px;">
                        <span class="text-center">Capacitación</span>
                    </a>
                </th>
            </tr>
            <tr class="mb-2">
                <th>
                    <a href="calendario.php" class="d-flex flex-column align-items-center">
                        <img class="alineadoTextoImagenAbajo" src="img/menu_flotante/2.-Calendario.png"
                             style="width: 40px;" style="height: 40px;">
                        <span class="text-center">Calendario<br/>de actividades</span>
                    </a>
                </th>
            </tr>
            <tr class="mb-2">
                <th>
                    <a href="/inicia_encuesta.php" class="d-flex flex-column align-items-center">
                        <img class="alineadoTextoImagenAbajo" src="img/menu_flotante/3.-Instrumentos.png"
                             style="width: 40px;" style="height: 40px;">
                        <span class="text-center">Instrumentos<br/>de medición</span>
                    </a>
                </th>
            </tr>
            <tr class="mb-2">
                <th class="d-flex flex-column align-items-center">
                    <img class="alineadoTextoImagenAbajo" src="img/menu_flotante/4.-Fichas proceso.png"
                         style="width: 40px;" style="height: 40px;">
                    <div class="text-center">Fichas<br/>SIESE</div>
                </th>
            </tr>
            <tr class="mb-2">
                <th>
                    <a href="buscar.php" class="d-flex flex-column align-items-center">
                        <img class="alineadoTextoImagenAbajo" src="img/menu_flotante/5.-Buscador de estrategias.png"
                             style="width: 40px;" style="height: 40px;">
                        <span class="text-center"> Buscador de<br/>estrategias</span>
                    </a>
                </th>
            </tr>
            <tr class="mb-2">
                <th>
                    <a href="/inicia_reportes.php" class="d-flex flex-column align-items-center">
                        <img class="alineadoTextoImagenAbajo" src="img/menu_flotante/6.-Resultados.png"
                             style="width: 40px;" style="height: 40px;">
                        <span class="text-center">Resultados de<br/>medición</span>
                    </a>
                </th>
            </tr>
        </table>
    </div>
</div>
<footer id="main-footer">
    <div class="row">
        <div class="col-12">
            <div class="imagen" style="margin: 10px;">
                <img src="img/Logos/png/Logo UValpo.png" alt="" class="imh-responsive" style="width: 80px;"
                     style="height: 80px;">
                &nbsp; &nbsp;
                <img src="img/Logos/png/Logo Ufro.png" alt="" class="imh-responsive" style="width: 80px;"
                     style="height: 80px;">
                &nbsp; &nbsp;
                <img src="img/Logos/png/U-autonoma.png" alt="" class="imh-responsive" style="width: 100px;"
                     style="height: 100px;">
                &nbsp; &nbsp;
                <img src="img/Logos/png/fundacion-telefonica.png" alt="" class="imh-responsive" style="width: 140px;"
                     style="height: 140px;">
                &nbsp; &nbsp;
                <img src="img/Logos/png/Logo Mineduc.png" alt="" class="imh-responsive" style="width: 80px;"
                     style="height: 80px;">
                &nbsp; &nbsp;
                <img src="img/Logos/png/fondef.png" alt="" class="imh-responsive" style="width: 180px;"
                     style="height: 180px;">
                &nbsp; &nbsp;
                <img src="img/Logos/png/LogoCorfo.png" alt="" class="imh-responsive" style="width: 150px;"
                     style="height: 150px;">
                <table class="table2">
                    <tr>

                        <th><a class="table2" href="https://www.e-mineduc.cl/login/index.php" target="_blank">Capacitación
                        </th>
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
                        <th><a href="/documentos/Manual_de_Usuario_Plataforma_Compromiso_Escolar_2020.pdf"
                               target="_blank">
                                <img src="img/Botones/Manual_plataforma.png"
                                     style="max-width: 140px; margin-top: 10px; float:right;">
                            </a>
                        </th>
                    </tr>
                    <tr>
                        <th>
                            <div id="bt_admin" class="btn_cuadrado" data-toggle="modal" data-target="#id_ingre_cod"
                                 style="cursor: pointer">
                                <img src="img/Botones/Admin_usuarios.png"
                                     style="max-width: 140px; margin-top: 10px; float:right;" data-toggle="modal"
                                     data-target="#id_ingre_cod">
                            </div>
                        </th>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</footer> <!-- / #main-footer -->
<div id="id_ingre_cod" class="modal" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Formulario de acceso</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="form_admin" method="POST">
                    <br>
                    <div style="text-align: center; margin-bottom: 4px;">
                        <i class="fa fa-user" style="color: #fc455c;" aria-hidden="true"></i> &nbsp; Administración
                    </div>
                    <br>
                    <div class="form-group has-feedback">
                        <?php echo usuario_administrador(); ?>
                    </div>
                    <div class="form-group has-feedback">
                        <input type="text" name="usuario" id="usuario" class="form-control" placeholder="usuario"
                               required/>
                        <span class="glyphicon glyphicon-user form-control-feedback"></span>
                    </div>
                    <div class="form-group has-feedback">
                        <input type="password" id="contrasena" name="contrasena" class="form-control"
                               autocomplete="password" placeholder="contraseña" required/>
                        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                    </div>
                    <input type="hidden" name="token" value="" id="token">
                    <button style="border-radius: 2px; background-color: #fc455c; font-family: ‘Source Sans Pro’, sans-serif; font-size: 12px; font-weight: 900; min-width:120px; height:30px; width: 100%; margin-top: 15px; border-radius: 5px; color: white; box-shadow: rgba(0, 0, 0, 0.22) 1px 1px 1px 1px; border: 1.5px solid #fc455c;"
                            name="login-button" id="ingresar_admin" type="submit" class="icon-submit btn-limon-validar">
                            <span id="inicia_rep">
                                Ingresar
                            </span>
                        <span id="spinner"></span>
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js"
        integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF"
        crossorigin="anonymous"></script>
<script src="https://www.google.com/recaptcha/api.js?render=6Le4kagZAAAAAPrJvezXbADOrTQVxo69xZg1cyK6"></script>

<script>
    function login_admin() {
        let url_base = window.location;
        let url_base_2 = url_base.protocol + "//" + url_base.host;
        let dir = url_base_2 + "/php/valida_login.php";

        $('#form_admin').submit(function (e) {
            e.preventDefault();
            grecaptcha.ready(function () {
                grecaptcha.execute('6Le4kagZAAAAAPrJvezXbADOrTQVxo69xZg1cyK6', {action: 'submit'}).then(function (token) {
                    $('#token').val(token); // here i set value to hidden field
                });
            });
            const user = document.getElementById("usuario").value;
            const pass = document.getElementById("contrasena").value;
            if (user == "") {
                alertify.notify("Debes ingresar el usuario");
                document.getElementById("usuario").focus();
                return false;
            } else if (pass == "") {
                alertify.notify("Debes ingresar la contraseña");
                document.getElementById("contrasena").focus();
                return false;
            } else {
                let cadena = "usuario=" + $('#usuario').val() +
                    "&contrasena=" + $('#contrasena').val() +
                    "&tipo_usuario=" + $('#tipo_usuario').val() +
                    "&privilegios=" + "1" +
                    "&token=" + $("#token").val();
                $.ajax({
                    type: "POST",
                    url: dir,
                    data: cadena,
                    cache: false,
                    statusCode: {
                        404: function () {
                            alertify.alert("Alerta", "Pagina no Encontrada");
                            document.getElementById("ingresar_admin").disabled = false;
                            document.getElementById("spinner").innerHTML = '';
                            document.getElementById("inicia_rep").innerHTML = 'Ingresar';

                        },
                        502: function () {
                            alertify.alert("alerta", "Ha ocurrido un error al conectarse con el servidor");
                            document.getElementById("ingresar_admin").disabled = false;
                            document.getElementById("spinner").innerHTML = '';
                            document.getElementById("inicia_rep").innerHTML = 'Ingresar';
                        }
                    },
                    beforeSend: function () {
                        document.getElementById("ingresar_admin").disabled = true;
                        document.getElementById("inicia_rep").innerHTML = '';
                        document.getElementById("spinner").innerHTML = '</i> <i class="fa fa-spinner fa-2x fa-spin  fa-fw">';
                    },
                    success: function (r) {
                        if (r == 1) {
                            window.location.replace(
                                url_base.protocol + "//" +
                                url_base.host + "/" +
                                "modulos.php"
                            );
                        } else if (r == 0) {
                            document.getElementById("ingresar_admin").disabled = false;
                            document.getElementById("spinner").innerHTML = '';
                            document.getElementById("inicia_rep").innerHTML = 'Ingresar';
                            alertify.defaults.glossary.title = '<p class="text-center">Notificación<p>';
                            alertify.alert('Usuario Incorrecto');
                        } else if (r == -1) {
                            document.getElementById("ingresar_admin").disabled = false;
                            document.getElementById("spinner").innerHTML = '';
                            document.getElementById("inicia_rep").innerHTML = 'Ingresar';
                            alertify.defaults.glossary.title = '<p class="text-center">Notificación<p>';
                            alertify.alert('Error, captcha inválido');
                        }
                    }
                });
            }
        });
    }

    function Cerrar_modal() {
        $('#id_ingre_cod').modal('toggle');
    }

    grecaptcha.ready(function () {
        grecaptcha.execute('6Le4kagZAAAAAPrJvezXbADOrTQVxo69xZg1cyK6', {action: 'submit'}).then(function (token) {
            $('#token').val(token); // here i set value to hidden field
        });
    });

    $(document).ready(function () {
        login_admin();
        $("body").css('padding', '0');

        $("#t_encuesta").click(function () {
            window.location.replace(
                url_base.protocol + "//" +
                url_base.host + "/" +
                "inicia_encuesta.php"
            );
        });

        $("#t_resultados").click(function () {
            window.location.replace(
                url_base.protocol + "//" +
                url_base.host + "/" +
                "inicia_reportes.php"
            );
        });

        $("#t_educativos").click(function () {
            window.open(
                "https://www.e-mineduc.cl/course/view.php?id=9147", '_blank'
            );
        });

        $("#bt_manual").click(function () {
            window.open(
                url_base.protocol + "//" +
                url_base.host + "/" +
                "documentos/Manual_de_Usuario_Plataforma_Compromiso_Escolar_2020.pdf",
                '_blank'
            );
        });


        $("#btn_cerrar_modal").click(function () {
            //$("body").find("#id_ingre_cod").attr( "aria-hidden", "true");
            $("body").find("#id_ingre_cod").css('display', 'none');
            $("body").find(".modal-backdrop").css('display', 'none');

            // $("body").find(".card").css('display', 'none');
            $("body").css('padding', '0px');

            $("body").css('overflow-y', 'scroll');
            $("body").css('padding', '0');
        });
    });
</script>

<script>
    $(document).ready(() => {
        $('#bt_admin').on('click', () => {
            $('#id_ingre_cod').modal('toggle');
        })
    })
</script>
</body>
</html>
