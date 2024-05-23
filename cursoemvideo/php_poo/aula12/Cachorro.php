<?php 
require_once 'Mamifero.php';
final class Cachorro extends Mamifero {
    function enterrarOsso(){
        echo "<p>Enterrando Osso</p>";
    }
    function abanarRabo() {
        echo "<p>Abanando Rabo</p>";
    }

    //sobrepondo som de mamifero
    function emitirSom()
    {
        echo "<p>Au au au</p>";
    }
}
?>