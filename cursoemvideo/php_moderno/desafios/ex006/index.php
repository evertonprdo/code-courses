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
        <h1>Trabalhando com números aleatórios</h1>
        <main>
            <p>Gerando um número aleatório entre 0 e 100...</p>
            <?php 
                $num = mt_rand(0,100);
                echo "<p>O valor gerado foi <strong>$num</strong></p>"
            ?>
            <input type="button" value="Gerar Outro" onclick="location.reload()">
        </main>
    </header>
</body>
</html>