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
        $salario = $_GET['salario'] ?? 0;
        $sal_min = 1550.00;

        $sal_int = intdiv($salario, $sal_min);
        $sal_res = $salario - $sal_min*$sal_int;

        $cash_fmt = numfmt_create('pt-BR', NumberFormatter::CURRENCY);
    ?>
    <main>
        <h1>Resultado do processamento</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="salario">Sálario (R$)</label>
            <input type="number" name="salario" id="salario" value="<?=$salario?>" step="0.01">
            <p>Considerando o sálario mínimo de SP: <strong><?=numfmt_format_currency($cash_fmt, $sal_min,'BRL')?></strong></p>
            <input type="submit" value="calcular">
        </form>
    </main>
    <section>
        <h2>Resultado Final</h2>
        <?="<p>Quem recebe um sálario de ". numfmt_format_currency($cash_fmt,$salario,'BRL') ." ganha <strong>". $sal_int ." salários mínimos + </strong>". numfmt_format_currency($cash_fmt,$sal_res,'BRL') .".</p>"?>        
    </section>
</body>
</html>