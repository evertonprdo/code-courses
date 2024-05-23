<?php 
abstract class Pessoa {
    private $nome, $idade, $sexo;

    final function fazerAniversario() {
        $this->setIdade($this->getIdade() + 1);
    }


    /** Auto-Gen
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
}
?>