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

    public function ligar() {

    }
    public function desligar(){

    }
    public function abrirMenu(){

    }
        public function fecharMenu()
        
}