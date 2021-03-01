<?php 
session_start();

error_reporting(E_ERROR | E_PARSE);
require 'conf/conf_requiere.php';

if(isset($_SESSION['user'])){
   
?>
<!DOCTYPE html>
<html lang="es" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title></title>
<?php include"assets/css/css.php"; ?>
    </head>
    <body style="background: #418bcc;">
        <!-- Menu-->
        <nav class="navbar navbar-light" style="background-color: white">
            <a class="navbar-brand" href="/modulos.php"><img src="assets/img/logo_compromiso_escolar.png"/></a>
            <span class="navbar-text"><a href="salir.php"><img height= "50" src="assets/img/salir.png"></a></span>
            
        </nav>
        <!--Fin Menu-->
        <div class="container" style="padding-top: 2rem">
            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item">
                    <a class="" id="home-tab" data-toggle="tab" href="#" role="tab" aria-controls="home" aria-selected="true">Lista</a>
                </li>
                <li class="nav-item">
                    <a class="" id="profile-tab" data-toggle="tab" href="#cargamasiva" role="tab" aria-controls="profile" aria-selected="false">Carga masiva</a>
                </li>     

                <li class="nav-item">
                    <a class="" href="/index_admin.php"><i class="fa fa-arrow-left" aria-hidden="true"></i> Volver</a>
                </li>                   
            </ul> 
         
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="cargamasiva" role="tabpanel" aria-labelledby="profile-tab">
                        
                    <div class="borexcel">
                    
                    <form class="formulario" enctype="multipart/form-data" id="formulario_excel_establecimiento" method="post">
                    <div class="row">
                    </div>
                        <div class="row">
                            <div class="col-md-5">
                             
                                    <label class="text-white">Seleccionar Archivo XLSX</label>
                                    <div class="input-group">
                                        <input type="file" name="file" id="file" class="form-control" required>
                                        <span class="input-group-addon"></span>

                                        <input type="submit" id="boton_subir_excel_establecimiento" value="Cargar" name="Cargar" class="btn btn-danger ml-3">
                                    </div>
                                </form>
                            </div>
                            <div class="col-md-3">
                                <div class="excel">
                                    <a href="/assets/img/imagen_ejemplo_xlsx_establecimientos.png" target="_blank" class="text-white">Ver imagen de ejemplo</a>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="excel">
                                    <a href="descarga_archivo_llenar_establecimiento.php" class="text-white">Descargar Excel recepción de datos</a>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="row  pt-5">
                      <div class="col text-center text-white" id="dowload"></div>
                    </div>
                    <div class="row" >
                        <div class="col-md-4">
                            <div class="col-md-12 pasos">
                                <h4>Paso 1</h4>
                                <p>- Descargar archivo Excel de ejemplo</p>
                                <p>- Descargar archivo Excel recepción de datos</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="col-md-12 pasos">
                                <h4>Paso 2</h4>
                                <p>- Completar el archivo Excel para llenar </p>
                                <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                </p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="col-md-12 pasos">
                                <h4>Paso 3</h4>
                                <p>- Subir el archivo completado con el botón "Seleccionar archivo"</p>
                                <p>- Presionar el botón "Cargar"</p>
                               
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab"></div>
            </div>
             
        </div>

<?php include "assets/js/js.php"; ?>
    </body>
</html>
<?php 
}else{
  //header("location:reportes/login.php");
  header("location:index2.php");
}
