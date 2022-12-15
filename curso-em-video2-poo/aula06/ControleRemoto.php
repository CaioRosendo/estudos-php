<?php
require_once 'Controlador.php';
Class ControleRemoto implements Controlador {
    private $volume;
    private $ligado;
    private $tocando;

    //método construtor
    function __construct(){
        $this -> volume = 50;
        $this -> ligado = false;
        $this -> tocando = false;
    }

    // GET e SET volume
    public function getVolume()
    {
        return $this->volume;
    }

    public function setVolume($volume)
    {
        $this->volume = $volume;
        return $this;
    }

    //GET e SET ligado
    public function getLigado()
    {
        return $this->ligado;
    }
 
    public function setLigado($ligado)
    {
        $this->ligado = $ligado;
        return $this;
    }

    // GET e SET tocando
    public function getTocando()
    {
        return $this->tocando;
    }
 
    public function setTocando($tocando)
    {
        $this->tocando = $tocando;
        return $this;
    }

    // Abstract
    public function ligar() {
        $this -> setLigado(true);
    }
    public function desligar(){
        $this -> setLigado(false);
    }
    public function abrirMenu(){
        echo "<br> Está ligado?: ". ($this->getLigado()?"SIM":"Não");
        echo "<br> Está tocando? ". ($this->getTocando()?"SIM":"Não");
        if ($this->getLigado()){
            echo "<br> Volume: ".$this ->getVolume();
            for($i=0; $i <= $this->getVolume();$i+=10){
            echo "|";
        }
        }
        
    }
    public function fecharMenu(){
        echo "<br> Fechando Menu...";
    }
    public function maisVolume(){
        if ($this->getLigado()) {
            $this -> setVolume($this->getVolume()+5);
        }
    }
    public function menosVolume(){
        if ($this -> getLigado()) {
            $this -> setVolume($this -> getVolume()-5);
        }
    }
    public function ligarMudo(){
        if ($this -> getLigado() && $this->getVolume()>0) {
            $this -> setVolume(0);
        }
    }
    public function desligarMudo(){
        if ($this -> getLigado() && $this->getVolume() == 0) {
            $this -> setVolume(50);
        }
    }
    public function play(){
        if ($this -> getLigado() && !($this->getLigado())){
            $this ->setTocando(true);
        }
    }
    public function pause(){
        if ($this->getLigado() && $this -> getTocando()){
            $this->setTocando(false);
        }
    }
       
}