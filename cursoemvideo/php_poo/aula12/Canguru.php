<?php 
require_once 'Mamifero.php';
final class Canguru extends Mamifero {
    function usarBolsa() {
        echo "<p>Usando bolsa</p>";
    }
    
    //sobrescrevendo locomover de mamifero
    function locomover() {
        echo "<p>Pulando</p>";
    }
}
?>