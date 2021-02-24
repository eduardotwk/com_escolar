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
 
</script>

<body>
    <style>
        .accordionMenu {
            width: 500px;
            margin: 0 auto;
           
        }

        .accordionMenu input[type=radio] {
            display: none;
            
        }

        .accordionMenu label {
            color: #cccccc;
            font-family: "Fira Sans Condensed Bold", sans-serif;
            font-size: 16px;
            font-weight: 800;
            line-height: 1em;
            text-align: left;
            display: block;
            position: relative;
            cursor: pointer;
            border-bottom: 1px solid #e6e6e6;
            border-top-color: #999999;
            background-color: rgba(80,80,80,0.9);   
            height: 34px;
            left: 0px;
            padding: 7px 20px 0px;
            border-top-style: solid;
            border-top-width: 5px;
            border-radius: 5px;
            border-bottom-left-radius: 0;
            border-bottom-right-radius: 0;
        }

        .accordionMenu input[type=radio]:checked + label {
            border-top-color: #da9600;
            background-color: rgba(220,104,9,0.90);
        }
        
        .accordionMenu label::after {
            display: block;
            content: "";
            border-style: solid;
            border-width: 5px 0 5px 10px;
            border-color: transparent transparent transparent #cccccc;
            position: absolute;
            right: 10px;
            top: 10px;
            z-index: 10;
            transition: all 0.3s ease-in-out;
        }

        .accordionMenu .content {
            max-height: 50px;
            height: 0;
            overflow: hidden;
            -webkit-transition: all 1s ease-in-out;
            -moz-transition: all 1s ease-in-out;
            -o-transition: all 1s ease-in-out;
            transition: all 1s ease-in-out;
        }

        .accordionMenu .content .inner {
            font-size: 1.2rem;
            line-height: 1.5;
            border-width: 1px;
            border-style: solid;
            background-color: rgba(255, 255, 255, 0.5);
            border-radius: 3px 3px 3px 3px;
            padding: 20px;
            border-color: #da9600;
        }

        .accordionMenu input[type=radio]:checked+label:after {
            transform: rotate(90deg);
           
        }
        .accordionMenu input[type=radio]:checked+label+.content {
            max-height: 250px;
            overflow-y:scroll ;
            height: auto;
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
        h4{
            font-family: "Fira Sans Condensed Bold", sans-serif;
            color: whitesmoke;
            font-size: 16px;
            font-weight: 800;
            line-height: 1em;
            text-align: left;
            position: absolute;
            top:0px;
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
	                    border-radius:3px 3px 3px 3px;
                        width: 600px;">
                <div class="modal-header" style="background-color: #22a2b0;height:30px;">
                    <button style="position: relative;top:-7px;" type="button" class="close" data-dismiss="modal" onclick="location.href='buscar.php'">×</button>
                    <h4 class="modal-tittle"><?php echo $_GET['nombre_ficha']; ?></h4>
                </div>
                <div class="modal-body" style="height: 530px;">
                </div>
                <a href="imprimir.php?id_ficha=<?php echo $_GET['id_ficha']; ?>"><img src="img/Fichas/imprimir.png" style="height: 40px;width: 40px;position:absolute;left:82%;top:auto;bottom: 10px;"></a>
                <a href="descarga.php?id_ficha=<?php echo $_GET['id_ficha']; ?>"><img src="img/Fichas/Descargar.png" style="height: 40px;width: 40px;position:absolute;left:90%; top:auto;bottom: 10px;"></a>
            </div>
        </div>
    </div>
    </div>


</body>
<script type="text/javascript">
    $('.openBtn').on('click', function() {
        //document.getElementById("titMod").innerHTML = tit_ficha;
        $('.modal-body').load('cargaDetalle.php?id_ficha=<?php echo $_GET['id_ficha']; ?>', function() {
            $('#myModal').modal({
                show: true
            });
        });
    })

   

</script>

</html>