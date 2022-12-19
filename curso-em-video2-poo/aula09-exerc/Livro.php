<?php
require_once 'Pessoa.php';
require_once 'Publicacao.php';
Class Livro implements Publicacao {
    private $titulo;
    private $autor;
    private $totPaginas;
    private $pagAtual;
    private $aberto;
    private $leitor;

    function __construct($titulo, $autor, $totPaginas, $leitor)
    {
       $this -> titulo = $titulo;
       $this -> autor = $autor;
       $this -> totPaginas = $totPaginas;
       $this -> aberto = false;
       $this -> pagAtual = 0;
       $this -> leitor = $leitor; 
    }

    public function detalhes(){
        echo "<hr> Livro ". $this->getTitulo(). " escrito por ". $this -> getAutor();
        echo "<br> Páginas: ". $this -> getTotPaginas();
        echo "<br> Página atual: ". $this -> getPagAtual();
        echo "<br> Sendo lido por ". $this ->leitor->getNome();
    }

    public function livroFechado(){
        echo "<br>Seu livro está fechado, abra-o para poder ler, folhear e etc.";
    }
     //Publicação

     public function abrir() {
        $this->setAberto(true);
    }
    public function fechar(){
        $this->setAberto(false);
    }
    public function folhear($p){
        if($this -> getAberto(true)) {
            if ($p > $this->totPaginas) {
                $this->pagAtual = 1;
            } else {
                $this -> pagAtual = $p;
            }
        } else {
            $this -> livroFechado();
        }
            
    }
    public function avancarPag(){
        if($this -> getAberto(true)) {
            if ($this -> pagAtual == $this -> totPaginas){
                echo "<br> Você chegou ao final do livro.";
            } else {
            $this-> pagAtual ++ ;
            }
         } else {
            $this -> livroFechado();
        }  
    }
    public function voltarPag(){
        if($this -> getAberto(true)) {
            if ($this -> pagAtual == 1){
                echo "<br> Você está na primeira página <br>";
            } else {
                $this-> pagAtual --;
            }
        } else {
            $this -> livroFechado();
        }  
    }

    //Métodos Getters e Setters

    /**
     * Get the value of titulo
     */ 
    public function getTitulo()
    {
        return $this->titulo;
    }

    /**
     * Set the value of titulo
     *
     * @return  self
     */ 
    public function setTitulo($titulo)
    {
        $this->titulo = $titulo;

        return $this;
    }

    /**
     * Get the value of autor
     */ 
    public function getAutor()
    {
        return $this->autor;
    }

    /**
     * Set the value of autor
     *
     * @return  self
     */ 
    public function setAutor($autor)
    {
        $this->autor = $autor;

        return $this;
    }

    /**
     * Get the value of totPaginas
     */ 
    public function getTotPaginas()
    {
        return $this->totPaginas;
    }

    /**
     * Set the value of totPaginas
     *
     * @return  self
     */ 
    public function setTotPaginas($totPaginas)
    {
        $this->totPaginas = $totPaginas;

        return $this;
    }

    /**
     * Get the value of pagAtual
     */ 
    public function getPagAtual()
    {
        return $this->pagAtual;
    }

    /**
     * Set the value of pagAtual
     *
     * @return  self
     */ 
    public function setPagAtual($pagAtual)
    {
        $this->pagAtual = $pagAtual;

        return $this;
    }

    /**
     * Get the value of aberto
     */ 
    public function getAberto()
    {
        return $this->aberto;
    }

    /**
     * Set the value of aberto
     *
     * @return  self
     */ 
    public function setAberto($aberto)
    {
        $this->aberto = $aberto;

        return $this;
    }

    /**
     * Get the value of leitor
     */ 
    public function getLeitor()
    {
        return $this->leitor;
    }

    /**
     * Set the value of leitor
     *
     * @return  self
     */ 
    public function setLeitor($leitor)
    {
        $this->leitor = $leitor;

        return $this;
    }

   
}