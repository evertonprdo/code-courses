<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        $dividendo = $_GET['dividendo'] ?? 1;
        $divisor = $_GET['divisor'] ?? 1;
        $resto = $dividendo % $divisor;
        $resultado = intdiv($dividendo,$divisor)
    ?>
    <main>
        <h1>Resultado do processamento</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="dividendo">Dividendo</label>
            <input type="number" name="dividendo" id="dividendo" value="<?=$dividendo?>">
            <label for="divisor">Divisor</label>
            <input type="number" name="divisor" id="divisor" value="<?=$divisor?>">
            <input type="submit" value="Analisar">
        </form>
    </main>
    <section>
        <h2>Estrutura da Divisão</h2>
        <div id="boxDivisao">
            <div class="row" id="row1">
                <div class="itemDivisao" id="dividendo"><?=$dividendo?></div>
                <div class="itemDivisao" id="resto"><?=$resto?></div>
            </div>
            <div class="row" id="row2">
                <div class="itemDivisao" id="divisor"><?=$divisor?></div>
                <div class="itemDivisao" id="resultado"><?=$resultado?></div>
            </div>
        </div>
    </section>
</body>
</html>