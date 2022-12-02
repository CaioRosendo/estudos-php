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
            $n = $_GET["val"];
            for ($c=1;$c<=10;$c++){
                $r = $n * $c;
                echo "$n x $c = $r<br>";
            }
        ?>
        <a href="aula13b.html">Voltar</a>
    </div>
</body>
</html>