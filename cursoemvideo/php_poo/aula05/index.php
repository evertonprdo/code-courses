<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula05 POO</title>
</head>
<body>
    <pre>
        <?php
            require_once 'ContaBanco.php';
            $creusa = new ContaBanco();
            $jubileu = new ContaBanco();
    
            $creusa->abrirConta("CP");
            $creusa->setDono("Creusa");
            $creusa->setNumConta(1111);
            
            $jubileu->abrirConta("CC");
            $jubileu->setNumConta(2222);
            $jubileu->setDono("Jubileu");

            $creusa->depositar(500);
            $jubileu->depositar(300);

            $creusa->sacar(100);

            $creusa->pagarMensal();
            $jubileu->pagarMensal();

            $creusa->sacar(530);
            $jubileu->sacar(338);

            $creusa->fecharConta();
            $jubileu->fecharConta();

            print_r($creusa);
            print_r($jubileu);
        ?>
    </pre>
</body>
</html>