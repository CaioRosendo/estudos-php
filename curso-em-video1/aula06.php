<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercícios </title>
    <link rel="stylesheet" href="_css/estilo.css">
</head>
<body>
    <div>
        <?php
            $preco = 1000;
            echo "O preço é R$ ". number_format($preco, 2);
            echo "<br>10% de aumento:";
            $preco += ($preco*10/100);
            echo "<br> O preço é R$ ". number_format($preco, 2);
            $ano = 2022;
            echo "<p> ANO ATUAL E ANTERIOR";
            echo "<br>O ano atual é $ano e o ano anterior era ".--$ano;
 
        ?>
    </div>
</body>
</html>