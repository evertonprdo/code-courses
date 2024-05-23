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
        $numero = $_GET['numero'] ?? 1;
        $num_sem = ((($numero/60)/60)/24)/7;
        $num_dia = ($num_sem - (int)$num_sem)*7;
        $num_hor = ($num_dia - (int)$num_dia)*24;
        $num_min = ($num_hor - (int)$num_hor)*60;
        $num_seg = ($num_min - (int)$num_min)*60;
    ?>
    <main>
        <h1>Calculadora de Tempo</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="numero">Qual é o total em segundos?</label>
            <input type="number" name="numero" id="numero" value="<?=$numero?>">
            <input type="submit" value="calcular">
        </form>
    </main>
    <section>
        <h2>Resultado Final</h2>
        <p>Analisando o valor que você digitou, <strong><?=$numero?> segundos</strong> equivalente a um total de:</p>
        <ul>
            <li><?=(int)$num_sem?> semanas</li>
            <li><?=(int)$num_dia?> dias</li>
            <li><?=(int)$num_hor?> horas</li>
            <li><?=(int)$num_min?> minutos</li>
            <li><?=(int)$num_seg?> segundos</li>
        </ul>
    </section>
</body>
</html>