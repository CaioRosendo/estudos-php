<?php

Class Pessoa {
    private $nome;
    private $idade;
    private $sexo;

    //Método construtor
    function __construct($nome, $idade, $sexo){
        $this -> nome = $nome;
        $this -> idade = $idade;
        $this -> sexo = $sexo;
    }
    public function fazerAniver(){
        $this ->setIdade($this->getIdade()+1);
    }
    
    // métodos G e S 
    public function getNome()
    {
        return $this->nome;
    }

    public function setNome($nome)
    {
        $this->nome = $nome;

        return $this;
    }

    public function getIdade()
    {
        return $this->idade;
    }

    public function setIdade($idade)
    {
        $this->idade = $idade;

        return $this;
    }

    public function getSexo()
    {
        return $this->sexo;
    }

    public function setSexo($sexo)
    {
        $this->sexo = $sexo;

        return $this;
    }


}