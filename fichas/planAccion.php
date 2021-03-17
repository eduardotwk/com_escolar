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
    <link rel="stylesheet" href="../css/base.css">
    <link rel="stylesheet" href="../css/baseFichas.css">
</head>

<body>

<header id="main-header">
    <img class="logo" src="../img/logo home.png">
    <img class="lapiz" src="../img/Header/compromiso.png">
    <img class="btnSalir" src="../img/Btn-salir-inactivo.png">
    <ul id="menu">
        <li>
            <a href="#">Pasos</a>
            <ul id="submenu">
                <li><a href="../paso1.php">Paso 1</a></li>
                <li><a href="../paso2.php">Paso 2</a></li>
                <li><a href="../paso3.php">Paso 3</a></li>
                <li><a href="../paso4.php">Paso 4</a></li>
                <li><a href="../paso5.php">Paso 5</a></li>
                <li><a href="../paso6.php">Paso 6</a></li>
            </ul>
        </li>
        <li><a href="../compromiso_escolar.php">Compromiso Escolar</a></li>
        <li><a href="../presentacion.php">Presentación</a></li>
        <li><a href="../home.php"><i class="fas fa-home">&nbsp;</i>Inicio</a></li>
    </ul>

</header><!-- / #main-header -->

<div class="container" style="height:951px">
    <h1>SIESE <h1 class="color">Fichas</h1>
    </h1>
    <hr>
    <h1 class="subt">Ficha del plan de acción</h1>
    <div id="table">
        <table class="menu">
            <tr>
                <th>
                    <a href="https://www.e-mineduc.cl/login/index.php" target="_blank">
                        <image class="alineadoTextoImagenAbajo" src="../img/menu_flotante/1.-Capacitacion.png"
                               style="width: 40px;" style="height: 40px;">Capacitación
                </th>
            </tr>
            <tr>
                <th>
                    <a href="../calendario.php" target="_blank">
                        <image class="alineadoTextoImagenAbajo" src="../img/menu_flotante/2.-Calendario.png"
                               style="width: 40px;" style="height: 40px;">
                            Calendario<br/>de actividades
                </th>
            </tr>
            <tr>
                <th>
                    <a href="../inicia_encuesta.php" target="_blank">
                        <image class="alineadoTextoImagenAbajo" src="../img/menu_flotante/3.-Instrumentos.png"
                               style="width: 40px;" style="height: 40px;">
                            Instrumentos<br/>de medición
                </th>
            </tr>
            <tr>
                <th>
                    <image class="alineadoTextoImagenAbajo" src="../img/menu_flotante/4.-Fichas proceso.png"
                           style="width: 40px;" style="height: 40px;">
                        Fichas<br/>SIESE
                </th>
            </tr>
            <tr>
                <th>
                    <a href="../buscar.php" target="_blank">
                        <image class="alineadoTextoImagenAbajo"
                               src="../img/menu_flotante/5.-Buscador de estrategias.png" style="width: 40px;"
                               style="height: 40px;">
                            Buscador de<br/>estrategias
                </th>
            </tr>
            <tr>
                <th>
                    <a href="../inicia_reportes.php" target="_blank">
                        <image class="alineadoTextoImagenAbajo" src="../img/menu_flotante/6.-Resultados.png"
                               style="width: 40px;" style="height: 40px;">
                            Resultados de<br/>medición
                </th>
            </tr>
        </table>
    </div>
    <div class="planAccion" style="top: -39.9px;height: 5%"><a class="accion" href="#">Plan de Acción</a></div>
    <div class="seguimiento" style="height: 5%;top: -87.5px;"><a class="seguimiento" href="seguimiento.php">Seguimiento y monitoreo</a></div>
    <div class="cierre" style="top: -135.2px;height: 5.1%"><a class="cierre" href="cierre.php">Ficha de cierre</a></div>
    <div class="individual" style="top: -184px;height: 5.1%"><a class="individual" href="individual.php">Ficha Individual</a></div>
    <form action="planAccion.php" method="post" >
        <table class="ficha1">
            <tr class="ficha1">
                <td class="ficha1"><p class="pregunta"> ¿Qué necesidades se observan en el curso en función<br>
                        de la información entregada por la plataforma?</p></td>
                <td class="ficha1"><textarea name="p1"></textarea></td>

            </tr>
            <tr class="ficha1" style="background: rgba(218,150,0, 0.3);">
                <td class="ficha1"><p class="pregunta"> ¿Qué estrategias señaladas en la plataforma podemos<br>
                        de la información entregada por la plataforma?</p></td>
                <td class="ficha1" ><textarea name="p2" "></textarea></td>
            </tr>
            <tr class="ficha1">
                <td class="ficha1"><p class="pregunta"> ¿Qué otras estrategias disponibles en nuestra escuela<br>
                        podemos implementar / reforzar?</p></td>
                <td class="ficha1"><textarea name="p3" ></textarea></td>
            </tr>
            <tr class="ficha1" style="background: rgba(218,150,0, 0.3);">
                <td class="ficha1"><p class="pregunta"> Pasos a seguir para su implementación</p></td>
                <td class="ficha1"><textarea name="p4" ></textarea></td>
            </tr>
            <tr class="ficha1">
                <td class="ficha1"><p class="pregunta">Responsables</p></td>
                <td class="ficha1"><textarea name="p5"></textarea></td>
            </tr>
        </table>
        <button type="submit" class="guardar" name="guardar" >&nbsp;Guardar...</button>
        <button type="submit" class="publicar" name="publicar" >Publicar...</button>
        <?php include 'conexion.php'; ?>
        <?php include 'guardaPlan.php'; ?>
    </form>
    <a href="#"><img class="descarga" src="../img/Fichas/Descargar.png"></a>
    <a href="#"><img class="imprimir" src="../img/Fichas/imprimir.png"></a>
</div>

<footer id="main-footer">
    <div class="row">
        <div class="imagen" style="margin: 10px;">
            <img src="../img/Logos/png/Logo UValpo.png" alt="" class="imh-responsive" style="width: 80px;"
                 style="height: 80px;">
            &nbsp; &nbsp;
            <img src="../img/Logos/png/Logo Ufro.png" alt="" class="imh-responsive" style="width: 80px;"
                 style="height: 80px;">
            &nbsp; &nbsp;
            <img src="../img/Logos/png/U-autonoma.png" alt="" class="imh-responsive" style="width: 100px;"
                 style="height: 100px;">
            &nbsp; &nbsp;
            <img src="../img/Logos/png/fundacion-telefonica.png" alt="" class="imh-responsive" style="width: 140px;"
                 style="height: 140px;">
            &nbsp; &nbsp;
            <img src="../img/Logos/png/Logo Mineduc.png" alt="" class="imh-responsive" style="width: 80px;"
                 style="height: 80px;">
            &nbsp; &nbsp;
            <img src="../img/Logos/png/fondef.png" alt="" class="imh-responsive" style="width: 180px;"
                 style="height: 180px;">
            &nbsp; &nbsp;
            <img src="../img/Logos/png/LogoCorfo.png" alt="" class="imh-responsive" style="width: 150px;"
                 style="height: 150px;">
            <table class="table2">
                <tr>

                    <th><a class="table2" href="https://www.e-mineduc.cl/login/index.php" target="_blank">Capacitación
                    </th>
                </tr>
                <tr>
                    <th><a class="table2" href="../calendario.php" target="_blank">Calendario de actividades</th>
                </tr>
                <tr>
                    <th><a class="table2" href="../inicia_encuesta.php" target="_blank">Instrumentos de medición</th>
                </tr>
                <tr>
                    <th><a class="table2" href="#" target="_blank">Fichas SIESE</th>
                </tr>
                <tr>
                    <th><a class="table2" href="../buscar.php" target="_blank">Buscador de estrategias</th>
                </tr>
            </table>
            <table class="table3">
                <tr>
                    <th><a href="../documentos/Manual_de_Usuario_Plataforma_Compromiso_Escolar_2020.pdf"
                           target="_blank">
                            <image src="../img/Botones/Manual_plataforma.png"
                                   style="max-width: 140px; margin-top: 10px; float:right;">
                        </a>
                </tr>
                <tr>
                    <th><img src="../img/Botones/Admin_usuarios.png"
                             style="max-width: 140px; margin-top: 10px; float:right;"></th>
                </tr>
            </table>
        </div>
    </div>
</footer> <!-- / #main-footer -->

</body>

</html>
