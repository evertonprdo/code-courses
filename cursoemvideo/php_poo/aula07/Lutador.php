<?php 
class Lutador {
    //atributos
    private $nome;
    private $nacionalidade;
    private $idade, $altura, $peso;
    private $categoria, $vitorias, $derrotas, $empates;

    //metodos
    function apresentar() {
        echo "<p>----------------</p>";
        echo "<p>Lutador: {$this->getNome()}</p>";
        echo "<p>Origem: {$this->getNacionalidade()}</p>";
        echo "<p>{$this->getIdade()} anos</p>";
        echo "<p>{$this->getAltura()} m de altura</p>";
        echo "<p>Pesando: {$this->getPeso()} Kg</p>";
        echo "<p>Ganhou: {$this->getVitorias()}</p>";
        echo "<p>Perdeu: {$this->getDerrotas()}</p>";
        echo "<p>Empatou: {$this->getEmpates()}</p>";
    }
    function status() {
        echo "<p>----------------</p>";
        echo "<p>{$this->getNome()}</p>";
        echo "<p>é um peso {$this->getCategoria()}</p>";
        echo "<p>{$this->getVitorias()} vitórias</p>";
        echo "<p>{$this->getDerrotas()} derrotas</p>";
        echo "<p>{$this->getEmpates()} empates</p>";
    }
    function ganharLuta() {
        $this->setVitorias($this->getVitorias() + 1);
    }
    function perderLuta() {
        $this->setDerrotas($this->getDerrotas() + 1);
    }
    function empatarLuta() {
        $this->setEmpates($this->getEmpates() + 1);
    }
    
    //metodos especiais
    function __construct($no, $na, $id, $al, $pe, $vi, $de, $em) {
        $this->setNome($no);
        $this->setNacionalidade($na);
        $this->setIdade($id);
        $this->setAltura($al);
        $this->setPeso($pe);
        $this->setVitorias($vi);
        $this->setDerrotas($de);
        $this->setEmpates($em);
    }
    
    private function setCategoria() {
        if ($this->getPeso() < 52.2) {
            $this->categoria = "Invalido";
        } else if ($this->getPeso()<=70.3) {
            $this->categoria = "Leve";
        } else if ($this->getCategoria()<=83.9) {
            $this->categoria = "Médio";
        } else if ($this->getPeso()<=120.2) {
            $this->categoria = "Pesado";
        } else {
            $this->categoria = "Inválido";
        }
    }

    //auto-gen
    public function getEmpates(){
        return $this->empates;
    }
    public function setEmpates($empates){
        $this->empates = $empates;
        return $this;
    }
    public function getDerrotas(){
        return $this->derrotas;
    }
    public function setDerrotas($derrotas){
        $this->derrotas = $derrotas;
        return $this;
    }
    public function getVitorias(){
        return $this->vitorias;
    }
    public function setVitorias($vitorias){
        $this->vitorias = $vitorias;
        return $this;
    }
    public function getCategoria(){
        return $this->categoria;
    }
    public function getPeso() {
        return $this->peso;
    } 
    public function setPeso($peso) {
        $this->peso = $peso;
        $this->setCategoria();
    }
    public function getAltura(){
        return $this->altura;
    }
    public function setAltura($altura) {
        $this->altura = $altura;
        return $this;
    }
    public function getIdade() {
        return $this->idade;
    }
    public function setIdade($idade){
        $this->idade = $idade;
        return $this;
    }
    public function getNacionalidade() {
        return $this->nacionalidade;
    }
    public function setNacionalidade($nacionalidade) {
        $this->nacionalidade = $nacionalidade;
        return $this;
    }
    public function getNome() {
        return $this->nome;
    }
    public function setNome($nome) {
        $this->nome = $nome;
        return $this;
    }
}
?>