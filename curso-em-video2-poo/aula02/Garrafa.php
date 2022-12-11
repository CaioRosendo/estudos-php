<?php

class Garrafa {
    var $cor;
    var $material;
    var $totl;
    var $fechada;

    function beber(){
        if ($this->totl == 0 or $this -> fechada == true) {
            echo "<p> A garrafa está fechada ou vazia";
        } else {
            echo "<p> Irei beber água";
        }
    }
}