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
            $numero = $_GET["numero"];
            $o = $_GET["oper"];
            switch ($o) {
                case 1:
                    $resultado = $numero * 2;
                    break;
                case 2:
                    $resultado = $numero ^ 3;
                    break;
                case 3:
                    $resultado = sqrt($numero); //$numero ^ (1/2)
            }
            echo "O resultado da operação foi <span class='foco'> $resultado"
        ?>
        <p>
        <a href="aula10a.html" class="botao">Voltar</a>
    </div>
</body>
</html>