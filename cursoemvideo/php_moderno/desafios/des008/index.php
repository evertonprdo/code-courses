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
        $valor1 = $_GET['valor1'] ?? 0;
        $valor2 = $_GET['valor2'] ?? 0;
        $peso1 = $_GET['peso1'] ?? 0;
        $peso2 = $_GET['peso2'] ?? 0;

        $med_simples = ($valor1 + $valor2)/2;
        $med_aritimetica = (($valor1*$peso1) + ($valor2*$peso2))/($peso1 + $peso2);
    ?>
    <main>
        <h1>Informe um número</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="valor1">1° Valor</label>
            <input type="number" name="valor1" id="valor1" value="<?=$valor1?>" max="10" min="0">
            <label for="valor2">2° Valor</label>
            <input type="number" name="valor2" id="valor2" value="<?=$valor2?>" max="10" min="0">
            <label for="peso1">1° Peso</label>
            <input type="number" name="peso1" id="peso1" value="<?=$peso1?>">
            <label for="peso2">2° Peso</label>
            <input type="number" name="peso2" id="peso2" value="<?=$peso2?>">
            <input type="submit" value="Calcular Médias">
        </form>
    </main>
    <section>
        <h2>Resultado Final</h2>
        <p>Analisando os <strong>valores <?=$valor1?> e <?=$valor2?></strong>, temos:</p>
        <ul>
            <li>A <strong>Média Aritmética Simples</strong> entre os valores é igual a <?=number_format($med_simples, 2,",",".")?>
            <li>A <strong>Média Aritmética Ponderada</strong> com pesos <?=$peso1 . " e " . $peso2?> é igual a <?=number_format($med_aritimetica,2,",",".")?>.
        </ul>
    </section>
</body>
</html>