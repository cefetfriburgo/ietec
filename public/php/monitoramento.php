<?php
    $monitoramento = file_get_contents('php://input');

    $monitoramento = json_decode($monitoramento);

    echo json_encode($monitoramento);
?>