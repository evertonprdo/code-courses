<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula11 POO</title>
</head>
<body>
    <pre>
        <?php
            require_once 'Aluno.php';
            require_once 'Professor.php';
            require_once 'Tecnico.php';
            require_once 'Bolsista.php';
            require_once 'Visitante.php';

            $v1 = new Visitante();
            $a1 = new Aluno();
            $b1 = new Bolsista();

            $v1->setNome("Juvenal");
            $v1->setSexo("M");
            $v1->setIdade(31);

            $a1->setNome("Pedrinho");
            $a1->setMatricula(1111);
            $a1->setSexo("M");
            $a1->setCurso("Informática");
            $a1->pagarMensalidade();

            $b1->setNome("Camille");
            $b1->setMatricula(333);
            $b1->setIdade(23);
            $b1->setSexo("F");
            $b1->setCurso("Engenharia de Software");
            $b1->setBolsa("Distribuição de Alimentos");
            $b1->pagarMensalidade();

            print_r($v1);
            print_r($a1);
            print_r($b1);
        ?>
    </pre>
</body>
</html>