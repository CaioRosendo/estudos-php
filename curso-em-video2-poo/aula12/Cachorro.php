<?php
require_once 'Mamifero.php';
class Cachorro extends Mamifero {
    public function locomover() {
        echo "<br> Correndo bem rápido";
    }
    public function emitirSom(){
        echo "<br> Latindo auau";
    }

}