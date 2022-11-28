<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operação</title>
    <link rel="stylesheet" href="_css/estilo.css">
</head>
<body>
    <div>
        <?php
            //exercicio 1
            $n1 = 5;
            $n2 = 7;
            $tipo = "s";
            echo "Os valores foram $n1 e $n2 <br>";
            $r = ($tipo == "n") ? $n1+$n2 : $n1*$n2;
            echo "$r";
            echo "<br>-------------------------------------------------";
            //exercicio 2 -- Igual == ; Identico ===
            $a = 3;
            $b = "3";
            echo "<br>Variável int com valor 3 e string com valor '3':";
            $p = ($a == $b) ? "SIM":"NÃO";
            echo "<br>As variáveis A e B são iguais? $p";
            $p = ($a === $b) ? "SIM":"NÃO";
            echo "<br>As variáveis A e B são idênticas? $p";
            echo "<br>-------------------------------------------------";
            //exercicio 3 - aprovado ou reprovado
            $nota1 = 7.8;
            $nota2 = 4.9;
            $m = ($nota1+$nota2) / 2;
            echo "<br>A media entre $nota1 e $nota2 foi: $m <br>";
            echo "O aluno está " .($m >= 6 ? "aprovado" : "reprovado");
            echo "<br>-------------------------------------------------";
            //exercicio 4 - obrigado a votar ou não
            $idade = 18;
            $voto = ($idade >= 18 && $idade<65)?"voto obrigatório":"voto não obrigatório";
            echo "<br>Você tem $idade e o $voto."
        ?>
    </div>
</body>
</html>