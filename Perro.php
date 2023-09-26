<?php

require_once 'Animal.php';

class Perro extends Animal {
    

    public function __toString()
    {
       return 'Animal: Perro '.parent::__toString();
    }
    
    public function ladrido()
    {
        return parent::hacerRuido();
    }

    public function hacerCaso()
    {
        $rtnBool = rand(1,10);
        return $rtnBool<=9; 
    }

    public function sacarPaseo(){
        
    }
}