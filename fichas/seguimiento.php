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

<div class="container">
    <h1>SIESE <h1 class="color">Fichas</h1>
    </h1>
    <hr>
    <h1 class="subt">Fichas de seguimiento y monitoreo</h1>
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
    <div class="planAccion"><a class="accion" href="planAccion.php">Plan de Acción</a></div>
    <div class="seguimiento"><a class="seguimiento" href="seguimiento.php">Seguimiento y monitoreo</a></div>
    <div class="cierre"><a class="cierre" href="cierre.php">Ficha de cierre</a></div>
    <div class="individual"><a class="individual" href="individual.php">Ficha Individual</a></div>
    <p class="p1">Para cada reunión de seguimiento y monitoreo nombre las estrategias que se están ejecutando y señale que tan efectiva ha sido<br>
        su implementación de acuerdo con las categorías de respuestas del cuadro de referencia.<br><br>
        Para evaluar que tan efectiva ha sido su implementación considere: si la estrategia ha sido de fácil ejecución, si ha tenido buena<br>
        recepción, y si los(as) participantes se encuentran motivados(as). Posteriormente, en caso de ser necesario añada los ajustes<br>
        necesarios para una mejor implementación.</p>
    <h1 class="subt2">Seleccionar el año</h1>
    <div class="custom-select" style="width:125px;"">
        <select>
            <option value="0">Seleccione...</option>
            <option value="1">2020</option>
            <option value="2">2021</option>
        </select>
    </div>
    <table class="ops">
        <tr class="op">
            <td class="op">1</td>
            <td class="op">Muy en desacuerdo</td>
        </tr>
        <tr class="op">
            <td class="op">2</td>
            <td class="op">En desacuerdo</td>
        </tr>
        <tr class="op">
            <td class="op">3</td>
            <td class="op">Ni de acuerdo ni en desacuerdo</td>
        </tr>
        <tr class="op">
            <td class="op">4</td>
            <td class="op">De acuerdo</td>
        </tr>
        <tr class="op">
            <td class="op">5</td>
            <td class="op">Muy de acuerdo</td>
        </tr>
    </table>
    <form>
        <h1 class="subt3">Reunión consejo escolar</h1>
        <p class="p2">A continuación debe nombrar todas las estrategias que se están implementando en el curso (por Ej. "Promoviendo una mentalidad <br>
            de crecimiento") y evaluar que tan efectiva ha sido su implementación hasta la fecha.</p>
        <table id="seguimiento">
            <tr>
                <th>N°</th>
                <th>Estrategia Seleccionada</th>
                <th>Evaluación</th>
            </tr>
            <tr>
                <td class="col1">1.1</td>
                <td><input style="background-color: transparent;border: transparent;font-family: Fira Sans, sans-serif;color: black;font-size: 14px;"></td>
                <td><select style="background-color: transparent;border: transparent; font-family: Fira Sans, sans-serif;color: black;font-size: 14px;">
                        <option>Seleccione...</option>
                        <option>Muy en desacuerdo</option>
                        <option>En desacuerdo</option>
                        <option>Ni de acuerdo ni en desacuerdo</option>
                        <option>De acuerdo</option>
                        <option>Muy de acuerdo</option>
                    </select></td>
            </tr>
            <tr>
                <td class="col1">1.2</td>
                <td><input style="background-color: transparent;border: transparent;font-family: Fira Sans, sans-serif;color: black;font-size: 14px;"></td>
                <td><select style="background-color: transparent;border: transparent; font-family: Fira Sans, sans-serif;color: black;font-size: 14px;">
                        <option>Seleccione...</option>
                        <option>Muy en desacuerdo</option>
                        <option>En desacuerdo</option>
                        <option>Ni de acuerdo ni en desacuerdo</option>
                        <option>De acuerdo</option>
                        <option>Muy de acuerdo</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td class="col1">1.3</td>
                <td><input style="background-color: transparent;border: transparent;font-family: Fira Sans, sans-serif;color: black;font-size: 14px;"></td>
                <td><select style="background-color: transparent;border: transparent; font-family: Fira Sans, sans-serif;color: black;font-size: 14px;">
                        <option>Seleccione...</option>
                        <option>Muy en desacuerdo</option>
                        <option>En desacuerdo</option>
                        <option>Ni de acuerdo ni en desacuerdo</option>
                        <option>De acuerdo</option>
                        <option>Muy de acuerdo</option>
                    </select></td>
            </tr>
            <tr>
                <td class="col1">1.4</td>
                <td><input style="background-color: transparent;border: transparent;font-family: Fira Sans, sans-serif;color: black;font-size: 14px;"></td>
                <td><select style="background-color: transparent;border: transparent; font-family: Fira Sans, sans-serif;color: black;font-size: 14px;">
                        <option>Seleccione...</option>
                        <option>Muy en desacuerdo</option>
                        <option>En desacuerdo</option>
                        <option>Ni de acuerdo ni en desacuerdo</option>
                        <option>De acuerdo</option>
                        <option>Muy de acuerdo</option>
                    </select></td>
            </tr>
        </table>
        <p style="font-family: 'Fira Sans Condensed';font-size: 14px;position: relative;top:-80px;">Luego les pedimos responder las siguientes preguntas:</p>
        <p style="font-family: 'Fira Sans Condensed';font-size: 14px;position: relative;top:-80px;">¿Qué cambios asociados a cada estrategia se observan en el aula?</p>
        <input style="font-family: 'Fira Sans Condensed';font-size: 14px;position: relative;top:-80px; border: #f27611  1px solid;background-color: transparent;width: 83.6%;
    ;height: 32px; ">
        <p style="font-family: 'Fira Sans Condensed';font-size: 14px;position: relative;top:-80px;">A partir de la implementación de las estrategias, describa las opiniones que han recibido de:</p>
        <table id="seguimiento2">
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
        <p style="font-family: 'Fira Sans Condensed';font-size: 14px;position: relative;top:-80px;">En el caso de aquellas intervenciones cuya evaluación es igual o menor a 3:<br>
        ¿Es posible sustituir por otra estrategia o ajustar?</p>
        <div class="check1">
            <input type="radio" id="male" name="gender" value="male">
            <label for="male" style="font-family: 'Fira Sans Condensed';font-size: 14px;">Si</label>
        </div>
        <div class="check2">
            <input type="radio" id="female" name="gender" value="female">
            <label for="female" style="font-family: 'Fira Sans Condensed';font-size: 14px;">No</label>
        </div>
        <p style="font-family: 'Fira Sans Condensed';font-size: 14px;position: relative;top:-100px;left: 6%;">¿Cómo?</p>
        <input style="font-family: 'Fira Sans Condensed';font-size: 14px;position: relative;top:-140px; border: #f27611  1px solid;background-color: transparent;width: 73.6%;
    ;height: 32px;left:10%; ">
        <p style="font-family: 'Fira Sans Condensed';font-size: 14px;position: relative;top:-130px;">Registrar acuerdos de ajustes o cambios, junto con los pasos a seguir:</p>
        <input style="font-family: 'Fira Sans Condensed';font-size: 14px;position: relative;top:-130px; border: #f27611  1px solid;background-color: transparent;width: 83.6%;
    ;height: 82px; ">
        <button type="submit" class="guardar2" name="guardar" >&nbsp;Guardar...</button>
        <button type="submit" class="publicar2" name="publicar" >Publicar...</button>
    </form>
<a href="#"><img class="descarga2" src="../img/Fichas/Descargar.png"></a>
<a href="#"><img class="imprimir2" src="../img/Fichas/imprimir.png"></a>
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
<script>
    var x, i, j, l, ll, selElmnt, a, b, c;
    /*look for any elements with the class "custom-select":*/
    x = document.getElementsByClassName("custom-select");
    l = x.length;
    for (i = 0; i < l; i++) {
        selElmnt = x[i].getElementsByTagName("select")[0];
        ll = selElmnt.length;
        /*for each element, create a new DIV that will act as the selected item:*/
        a = document.createElement("DIV");
        a.setAttribute("class", "select-selected");
        a.innerHTML = selElmnt.options[selElmnt.selectedIndex].innerHTML;
        x[i].appendChild(a);
        /*for each element, create a new DIV that will contain the option list:*/
        b = document.createElement("DIV");
        b.setAttribute("class", "select-items select-hide");
        for (j = 1; j < ll; j++) {
            /*for each option in the original select element,
            create a new DIV that will act as an option item:*/
            c = document.createElement("DIV");
            c.innerHTML = selElmnt.options[j].innerHTML;
            c.addEventListener("click", function(e) {
                /*when an item is clicked, update the original select box,
                and the selected item:*/
                var y, i, k, s, h, sl, yl;
                s = this.parentNode.parentNode.getElementsByTagName("select")[0];
                sl = s.length;
                h = this.parentNode.previousSibling;
                for (i = 0; i < sl; i++) {
                    if (s.options[i].innerHTML == this.innerHTML) {
                        s.selectedIndex = i;
                        h.innerHTML = this.innerHTML;
                        y = this.parentNode.getElementsByClassName("same-as-selected");
                        yl = y.length;
                        for (k = 0; k < yl; k++) {
                            y[k].removeAttribute("class");
                        }
                        this.setAttribute("class", "same-as-selected");
                        break;
                    }
                }
                h.click();
            });
            b.appendChild(c);
        }
        x[i].appendChild(b);
        a.addEventListener("click", function(e) {
            /*when the select box is clicked, close any other select boxes,
            and open/close the current select box:*/
            e.stopPropagation();
            closeAllSelect(this);
            this.nextSibling.classList.toggle("select-hide");
            this.classList.toggle("select-arrow-active");
        });
    }
    function closeAllSelect(elmnt) {
        /*a function that will close all select boxes in the document,
        except the current select box:*/
        var x, y, i, xl, yl, arrNo = [];
        x = document.getElementsByClassName("select-items");
        y = document.getElementsByClassName("select-selected");
        xl = x.length;
        yl = y.length;
        for (i = 0; i < yl; i++) {
            if (elmnt == y[i]) {
                arrNo.push(i)
            } else {
                y[i].classList.remove("select-arrow-active");
            }
        }
        for (i = 0; i < xl; i++) {
            if (arrNo.indexOf(i)) {
                x[i].classList.add("select-hide");
            }
        }
    }
    /*if the user clicks anywhere outside the select box,
    then close all select boxes:*/
    document.addEventListener("click", closeAllSelect);
</script>
</html>

