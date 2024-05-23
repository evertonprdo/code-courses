<?php 
require_once 'Pessoa.php';
class Aluno extends Pessoa {
    
    private $matr, $curso;
    
    function cancelarMatricula() {
        $this->setMatr(false);
        echo "<p>Matricula Cancelada</p>";
    }

    //Auto-Gen

    public function getCurso()
    {
        return $this->curso;
    }

    public function setCurso($curso)
    {
        $this->curso = $curso;

        return $this;
    }
 
    public function getMatr()
    {
        return $this->matr;
    }

    public function setMatr($matr)
    {
        $this->matr = $matr;

        return $this;
    }
}
?>