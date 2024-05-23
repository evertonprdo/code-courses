<?php 
require_once 'Lobo.php';
class Cachorro extends Lobo {
    function emitirSom() {
        echo "<p>Au! Au! Au!</p>";
    }
    function reagirFrase($frase){
        if ($frase == "toma comida" || $frase == "Olá") {
            echo "<p>Abanar e Latir</p>";
        } else {
            echo "<p>Rosnar</p>";
        }
    }

    function reagirHora($hora,$min){
        if ($hora < 12) {
            echo "<p>Abanar</p>";
        } else if ($hora>=18) {
            echo "<p>Ignorar</p>";
        } else {
            echo "<p>Ignorar</p>";
        }
    }

    function reagirDono($dono){
        if ($dono == true) {
            echo "<p>Abanar</p>";
        } else {
            echo "<p>Rosnar e Latir</p>";
        }
    }
    function reagirIdaPes($idade, $peso){
        if ($idade<5) {
            if($peso<10){
                echo "<p>Abanar</p>";
            } else {
                echo "<p>Latir</p>";
            }
        } else {
            if ($peso<10) {
                echo "Rosnar";
            } else {
                echo "Ignorar";
            }
        }
    }
}
?>