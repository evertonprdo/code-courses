<?php 
require_once 'Animal.php';
class Reptil extends Animal {
    private $cor_escama;

    function locomover(){
        echo "<p>Rastejando</p>";
    }
    function alimentar(){
        echo "<p>Comendo Vegetais</p>";
    }
    function emitirSom(){
        echo "<p>Som de Réptil</p>";
    }

    /** Auto-Gen
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