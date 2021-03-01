<?php require_once "dist/conf/require_conf.php";

header("Location: ../inicia_reportes.php");
die();

?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="content-type" content="text/html; charset=iso-8859-1">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Compromiso Escolar Login</title>
  <?php require "dist/css/css.php"; ?>

  <script src="https://www.google.com/recaptcha/api.js?render=6Le4kagZAAAAAPrJvezXbADOrTQVxo69xZg1cyK6"></script>
</head>
<body class="login-page">
<div class="login-page">
  <div style="padding-top:10px;margin-left:10px; color:white;">
  <img src="../encuesta/logo_compromiso-copia.png" alt="" srcset=""> <span>MÓDULO DE REPORTES COMPROMISO ESCOLAR</span>
  </div>
<section class="cabezera">

<div class="container"><!-- inicio container-->
    <div class="row">
      <div class="col-md-12">

      <div class="col-md-6">
<h2 class="text-white">¡Bienvenidos/as!</h2>
<p class="text-justify text-white texto-informes">En este sitio tendrás acceso a una serie de informes que buscan entregar los resultados de la medición de compromiso escolar de niños, niñas y adolescentes y sus factores de contexto. Algunos informes muestran los resultados a nivel de cada estudiante y otros los de cada curso y los del establecimiento escolar. Los informes entregan información valiosa para generar estrategias de promoción del compromiso escolar y también para tomar decisiones de manera oportuna y temprana. </p>
<!--<div class="imagen_estudiantes"></div>-->
      </div>

      <div class="col-md-6">
      <h2 class="text-white text-center"> Panel de Reportes</h2>
      <div class="login-box">
     
  <!-- /.login-logo -->
  <div class="login-box-body">
    <p class="login-box-msg"></p>
    <form method="POST">
    <div class="form-group has-feedback">
        <?php echo tipo_usuario(); ?>
      </div>
      <div class="form-group has-feedback">
        <input type="text" name="usuario" id="usuario" class="form-control" placeholder="usuario" required />
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>
      
      <div class="form-group has-feedback">
        <input type="password" id="contrasena" name="contrasena" class="form-control"  autocomplete="password" placeholder="contraseña" required />
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="row">
        <div class="col-xs-12">
        
        <button type="button" class="btn btn-primary color_boton pull-right" name="login-button" id="ingresar"><span id="inicia">Ingresar</span>
                  <div id="spinner"></div>
        </button>
      
        </div>
      

      </div>
    </form>
<div class="text-center"><a href="../index2.php">Volver</a></div>
  </div>
  <!-- /.login-box-body -->
</div>
      </div>
      </div>
      
    </div>
    
   
  </div>
 
  </div><!-- fin container-->
   <!--fin cabezera -->

</section>

<section class="contenido_botones">
<div class="container">
<div class="row">
<div class="col-md-12 mt-1">  

        <div class="col-md-6 texto_botones">
        <div class="pt-2"><span class="text-muted">Los  participantes pueden acceder a encuesta y material de apoyo de compromiso escolar en los siguientes link: </span></div>
        </div>

       <div class="col-md-2 col-xs-2 text-center">
       <a href='../codigo' target="_parent" class="btn btn-primary text-white hvr hvr-grow">Encuesta   <i class="fa fa-list-alt" aria-hidden="true"></i></a>
           </div>

       <div class="col-md-2 col-xs-2 text-center">      
             <a href='../recursos' target="_parent" class="btn btn-primary  text-white hvr hvr-grow">Material de apoyo  <i class="fa fa-lightbulb-o" aria-hidden="true"></i></a>
       </div>

       <div class="col-md-2 col-xs-2 text-center">
                           <a href='ce_admin' target="_parent" class="btn btn-primary  text-white hvr hvr-grow">Administración <i class="fa fa-users" aria-hidden="true"></i></a>
                         </div>

       </div>
</div>
</div>

</section>

<section class="login_contenido">
  <div class="container">
    <div class="row">

                  <div class="col-md-12 col-xs-12">
                     <p class="texto"><strong>Estas encuestas forman parte del Proyecto FONDEF ID14I10078-ID14I20078 Medición del compromiso del niño, niña y adolescente con sus estudios para la promoción de trayectorias educativas exitosas.</strong></p>
                    
                     </div>

                  <div class="col-md-3 mt-2 text-center">
                     <a href="http://www.conicyt.cl/fondef/" target="_blank" class="hvr-float-shadow"><img src="../encuesta/logo_fondef.png" alt="" width="272px" height="90.99px"></a>                                                             
                 </div>
                 <div class="col-md-3 mt-2 text-center">
                        <a href="https://www.e-mineduc.cl/course/view.php?id=9147" target="_blank" class="hvr-float-shadow"><img src="../assets/img/Mineduc.svg" alt="" width="160px" height="90.99px"></a>
                 </div>

                     <div class="col-md-3 text-center">
                         <a href="https://www.ufro.cl/" target="_blank" class="hvr-float-shadow"><img src="../encuesta/logo_ufro.png" alt="" width="160px" height="90.99px"> </a>
                     </div>

                     <div class="col-md-3 text-center">
                     <a href="https://www.uautonoma.cl" target="_blank" class="hvr-float-shadow"><img src="../encuesta/logo_autonoma.png" alt="" width="205px" height="90.99px"></a>                                                               
                                                                        
                     </div>
               

    </div>
  </div>
</section>

<section class="login_footer">
<div class="container">
<div class="row">

              <div class="col-md-6">
                 <p class="text-muted">Universidad de La Frontera Avenida Francisco Salazar 01145, Temuco - Chile</p>
             </div>
             <div class="col-md-6">
                 <p class="text-muted">Si necesitas solicitar tus claves de acceso gratuito a nuestra plataforna de compromiso escolar, favor contacta a nuestro equipo al correo electrónico <i class="fa fa-envelope text-danger" data-toggle="tooltip" data-placement="top" title="Contacto"></i> info@compromisoescolar.com </p>                 
             </div>
  
</div>
</div>
</section>
  <!--  Nueva interfaz Reportes cabezera-->


  
<?php require "dist/js/js.php"; ?>
<script>
            grecaptcha.ready(function() {
                grecaptcha.execute('6Le4kagZAAAAAPrJvezXbADOrTQVxo69xZg1cyK6', {action: 'submit'}).then(function(token) {
                    $('#token').val(token); // here i set value to hidden field
                });
            });
 login_final();  
    </script>
</body>
</html>
