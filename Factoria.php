<?php

require_once 'Gato.php';
require_once 'Perro.php';
require_once 'Elefante.php';


class Factoria{

    static $nombre = ["Max","Luna","Rocky", "Simba", "Nala", "Toby","Bella","Charlie","Oliver", "Lucy" ];
    static $raza = ["Siames","Dogo","Persa" ];
    static $peso = 0;
    static $color = ["Negro", "Azul","Amarillo", "Rojo", "Cafe", "Naranja", "Rosa", "Blanco","Verde"];

    static function crearElefante(){
        $elefante = new Elefante(self::$nombre[rand(0,count(self::$nombre)-1)],self::$raza[rand(0,count(self::$raza)-1)] ,rand(1,1000),self::$color[rand(0,count(self::$color)-1)]);
        return $elefante;
    }

    static function crearGato(){
        $elefante = new Gato(self::$nombre[rand(0,count(self::$nombre)-1)],self::$raza[rand(0,count(self::$raza)-1)] ,rand(1,1000),self::$color[rand(0,count(self::$color)-1)]);
        return $elefante;
    }

    static function crearPerro(){
        $elefante = new Perro(self::$nombre[rand(0,count(self::$nombre)-1)],self::$raza[rand(0,count(self::$raza)-1)] ,rand(1,1000),self::$color[rand(0,count(self::$color)-1)]);
        return $elefante;
    }

    // static function rtnAnimRnd(){
    //     $a = rand(1,100);
    //     $rtnAn = crearElefante();

    //     if($a<=33){
    //         $rtnAn = crearPerro();
    //     }elseif ($a>=33 && $a<66) {
    //         $rtnAn = crearGato();
    //     }

    //     return $rtnAn;
    // }


}