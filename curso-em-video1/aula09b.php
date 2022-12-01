<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="_css/estilo.css">
</head>
<body>
    <div>
        <?php
            $media = ($_GET["nota1"] + $_GET["nota2"]) / 2;
            if($media >= 7.0) {
                $resultado = "APROVADO";
            } elseif ($media >=4.0 && $media < 7.0) {
                $resultado = "RECUPERAÇÃO";
            } else {
                $resultado = "REPROVADO";
            }
            echo "Sua média foi $media. <br> Situação final: $resultado"          
        ?>
        <br>
        <a href="aula09b.html">Voltar</a>
    </div>
</body>
</html>