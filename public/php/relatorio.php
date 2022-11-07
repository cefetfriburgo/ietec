<?php
    $relatorio = file_get_contents('php://input');

    $relatorio = json_decode($relatorio);

    echo json_encode($relatorio);


?>