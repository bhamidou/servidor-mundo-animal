<?php 

require_once 'Metodos.php';

class Animal implements Metodos{
    public $nombre;
    public $raza;
    public $peso;
    public $color;

	public function __construct($nombre, $raza, $peso, $color) {

		$this->nombre = $nombre;
		$this->raza = $raza;
		$this->peso = $peso;
		$this->color = $color;
	}

    public function __toString()
    {
        return 'nombre: '.$this->nombre.' raza: '.$this->raza.' peso: '.$this->peso.' color: '.$this->color;
    }

    public function vacunar(){

    }

    public function comer(){

    }

    public function domir(){
        
    }

    public function hacerRuido(){
        
    }

    public function hacerCaso(){
        
    }

	public function getNombre() {
		return $this->nombre;
	}

	public function setNombre($value) {
		$this->nombre = $value;
	}

	public function getRaza() {
		return $this->raza;
	}

	public function setRaza($value) {
		$this->raza = $value;
	}

	public function getPeso() {
		return $this->peso;
	}

	public function setPeso($value) {
		$this->peso = $value;
	}

	public function getColor() {
		return $this->color;
	}

	public function setColor($value) {
		$this->color = $value;
	}
}