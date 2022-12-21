<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <pre>
        <?php
            require_once 'Visitante.php';
            require_once 'Aluno.php';
            require_once 'Bolsista.php';

            $v1 = new Visitante();
            $v1 -> setNome("Juvenal");
            $v1 -> setIdade(33);
            $v1 -> setSexo("M");

            $a1 = new Aluno();
            $a1 -> setNome("Pedro");
            $a1 -> setMatricula(1111);
            $a1 -> setIdade(16);
            $a1 -> setSexo("M");
            $a1 -> setCurso("Informática");

            $b1 = new Bolsista();
            $b1 -> setNome("Jubileu");
            $b1 -> setIdade(16);
            $b1 -> setSexo("M");
            $b1 -> setMatricula(2222);
            $b1 -> setCurso("Administração");

            print_r($b1);
            $b1 -> PagarMensalidade();
            print_r($a1);
            $a1 -> PagarMensalidade();

        ?>
    </pre>
</body>
</html>