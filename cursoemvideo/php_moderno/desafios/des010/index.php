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
        $preco = $_GET['preco'] ?? 0;
        $reajuste = $_GET['reajuste'] ?? 0;

        $pre_reaj = $preco * $reajuste;
        $cash_form = numfmt_create('pt-BR', NumberFormatter::CURRENCY);
    ?>
    <main>
        <h1>Reajustador de Preços</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="preco">Preço do Produto (R$)</label>
            <input type="number" name="preco" id="preco" value="<?=$preco?>" step="0.01">
            
            <label for="reajuste">Qual será o percentual de reajuste? (<strong><span id="sliderValue"><?=$reajuste*100 . '%'?></span></strong>)</label>
            <input type="range" name="reajuste" id="reajuste" step="0.01" min="0" max="1" value="<?=$reajuste?>">
            
            <input type="submit" value="Reajustar">
        </form>
    </main>
    <section>
        <h2>Resultado Final</h2>
        <p>O produto que custava <?=numfmt_format_currency($cash_form, $preco,'BRL')?>; com <strong><?=$reajuste*100?>% de desconto</strong> vai passar a custar <?=numfmt_format_currency($cash_form,$pre_reaj,'BRL')?> a partir de agora</p>
    </section>
    <script>
        const slider = document.getElementById('reajuste')
        const sliderValue = document.getElementById('sliderValue')

        slider.addEventListener('input', function()  {
            sliderValue.textContent = parseInt(slider.value * 100) + "%"
        })

        
    </script>
</body>
</html>