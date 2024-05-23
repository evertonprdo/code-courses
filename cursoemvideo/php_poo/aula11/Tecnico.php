<?php 
require_once 'Aluno.php';
final class Tecnico extends Aluno {
    private $registro_profissional;

    function praticar() {
        echo "<p>Praticando</p>";
    }

    /**
     * Get the value of registro_profissional
     */ 
    public function getRegistroProfissional()
    {
        return $this->registro_profissional;
    }

    /**
     * Set the value of registro_profissional
     *
     * @returnself
     */ 
    public function setRegistroProfissional($registro_profissional)
    {
        $this->registro_profissional = $registro_profissional;

        return $this;
    }
}
?>