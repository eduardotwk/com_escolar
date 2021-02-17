<!DOCTYPE html>
<html lang="es">

<head>
    <title>Cargar contenido dinámico en bootstrap modal PHP - BaulPHP</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Librerias a incluir -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <!-- Fin de Librerias a incluir -->

</head>

<body>
    <h2>Cargar contenido dinámico en bootstrap modal PHP</h2>
    <!-- Desencadenar el modal con un botón -->
    <br> <button type="button" class="btn btn-primary openBtn">Abrir Modal</button>
    <button type="button" class="btn btn-primary openBtn2">Abrir Modal 2</button>
    <br><br>
    <!-- Modal -->
    <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog">
            <!-- Modal contenido-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Bootstrap Modal con contenido dinamico PHP - MySQL</h4>
                </div>
                <div class="modal-body">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
</body>
<script>
    $('.openBtn2').on('click',function(){
    $('.modal-body').load('getContent.php?id=2',function(){
        $('#myModal').modal({show:true});
    });
});
</script>