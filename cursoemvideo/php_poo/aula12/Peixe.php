<?php 
require_once 'Animal.php';
class Peixe extends Animal {
    private $cor_escama;

    function locomover() {
        echo "<p>Nadando</p>";
    }
    function alimentar()
    {
        echo "<p>Comendo substâncias</p>";
    }
    function emitirSom()
    {
        echo "<p>Soltou uma bolha</p>";
    }

    /** auto-gen
     * Get the value of cor_escama
     */ 
    public function getCor_escama()
    {
        return $this->cor_escama;
    }

    /**
     * Set the value of cor_escama
     *
     * @returnself
     */ 
    public function setCor_escama($cor_escama)
    {
        $this->cor_escama = $cor_escama;

        return $this;
    }
}
?>