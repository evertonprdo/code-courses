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
        $numero = $_GET['numero'] ?? 5;
        $num_100 = $numero/100;
        $num_50 = (($num_100 - (int)$num_100)*100)/50;
        $num_10 = (($num_50 - (int)$num_50)*50)/10;
        $num_5 = (($num_10 - (int)$num_10)*10)/5;

        $cash_form = numfmt_create('pt-BR', NumberFormatter::CURRENCY)
    ?>
    <main>
        <h1>Caixa Eletrônico</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="numero">Qual é o valor que deseja sacar? (R$)*</label>
            <input type="number" name="numero" id="numero" value="<?=$numero?>" step="5" min="5">
            <input type="submit" value="sacar">
        </form>
    </main>
    <section>
        <h2>Saque de <?=numfmt_format_currency($cash_form,$numero,'BRL')?> realizado</h2>
        <p>O caixa eletrônico vai te entregar as seguintes notas:</p>
        <ul>
            <li>R$ 100 x <?=(int)$num_100?></li>
            <li>R$ 50 x <?=(int)$num_50?></li>
            <li>R$ 10 x <?=(int)$num_10?></li>
            <li>R$ 5 x <?=(int)$num_5?></li>        
        </ul>
    </section>
</body>
</html>