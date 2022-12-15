<?php
require_once 'Controlar.php';
Class Arma implements Controlar {
    private $disparar;
    private $municao;
    private $montada;

    function __construct() {
        $this-> disparar = true;
        $this -> municao = 10;
        $this -> montada = true;
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

    // G e S montada
    public function getMontada()
    {
        return $this->montada;
    }

    public function setMontada($montada)
    {
        $this->montada = $montada;

        return $this;
    }

    // abstratos
    public function atirar(){
        if ($this ->getMunicao() > 0 && $this -> getMontada(true)) {
            for ($this->municao; $this->municao > 0;$this->municao--) {
                echo"<br> atirou, tem: ". ($this->getMunicao()-1). " munições";
                $this->getMunicao()==0;
            }
        } elseif ($this -> getMunicao()==0 && $this -> getMontada(true)) {
            echo "<br> Carregue a sua arma para poder atirar.";
        } elseif (!($this -> getMontada(true))) {
            echo "<br> Monte e depois carregue sua arma para poder atirar.";
        }
     
    }
    public function carregar(){
        if ($this -> setMunicao(0) && $this -> getMontada(true)) {
            echo "<br> Carregou...agora tem 10 munições.";
            $this -> setMunicao(10)  ;
        } elseif ($this -> setMunicao(0) && ! ($this ->getMontada())){
            echo "<br> Monte sua arma para poder carregar.";
        }
    }
    public function desmontar() {
        if ($this -> getMunicao()==0 && $this->getMontada(true)) {
            echo "<br> Você desmontou sua arma...";
            $this->setMontada(false);
        } elseif ($this->getMontada(true)&& !($this -> getMunicao()==0)) {
            echo "<br> Desmunicie sua arma para poder desmontar.";
        }
    }
    public function montar() {
        if ($this->getMunicao() == 0 && !($this->getMontada()) ) {
            echo "<br> Você montou sua arma...";
            $this ->setMontada(true);
        } 
    }
    public function desmuniciar() {
        if ($this -> getMontada() && !($this->getMunicao() == 0)) {
            echo "<br> Você desmuniciou sua arma.";
            $this ->setMunicao(0);
        }
    }
 }
