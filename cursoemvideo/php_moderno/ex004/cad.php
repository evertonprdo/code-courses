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
                $name = $_GET["nome"] ?? "sem nome";
                $last_name = $_GET["sobrenome"] ?? "desconhecido";

                echo "<p>É um prazer te conhecer, $name $last_name! Este é o meu site!</p>";
            ?>
            <p><a href="javascript:history.go(-1)">Voltar para a página anterior</a></p>
        </main>
    </header>
</body>
</html>