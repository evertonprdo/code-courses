<?php 
require_once 'Reptil.php';
final class Tartaruga extends Reptil {
    
    //sobrescrevendo locomover de Reptil
    function locomover()
    {
        echo "<p>Andando bem devagar</p>";
    }
}
?>