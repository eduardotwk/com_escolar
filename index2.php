<?php 
    error_reporting(E_ERROR | E_PARSE);
    require 'conf/conexion_db.php';
    require 'conf/funciones.php';
    require 'conf/funciones_db.php';

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Compromiso Escolar</title>
        <?php include "assets/css/css.php"; ?>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="assets/css/estilo_inicio.css">
        <script src="assets/js/jquery-1.10.2.js"></script>
        <script src="https://www.google.com/recaptcha/api.js?render=6LfUWnMaAAAAAEtxf2GKWntxz2CrQMWEohkfZHNk"></script>
        <script type="text/javascript">
            var flag = false;
            var flag2 = false;
            url_base = window.location;
            window.history.forward();

            function Cerrar_modal() {
                $('#id_ingre_cod').modal('toggle');
            }

            grecaptcha.ready(function() {
                grecaptcha.execute('6LfUWnMaAAAAAEtxf2GKWntxz2CrQMWEohkfZHNk', {action: 'submit'}).then(function(token) {
                    $('#token').val(token); // here i set value to hidden field
                });
            });

            function login_admin() {
                url_base_2 = url_base.protocol + "//" + url_base.host;
                dir = url_base_2 + "/php/valida_login.php";
                $('#form_admin').submit(function(e) {
                    e.preventDefault();
                    grecaptcha.ready(function() {
                        grecaptcha.execute('6LfUWnMaAAAAAEtxf2GKWntxz2CrQMWEohkfZHNk', {action: 'submit'}).then(function(token) {
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
                        cadena = "usuario=" + $('#usuario').val() +
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
                                404: function() {
                                    alertify.alert("Alerta", "Pagina no Encontrada");
                                    document.getElementById("ingresar_admin").disabled = false;
                                    document.getElementById("spinner").innerHTML = '';
                                    document.getElementById("inicia_rep").innerHTML = 'Ingresar';

                                },
                                502: function() {
                                    alertify.alert("alerta", "Ha ocurrido un error al conectarse con el servidor");
                                    document.getElementById("ingresar_admin").disabled = false;
                                    document.getElementById("spinner").innerHTML = '';
                                    document.getElementById("inicia_rep").innerHTML = 'Ingresar';
                                }
                            },
                            beforeSend: function() {
                                document.getElementById("ingresar_admin").disabled = true;
                                document.getElementById("inicia_rep").innerHTML = '';
                                document.getElementById("spinner").innerHTML = '</i> <i class="fa fa-spinner fa-2x fa-spin  fa-fw">';
                            },
                            success: function(r) {
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

            $(document).ready(function() {
                login_admin();
                $("body").css('padding', '0');
                /////////// cerrar modal ///////////////////////
                var modal = document.getElementById("id_ingre_cod");
                var span = document.getElementsByClassName("close")[0];

                /////////// cerrar modal ///////////////////////
                $("#t_encuesta").click(function() {
                    window.location.replace(
                        url_base.protocol + "//" + 
                        url_base.host + "/" + 
                        "inicia_encuesta.php"
                    );
                });

                $("#t_resultados").click(function() {
                    window.location.replace(
                        url_base.protocol + "//" + 
                        url_base.host + "/" + 
                        "inicia_reportes.php"
                    );
                });

                $("#t_educativos").click(function() {
                    window.open(
                        "https://www.e-mineduc.cl/course/view.php?id=9147", '_blank'
                    );
                });

                $("#bt_manual").click(function() {
                    window.open(
                        url_base.protocol + "//" + 
                        url_base.host + "/" + 
                        "documentos/Manual_de_Usuario_Plataforma_Compromiso_Escolar_2020.pdf",
                        '_blank'
                    );
                });

                $("#bt_admin").click(function() {
                    $("body").find("#id_ingre_cod").css('display', 'block');
                    $("body").find(".modal-backdrop").css('display', 'block');
                    $("body").css('padding', '0');
                });

                $("#btn_cerrar_modal").click(function() {
                    //$("body").find("#id_ingre_cod").attr( "aria-hidden", "true");
                    $("body").find("#id_ingre_cod").css('display', 'none');
                    $("body").find(".modal-backdrop").css('display', 'none');
                    
                   // $("body").find(".card").css('display', 'none');
                    $("body").css('padding', '0px');
                    
                    $("body").css('overflow-y', 'scroll');
                    $("body").css('padding', '0');
                });


               /* $("#bt_admin").click(function() {
                    window.location.replace(
                        url_base.protocol + "//" + 
                        url_base.host + "/" + 
                        "reportes/ce_admin.php"
                    );
                });
                */
                
            });
        </script>
        <style type="text/css">
            .modal-title {
                margin-bottom: 0;
                display: flex;
                text-align: center;
                position: absolute;
                left: 25%;
            }

            .card {
                width: 400px; 
                height: 380px;
                min-height: 350px;
                position: absolute;
                left: 50%;
                top: 30%;
                transform: translate(-50%, -50%);
                -webkit-transform: translate(-50%, -50%);
                border-radius: 15px;
            }
            body {
                padding: 0;
            }
        </style>

    </head>
    <body style="background: #BDC3C7; padding: 0;">
        <div id="linea-superior" style="background: #fc455c;"> 
        </div>
        <div class="contenido row justify-content-center align-items-center">
            <div class="card_c" style="background: white; ">
                <div class="logo_sup float-right">
                    <img id="logo_sup" src="assets/img/logo_compromiso_escolar.png">
                </div>
                <br><br><br><br><br>
                <div class="arriba">
                     <h1 id="c_tit">
                        ¡Bienvenidas/os!
                        <hr id="tit">
                     </h1>
                    <p style="text-align: justify; font: condensed 100% Source Sans Pro; color: #212529; font-size: larger;">
                        El compromiso escolar facilita una activa participación del estudiante con su escuela y su proceso de aprendizaje.
                   
                        Utiliza los siguientes enlaces para acceder a los distintos módulos de la plataforma. 
                        <br><br>
                    </p>
                </div>
                <div class="abajo">
                    <table width="100%">
                        <tr>
                        <td align="left" width="33%">
                                <div align="left" id="t_educativos">
                                <h3>Módulo de</h3>
                                    <h2>Capacitación</h2>
                                    <p class="opciones">
                                        Si quieres aprender
                                        más, consulta
                                        el curso disponible aquí.
                                    </p>
                                </div>
                            </td>
                            <td align="center" width="33%">
                                <div align="left" id="t_encuesta" style="color: white;">    
                                    <h3>Módulo de</h3>
                                    <h2>Encuestas</h2>
                                    <p class="opciones">
                                        Solicita a los estudiantes ingresar a la encuesta pinchando aquí.
                                    </p>
                                </div>
                            </td>
                            <td align="right" width="33%">      
                                <div align="left" id="t_resultados">
                                    <h3>Módulo de</h3>
                                    <h2>Resultados</h2>
                                    <p class="opciones">
                                        Una vez respondida la encuesta podrá ver los resultados pinchando aquí.
                                    </p>
                                </div>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
        <footer class="page-footer pt-4" style="margin-bottom: 0px; padding-bottom: 0px; bottom: 0; height: 200px;">
            <div class="container" style="margin-bottom: 20px;">
               <table cellpadding="10">
                    <tr>
                        <td width="66%" align="center" valign="center" >
                            <table width="100%">
                                <tr width="100%" align="left" valign="center">
                                    <p style="font-size: small; text-align: justify; color: #212529;"> 
                                        Estas encuestas forman parte del Proyecto FONDEF ID14I10078-ID14I20078 Medición del compromiso del niño, niña y adolescente con sus estudios para la promoción de trayectorias educativas exitosas.
                                    </p>
                                </tr>
                                
                                    
                                
                                <tr width="100%" align="left" valign="center">
                                    <td align="left" valign="center">
                                        <div style="display: flex; align-items: baseline;">
                                            <img style="margin-right: 5px;" width="63" src="assets/img/mineduc.png">
                                            <img style="margin-right: 5px;" width="120" src="assets/img/fondef.png">
                                            <img style="margin-right: 5px;" width="140" src="assets/img/corfo.jpg">
                                            <img style="margin-right: 5px; padding-top: 5px;" width="60" src="assets/img/ufro.png">
                                            <img style="margin-right: 5px; padding-bottom: 4px;" width="100" src="assets/img/autonoma.png">
                                            <img style="margin-right: 5px; padding-bottom: 4px;" width="160" src="assets/img/fund_telefonica.png">
                                        </div>
                                    </td>
                                </tr>
                            </table>
                        </td>
                        <td width="33%" align="center" valign="center" style="display: flex; align-items: baseline;">
                            <div id="bt_manual" class="btn_cuadrado">
                                <img width="160" src="assets/img/bt_manual.png">
                            </div>

                            <div id="bt_admin" class="btn_cuadrado" data-toggle="modal" data-target="#id_ingre_cod">
                                <img width="160" src="assets/img/bt_admin.png">
                            </div>
                        </td>
                    </tr>
               </table>
            </div>
        </footer>
        <div id="id_ingre_cod" class="modal fade">
            <div class="card" id="form-encuesta" style="">
                <div class="card-body">
                    <div class="modal-header"  style="text-align: center; line-height: 7px; border: 0; margin: 0; padding: 0;">
                        <h5 style="" class="modal-title">Formulario de acceso</h5>
                        <button id="btn_cerrar_modal" type="button" class="close" >&times;</button>
                    </div>
                    <div style="text-align: center; line-height: 7px;">
                        <hr style="background: #fc455c;">
                    </div>
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
                            <input type="text" name="usuario" id="usuario" class="form-control" placeholder="usuario" required />
                            <span class="glyphicon glyphicon-user form-control-feedback"></span>
                        </div>
                        <div class="form-group has-feedback">
                            <input type="password" id="contrasena" name="contrasena" class="form-control"  autocomplete="password" placeholder="contraseña" required />
                            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                        </div>
                        <input type="hidden" name="token" value="" id="token">
                        <button style="border-radius: 2px; background-color: #fc455c; font-family: ‘Source Sans Pro’, sans-serif; font-size: 12px; font-weight: 900; min-width:120px; height:30px; width: 100%; margin-top: 15px; border-radius: 5px; color: white; box-shadow: rgba(0, 0, 0, 0.22) 1px 1px 1px 1px; border: 1.5px solid #fc455c;" name="login-button" id="ingresar_admin" type="submit" class="icon-submit btn-limon-validar">
                            <span id="inicia_rep">
                                Ingresar
                            </span>
                            <div id="spinner"></div>
                        </button>  
                    </form>
                </div>
            </div>
        </div>

        <?php include "assets/js/js.php"; ?>
        

        <style type="text/css">
            .h1, .h2, .h3, .h4, .h5, .h6, h1, h2, h3, h4, h5, h6 {
                font-weight: 900;
            }
            html {
                padding: 0;
                margin: 0;
            }
            body {
                padding: 0;
                margin: 0;
            }

        </style>
    </body>
</html>