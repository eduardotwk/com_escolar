<?php
error_reporting(E_ERROR | E_PARSE);
require_once 'conf/conexion_db.php';
require_once 'conf/funciones.php';
require_once 'conf/funciones_db.php';
?>

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

<script>
    function login_admin() {
        let url_base = window.location;
        let url_base_2 = url_base.protocol + "//" + url_base.host;
        let dir = url_base_2 + "/php/valida_login.php";

        $('#form_admin').submit(function (e) {
            e.preventDefault();
            grecaptcha.ready(function () {
                grecaptcha.execute('6LfUWnMaAAAAAEtxf2GKWntxz2CrQMWEohkfZHNk', {action: 'submit'}).then(function (token) {
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

    grecaptcha.ready(function () {
        grecaptcha.execute('6LfUWnMaAAAAAEtxf2GKWntxz2CrQMWEohkfZHNk', {action: 'submit'}).then(function (token) {
            $('#token').val(token); // here i set value to hidden field
        });
    });

    $(document).ready(function () {
        login_admin();

        $('#bt_admin').click(function () {
            console.log('CLICK CLIK');
            $('#id_ingre_cod').modal('toggle');
        })
    })
</script>