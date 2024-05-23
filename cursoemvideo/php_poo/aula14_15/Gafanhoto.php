<?php 
require_once 'Pessoa.php';
class Gafanhoto extends Pessoa {
    private $login, $totAssistido;

    function viuMaisUm() {
        $this->setTotAssistido($this->getTotAssistido()+1);
    }

    function __construct($nome,$idade,$sexo,$login) {
        parent::__construct($nome,$idade,$sexo);
        $this->setLogin($login);
        $this->setTotAssistido(0);
    }

    /** Auto-gen
     * Get the value of login
     */ 
    public function getLogin()
    {
        return $this->login;
    }

    /**
     * Set the value of login
     *
     * @returnself
     */ 
    public function setLogin($login)
    {
        $this->login = $login;

        return $this;
    }

    /**
     * Get the value of totAssistido
     */ 
    public function getTotAssistido()
    {
        return $this->totAssistido;
    }

    /**
     * Set the value of totAssistido
     *
     * @returnself
     */ 
    public function setTotAssistido($totAssistido)
    {
        $this->totAssistido = $totAssistido;

        return $this;
    }
}
?>