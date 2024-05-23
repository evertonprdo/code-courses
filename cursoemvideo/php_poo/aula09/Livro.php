<?php
require_once 'Pessoa.php';
require_once 'Publicacao.php';
class Livro implements Publicacao {
    private $titulo, $autor, $tot_paginas, $pag_atual, $aberto, $leitor;

    function detalhes(){
        echo "Livro {$this->getTitulo()} escrito por {$this->getAutor()}<br>Páginas: {$this->getTot_paginas()} atual: {$this->getPag_atual()}<br>Sendo lido por {$this->getLeitor()->getNome()}<br>";
    }

    function __construct($tit,$aut,$tot,$lei) {
        $this->setTitulo($tit);
        $this->setAutor($aut);
        $this->setTot_paginas($tot);
        $this->setLeitor($lei);
        $this->setAberto(false);
        $this->setPag_atual(0);
    }

    function abrir() {
        $this->setAberto(true);
        
    }
    function fechar() {
        $this->setAberto(false);
    }
    function folhear($p) {
        if ($p>$this->getTot_paginas()) {
            $this->setPag_atual(0);
        } else {
            $this->setPag_atual($p);
        }
    }
    function avancarPag() {
        if ($this->getTot_paginas() > $this->getPag_atual()) {
            $this->setPag_atual($this->getPag_atual()+1);
        } else {
            echo "<p>Você chegou no Fim!</p>";
        }
    }
    function voltarPag() {
        if ($this->getPag_atual() > 0) {
        $this->setPag_atual($this->getPag_atual()-1);
        } else {
            echo "<p>Você está no começo do livro</p>";
        }
    }


    //Auto-Gen

    /**
     * Get the value of leitor
     */ 
    public function getLeitor()
    {
        return $this->leitor;
    }

    /**
     * Set the value of leitor
     *
     * @return  self
     */ 
    public function setLeitor($leitor)
    {
        $this->leitor = $leitor;

        return $this;
    }

    /**
     * Get the value of aberto
     */ 
    public function getAberto()
    {
        return $this->aberto;
    }

    /**
     * Set the value of aberto
     *
     * @return  self
     */ 
    public function setAberto($aberto)
    {
        $this->aberto = $aberto;

        return $this;
    }

    /**
     * Get the value of pag_atual
     */ 
    public function getPag_atual()
    {
        return $this->pag_atual;
    }

    /**
     * Set the value of pag_atual
     *
     * @return  self
     */ 
    public function setPag_atual($pag_atual)
    {
        $this->pag_atual = $pag_atual;

        return $this;
    }

    /**
     * Get the value of tot_paginas
     */ 
    public function getTot_paginas()
    {
        return $this->tot_paginas;
    }

    /**
     * Set the value of tot_paginas
     *
     * @return  self
     */ 
    public function setTot_paginas($tot_paginas)
    {
        $this->tot_paginas = $tot_paginas;

        return $this;
    }

    /**
     * Get the value of autor
     */ 
    public function getAutor()
    {
        return $this->autor;
    }

    /**
     * Set the value of autor
     *
     * @return  self
     */ 
    public function setAutor($autor)
    {
        $this->autor = $autor;

        return $this;
    }

    /**
     * Get the value of titulo
     */ 
    public function getTitulo()
    {
        return $this->titulo;
    }

    /**
     * Set the value of titulo
     *
     * @return  self
     */ 
    public function setTitulo($titulo)
    {
        $this->titulo = $titulo;

        return $this;
    }
}
?>