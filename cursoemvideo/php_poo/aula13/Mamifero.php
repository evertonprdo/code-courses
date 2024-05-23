<?php 
require_once 'Animal.php';
class Mamifero extends Animal {
    protected $cor_pelo;

    function emitirSom()
    {
        echo "<p>Som de Mámifero</p>";
    }

    /**
     * Get the value of cor_pelo
     */ 
    public function getCor_pelo()
    {
        return $this->cor_pelo;
    }

    /**
     * Set the value of cor_pelo
     *
     * @returnself
     */ 
    public function setCor_pelo($cor_pelo)
    {
        $this->cor_pelo = $cor_pelo;

        return $this;
    }
}
?>