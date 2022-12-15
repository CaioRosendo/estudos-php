<?php

Class Arma implements Controlar {
    private $disparar;
    private $municao;

    function __construct() {
        $this-> disparar = false;
        $this -> municao = 12;
    }

    // G e S Disparar
    public function getDisparar()
    {
        return $this->disparar;
    }

    public function setDisparar($disparar)
    {
        $this->disparar = $disparar;

        return $this;
    }

    // G e S munição
    public function getMunicao()
    {
        return $this->municao;
    }

    public function setMunicao($municao)
    {
        $this->municao = $municao;

        return $this;
    }

    // abstratos
    public function atirar(){
        if ($this ->getMunicao() > 0 && $this -> getDisparar(true)) {
            echo "<br> Você pode disparou...";
            for ($t=12; $t >= 0; $t--);
            echo"<br> Agora você tem $t munições";
        } else {
            echo "<br> Você está sem munição...";
        }
        
    }
    public function travar(){
        
    }
    public function carregar(){

    }
    public function desmontar(){

    }
    public function montar(){

    }

}