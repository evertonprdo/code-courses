<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
    <h1>Conversor de Moedas v1.0</h1>
    </header>
    <main>
        <?php 
            $money = str_replace(',','.',$_GET["money"] ?? 0);
            $cotacao = 5.22;
            $dolar = $money / $cotacao;

            // echo "<p>Seus R\$ ". number_format($money, 2,",",".") . " equivalem a <strong>U\$ " . number_format(($money / $cotacao), 2) . "</strong></p>";
            // echo "<p><strong>* Cotação fixa de R$ " . str_replace('.',',',$cotacao) . "</strong> informada diretamente no código</p>";

            $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);

            echo "<p>Seus " . numfmt_format_currency($padrao, $money, "BRL") . " equivalem " . numfmt_format_currency($padrao, $dolar, "USD")."</p>";
        ?>
        <p><a href="javascript:history.go(-1)">Voltar para a página anterior</a></p>
    </main>
</body>
</html>