<?php 
require_once 'Controlador.php';
class ControleRemoto implements Controlador {
    private $volume;
    private $ligado;
    private $tocando;

    function __construct() {
        $this->setVolume(50);
        $this->setLigado(false);
        $this->setTocando(false);
    }

    function ligar() {
        $this->setLigado(true);
    }
    function desligar() {
        $this->setLigado(false);
    }
    function abrirMenu() {
        echo "<br> ---- MENU ---- <br>";
        echo "<br>Está ligado?: " . ($this->getLigado()?"SIM":"NÃO");
        echo "<br>Está tocando: " . ($this->getTocando()?"SIM":"NÃO");
        echo "<br>Volume: " . $this->getVolume()." ";
        for($i=0; $i <= $this->getVolume(); $i+=10){
            echo ("|");
        }
        echo "<br>";
    }
    function fecharMenu() {
        echo "<br>Fechando Menu...";
    }
    function maisVolume() {
        if ($this->getLigado()) {
            $this->setVolume($this->getVolume() + 5);
        } else {
            echo "<p>Erro! Não posso aumentar volume</p>";
        }
    }
    function menorVolume() {
        if ($this->getLigado()){
            $this->setVolume($this->getVolume() - 5);
        } else {
            echo "<p>Erro! Não posso diminuir volume</p>";
        }
    }
    function ligarMudo() {
        if ($this->getLigado() && $this->getVolume() > 0){
            $this->setVolume(0);
        }
    }
    function desligarMudo() {
        if ($this->getLigado() && $this->getVolume() == 0) {
            $this->setVolume(50);
        }
    }
    function play() {
        if ($this->getLigado() && !($this->getTocando())){

        }
    }
    function pause() {
        if ($this->getLigado() && $this->getTocando()){

        }
    }
    
    //Auto-Gen
    private function getTocando() {
        return $this->tocando;
    } 
    private function setTocando($tocando) {
        $this->tocando = $tocando;
        return $this;
    }
    private function getLigado()  {
        return $this->ligado;
    }
    private function setLigado($ligado) {
        $this->ligado = $ligado;
        return $this;
    }
    private function getVolume() {
        return $this->volume;
    }
    private function setVolume($volume) {
        $this->volume = $volume;
        return $this;
    }
}
?>