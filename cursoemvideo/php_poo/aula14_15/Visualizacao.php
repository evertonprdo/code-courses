<?php 
require_once 'Video.php';
require_once 'Gafanhoto.php';
class Visualizacao {
    private $espectador, $filme;

    public function avaliar(){
        $this->getFilme()->setAvaliacao(5);
    }
    public function avaliarNota($nota){
        $this->getFilme()->setAvaliacao($nota);
    }
    public function avaliarPerc($perc){
        $nova = 0;
        if ($perc <= 20) {
            $nova = 3;
        } else if ($perc <= 50){
            $nova = 5;
        } else if ($perc <=90) {
            $nova = 8;
        } else {
            $nova = 10;
        }
        $this->getFilme()->setAvaliacao($nova);
    }

    public function __construct($espectador, $filme) {
        $this->setEspectador($espectador);
        $this->setFilme($filme);
        $this->getFilme()->setViews($this->getFilme()->getViews()+1);
        $this->getEspectador()->setTotAssistido($this->getEspectador()->getTotAssistido()+1);
    }

    /** Auto-gen
     * Get the value of filme
     */ 
    public function getFilme()
    {
        return $this->filme;
    }

    /**
     * Set the value of filme
     *
     * @returnself
     */ 
    public function setFilme($filme)
    {
        $this->filme = $filme;

        return $this;
    }

    /**
     * Get the value of espectador
     */ 
    public function getEspectador()
    {
        return $this->espectador;
    }

    /**
     * Set the value of espectador
     *
     * @returnself
     */ 
    public function setEspectador($espectador)
    {
        $this->espectador = $espectador;

        return $this;
    }
}
?>