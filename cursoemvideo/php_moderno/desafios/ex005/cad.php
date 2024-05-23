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
        <h1>Resultado do processamento</h1>
        <main>
            <?php 
                $numero = $_GET["numero"] ?? "unknow";

                echo "<p>O número escolhido foi <strong>$numero</strong></p>";
                echo "<p>O seu antecessor é " . --$numero . "</p>";
                echo "<p>O seu sucessor é " . ++$numero . "</p>";
            ?>
            <p><a href="javascript:history.go(-1)">Voltar para a página anterior</a></p>
        </main>
    </header>
</body>
</html>