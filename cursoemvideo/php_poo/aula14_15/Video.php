<?php 
require_once 'AcoesVideo.php';
class Video implements AcoesVideo {
    private $titulo, $avaliacao, $views, $curtidas, $reproduzindo;
    
    //implementando funcoes da interface
    function play() {
        $this->setReproduzindo(true);
    }
    function pause() {
        $this->setReproduzindo(false);
    }
    function like() {
        $this->setCurtidas($this->getCurtidas()+1);
    }

    function __construct($titulo) {
        $this->setTitulo($titulo);
        $this->avaliacao = 1;
        $this->setViews(0);
        $this->setCurtidas(0);
        $this->setReproduzindo(false);
    }

    public function setAvaliacao($aval) {
        $media = ($this->getAvaliacao() + $aval)/$this->getViews();
        $this->avaliacao = $media;
        return $this;
    }


    /** auto-gen
     * Get the value of titulo
     */ 
    public function getTitulo()
    {
        return $this->titulo;
    }

    /**
     * Set the value of titulo
     *
     * @returnself
     */ 
    public function setTitulo($titulo)
    {
        $this->titulo = $titulo;

        return $this;
    }

    /**
     * Get the value of avaliacao
     */ 
    public function getAvaliacao()
    {
        return $this->avaliacao;
    }

    /**
     * Set the value of avaliacao
     *
     * @returnself
     */ 


    /**
     * Get the value of views
     */ 
    public function getViews()
    {
        return $this->views;
    }

    /**
     * Set the value of views
     *
     * @returnself
     */ 
    public function setViews($views)
    {
        $this->views = $views;

        return $this;
    }

    /**
     * Get the value of curtidas
     */ 
    public function getCurtidas()
    {
        return $this->curtidas;
    }

    /**
     * Set the value of curtidas
     *
     * @returnself
     */ 
    public function setCurtidas($curtidas)
    {
        $this->curtidas = $curtidas;

        return $this;
    }

    /**
     * Get the value of reproduzindo
     */ 
    public function getReproduzindo()
    {
        return $this->reproduzindo;
    }

    /**
     * Set the value of reproduzindo
     *
     * @returnself
     */ 
    public function setReproduzindo($reproduzindo)
    {
        $this->reproduzindo = $reproduzindo;

        return $this;
    }
}
?>