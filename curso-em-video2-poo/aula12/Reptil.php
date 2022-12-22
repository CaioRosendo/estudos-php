<?php
require_once 'Animal.php';
class Reptil extends Animal {
    private $corEscama;
    
    public function locomover() {
        echo "<br> Rastejando";
    }

    public function alimentar() {
        echo "<br> Comendo Vegetais";
    }

    public function emitirSom() {
        echo "<br> sim de Réptil";
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