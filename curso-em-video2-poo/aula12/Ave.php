<?php
require_once 'Animal.php';
class Ave extends Animal{
    private $cordaPena;

    public function locomover() {
        echo "<br> Voando";
    }

    public function alimentar() {
        echo "<br> Comendo frutar";
    }

    public function emitirSom() {
        echo "<br> Som de ave";
    }

    public function fazerNinho() {
        echo "<br> Construiu um ninho";
    }

    /**
     * Get the value of cordaPena
     */ 
    public function getCordaPena()
    {
        return $this->cordaPena;
    }

    /**
     * Set the value of cordaPena
     *
     * @return  self
     */ 
    public function setCordaPena($cordaPena)
    {
        $this->cordaPena = $cordaPena;

        return $this;
    }
}