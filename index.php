<?php

require_once 'Elefante.php';
require_once 'Factoria.php';

header("Content-Type:application/json");

$requestMethod = $_SERVER["REQUEST_METHOD"];
$paths = $_SERVER['REQUEST_URI'];

$i = 120;
$parque = array_fill(0,10,'');




while($i>0){
    if($i % 10 == 0){
        $rnd = rand(0,(count($parque)-1));
        $animal = Factoria::rtnAnimRnd();
        if(!empty($parque[$rnd])) $animal;
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