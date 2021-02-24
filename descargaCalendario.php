<?php
header("Content-disposition: attachment; filename=calendario.pdf");
header("Content-type: MIME");
readfile("pdf_calendario/calendario.pdf");
?>