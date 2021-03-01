<?php
	session_start();
	require_once 'conf/conf_requiere.php';

	error_reporting(E_ERROR | E_PARSE);
	if (isset($_SESSION['user'])) {
		$id_user = $_SESSION["user"];
?>
<!DOCTYPE html>
<html lang="es" dir="ltr">
<head>
<meta charset="utf-8">
<title></title>
	<?php include"assets/css/css.php"; ?>
	<style type="text/css">
		.conta {
			margin-right: 100px;
			margin-left: 100px; 
			padding-bottom: 20px;
		}
	</style>
</head>
<body style="background: #418bcc;">
	<!-- Menu-->
	<nav class="navbar navbar-light" style="background-color: white">
		<a class="navbar-brand" href="/modulos.php"><img src="assets/img/logo_compromiso_escolar.png" /></a>
		<span class="navbar-text"><a href="salir.php"><img
					src="assets/img/salir.png" height= "50"></a></span>
	</nav>
	<!--Fin Menu-->
	<div class="conta" style="padding-top: 2rem">

		<div class="row mb-3">
			<h4 class="text-white">Gestión de Sostenedores</h4>
		</div>

		<div class="row">
			<div class="col-md-12">
				<ul class="nav nav-tabs" id="myTab" role="tablist">
					<li class="nav-item"><a class="nav-link active bg-success" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Sostenedores</a></li>
					<li class="nav-item"><a class="nav-link bg-success" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Asociar establecimientos</a></li>					
					<li class="nav-item"><a class="nav-link bg-success" href="/modulos.php"><i
								class="fa fa-arrow-left" aria-hidden="true"></i> Volver</a></li>
				</ul>
				<div class="tab-content" id="myTabContent">

					<div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">

						<div class="row" id="doc_profesores">
							<button type="button" class="btn btn-light mt-2" data-toggle="modal" data-target="#modal_sostenedor" style="margin-left:15px" onclick="limpiar_sostenedor()">
								Nuevo Sostenedor <i class="fa fa-plus-circle" aria-hidden="true"></i>
							</button>

						</div>
						<div id="tabla_soste" class="pt-4"></div>

						<?php include "php/modal_nuevo_sostenedor.php"; ?>
						<?php include "php/modal_update_sostenedor_admin.php"; ?>

					</div>

					<div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">

						
					<div class="row">
                                            <div class="col-md-3">
                                                <h4 class="border-bottom pb-1 mb-2" style="color:#fff; margin-top: 15px">Seleccione un sostenedor:</h4>
                                                <select name="sel_soste_admin" id="sel_soste_admin" class="form-control mb-3" onchange="selectSostenedor(this)">
                                                    <?php echo select_sostenedores_admin(); ?>
                                                </select>
                                            </div>
										</div>
					<div class="row">
				
						<div class="col-md-4 offset-md-4" id="tabla_est_admin" style="margin-top: 20px;">
						
						</div>
						<?php include "php/modal_asociar_sostenedor_esta.php"; ?>
					</div>

					</div>	


				</div>
			</div>
		</div>

	</div>
	<?php include "assets/js/js.php"; ?>
	<script>
		$("#tabla_soste").load("php/tabla_sostenedor_admin.php");			 		 
		$("#modal_nuevo_curso").load("php/modal_nuevo_curso.php");
		$("#modal_actualiza_curso").load("php/modal_update_curso.php");
		

		ingreso_curso();
		ingreso_sostenedor_admin();
		ingreso_docente();             
		ante_poner_letra();    
		ante_poner_letra_update_docente()
		ante_poner_letra_new_sos();       
		ante_poner_letra_update_sostenedor();   

	</script>
</body>
</html>
<?php
	} else {
		header("location:index2.php");
	}
?>