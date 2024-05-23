<?php 
require_once 'Pessoa.php';
class Professor extends Pessoa {
    private $especialidade, $salario;

    function receberAumento($sal) {
        $this->setSalario($this->getSalario() + $sal);
    }

    /** auto-gen
     * Get the value of salario
     */ 
    public function getSalario()
    {
        return $this->salario;
    }

    /**
     * Set the value of salario
     *
     * @returnself
     */ 
    public function setSalario($salario)
    {
        $this->salario = $salario;

        return $this;
    }

    /**
     * Get the value of especialidade
     */ 
    public function getEspecialidade()
    {
        return $this->especialidade;
    }

    /**
     * Set the value of especialidade
     *
     * @returnself
     */ 
    public function setEspecialidade($especialidade)
    {
        $this->especialidade = $especialidade;

        return $this;
    }
}
?>