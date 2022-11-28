<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores Aritméticos</title>
    <link rel="stylesheet" href="_css/estilo.css">
</head>
<body>
    <div>
        <?php
            $n1= 5000;
            $n2= 2;
            echo"<h2> Valores recebidos: $n1 e $n2 </h2>";
            $m = ($n1 + $n2) / 2;
            echo "A soma vale ".($n1+$n2);
            echo "<br> A subtração vale ".($n1-$n2);
            echo "<br> A multiplicação vale ". ($n1*$n2);
            echo "<br> A divisão vale ". ($n1/$n2);
            echo "<br> O módulo vale ". ($n1%$n2);
            echo "<br> A média é $m ";
            echo "<br> a potencia é ". pow($n1,$n2);
            echo "<br> a raiz é ".sqrt($n1);
            echo "<br> o valor de $n1 em moeda é R$ ". number_format($n1,2,",",".")
        ?>
    </div>
</body>
</html>