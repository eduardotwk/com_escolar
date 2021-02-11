<!DOCTYPE html>
<html>
<head>
    <link rel="shortcut icon" href="#">
</head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<body>

    <!-- Trigger the modal with a button -->
    <button type="button" class="btn btn-success openBtn">Open Modal</button>

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
                    <button type="button" class="close" data-dismiss="modal">×</button>
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
        $('.modal-body').load('getContent.php?id_ficha=3', function() {
            $('#myModal').modal({
                show: true});
        });
    })
</script>
</html>

