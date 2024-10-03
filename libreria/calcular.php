<?php
    include('numero.php');
    include('operaciones.php');
    $numDias = new Numero(30);
    $valorDia = new Numero(60000);
    $operaciones = new Operaciones($numDias, $valorDia);
    $response = [];
    $response['salario'] = $operaciones->salario();
    $response['salud'] = $operaciones->salud();
    $response['subTransporte'] = $operaciones->subTransporte();
    $response['pension'] = $operaciones->pension();
    $response['arl'] = $operaciones->arl();
    $response['retencion'] = $operaciones->retencion();
    $response['deducible'] = $operaciones->deducible();
    $response['pagoTotal'] = $operaciones->pagoTotal();

    header('Content-Type: application/json');
    echo json_encode($response);
