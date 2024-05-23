<?php 
require_once 'Pessoa.php';
class Aluno extends Pessoa {
    private $matricula, $curso; 
    
    function pagarMensalidade() {
        echo "<p>Mensalidade Paga do aluno {$this->getNome()}</p>";
    }

    /** auto-gen
     * Get the value of curso
     */ 
    public function getCurso()
    {
        return $this->curso;
    }

    /**
     * Set the value of curso
     *
     * @returnself
     */ 
    public function setCurso($curso)
    {
        $this->curso = $curso;

        return $this;
    }

    /**
     * Get the value of matricula
     */ 
    public function getMatricula()
    {
        return $this->matricula;
    }

    /**
     * Set the value of matricula
     *
     * @returnself
     */ 
    public function setMatricula($matricula)
    {
        $this->matricula = $matricula;

        return $this;
    }
}
?>