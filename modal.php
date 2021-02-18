<!DOCTYPE html>
<html>

<head>
    <link rel="shortcut icon" href="#">
</head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<link href='https://fonts.googleapis.com/css?family=Fira Sans Condensed' rel='stylesheet'>
<link href='https://fonts.googleapis.com/css?family=Fira Sans' rel='stylesheet'>
<link href='https://fonts.googleapis.com/css?family=Fira Sans Condensed' rel='stylesheet'>

<script>
    $(document).ready(function() {
        $('.openBtn').click();
    });
    $(function() {
        $("#accordion").accordion();
    });
</script>

<body>
    <style>
        .ui-accordion {
            width: 62%;
            position: absolute;
            top: 72px;
            right: 36%;
        }

        .ui-accordion-header {
            border-top-color: #999999;
            background-color: rgba(80, 80, 80, 0.9);
            font-weight: bolder;
            color: #cccccc;
        }

        .ui-accordion-header-active {
            border-top-color: #da9600;
            background-color: rgba(220, 104, 9, 0.90);
            font-size: bolder;
            color: #cccccc;
        }

        .ui-icon {
            display: inline-block;
            vertical-align: middle;
            margin-top: -.25em;
            position: relative;
            text-indent: -99999px;
            overflow: hidden;
            background-repeat: no-repeat;
            left: 95%;
        }

        .ui-accordion-content-active {
            border-style: 1px solid;
            border-color: #da9600;
            background-color: rgba(255, 255, 255, 0.5);
            color: white;

        }

        p.acordion2 {
            color: black;
            font-family: "Fira Sans Condensed", sans-serif;
            font-size: 16px;
            line-height: 1.152;
            margin-bottom: 16px;
            text-align: justify;
            margin-block-end: 0;
        }
    </style>

    <!-- Trigger the modal with a button -->
    <button type="button" class="btn btn-success openBtn" style="display: none;"></button>

    <!-- Modal -->
    <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content" style="border-color:#da9600;
	                    border-width:1px;
	                    border-style:solid;
	                    background-color:#fffefd;
	                    border-radius:3px 3px 3px 3px;">
                <div class="modal-header" style="background-color: #22a2b0;">
                    <button type="button" class="close" data-dismiss="modal" onclick="location.href='buscar.php'">×</button>
                    <h4 class="modal-tittle"></h4>
                </div>
                <div class="modal-body">
                    
                
                </div>
            </div>
        </div>
    </div>
    </div>


</body>
<script type="text/javascript">
    $('.openBtn').on('click', function() {
        $('.modal-body').load('cargaDetalle.php?id_ficha=<?php echo $_GET['id_ficha']; ?>', function() {
            $('#myModal').modal({
                show: true
            });
        });
    })
</script>

</html>