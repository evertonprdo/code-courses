<?php 
require_once 'Lutador.php';
class Luta {
    //atributos
    private $desafiado;
    private $desafiante;
    private $rounds, $aprovada;

    function marcarLuta($l1, $l2){
        if ($l1->getCategoria() == $l2->getCategoria() && ($l1 != $l2)){
            $this->setAprovada(true);
            $this->setDesafiado($l1);
            $this->setDesafiante($l2);
        } else {
            $this->setAprovada(false);
            $this->setDesafiado(NULL);
            $this->setDesafiante(NULL);
        }
    }
    function lutar(){
        if ($this->aprovada) {
            $this->desafiado->apresentar();
            $this->desafiante->apresentar();
            $vencedor = rand(0,2);
            switch($vencedor){
                case 0: //empate
                    echo "<p>Empate!</p>";
                    $this->desafiado->empatarLuta();
                    $this->desafiante->empatarLuta();
                break;
                case 1: //Vence
                    echo "<p>{$this->desafiado->getNome()} Venceu!</p>";
                    $this->desafiado->ganharLuta();
                    $this->desafiante->perderLuta();
                break;
                case 2: //Perde
                    echo "<p>{$this->desafiante->getNome()} Venceu!</p>";
                    $this->desafiado->perderLuta();
                    $this->desafiante->ganharLuta();
                break;
            }
        } else {
            echo "<p>Luta não pode acontecer</p>";
        }
    }


    //auto-gen

    /**
     * Get the value of aprovada
     */ 
    public function getAprovada()
    {
        return $this->aprovada;
    }

    /**
     * Set the value of aprovada
     *
     * @return  self
     */ 
    public function setAprovada($aprovada)
    {
        $this->aprovada = $aprovada;

        return $this;
    }

    /**
     * Get the value of rounds
     */ 
    public function getRounds()
    {
        return $this->rounds;
    }

    /**
     * Set the value of rounds
     *
     * @return  self
     */ 
    public function setRounds($rounds)
    {
        $this->rounds = $rounds;

        return $this;
    }

    /**
     * Get the value of desafiante
     */ 
    public function getDesafiante()
    {
        return $this->desafiante;
    }

    /**
     * Set the value of desafiante
     *
     * @return  self
     */ 
    public function setDesafiante($desafiante)
    {
        $this->desafiante = $desafiante;

        return $this;
    }

    /**
     * Get the value of desafiado
     */ 
    public function getDesafiado()
    {
        return $this->desafiado;
    }

    /**
     * Set the value of desafiado
     *
     * @return  self
     */ 
    public function setDesafiado($desafiado)
    {
        $this->desafiado = $desafiado;

        return $this;
    }
}
?>