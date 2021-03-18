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

<div class="container" style="height: 900px;">
    <h1>SIESE <h1 class="color">Fichas</h1>
    </h1>
    <hr>
    <h1 class="subt">Fichas de cierre</h1>
    <div id="table">
        <table class="menu">
            <tr>
                <th>
                    <a href="https://www.e-mineduc.cl/login/index.php" target="_blank">
                        <image class="alineadoTextoImagenAbajo" src="../img/menu_flotante/1.-Capacitacion.png" style="width: 40px;" style="height: 40px;">Capacitación
                </th>
            </tr>
            <tr>
                <th>
                    <a href="../calendario.php" target="_blank">
                        <image class="alineadoTextoImagenAbajo" src="../img/menu_flotante/2.-Calendario.png" style="width: 40px;" style="height: 40px;">
                            Calendario<br />de actividades
                </th>
            </tr>
            <tr>
                <th>
                    <a href="../inicia_encuesta.php" target="_blank">
                        <image class="alineadoTextoImagenAbajo" src="../img/menu_flotante/3.-Instrumentos.png" style="width: 40px;" style="height: 40px;">
                            Instrumentos<br />de medición
                </th>
            </tr>
            <tr>
                <th>
                    <image class="alineadoTextoImagenAbajo" src="../img/menu_flotante/4.-Fichas proceso.png" style="width: 40px;" style="height: 40px;">
                        Fichas<br />SIESE
                </th>
            </tr>
            <tr>
                <th>
                    <a href="../buscar.php" target="_blank">
                        <image class="alineadoTextoImagenAbajo" src="../img/menu_flotante/5.-Buscador de estrategias.png" style="width: 40px;" style="height: 40px;">
                            Buscador de<br />estrategias
                </th>
            </tr>
            <tr>
                <th>
                    <a href="../inicia_reportes.php" target="_blank">
                        <image class="alineadoTextoImagenAbajo" src="../img/menu_flotante/6.-Resultados.png" style="width: 40px;" style="height: 40px;">
                            Resultados de<br />medición
                </th>
            </tr>
        </table>
    </div>
    <div class="planAccion" style="height: 5.4%;top: -39.9px;"><a class="accion" href="planAccion.php">Plan de Acción</a></div>
    <div class="seguimiento" style="height: 5.5%;top: -89px;"><a class="seguimiento" href="seguimiento.php">Seguimiento y monitoreo</a></div>
    <div class="cierre" style="height: 5.5%;top: -138.2px;"><a class="cierre" href="cierre.php">Ficha de cierre</a></div>
    <div class="individual"  style="height: 5.5%;top: -188px;"><a class="individual" href="individual.php">Ficha Individual</a></div>
    <table id="cierre">
        <tr>
            <td  style="font-family: 'Fira Sans Condensed';font-size: 14px;">A partir de la implementación de las estrategias de promoción del compromiso escolar y de los factores contextuales, describa las opiniones que han<br>
            recibido de:</td>
        </tr>
    </table>
    <table id="cierre">
        <tr>
            <td class="col1">Profesorado:</td>
            <td><input style="background-color: transparent;border: transparent;font-family: Fira Sans, sans-serif;color: black;font-size: 14px;"></td>
        </tr>
        <tr>
            <td class="col1">Estudiantes:</td>
            <td><input style="background-color: transparent;border: transparent;font-family: Fira Sans, sans-serif;color: black;font-size: 14px;"></td>
        </tr>
        <tr>
            <td class="col1">Apoderados(as):</td>
            <td><input style="background-color: transparent;border: transparent;font-family: Fira Sans, sans-serif;color: black;font-size: 14px;"></td>
        </tr>
    </table>
    <table id="cierre">
        <tr>
            <td style="font-family: 'Fira Sans Condensed';font-size: 14px;">Señale aquellas estrategias mejor evaluadas en las<br>fichas de seguimiento y monitoreo (valoradas 4 y 5)</td>
            <td style="font-family: 'Fira Sans Condensed';font-size: 14px;">Aprendizajes de la implementación; Aportes; Resultados de la estrategia.</td>
        </tr>

    </table>
    <table id="cierre">
        <tr>
            <td class="col1">1.1</td>
            <td><input style="background-color: transparent;border: transparent;font-family: Fira Sans, sans-serif;color: black;font-size: 14px;"></td>
            <td></td>
        </tr>
        <tr>
            <td class="col1" >1.2</td>
            <td><input style="background-color: transparent;border: transparent;font-family: Fira Sans, sans-serif;color: black;font-size: 14px;"></td>
            <td style="width: 58.2%"></td>
        </tr>
        <tr>
            <td class="col1">1.3</td>
            <td><input style="background-color: transparent;border: transparent;font-family: Fira Sans, sans-serif;color: black;font-size: 14px;"></td>
            <td></td>
        </tr>
        <tr>
            <td class="col1">1.4</td>
            <td><input style="background-color: transparent;border: transparent;font-family: Fira Sans, sans-serif;color: black;font-size: 14px;"></td>
            <td></td>
        </tr>
    </table>
    <table id="cierre">
        <tr>
            <td style="font-family: 'Fira Sans Condensed';font-size: 14px;width: 41.8%">Señale aquellas estrategias peor evaluadas en las<br>fichas de seguimiento y monitoreo (valoradas 3 y menos)</td>
            <td style="font-family: 'Fira Sans Condensed';font-size: 14px;">Aprendizajes de la implementación; Problemas u obstáculos</td>
        </tr>

    </table>
    <table id="cierre">
        <tr>
            <td class="col1">1.1</td>
            <td><input style="background-color: transparent;border: transparent;font-family: Fira Sans, sans-serif;color: black;font-size: 14px;"></td>
            <td></td>
        </tr>
        <tr>
            <td class="col1" >1.2</td>
            <td><input style="background-color: transparent;border: transparent;font-family: Fira Sans, sans-serif;color: black;font-size: 14px;"></td>
            <td style="width: 58.2%"></td>
        </tr>
        <tr>
            <td class="col1">1.3</td>
            <td><input style="background-color: transparent;border: transparent;font-family: Fira Sans, sans-serif;color: black;font-size: 14px;"></td>
            <td></td>
        </tr>
        <tr>
            <td class="col1">1.4</td>
            <td><input style="background-color: transparent;border: transparent;font-family: Fira Sans, sans-serif;color: black;font-size: 14px;"></td>
            <td></td>
        </tr>
    </table>
    <table id="cierre">
        <tr>
            <td  style="font-family: 'Fira Sans Condensed';font-size: 14px;">De las estrategias mejor evaluadas: ¿Cuál considera es más pertinente y se obtienen mejores resultados?</td>
        </tr>
        <tr>
            <td><input style="background-color: transparent;border: transparent;font-family: Fira Sans, sans-serif;color: black;font-size: 14px;"></td>
        </tr>
        <tr>
            <td  style="font-family: 'Fira Sans Condensed';font-size: 14px;">De las estrategias evaluadas igual o menor a 3 ¿Hay alguna que recomendaría no implementar?</td>
        </tr>
        <tr>
            <td><input style="background-color: transparent;border: transparent;font-family: Fira Sans, sans-serif;color: black;font-size: 14px;"></td>
        </tr>
    </table>


    <button type="submit" class="guardar3" name="guardar" >&nbsp;Guardar...</button>
    <button type="submit" class="publicar3" name="publicar" >Publicar...</button>
</form>
<a href="#"><img class="descarga4" src="../img/Fichas/Descargar.png"></a>
<a href="#"><img class="imprimir4" src="../img/Fichas/imprimir.png"></a>
</div>

<footer id="main-footer">
    <div class="row">
        <div class="imagen" style="margin: 10px;">
            <img src="../img/Logos/png/Logo UValpo.png" alt="" class="imh-responsive" style="width: 80px;" style="height: 80px;">
            &nbsp; &nbsp;
            <img src="../img/Logos/png/Logo Ufro.png" alt="" class="imh-responsive" style="width: 80px;" style="height: 80px;">
            &nbsp; &nbsp;
            <img src="../img/Logos/png/U-autonoma.png" alt="" class="imh-responsive" style="width: 100px;" style="height: 100px;">
            &nbsp; &nbsp;
            <img src="../img/Logos/png/fundacion-telefonica.png" alt="" class="imh-responsive" style="width: 140px;" style="height: 140px;">
            &nbsp; &nbsp;
            <img src="../img/Logos/png/Logo Mineduc.png" alt="" class="imh-responsive" style="width: 80px;" style="height: 80px;">
            &nbsp; &nbsp;
            <img src="../img/Logos/png/fondef.png" alt="" class="imh-responsive" style="width: 180px;" style="height: 180px;">
            &nbsp; &nbsp;
            <img src="../img/Logos/png/LogoCorfo.png" alt="" class="imh-responsive" style="width: 150px;" style="height: 150px;">
            <table class="table2">
                <tr>

                    <th><a class="table2" href="https://www.e-mineduc.cl/login/index.php" target="_blank">Capacitación</th>
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
                    <th><a href="../documentos/Manual_de_Usuario_Plataforma_Compromiso_Escolar_2020.pdf" target="_blank">
                            <image src="../img/Botones/Manual_plataforma.png" style="max-width: 140px; margin-top: 10px; float:right;">
                        </a>
                </tr>
                <tr>
                    <th><img src="../img/Botones/Admin_usuarios.png" style="max-width: 140px; margin-top: 10px; float:right;"></th>
                </tr>
            </table>
        </div>
    </div>
</footer> <!-- / #main-footer -->

</body>

</html>

