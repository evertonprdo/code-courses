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
        $numero = $_GET['numero'] ?? 0;
        $raiz_2 = $numero ** (1/2);
        $raiz_3 = $numero ** (1/3);
    ?>
    <main>
        <h1>Informe um número</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="numero">Número</label>
            <input type="number" name="numero" id="numero" value="<?=$numero?>">
            <input type="submit" value="calcular">
        </form>
    </main>
    <section>
        <h2>Resultado Final</h2>
        <p>Analisando o <strong>número <?=$numero?></strong>, temos:</p>
        <ul>
            <li>A sua raiz quadrada é <strong><?=number_format($raiz_2,3)?></strong>
            <li>A sua raiz cubica é <strong><?=number_format($raiz_3,3)?></strong>
        </ul>
    </section>
</body>
</html>