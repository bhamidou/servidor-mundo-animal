<?php

require_once 'Elefante.php';
require_once 'Factoria.php';

header("Content-Type:application/json");

$requestMethod = $_SERVER["REQUEST_METHOD"];
$paths = $_SERVER['REQUEST_URI'];

$i = 120;
$parque = [
            [[],[],[]],
            [[],[],[]],
            [[],[],[]]
        ];

$a = new Elefante("a","a","a","a");
$b = Factoria::crearElefante();

echo json_encode([$a, $b]);

while($i>0){
    if($i % 10 == 0){

    }

    if($i % 2 == 0){

    }

    if($i % 15 == 0){

    }

    if($i % 20 == 0){

    }

    $i--;
}

header("HTTP/1.1 405 Verbo no soportado");