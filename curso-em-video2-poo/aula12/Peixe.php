<?php
require_once 'Animal.php';
class Peixe extends Animal {
    private $corEscama;

    public function locomover() {
        echo "<br> Nadando";
    }

    public function alimentar() {
        echo "<br> Comendo substâncias";
    }

    public function emitirSom(){
        echo "<br> Som de peixe";
    }

    public function soltarBolha() {
        echo "<br> Soltou uma bolha";
    }

    /**
     * Get the value of corEscama
     */ 
    public function getCorEscama()
    {
        return $this->corEscama;
    }

    /**
     * Set the value of corEscama
     *
     * @return  self
     */ 
    public function setCorEscama($corEscama)
    {
        $this->corEscama = $corEscama;

        return $this;
    }
}