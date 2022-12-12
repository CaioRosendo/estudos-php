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
            require_once 'Conta.php';
            $p1 = new Conta(); //pessoa 1
            $p2 = new Conta(); //pessoa 2
            $p1 ->abrirConta("CC");
            $p1 ->setNumConta(1111);
            $p1 ->setDono("Jubileu");
            $p2 ->abrirConta("CP");
            $p2 ->abrirConta(2222);
            $p2 ->setDono("Creuza");

            //depósito
            $p1->depositar(300);
            $p2->depositar(500);

            //saque
            $p2->sacar(100);

            //pagar mensalidade
            $p1 -> pagarMensal();
            $p2 -> pagarMensal();

            //mostrar da tela
            print_r($p1);
            print_r($p2);
        ?>
    </pre>
</body>
</html>