<?php
    include('numero.php');
    include('operaciones.php');
    $numDias = new Numero(30);
    $valorDia = new Numero(60000);
    $operaciones = new Operaciones($numDias, $valorDia);
    $response = [];
    $response['suma'] = $operaciones->salario();
    $response['resta'] = $operaciones->subTransporte();
    $response['multiplicacion'] = $operaciones->pension();
    $response['division'] = $operaciones->pagoTotal();

    header('Content-Type: application/json');
    echo json_encode($response);
