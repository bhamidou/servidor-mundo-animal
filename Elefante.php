<?php

require_once 'Animal.php';

class Elefante extends Animal {

    public function __toString()
    {
       return 'Animal: Elefante ';
    }

    public function barrita(){
        return parent::hacerRuido();
    }
}