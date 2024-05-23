<?php 
require_once 'Pessoa.php';
class Funcionario extends Pessoa {
    
    private $setor, $trabalhando;

    function mudarTrabalhando() {
        $this->setTrabalhando($this->getTrabalhando()) != $this->setTrabalhando($this->getTrabalhando());
    }


    public function getTrabalhando()
    {
        return $this->trabalhando;
    }

    public function setTrabalhando($trabalhando)
    {
        $this->trabalhando = $trabalhando;

        return $this;
    }


    public function getSetor()
    {
        return $this->setor;
    }

 
    public function setSetor($setor)
    {
        $this->setor = $setor;

        return $this;
    }
}
?>