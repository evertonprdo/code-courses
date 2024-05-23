<?php 
require_once 'Pessoa.php';
class Professor extends Pessoa {
    
    private $especialidade, $salario;

    function receberAumento($aux){
        $this->setSalario($this->getSalario()+$aux);
    }

    public function getEspecialidade()
    {
        return $this->especialidade;
    }

    public function setEspecialidade($especialidade)
    {
        $this->especialidade = $especialidade;

        return $this;
    }
 
    public function getSalario()
    {
        return $this->salario;
    }

    public function setSalario($salario)
    {
        $this->salario = $salario;

        return $this;
    }
}
?>