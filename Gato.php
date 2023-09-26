<?php

require_once 'Animal.php';

class Gato extends Animal {
    
    public function __toString()
    {
       return 'Animal: Gato '.parent::__toString();
    }

    public function hacerCaso()
    {
        $rtnBool = rand(1,100);
        return $rtnBool<=5; 
    }

    public function toserBolaPelo(){

    }
}
