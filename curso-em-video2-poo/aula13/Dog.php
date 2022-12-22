<?php
require_once 'Lobo.php';
class Dog extends Lobo {
    public function emitirSom(){
        echo "<br> Au! Au! Au!";
    }

    function reagirFrase($frase) {
        if( $frase == "Passear" || $frase == "Comida") {
            echo "<p>Abanar e Latir </p>";
        } else {
            echo "<p>Rosnar</p>";
        }
    }
    function reagirDono($dono) {
        if($dono) {
            echo "<p>Abanar</p>";
        } else {
            echo "<p>Rosnar e Latir</p>";
        }
    }
}