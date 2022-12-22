<?php
require_once 'Animal.php';
class Mamifero extends Animal {
    private $corPelo;

    public function locomover() {
        echo "<br> Correndo";
    }

    public function alimentar() {
       echo "<br> Mamando";
    }

    public function emitirSom(){
        echo "<br> Som de mamífero";
    }

    /**
     * Get the value of corPelo
     */ 
    public function getCorPelo()
    {
        return $this->corPelo;
    }

    /**
     * Set the value of corPelo
     *
     * @return  self
     */ 
    public function setCorPelo($corPelo)
    {
        $this->corPelo = $corPelo;

        return $this;
    }
}