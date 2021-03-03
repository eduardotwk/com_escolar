<?php
header("Content-disposition: attachment; filename=calendario.pdf");
header("Content-type: MIME");
readfile("/usr/share/nginx/beta.compromisoescolar.com/pdf_calendario/Calendario.pdf");
?>