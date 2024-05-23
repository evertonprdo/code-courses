<?php 
abstract class Animal {
    protected $peso, $idade, $membros;
    public abstract function locomover();
    abstract function alimentar();
    abstract function emitirSom();

    /** Auto-gen
     * Get the value of peso
     */ 
    public function getPeso()
    {
        return $this->peso;
    }

    /**
     * Set the value of peso
     *
     * @returnself
     */ 
    public function setPeso($peso)
    {
        $this->peso = $peso;

        return $this;
    }

    /**
     * Get the value of idade
     */ 
    public function getIdade()
    {
        return $this->idade;
    }

    /**
     * Set the value of idade
     *
     * @returnself
     */ 
    public function setIdade($idade)
    {
        $this->idade = $idade;

        return $this;
    }

    /**
     * Get the value of membros
     */ 
    public function getMembros()
    {
        return $this->membros;
    }

    /**
     * Set the value of membros
     *
     * @returnself
     */ 
    public function setMembros($membros)
    {
        $this->membros = $membros;

        return $this;
    }
}
?>