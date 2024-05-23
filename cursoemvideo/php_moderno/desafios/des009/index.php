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
        $ano_nasc = $_GET['ano_nasc'] ?? 1990;
        $ano_calc = $_GET['ano_calc'] ?? date('Y');

        $ano_result = $ano_calc - $ano_nasc;
    ?>
    <main>
        <h1>Calculando a sua idade</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="ano_nasc">Em que ano você nasceu?</label>
            <input type="number" name="ano_nasc" id="ano_nasc" value="<?=$ano_nasc?>" max="<?=date('Y')?>">
            <label for="ano_calc">Quer saber sua idade em que ano? (atualmente estamos em <?=date('Y')?>)</label>
            <input type="number" name="ano_calc" id="ano_calc" value="<?=$ano_calc?>">
            <input type="submit" value="Qual será a minha idade?">
        </form>
    </main>
    <section>
        <h2>Resultado Final</h2>
        <p>Quem nasceu em <?=$ano_nasc?> vai ter <strong><?=$ano_result?> anos</strong> em <?=date('Y')?></p>
    </section>
</body>
</html>