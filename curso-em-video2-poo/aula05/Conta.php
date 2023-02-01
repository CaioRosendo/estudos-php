<?php

class Conta{
    //Atributos
    public $numConta;
    protected $tipo;
    private $dono;
    private $saldo;
    private $status;

    // método abrir conta
    public function abrirConta($t) {
        $this -> setTipo($t);
        $this -> setStatus(true);
        if($t == "CC") {
        $this -> setSaldo(50);
        } elseif ($t == "CP") {
            $this -> setSaldo(150);
        }
    }
    // método fechar conta
    public function fecharConta() {
        if ($this -> getSaldo() > 0) {
            echo "<br> Conta com dinheiro, não posso fechá-la";
        } elseif ($this -> getSaldo() < 0) {
            echo "<br> Conta em débito, impossível encerrar";
        } else {
            $this -> setStatus(false);
        }
    }

    // método depositar
    public function depositar($val) {
        if ($this ->getStatus()) {
            $this -> setSaldo($this-> getSaldo() + $val);
            echo "<br> Depósito de R$ $val na conta de ". $this ->getDono()."<br>";
        } else {
            echo"<br> Impossível depositar";
        }
    }

    // método sacar
    public function sacar($val) {
        if ($this->getStatus(true)) {
            if ($this->getSaldo() > $val) {
                $this->setSaldo($this->getSaldo() - $val);
                echo "<br> Saque autorizado na conta da ". $this->getDono() ."<br>";
            } else {
                echo "<br> Saldo Insuficiente";
            } 
        } else {
            echo "Impossível sacar";
        }
    }

    // método Pagar Mensalidade
    public function pagarMensal() {
        if ($this->getTipo() == "CC") {
            $val = 12;
        } else if ($this->getTipo() == "CP") {
            $val = 18;
        }
        if ($this->getStatus()) {
            $this->setSaldo($this->getSaldo() - $val);
        } else {
            echo "<br> Problemas com a conta, não posso cobrar.";
        }
    }
        

    //Método construtor
    public function __construct() {
        $this -> setSaldo(0);
        $this -> setStatus(false);
    } 

    //Número da conta
    public function getNumConta()
    {
        return $this->numConta;
    }
    public function setNumConta($numConta)
    {
        $this->numConta = $numConta;
        return $this;
    }

    // Tipo (poupança ou corrente) 
    public function getTipo()
    {
        return $this->tipo;
    }
    public function setTipo($tipo)
    {
        $this->tipo = $tipo;
        return $this;
    }

    // dono
    public function getDono()
    {
        return $this->dono;
    }
    public function setDono($dono)
    {
        $this->dono = $dono;
        return $this;
    }

    // Saldo em conta
    public function getSaldo()
    {
        return $this->saldo;
    }
 
    public function setSaldo($saldo)
    {
        $this->saldo = $saldo;
        return $this;
    }

    // Status da conta
    public function getStatus()
    {
        return $this->status;
    } 
    public function setStatus($status)
    {
        $this->status = $status;
        return $this;
    }

}