<?php 
require_once 'Animal.php';
class Ave extends Animal {
    private $cor_pena;

    function locomover() {
        echo "<p>Voando</p>";
    }
    function alimentar() {
        echo "<p>Comendo Frutas</p>";
    }
    function emitirSom() {
        echo "<p>Som de Ave</p>";
    }

    function fazerNinho() {
        echo "<p>Construindo um ninho</p>";
    }


    /** Auto-gen
     * Get the value of cor_pena
     */ 
    public function getCor_pena()
    {
        return $this->cor_pena;
    }

    /**
     * Set the value of cor_pena
     *
     * @returnself
     */ 
    public function setCor_pena($cor_pena)
    {
        $this->cor_pena = $cor_pena;

        return $this;
    }
}
?>