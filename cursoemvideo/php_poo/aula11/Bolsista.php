<?php 
require_once 'Aluno.php';
final class Bolsista extends Aluno {
    private $bolsa;

    function renovarBolsa() {
        echo "<p>Bolsa Renovada</p>";
    }

    //@sobrepondo função de Aluno
    function pagarMensalidade() {
        echo "<p>{$this->getNome()} é bolsista! Então paga com desconto!</p>";
    }

    /** auto-gen
     * Get the value of bolsa
     */ 
    public function getBolsa()
    {
        return $this->bolsa;
    }

    /**
     * Set the value of bolsa
     *
     * @returnself
     */ 
    public function setBolsa($bolsa)
    {
        $this->bolsa = $bolsa;

        return $this;
    }
}
?>