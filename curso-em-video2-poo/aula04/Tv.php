<?php

class Tv{
    public $marca;
    public $pol;
    private $conf;
    public $ligada;

    //modelo construtor
    public function __construct($marca,$pol,$conf,$ligada)
    {
        $this -> setMarca($marca);
        $this -> setPol($pol);
        $this -> setConf($conf);
        $this -> setLigada($ligada);
    }
    //marca
    public function getMarca()
    {
        return $this->marca;
    }
    public function setMarca($marca)
    {
        $this->marca = $marca;

        return $this;
    } 
    //polegadas
    public function getPol()
    {
        return $this->pol;
    }
    public function setPol($pol)
    {
        $this->pol = $pol;

        return $this;
    }

    // configuração 
    public function getConf()
    {
        return $this->conf;
    }

    public function setConf($conf)
    {
        $this->conf = $conf;

        return $this;
    }

    //ligada 
    public function getLigada()
    {
        return $this->ligada;
    }
    public function setLigada($ligada)
    {
        $this->ligada = $ligada;

        return $this;
    }
}

