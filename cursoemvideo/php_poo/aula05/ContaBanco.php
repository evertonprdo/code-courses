<?php 
class ContaBanco {
    public $numConta;
    protected $tipo;
    private $dono;
    private $saldo;
    private $status; 
    
    // Manual -->
    
    public function __construct(){
        $this->setSaldo(0);
        $this->setStatus(false);
        echo "<p>Conta criada com sucesso!</p>";
    }
    
    public function abrirConta($aux_tipo) {
        $this->setTipo($aux_tipo);
        $this->setStatus(true);
        if ($aux_tipo == "CC") {
            $this->setSaldo(50);
        } else if ($aux_tipo == "CP") {
            $this->setSaldo(150);
        }
    }

    public function fecharConta() {
        if ($this->getSaldo() > 0){
            echo "<p>Conta com dinheiro</p>";
        } else if ($this->getSaldo() < 0) {
            echo "<p>Conta em débito</p>";
        } else {
            $this->setStatus(false);
            echo "<p>Conta de {$this->dono} fechada</p>";
        }
    }

    public function depositar($aux) {
        if ($this->getStatus()) {
            $this->setSaldo($this->getSaldo() + $aux);
            echo "<p>Depósito de R$ $aux na conta de {$this->getDono()}</p>";
        } else {
            echo "<p>Erro: Conta não aberta</p>";
        } 
    }

    public function sacar($aux) {
        if ($this->getStatus()) {
            if ($this->getSaldo() >= $aux) {
                $this->setSaldo($this->getSaldo()-$aux);
                echo "<p>Saque autorizado de R$ $aux na conta da {$this->getDono()}</p>";
            } else {
                echo "<p>Erro: Saldo Insuficiente</p>";
            }
        } else {
            echo "<p>Erro: Conta não aberta</p>";
        }
    }

    public function pagarMensal() {
        if ($this->getTipo() == "CC") {
            $v = 12;
        } else if ($this->getTipo() == "CP") {
            $v = 20;
        }
        if ($this->getStatus()) {
            if ($this->getSaldo() > $v) {
                $this->setSaldo($this->getSaldo() - $v);
                echo "<p>Mensalidade de R$ $v debitada na conta de {$this->getDono()}</p>";
            } else {
                echo "<p>Saldo Insuficiente</p>";
            }
        } else {
            echo "<p>Erro: Conta não aberta</p>";
        }
    }

    //automatico -->
    public function getStatus() {
        return $this->status;
    }

    public function setStatus($status) {
        $this->status = $status;
        return $this;
    }

    public function getSaldo() {
        return $this->saldo;
    }
    public function setSaldo($saldo){
        $this->saldo = $saldo;
        return $this;
    }

    public function getDono() {
        return $this->dono;
    }
    public function setDono($dono) {
        $this->dono = $dono;
        return $this;
    }
    public function getTipo(){
        return $this->tipo;
    }

    public function setTipo($tipo){
        $this->tipo = $tipo;
        return $this;
    }

    public function getNumConta() {
        return $this->numConta;
    }

    public function setNumConta($numConta) {
        $this->numConta = $numConta;
        return $this;
    }
}

?>