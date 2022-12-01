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
            $dia = $_GET["ds"];
            switch ($dia) {
                case 1:
                case 2:
                case 3:
                case 4:
                case 5:
                    echo "Levanta e vai estudar!";
                    break;
                case 6:
                case 7:
                    echo "Hoje pode descansar";
            }
        ?>
    </div>
</body>
</html>