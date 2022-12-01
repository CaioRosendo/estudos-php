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
            $estado = $_GET["est"];
            switch($estado) {
                case 1:
                    echo "Região Norte";
                    break;
                case 2:
                    echo "Regiâo Nordeste";
                    break;
                case 3:
                    echo "Região Centro Oeste";
                    break;
                case 4:
                    echo "Região Sudeste";
                    break;
                case 5:
                    echo "Regiao Sul";
            }
        ?>
        <br>
        <a href="aula10c.html">Voltar</a>
    </div>
</body>
</html>