<?php 
abstract class Pessoa {
    protected $nome, $idade, $sexo, $experiencia;
    
    protected function ganharExp($n){
        $this->setExperiencia($this->getExperiencia()+$n);
    }

    function __construct($nome, $idade, $sexo) {
        $this->setNome($nome);
        $this->setIdade($idade);
        $this->setSexo($sexo);
        $this->setExperiencia(0);
    }

    /**
     * Get the value of nome
     */ 
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * Set the value of nome
     *
     * @returnself
     */ 
    public function setNome($nome)
    {
        $this->nome = $nome;

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
     * Get the value of sexo
     */ 
    public function getSexo()
    {
        return $this->sexo;
    }

    /**
     * Set the value of sexo
     *
     * @returnself
     */ 
    public function setSexo($sexo)
    {
        $this->sexo = $sexo;

        return $this;
    }

    /**
     * Get the value of experiencia
     */ 
    public function getExperiencia()
    {
        return $this->experiencia;
    }

    /**
     * Set the value of experiencia
     *
     * @returnself
     */ 
    public function setExperiencia($experiencia)
    {
        $this->experiencia = $experiencia;

        return $this;
    }
}
?>