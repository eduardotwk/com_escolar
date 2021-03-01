<?php
session_start();

error_reporting(E_ALL ^ E_WARNING ^ E_NOTICE);

require_once "../assets/librerias/vendor/autoload.php";
require_once "dist/conf/require_conf.php";

use GuzzleHttp\Client;

//definimos constantes para la cantidad de preguntas según el tipo, en esta encuesta CE + FC = 47 y COG + FAM + AF + CON + PAR + PRO = 47
define('NUM_CE', 29);
define('NUM_FC', 18);

date_default_timezone_set('America/Santiago');

$conn = connectDB_demos();

$previousYear = date('Y') - 1;

$usuario_stmt = $conn->prepare('SELECT * FROM ce_usuarios where nombre_usu = :username');
$usuario_stmt->execute([
    'username' => $_SESSION['user']
]);

$usuario = $usuario_stmt->fetch();

$soste = $conn->query("SELECT * from ce_sostenedor where run_soste = {$usuario['nombre_usu']}")->fetch();

// ESTABLECIMIENTO

$stmtCurrentYear = $conn->prepare("SELECT 
(SUM(ce_p1) / COUNT(ce_participantes.id_ce_participantes)  + SUM(ce_p2) / COUNT(ce_participantes.id_ce_participantes) + 
SUM(ce_p3) / COUNT(ce_participantes.id_ce_participantes)  + SUM(ce_p4) / COUNT(ce_participantes.id_ce_participantes)  + 
SUM(ce_p5) / COUNT(ce_participantes.id_ce_participantes)  + SUM(ce_p6) / COUNT(ce_participantes.id_ce_participantes)  + 
SUM(ce_p7) / COUNT(ce_participantes.id_ce_participantes)  + SUM(ce_p8) / COUNT(ce_participantes.id_ce_participantes)  + 
SUM(ce_p9) / COUNT(ce_participantes.id_ce_participantes)  + SUM(ce_p10) / COUNT(ce_participantes.id_ce_participantes)  +
SUM(ce_p11) / COUNT(ce_participantes.id_ce_participantes) + SUM(ce_p12) / COUNT(ce_participantes.id_ce_participantes)  + 
SUM(ce_p13) / COUNT(ce_participantes.id_ce_participantes) + SUM(ce_p14) / COUNT(ce_participantes.id_ce_participantes)  + 
SUM(ce_p15) / COUNT(ce_participantes.id_ce_participantes) + SUM(ce_p16) / COUNT(ce_participantes.id_ce_participantes)  + 
SUM(ce_p17) / COUNT(ce_participantes.id_ce_participantes) + SUM(ce_p18) / COUNT(ce_participantes.id_ce_participantes)  + 
SUM(ce_p19) / COUNT(ce_participantes.id_ce_participantes) + SUM(ce_p20) / COUNT(ce_participantes.id_ce_participantes)  +
SUM(ce_p21) / COUNT(ce_participantes.id_ce_participantes) + SUM(ce_p22) / COUNT(ce_participantes.id_ce_participantes)  + 
SUM(ce_p23) / COUNT(ce_participantes.id_ce_participantes) + SUM(ce_p24) / COUNT(ce_participantes.id_ce_participantes)  + 
SUM(ce_p25) / COUNT(ce_participantes.id_ce_participantes) + SUM(ce_p26) / COUNT(ce_participantes.id_ce_participantes)  + 
SUM(ce_p27) / COUNT(ce_participantes.id_ce_participantes) + SUM(ce_p28) / COUNT(ce_participantes.id_ce_participantes) +
SUM(ce_p29) / COUNT(ce_participantes.id_ce_participantes) ) /  29         AS CE,
(SUM(ce_p30) / COUNT(ce_participantes.id_ce_participantes) +
SUM(ce_p31) / COUNT(ce_participantes.id_ce_participantes) +
SUM(ce_p32) / COUNT(ce_participantes.id_ce_participantes) +
SUM(ce_p33) / COUNT(ce_participantes.id_ce_participantes) +
SUM(ce_p34) / COUNT(ce_participantes.id_ce_participantes) +
SUM(ce_p35) / COUNT(ce_participantes.id_ce_participantes) +
SUM(ce_p36) / COUNT(ce_participantes.id_ce_participantes) +
SUM(ce_p37) / COUNT(ce_participantes.id_ce_participantes) +
SUM(ce_p38) / COUNT(ce_participantes.id_ce_participantes) +
SUM(ce_p39) / COUNT(ce_participantes.id_ce_participantes) +
SUM(ce_p40) / COUNT(ce_participantes.id_ce_participantes) +
SUM(ce_p41) / COUNT(ce_participantes.id_ce_participantes) +
SUM(ce_p42) / COUNT(ce_participantes.id_ce_participantes) +
SUM(ce_p43) / COUNT(ce_participantes.id_ce_participantes) +
SUM(ce_p44) / COUNT(ce_participantes.id_ce_participantes) +
SUM(ce_p45) / COUNT(ce_participantes.id_ce_participantes) +
SUM(ce_p46) / COUNT(ce_participantes.id_ce_participantes) +
SUM(ce_p47) / COUNT(ce_participantes.id_ce_participantes)) / 18 AS FC,
COUNT(ce_participantes.id_ce_participantes), cer.ce_anio_contestada,
ces.establecimiento_id, ce.ce_establecimiento_nombre  FROM ce_establecimiento_sostenedor ces 
INNER JOIN ce_participantes  ON ce_participantes.ce_establecimiento_id_ce_establecimiento = ces.establecimiento_id
INNER JOIN ce_encuesta_resultado cer ON cer.ce_participantes_token_fk = ce_participantes.ce_participanes_token
INNER JOIN ce_curso cc ON ce_participantes.ce_curso_id_ce_curso = cc.id_ce_curso
INNER JOIN ce_establecimiento ce ON ces.establecimiento_id = ce.id_ce_establecimiento
WHERE ces.sostenedor_id = :id_soste AND cer.ce_anio_contestada = :current_year GROUP BY ces.establecimiento_id;
");

$stmtCurrentYear->execute(['id_soste' => $soste["id_soste"], 'current_year' => date('Y')]);

$objCurrentYear = $stmtCurrentYear->fetchAll();

$stmtPreviousYear = $conn->prepare("SELECT 
(SUM(ce_p1) / COUNT(ce_participantes.id_ce_participantes)  + SUM(ce_p2) / COUNT(ce_participantes.id_ce_participantes) + 
SUM(ce_p3) / COUNT(ce_participantes.id_ce_participantes)  + SUM(ce_p4) / COUNT(ce_participantes.id_ce_participantes)  + 
SUM(ce_p5) / COUNT(ce_participantes.id_ce_participantes)  + SUM(ce_p6) / COUNT(ce_participantes.id_ce_participantes)  + 
SUM(ce_p7) / COUNT(ce_participantes.id_ce_participantes)  + SUM(ce_p8) / COUNT(ce_participantes.id_ce_participantes)  + 
SUM(ce_p9) / COUNT(ce_participantes.id_ce_participantes)  + SUM(ce_p10) / COUNT(ce_participantes.id_ce_participantes)  +
SUM(ce_p11) / COUNT(ce_participantes.id_ce_participantes) + SUM(ce_p12) / COUNT(ce_participantes.id_ce_participantes)  + 
SUM(ce_p13) / COUNT(ce_participantes.id_ce_participantes) + SUM(ce_p14) / COUNT(ce_participantes.id_ce_participantes)  + 
SUM(ce_p15) / COUNT(ce_participantes.id_ce_participantes) + SUM(ce_p16) / COUNT(ce_participantes.id_ce_participantes)  + 
SUM(ce_p17) / COUNT(ce_participantes.id_ce_participantes) + SUM(ce_p18) / COUNT(ce_participantes.id_ce_participantes)  + 
SUM(ce_p19) / COUNT(ce_participantes.id_ce_participantes) + SUM(ce_p20) / COUNT(ce_participantes.id_ce_participantes)  +
SUM(ce_p21) / COUNT(ce_participantes.id_ce_participantes) + SUM(ce_p22) / COUNT(ce_participantes.id_ce_participantes)  + 
SUM(ce_p23) / COUNT(ce_participantes.id_ce_participantes) + SUM(ce_p24) / COUNT(ce_participantes.id_ce_participantes)  + 
SUM(ce_p25) / COUNT(ce_participantes.id_ce_participantes) + SUM(ce_p26) / COUNT(ce_participantes.id_ce_participantes)  + 
SUM(ce_p27) / COUNT(ce_participantes.id_ce_participantes) + SUM(ce_p28) / COUNT(ce_participantes.id_ce_participantes) +
SUM(ce_p29) / COUNT(ce_participantes.id_ce_participantes) ) /  29         AS CE,
(SUM(ce_p30) / COUNT(ce_participantes.id_ce_participantes) +
SUM(ce_p31) / COUNT(ce_participantes.id_ce_participantes) +
SUM(ce_p32) / COUNT(ce_participantes.id_ce_participantes) +
SUM(ce_p33) / COUNT(ce_participantes.id_ce_participantes) +
SUM(ce_p34) / COUNT(ce_participantes.id_ce_participantes) +
SUM(ce_p35) / COUNT(ce_participantes.id_ce_participantes) +
SUM(ce_p36) / COUNT(ce_participantes.id_ce_participantes) +
SUM(ce_p37) / COUNT(ce_participantes.id_ce_participantes) +
SUM(ce_p38) / COUNT(ce_participantes.id_ce_participantes) +
SUM(ce_p39) / COUNT(ce_participantes.id_ce_participantes) +
SUM(ce_p40) / COUNT(ce_participantes.id_ce_participantes) +
SUM(ce_p41) / COUNT(ce_participantes.id_ce_participantes) +
SUM(ce_p42) / COUNT(ce_participantes.id_ce_participantes) +
SUM(ce_p43) / COUNT(ce_participantes.id_ce_participantes) +
SUM(ce_p44) / COUNT(ce_participantes.id_ce_participantes) +
SUM(ce_p45) / COUNT(ce_participantes.id_ce_participantes) +
SUM(ce_p46) / COUNT(ce_participantes.id_ce_participantes) +
SUM(ce_p47) / COUNT(ce_participantes.id_ce_participantes)) / 18 AS FC,
COUNT(ce_participantes.id_ce_participantes), cer.ce_anio_contestada,
ces.establecimiento_id, ce.ce_establecimiento_nombre  FROM ce_establecimiento_sostenedor ces 
INNER JOIN ce_participantes  ON ce_participantes.ce_establecimiento_id_ce_establecimiento = ces.establecimiento_id
INNER JOIN ce_encuesta_resultado cer ON cer.ce_participantes_token_fk = ce_participantes.ce_participanes_token
INNER JOIN ce_curso cc ON ce_participantes.ce_curso_id_ce_curso = cc.id_ce_curso
INNER JOIN ce_establecimiento ce ON ces.establecimiento_id = ce.id_ce_establecimiento
WHERE ces.sostenedor_id = :id_soste AND cer.ce_anio_contestada = :previous_year GROUP BY ces.establecimiento_id;
");

$stmtPreviousYear->execute(['id_soste' => $soste["id_soste"], 'previous_year' => $previousYear]);

$objPreviousYear = $stmtPreviousYear->fetchAll();

$tabla_simbologia = '<h3 class="text-center">Comparación temporal por ítem</h3><br>
    <table class="table table-striped" style="border-collapse: collapse; margin-left:100px; text-align:center; border: solid 1px red;">
    <thead style="font-size:18px">
        <tr>
            <th scope="row" style="text-align:center;width:60px;border-bottom: solid 1px red; font-size:18px;">Ítem</th>
            <th scope="row" style="text-align:center;border-bottom: solid 1px red; font-size:18px;">Descripción</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td style="text-align:center; border-bottom: solid 1px red; padding: 2px;">&#8593;</td>
            <td style="text-align:left; border-bottom: solid 1px red; padding: 2px;">Mejoró la tendencia respecto al año anterior</td>                                                          
        </tr>
        <tr>
            <td style="text-align:center; border-bottom: solid 1px red; padding: 2px;">-</td>
            <td style="text-align:left; border-bottom: solid 1px red; padding: 2px;">Se mantiene la tendencia respecto al año anterior</td>
        </tr>
        <tr>
            <td style="text-align:center; border-bottom: solid 1px red; padding: 2px;">&#8595;</td>
            <td style="text-align:left; border-bottom: solid 1px red; padding: 2px;">Bajó la tendencia respecto al año anterior</td>
        </tr>
    </tbody>
</table>';
$tabla_inicio_preguntas = '<table border="1" style="border-collapse: collapse; margin-left:10px; text-align:center; border: solid 1px red;">

<tr>
  <td rowspan="2" style="font-weight:bold">Nombre colegio asociado al/a la sostenedor/a</td>
  <th colspan="3" scope="colgroup" style="width: 200px">Compromiso Escolar</th>
  <th colspan="3" scope="colgroup" style="width: 200px">Factores Contextuales</th>  
</tr>
<tr>
  <th scope="col">'.$previousYear.'</th>
  <th scope="col">'.date('Y').'</th>
  <th scope="col">Tendencia</th>
  <th scope="col">'.$previousYear.'</th>
  <th scope="col">'.date('Y').'</th>
  <th scope="col">Tendencia</th>
</tr>
';
$aux = '';

$i = 0;

while($i < count($objCurrentYear)) {      
    $aux = $aux."  <tr>
    <th scope='row' style='font-weight: normal;'>".$objCurrentYear[$i]["ce_establecimiento_nombre"]."</th>
    <td>".round($objPreviousYear[$i]["CE"])."</td>
    <td>".round($objCurrentYear[$i]["CE"])."</td>
    <td>".calcTendencia(round($objPreviousYear[$i]["CE"]), round($objCurrentYear[$i]["CE"]))."</td>
    <td>".round($objPreviousYear[$i]["FC"])."</td>
    <td>".round($objCurrentYear[$i]["FC"])."</td>
    <td>".calcTendencia(round($objPreviousYear[$i]["FC"]), round($objCurrentYear[$i]["FC"]))."</td>
  </tr>";
    $i++;
}
             
$tabla_preguntas_fin = '</table>';
$tabla_preguntas_union = $tabla_inicio_preguntas.$aux.$tabla_preguntas_fin;
                                
function calcTendencia($prev, $curr)
{
    $result = '';
    if((round($curr) - round($prev)) == 0)
    {
        $result = '-';
    } else if ($curr - $prev < 0) {
        $result = '<span style="color:red; font-size:16px;">&#8595;</span> '; 
    } else {
        $result = '<span style="color:#3c763d; font-size:16px;"> &#8593;</span>'; 
    }

    return $result;
}



 
$mpdfConfig = array(
  'mode' => 'utf-8', 
  'format' => 'A4',
  'orientation' => 'P',
  'margin_header'=>0,  
  'margin_bottom'=>20,
  'margin_left'=>0,
  'margin_right'=>0, 
  'margin_top'=> 30 
);
$mpdf = new \Mpdf\Mpdf($mpdfConfig);

$mpdf->SetHTMLHeader('<div style="text-align: center; font-weight: bold;"><img src="../assets/img/encabezado_informe_sostenedor.png"/></div>', 'O', true);

$mpdf->SetHTMLFooter('<div style="text-align: center;border-top: 1px solid #fc455c; color: #fc455c; padding-top:3px;">{PAGENO}</div>');

$mpdf->WriteHTML('<div class="container">
<div class="descrip_com_esco">

<div class="subtitulos pt-1">Reporte de seguimiento
<p style="margin-bottom: 20px; font-weight:normal; color:black">En esta sección se puede apreciar la dinámica del compromiso escolar y sus factores contextuales a través del tiempo.</p>
</div>

<h2>Sostenedor: '.$soste["nom_soste"].' '.$soste["apelli_soste"].'</h2>'.
$tabla_simbologia.'<br><br>'.$tabla_preguntas_union.'
</center>
    </div>
    </div>');


$mpdf->Output('reporte_sostenedor.pdf', 'I');